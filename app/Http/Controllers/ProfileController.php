<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.profile-setting');
    }

    public function store(Request $request)
    {
        $profile = User::find(Auth::id());
        if ($request->hasFile('image')) {
            $uniqueName = uniqid() . '___' . str_replace(' ', '_', $request->image->getClientOriginalName());

            // Store the file in the 'public' disk (configured in config/filesystems.php)
            $filePath = $request->image->storeAs("/images", $uniqueName, "public");
        }
        $profile->name = $request->first_name . ' ' . $request->last_name;
        $profile->image = $filePath;
        $profile->designation = $request->designation;
        $profile->phone = $request->phone;
        $profile->address = $request->address;
        $profile->bio = $request->bio;
        $profile->save();
        return redirect(route('profile.index'))->with('success', 'Profile has been Updated Successfully');
    }
}
