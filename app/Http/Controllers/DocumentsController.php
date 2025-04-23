<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\DataTables;

class DocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $users = Document::all();
            return DataTables::of($users)
                ->addColumn('role', function ($row) {
                    return 'Employee';
                })
                ->addColumn('actions', function ($row) {
                    $editUrl = route('documents.edit', $row->id);
                    $deleteUrl = route('documents.destroy', $row->id);
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
        $type = 'documents';
        $name = 'Document';
        return view('documents.index', compact('type','name'));
    }

    public function invoiceList()
    {
        $type = 'invoice';
        $name = 'Invoice';
        return view('documents.index', compact('type','name'));
    }
    public function payslipList()
    {
        $type = 'payslip';
        $name = 'Payslip';
        return view('documents.index', compact('type','name'));
    }
    public function activityList()
    {
        $type = 'activity';
        $name = 'Activity Report';
        return view('documents.index', compact('type','name'));
    }
    public function followupList()
    {
        $type = 'followup';
        $name = 'Follow up Sheet';
        return view('documents.index', compact('type','name'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $type = 'document';
        $name = 'Document';
        return view('documents.create', compact('type','name'));
    }
    public function invoiceCreate()
    {
        $type = 'invoice';
        $name = 'Invoice';
        return view('documents.create', compact('type','name'));
    }
    public function payslipCreate()
    {
        $type = 'payslip';
        $name = 'Payslip';
        return view('documents.create', compact('type','name'));
    }
    public function activityCreate()
    {
        $type = 'activity';
        $name = 'Activity Report';
        return view('documents.create', compact('type','name'));
    }
    public function followupCreate()
    {
        $type = 'followup';
        $name = 'Follow up Sheet';
        return view('documents.create', compact('type','name'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'file' => 'required',
        ]);
        try {
            $filePath = null;

            if ($request->hasFile('file')) {
                $uniqueName = uniqid() . '___' . str_replace(' ', '_', $request->image->getClientOriginalName());

                // Store the file in the 'public' disk (configured in config/filesystems.php)
                $filePath = $request->image->storeAs("/documents", $uniqueName, "public");
            }
            $document = Document::create([
                'title' => $request->title,
                'file_path' => $filePath,
                'type' => $request->type,
                // 'user_id' => ,
            ]);

            return redirect(route('documents.index'))->with('success', 'Document has been Created Successfully');
        } catch (\Exception $e) {
            return redirect(route('documents.index'))->with('error', 'Failed to Create Document');
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
        $document = Document::find($id);
        return view('documents.edit', compact('document'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'file' => 'required',
        ]);
        try {
            $filePath = Document::find($id)->file_path ?? null;

            if ($request->hasFile('file')) {
                $uniqueName = uniqid() . '___' . str_replace(' ', '_', $request->image->getClientOriginalName());

                // Store the file in the 'public' disk (configured in config/filesystems.php)
                $filePath = $request->image->storeAs("/documents", $uniqueName, "public");
            }
            $document = Document::updateOrCreate(['id' => $id], [
                'title' => $request->title,
                'file_path' => $filePath,
                'type' => $request->type,
                // 'user_id' => ,
            ]);

            return redirect(route('documents.index'))->with('success', 'Document has been Created Successfully');
        } catch (\Exception $e) {
            return redirect(route('documents.index'))->with('error', 'Failed to Create Document');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = Document::find($id);
        if ($user->delete()) {
            return back()->with('success', 'Document has been Deleted Successfully!');
        } else {
            return back()->with('error', 'Failed to Delete Document!');
        }
    }
}
