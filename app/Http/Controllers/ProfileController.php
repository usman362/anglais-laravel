<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Chatify\Facades\ChatifyMessenger as Chatify;
use Illuminate\Support\Str;
class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('profile.profile-setting');
    }

    public function store(Request $request)
    {
        $profile = User::find(Auth::id());
        $profile->name = $request->first_name . ' ' . $request->last_name;
        $profile->designation = $request->designation;
        $profile->phone = $request->phone;
        $profile->address = $request->address;
        $profile->bio = $request->bio;
        $profile->save();
        if ($request->hasFile('avatar')) {
            // allowed extensions
            $allowed_images = Chatify::getAllowedImages();

            $file = $request->file('avatar');
            // check file size
            if ($file->getSize() < Chatify::getMaxUploadSize()) {
                if (in_array(strtolower($file->extension()), $allowed_images)) {
                    // delete the older one
                    if (Auth::user()->avatar != config('chatify.user_avatar.default')) {
                        $avatar = Auth::user()->avatar;
                        if (Chatify::storage()->exists($avatar)) {
                            Chatify::storage()->delete($avatar);
                        }
                    }
                    // upload
                    $avatar = Str::uuid() . "." . $file->extension();
                    $update = User::where('id', Auth::user()->id)->update(['avatar' => $avatar]);
                    $file->storeAs(config('chatify.user_avatar.folder'), $avatar, config('chatify.storage_disk_name'));
                    $success = $update ? 1 : 0;
                } else {
                    return redirect(route('profile.index'))->with('error', 'File extension not allowed!');
                }
            } else {
                return redirect(route('profile.index'))->with('error', 'File size you are trying to upload is too large!');
            }
        }
        return redirect(route('profile.index'))->with('success', 'Profile has been Updated Successfully');
    }
}
