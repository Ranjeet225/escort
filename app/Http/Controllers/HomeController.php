<?php

namespace App\Http\Controllers;

use Illuminate\Container\Attributes\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    public function services($action)
    {
        return view('services', array('action' => $action));
    }

    public function escort_details()
    {
        return view('escort_details');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function tmc()
    {
        return view('tmc');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function policy()
    {
        return view('policy');
    }

    /**
     * Display the specified resource.
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function help_center()
    {
        return view('help_center');
    }

    /**
     * Update the specified resource in storage.
     */
    public function blogs()
    {
        return view('blogs');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function issue()
    {
        return view('issue');
    }

    public function promo()
    {
        return view('promo');
    }


    public function product()
    {
        return view('product');
    }


    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function post_ads()
    {
        $countries = \DB::table('countries')->get();
        return view('post_ads', ['countries' => $countries]);
    }

    public function save_post_ads(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string',
            'whatsapp' => 'required|string',
            'country' => 'required|integer',
            'state' => 'required|integer',
            'city' => 'required|integer',
            'locality' => 'required|string',
            'category' => 'required|string',
            'details' => 'required|string',
            'description' => 'required|string',
            'age' => 'required|integer',
            'images.*' => 'required|image'
        ]);
        $images = [];
        $request->file('images')->each(function ($file) use (&$images) {
            $images[] = $file->store('public/images');
        });
        $postAd = new \App\Models\PostAd(); 
        $postAd->name = $request->name;
        $postAd->phone = $request->phone;
        $postAd->whatsapp = $request->whatsapp;
        $postAd->country_id = $request->country;
        $postAd->state_id = $request->state;
        $postAd->city_id = $request->city;
        $postAd->locality = $request->locality;
        $postAd->category = $request->category;
        $postAd->details = $request->details;
        $postAd->description = $request->description;
        $postAd->age = $request->age;
        $postAd->images = json_encode($images);
        $postAd->save();
        return redirect()->route('my-ads')->with('success', 'Post ad added successfully');
    }
    public function states(Request $request)
    {
        $states = \DB::table('states')->where('country_id', $request->countryId)->get();
        return response()->json($states);
    }
    
    public function city(Request $request){
        $cities = \DB::table('cities')->where('state_id', $request->stateId)->get();
        return response()->json($cities);
    }

    public function just_check()
    {
        return view('just_check');
    }

    public function my_ads()
    {
        return view('my_ads');
    }

    public function account()
    {
        return view('account');
    }

    public function settings()
    {
        return view('settings');
    }
}
