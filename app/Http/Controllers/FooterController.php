<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        // company id will be passed from footersubmenu store function 
        $footermenulist = DB::select("select distinct text, link from footer_menu where company_id=$id ");

        $i = 0;
        for ($i; $i < count($footermenulist); $i++) {
            $footermenuname = $footermenulist[$i]->text;
            $footersubmenulist[$i] = DB::select("select distinct text,footer_menu, link from footer_sub_menu where company_id=$id and footer_menu='$footermenuname' ");
            
        }
    

        $socialmedialist = DB::select("select text ,link from social_media where company_id= $id");
        $contactlist = DB::select("select ciconname , contactdetails from contact where company_id= $id");

        return view('Footer/Index', ['footermenulist' => $footermenulist, 'footersubmenulist' => $footersubmenulist, 'nooffootermenu' => $i, 'socialmedialist' => $socialmedialist, 'contactlist' => $contactlist]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}
