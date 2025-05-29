<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class BlogController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $blog = Blog::find(1);
        if ($request->ajax()) {
            $blogs = Blog::all();
            return DataTables::of($blogs)
                ->addColumn('image', function ($row) {
                    return '<img src="' . asset('storage/' . $row->image) . '" width="50" height="50">';
                })
                ->addColumn('status',function($row){
                    return '<span class="badge bg-'.($row->is_published == 1 ? 'success' : 'danger').'">'.($row->is_published == 1 ? 'Published' : 'Unpublished').'</span>';
                })
                ->addColumn('actions', function ($row) {
                    $editUrl = route('blogs.edit', $row->id);
                    $deleteUrl = route('blogs.destroy', $row->id);
                    $formId = 'delete-form' . $row->id;
                    return '
                        <a href="' . $editUrl . '" class="text-info m-2"><i class="fas fa-edit"></i></a>
                        <a href="javascript:void(0)" onclick="document.getElementById(\'' . $formId . '\').submit()" class="text-danger m-2"><i class="fas fa-trash"></i></a>
                        <form action="' . $deleteUrl . '" method="POST" id="' . $formId . '" style="display:none;">
                            ' . csrf_field() . method_field('DELETE') . '
                        </form>
                    ';
                })
                ->rawColumns(['actions','image','status'])
                ->make(true);
        }
        return view('blogs.index',compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|file',
        ]);
        try {

            $filePath = null;

            if ($request->hasFile('image')) {
                $uniqueName = uniqid() . '___' . str_replace(' ', '_', $request->image->getClientOriginalName());

                // Store the file in the 'public' disk (configured in config/filesystems.php)
                $filePath = $request->image->storeAs("/images", $uniqueName, "public");
            }

            $blog = Blog::create([
                'uuid' => uniqid(),
                'title' => $request->title,
                'content' => $request->content,
                'image' => $filePath,
                'is_published' => $request->is_published ? 1 : 0,
                'user_id' => Auth::id() ?? 0,
            ]);

            return redirect(route('blogs.index'))->with('success', 'Le blog a été créé avec succès');
        } catch (\Exception $e) {
            return redirect(route('blogs.index'))->with('error', 'Échec de la création du blog');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blog::find($id);
        return view('blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'file',
        ]);
        try {

            $filePath = Blog::find($id)->image ?? null;

            if ($request->hasFile('image')) {
                $uniqueName = uniqid() . '___' . str_replace(' ', '_', $request->image->getClientOriginalName());

                // Store the file in the 'public' disk (configured in config/filesystems.php)
                $filePath = $request->image->storeAs("/images", $uniqueName, "public");
            }

            $blog = Blog::updateOrCreate(['id' => $id], [
                'title' => $request->title,
                'content' => $request->content,
                'image' => $filePath,
                'is_published' => $request->is_published ? 1 : 0,
                'user_id' => Auth::id() ?? 0,
            ]);

            return redirect(route('blogs.index'))->with('success', 'Le blog a été mis à jour avec succès');
        } catch (\Exception $e) {
            return redirect(route('blogs.index'))->with('error', 'Échec de la mise à jour du blog');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::find($id);
        if ($blog->delete()) {
            return back()->with('success', 'Le blog a été supprimé avec succès !');
        } else {
            return back()->with('error', 'Échec de la suppression du blog !');
        }
    }
}
