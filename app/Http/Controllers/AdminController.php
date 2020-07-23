<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }

    public function login()
    {
        return view('admin.login');
    }

    public function calendar()
    {
        return view('admin.dashboard.calendar');
    }

    public function chart()
    {
        return view('admin.dashboard.chart');
    }
    
    public function file_manager()
    {
        return view('admin.dashboard.file-manager');
    }
    
    public function form()
    {
        return view('admin.dashboard.form');
    }
    
    public function gallery()
    {
        return view('admin.dashboard.gallery');
    }
    
    public function icon()
    {
        return view('admin.dashboard.icon');
    }
        
    public function messages()
    {
        return view('admin.dashboard.messages');
    }
        
    public function submenu1()
    {
        return view('admin.dashboard.submenu1');
    }
        
    public function submenu2()
    {
        return view('admin.dashboard.submenu2');
    }
        
    public function submenu3()
    {
        return view('admin.dashboard.submenu3');
    }
            
    public function table()
    {
        return view('admin.dashboard.table');
    }
            
    public function tasks()
    {
        return view('admin.dashboard.tasks');
    }
            
    public function typography()
    {
        return view('admin.dashboard.typography');
    }
                
    public function ui()
    {
        return view('admin.dashboard.ui');
    }
                
    public function widgets()
    {
        return view('admin.dashboard.widgets');
    }
    
    
    

}