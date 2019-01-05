<?php

namespace App\Http\Controllers;

use App\Pages;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function credits(){
        return view('pages.credits',compact('credits'));
    }
    public function notfound()
    {

        //
        return view('pages.404',compact('pages'));
    }
    
    public function button(){
        return view('pages.buttons',compact('pages'));
    }

    public function chart(){
        return view('pages.chartjs',compact('chart'));

    }

    public function flag(){
        return view('pages.flag',compact('flag'));
    }

    public function font(){
        return view('pages.fontawesome',compact('font'));

    }

    public function forgot(){
        return view('pages.forgot',compact('forgot'));

    }

    public function general(){
        return view('pages.general',compact('general'));
    }
    
    public function icon(){
        return view('pages.icon-icons',compact('icon'));
    }
    
    public function component(){
        return view('pages.component',compact('component'));
    }

    public function login(){
        return view('pages.login',compact('login'));
    }

    public function register(){
        return view('pages.register',compact('register'));
    }

    public function reset(){
        return view('pages.reset',compact('reset'));

    }

    public function simple(){
        return view('pages.simple',compact('simple'));

    }

    public function table(){
        return view('pages.table',compact('table'));
    }

    public function toast(){
        return view('pages.toastr',compact('toast'));
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
     * @param  \App\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function show(Pages $pages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function edit(Pages $pages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pages $pages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pages  $pages
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pages $pages)
    {
        //
    }
}
