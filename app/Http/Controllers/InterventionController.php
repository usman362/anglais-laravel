<?php

namespace App\Http\Controllers;

use App\Models\Intervention;
use Illuminate\Http\Request;
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
            $users = Intervention::all();
            return DataTables::of($users)
                ->addColumn('employee', function ($row) {
                    return 'Employee';
                })
                ->addColumn('client', function ($row) {
                    return 'Client';
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
            'date' => 'required',
            'employee_id' => 'required',
        ]);
        try {
            $user = Intervention::create([
                'date' => $request->date,
                'employee_id' => $request->employee_id,
                'client_id' => $request->client_id,
                'notes' => $request->notes,
            ]);

            return redirect(route('interventions.index'))->with('success', 'Intervention has been Created Successfully');
        } catch (\Exception $e) {
            return redirect(route('interventions.index'))->with('error', 'Failed to Create Intervention');
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

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = Intervention::find($id);
        if ($user->delete()) {
            return back()->with('success', 'User has been Deleted Successfully!');
        } else {
            return back()->with('error', 'Failed to Delete User!');
        }
    }
}
