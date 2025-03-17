<?php

namespace App\Http\Controllers;

use App\Models\PostAd;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function admin()
    {
        // if (auth()->user()->role !== 'admin') {
        //     abort(403, 'Unauthorized action.');
        // }
        $postAds = PostAd::all();
        return view('admin', compact('postAds'));
    }

    public function admin_update_post_ads(Request $request)
    {
        // if (auth()->user()->role !== 'admin') {
        //     abort(403, 'Unauthorized action.');
        // }
        $postAd = PostAd::find($request->id);
        $postAd->status = $request->status;
        $postAd->save();
        return response()->json(['success' => 'Post ad updated successfully']);
    }

    public function manage_users()
    {
        // if (auth()->user()->role !== 'admin') {
        //     abort(403, 'Unauthorized action.');
        // }
        $users = User::where(function ($query) {
            $query->whereNull('role')->orWhere('role', '!=', 'admin');
        })->get();
        return view('manage-users',compact('users'));
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
