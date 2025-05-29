<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class ContractsController extends Controller
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
        if ($request->ajax()) {
            $contracts = Contract::all();
            return DataTables::of($contracts)
                ->addColumn('user', function ($row) {
                    return $row->user->name ?? 'N/A';
                })
                ->addColumn('actions', function ($row) {
                    $editUrl = route('contracts.edit', $row->id);
                    $deleteUrl = route('contracts.destroy', $row->id);
                    $formId = 'delete-form' . $row->id;
                    return '
                        <a href="' . $editUrl . '" class="text-info m-2"><i class="fas fa-edit"></i></a>
                        <a href="javascript:void(0)" onclick="document.getElementById(\'' . $formId . '\').submit()" class="text-danger m-2"><i class="fas fa-trash"></i></a>
                        <form action="' . $deleteUrl . '" method="POST" id="' . $formId . '" style="display:none;">
                            ' . csrf_field() . method_field('DELETE') . '
                        </form>
                    ';
                })
                ->rawColumns(['actions'])
                ->make(true);
        }
        return view('contracts.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contracts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'file' => 'required|file',
        ]);
        try {

            $filePath = null;

            if ($request->hasFile('file')) {
                $uniqueName = uniqid() . '___' . str_replace(' ', '_', $request->file->getClientOriginalName());

                // Store the file in the 'public' disk (configured in config/filesystems.php)
                $filePath = $request->file->storeAs("/contracts", $uniqueName, "public");
            }

            $contract = Contract::create([
                'title' => $request->title,
                'description' => $request->description,
                'file_path' => $filePath,
                'user_id' => $request->user_id ?? Auth::id(),
            ]);

            return redirect(route('contracts.index'))->with('success', 'Le contrat a été créé avec succès');
        } catch (\Exception $e) {
            return redirect(route('contracts.index'))->with('error', 'Échec de la création du contrat');
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
        $contract = Contract::find($id);
        return view('contracts.edit', compact('contract'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'file' => 'file',
        ]);
        try {

            $filePath = Contract::find($id)->file_path ?? null;

            if ($request->hasFile('file')) {
                $uniqueName = uniqid() . '___' . str_replace(' ', '_', $request->file->getClientOriginalName());

                // Store the file in the 'public' disk (configured in config/filesystems.php)
                $filePath = $request->file->storeAs("/contracts", $uniqueName, "public");
            }

            $contract = Contract::updateOrCreate(['id' => $id], [
                'title' => $request->title,
                'description' => $request->description,
                'file_path' => $filePath,
                'user_id' => $request->user_id ?? Auth::id(),
            ]);

            return redirect(route('contracts.index'))->with('success', 'Le contrat a été mis à jour avec succès');
        } catch (\Exception $e) {
            return redirect(route('contracts.index'))->with('error', 'Échec de la mise à jour du contrat');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contract = Contract::find($id);
        if ($contract->delete()) {
            return back()->with('success', 'Le contrat a été supprimé avec succès !');
        } else {
            return back()->with('error', 'Échec de la suppression du contrat !');
        }
    }
}
