<?php

namespace App\Http\Controllers;

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
}
