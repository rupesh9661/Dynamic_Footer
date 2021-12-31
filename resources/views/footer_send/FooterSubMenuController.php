<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FooterSubMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footeritemlist=DB::select('select * from footer_sub_menu');
        // print_r($footeritemlist);
        // return view('Footer_Sub_Menu/Index' , ['footeritemlist'=>$footeritemlist]);
        return view('Footer_Sub_Menu/Index' , compact('footeritemlist'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Footer_Sub_Menu/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cid= session()->get('companyid');
     
        for($i=0; $i<count($request->footersubmenu); $i++){
            if(empty($request->footersubmenu[$i])){
                // return back()->with('message' , 'please enter at least one sub menu details ');
            }
            else {
        DB::table('footer_sub_menu')->insert([
            'company_id' =>$cid, 
            'footer_menu' => $request->footermenu,
            'text' => $request->footersubmenu[$i],
            'link' => $request->footersubmenulink[$i],
            'updated_at' => date('Y-m-d H:i:s'),
            'updated_by' => 'rupesh',
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => 'rupesh'

        ]);
    }
    
    }
       

    return redirect('footersubmenu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        // for showing menuname in dropdown 
        $company_id = session()->get('companyid');
        $footermenulist = DB::select("select * from footer_menu where company_id=$company_id ");
        return view('Footer_Sub_Menu/Create', ['footermenulist' => $footermenulist]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
           $editfootersubmenu= DB::select("select * from footer_sub_menu where id=$id");
           return view('Footer_Sub_Menu/Edit' , compact('editfootersubmenu'));
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
       
        DB::table('footer_sub_menu')->where('id' , $id)->update([
                
            'footer_menu'=>$request->footermenu,
            'text'=>$request->footersubmenu,
            'link'=>$request->footersubmenulink
            
        ]);
        return redirect('footersubmenu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        echo "this is destroy";
    }
}
