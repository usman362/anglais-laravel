<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\AccountCreatedNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\DataTables;

class UsersController extends Controller
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
            $users = User::all();
            return DataTables::of($users)
                ->addColumn('actions', function ($row) {
                    $editUrl = route('users-management.edit', $row->id);
                    $deleteUrl = route('users-management.destroy', $row->id);
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
        return view('user_management.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user_management.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'role' => 'required'
        ]);
        try {
            $user = User::create([
                'name' => $request->first_name . ' ' . $request->last_name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => $request->role
            ]);
            $user->notify(new AccountCreatedNotification($user->role, $request->password));
            return redirect(route('users-management.index'))->with('success', 'User has been Created Successfully');
        } catch (\Exception $e) {
            return redirect(route('users-management.index'))->with('error', 'Failed to Create User');
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
        $user = User::find($id);
        return view('user_management.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'required',
            'role' => 'required'
        ]);

        try {
            $user = User::update(['id' => $id],[
                'name' => $request->first_name . ' ' . $request->last_name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => $request->role
            ]);
            return redirect(route('users-management.index'))->with('success', 'User has been Updated Successfully');
        } catch (\Exception $e) {
            return redirect(route('users-management.index'))->with('error', 'Failed to Update User');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::find($id);
        if ($user->delete()) {
            return back()->with('success', 'User has been Deleted Successfully!');
        } else {
            return back()->with('error', 'Failed to Delete User!');
        }
    }

    public function dashboard()
    {
        if (Auth::user()->role == 'admin') {
            return redirect()->route('users-management.index');
        }

        return redirect()->route('profile.index');
    }
}
