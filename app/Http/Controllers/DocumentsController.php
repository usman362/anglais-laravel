<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\DataTables;

class DocumentsController extends Controller
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
            if (Auth::user()->role == 'admin') {
                $users = Document::where('type', $request->type)->get();
            } else {
                $users = Document::where('type', $request->type)->where('user_id', Auth::user()->id)->get();
            }
            return DataTables::of($users)
                ->addColumn('user', function ($row) {
                    return $row->user->name ?? '';
                })
                ->addColumn('type', function ($row) {
                    $type = 'documents';
                    if($row->type == 'invoice'){
                        $type = 'Facture';
                    }elseif($row->type == 'payslip'){
                        $type = 'Fiche de paie';
                    }elseif($row->type == 'activity'){
                        $type = "Rapport d'activité";
                    }elseif($row->type == 'followup'){
                        $type = 'Fiche de suivi';
                    }
                    return $type;
                })
                ->addColumn('actions', function ($row) {
                    $editUrl = route('documents.edit', $row->id);
                    $deleteUrl = route('documents.destroy', $row->id);
                    $formId = 'delete-form' . $row->id;
                    $downloadId = 'download-form' . $row->id;
                    $download = route('file.download');
                    return '
                        <a href="javascript:void(0)" onclick="document.getElementById(\'' . $downloadId . '\').submit()" class="text-primary m-2"><i class="fas fa-arrow-down"></i></a>
                        <form action="' . $download . '" method="POST" id="' . $downloadId . '" style="display:none;">
                            ' . csrf_field() . '

                            <input type="hidden" name="file_path" value="' . $row->file_path . '">
                        </form>

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
        return view('documents.index', compact('type', 'name'));
    }

    public function invoiceList()
    {
        $type = 'invoice';
        $name = 'Facture';
        return view('documents.index', compact('type', 'name'));
    }
    public function payslipList()
    {
        $type = 'payslip';
        $name = 'Fiche de paie';
        return view('documents.index', compact('type', 'name'));
    }
    public function activityList()
    {
        $type = 'activity';
        $name = "Rapport d'activité";
        return view('documents.index', compact('type', 'name'));
    }
    public function followupList()
    {
        $type = 'followup';
        $name = 'Fiche de suivi';
        return view('documents.index', compact('type', 'name'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $type = 'documents';
        $name = 'Document';
        $users = User::where('role', '!=', 'admin')->get();
        return view('documents.create', compact('type', 'name', 'users'));
    }
    public function invoiceCreate()
    {
        $type = 'invoice';
        $name = 'Facture';
        $users = User::where('role', '!=', 'admin')->get();
        return view('documents.create', compact('type', 'name', 'users'));
    }
    public function payslipCreate()
    {
        $type = 'payslip';
        $name = 'Fiche de paie';
        $users = User::where('role', '!=', 'admin')->get();
        return view('documents.create', compact('type', 'name', 'users'));
    }
    public function activityCreate()
    {
        $type = 'activity';
        $name = "Rapport d'activité";
        $users = User::where('role', '!=', 'admin')->get();
        return view('documents.create', compact('type', 'name', 'users'));
    }
    public function followupCreate()
    {
        $type = 'followup';
        $name = 'Fiche de suivi';
        $users = User::where('role', '!=', 'admin')->get();
        return view('documents.create', compact('type', 'name', 'users'));
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
                $uniqueName = uniqid() . '___' . str_replace(' ', '_', $request->file->getClientOriginalName());

                // Store the file in the 'public' disk (configured in config/filesystems.php)
                $filePath = $request->file->storeAs("/documents", $uniqueName, "public");
            }
            $document = Document::create([
                'title' => $request->title,
                'file_path' => $filePath,
                'type' => $request->type,
                'user_id' => $request->user_id,
            ]);
            if ($request->type == 'payslip') {
                return redirect(route('payslip.List'))->with('success', 'Le document a été créé avec succès');
            }
            if ($request->type == 'followup') {
                return redirect(route('followup.List'))->with('success', 'Le document a été créé avec succès');
            }
            if ($request->type == 'activity') {
                return redirect(route('activity.List'))->with('success', 'Le document a été créé avec succès');
            }
            if ($request->type == 'invoice') {
                return redirect(route('invoice.List'))->with('success', 'Le document a été créé avec succès');
            }
            return redirect(route('documents.index'))->with('success', 'Le document a été créé avec succès');
        } catch (\Exception $e) {
            if ($request->type == 'payslip') {
                return redirect(route('payslip.List'))->with('success', 'Échec de la création du document');
            }
            if ($request->type == 'followup') {
                return redirect(route('followup.List'))->with('success', 'Échec de la création du document');
            }
            if ($request->type == 'activity') {
                return redirect(route('activity.List'))->with('success', 'Échec de la création du document');
            }
            if ($request->type == 'invoice') {
                return redirect(route('invoice.List'))->with('success', 'Échec de la création du document');
            }
            return redirect(route('documents.index'))->with('error', 'Échec de la création du document');
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
        $users = User::where('role', '!=', 'admin')->get();
        $name = 'Document';
        if ($document->type == 'payslip') {
            $name = 'Fiche de paie';
        }
        if ($document->type == 'followup') {
            $name = 'Fiche de suivi';
        }
        if ($document->type == 'activity') {
            $name = "Rapport d'activité";
        }
        if ($document->type == 'invoice') {
            $name = 'Facture';
        }
        return view('documents.edit', compact('document', 'name', 'users'));
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
            $filePath = null;

            if ($request->hasFile('file')) {
                $uniqueName = uniqid() . '___' . str_replace(' ', '_', $request->file->getClientOriginalName());

                // Store the file in the 'public' disk (configured in config/filesystems.php)
                $filePath = $request->file->storeAs("/documents", $uniqueName, "public");
            }
            $document = Document::updateOrCreate(['id' => $id], [
                'title' => $request->title,
                'file_path' => $filePath,
                'type' => $request->type,
                'user_id' => $request->user_id,
            ]);
            if ($request->type == 'payslip') {
                return redirect(route('payslip.List'))->with('success', 'Le document a été mis à jour avec succès');
            }
            if ($request->type == 'followup') {
                return redirect(route('followup.List'))->with('success', 'Le document a été mis à jour avec succès');
            }
            if ($request->type == 'activity') {
                return redirect(route('activity.List'))->with('success', 'Le document a été mis à jour avec succès');
            }
            if ($request->type == 'invoice') {
                return redirect(route('invoice.List'))->with('success', 'Le document a été mis à jour avec succès');
            }
            return redirect(route('documents.index'))->with('success', 'Le document a été mis à jour avec succès');
        } catch (\Exception $e) {
            if ($request->type == 'payslip') {
                return redirect(route('payslip.List'))->with('success', 'Échec de la mise à jour du document');
            }
            if ($request->type == 'followup') {
                return redirect(route('followup.List'))->with('success', 'Échec de la mise à jour du document');
            }
            if ($request->type == 'activity') {
                return redirect(route('activity.List'))->with('success', 'Échec de la mise à jour du document');
            }
            if ($request->type == 'invoice') {
                return redirect(route('invoice.List'))->with('success', 'Échec de la mise à jour du document');
            }
            return redirect(route('documents.index'))->with('error', 'Échec de la mise à jour du document');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = Document::find($id);
        if ($user->delete()) {
            return back()->with('success', 'Le document a été supprimé avec succès !');
        } else {
            return back()->with('error', 'Échec de la suppression du document !');
        }
    }
}
