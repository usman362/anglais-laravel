<?php

namespace App\Http\Controllers;

use App\Models\Intervention;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class InterventionController extends Controller
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
            if(Auth::user()->role == 'client'){
                $users = Intervention::where('client_id',Auth::id())->get();
            }elseif(Auth::user()->role == 'employee'){
                $users = Intervention::where('employee_id',Auth::id())->get();
            }else{
                $users = Intervention::all();
            }
            return DataTables::of($users)
                ->addColumn('employee', function ($row) {
                    return $row->employee->name ?? 'N/A';
                })
                ->addColumn('client', function ($row) {
                    return $row->client->name ?? 'N/A';
                })
                ->addColumn('actions', function ($row) {
                    $editUrl = route('interventions.edit', $row->id);
                    $deleteUrl = route('interventions.destroy', $row->id);
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
        return view('interventions.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('interventions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'start_time' => 'required',
            'end_time' => 'required',
            'date' => 'required',
            'employee_id' => 'required',
            'client_id' => 'required',
        ]);
        try {
            $user = Intervention::create([
                'title' => $request->title,
                'intervention_date' => $request->date,
                'employee_id' => $request->employee_id,
                'client_id' => $request->client_id,
                'start_time' => $request->start_time,
                'end_time' => $request->end_time,
                'notes' => $request->notes,
            ]);

            return redirect(route('interventions.index'))->with('success', "L'intervention a été créée avec succès");
        } catch (\Exception $e) {
            return redirect(route('interventions.index'))->with('error', "Échec de la création d'une intervention");
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
        $schedule = Intervention::find($id);
        return view('interventions.edit', compact('schedule'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'date' => 'required',
            'employee_id' => 'required',
            'client_id' => 'required',
        ]);
        try {
            $user = Intervention::updateOrCreate(['id' => $id],[
                'title' => $request->title,
                'intervention_date' => $request->date,
                'employee_id' => $request->employee_id,
                'client_id' => $request->client_id,
                'start_time' => $request->start_time,
                'end_time' => $request->end_time,
                'notes' => $request->notes,
            ]);

            return redirect(route('interventions.index'))->with('success', "L'intervention a été créée avec succès");
        } catch (\Exception $e) {
            return redirect(route('interventions.index'))->with('error', "Échec de la création d'une intervention");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = Intervention::find($id);
        if ($user->delete()) {
            return back()->with('success', "L'utilisateur a été supprimé avec succès !");
        } else {
            return back()->with('error', "Échec de la suppression de l'utilisateur !");
        }
    }
}
