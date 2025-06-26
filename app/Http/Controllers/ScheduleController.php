<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\DataTables;

class ScheduleController extends Controller
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
            $users = Schedule::with(['employee', 'client'])->get();
            return DataTables::of($users)
                ->addColumn('employee_name', function ($row) {
                    return $row->employee->name ?? 'N/A';
                })
                ->addColumn('client_name', function ($row) {
                    return $row->client->name ?? 'N/A';
                })
                ->addColumn('actions', function ($row) {
                    $editUrl = route('schedules.edit', $row->id);
                    $deleteUrl = route('schedules.destroy', $row->id);
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
        return view('schedules.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('schedules.create');
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
            $user = Schedule::create([
                'start_time' => $request->start_time,
                'end_time' => $request->end_time,
                'date' => $request->date,
                'employee_id' => $request->employee_id,
                'client_id' => $request->client_id,
            ]);

            return redirect(route('schedules.index'))->with('success', 'Le calendrier a été créé avec succès');
        } catch (\Exception $e) {
            return redirect(route('schedules.index'))->with('error', 'Échec de la création du planning');
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
        $schedule = Schedule::find($id);
        return view('schedules.edit', compact('schedule'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'start_time' => 'required',
            'end_time' => 'required',
            'date' => 'required',
            'employee_id' => 'required',
            'client_id' => 'required',
        ]);
        try {
            $user = Schedule::updateOrCreate(['id' => $id], [
                'start_time' => $request->start_time,
                'end_time' => $request->end_time,
                'date' => $request->date,
                'employee_id' => $request->employee_id,
                'client_id' => $request->client_id,
            ]);

            return redirect(route('schedules.index'))->with('success', 'Le calendrier a été créé avec succès');
        } catch (\Exception $e) {
            return redirect(route('schedules.index'))->with('error', 'Échec de la création du planning');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = Schedule::find($id);
        if ($user->delete()) {
            return back()->with('success', 'User has been Deleted Successfully!');
        } else {
            return back()->with('error', 'Failed to Delete User!');
        }
    }
}
