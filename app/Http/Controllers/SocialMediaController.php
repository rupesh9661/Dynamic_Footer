<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SocialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socialmedia= DB::select("select * from social_media");
        return view('Social_Media/Index' , ['socialmedia'=>$socialmedia]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Social_Media/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cid= $request->companyid;
        for($i=0; $i<count($request->smname); $i++){
            if(empty($request->smname)){

            }
            else{
                $smname= $request->smname[$i];
                $smlink= $request->smlink[$i];
                DB::table('social_media')->insert([
                   'company_id'=>$cid,
                   'text'=>$smname,
                   'link'=>$smlink,
                   'updated_at' => date('Y-m-d H:i:s'),
                   'updated_by' => 'rupesh',
                   'created_at' => date('Y-m-d H:i:s'),
                   'created_by' => 'rupesh'


                ]);
                }
        }

        return redirect(route('footer.show' , $cid));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editsmitem= DB::select("select * from social_media where id = $id");
        return view('Social_Media/Edit' , ['editsmitem'=>$editsmitem]);
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
        DB::table('social_media')->where('id', $id)->update([
               'text'=>$request->smname,
               'link'=>$request->smlink
        ]);
        return redirect('socialmedia');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete("delete from social_media where id = $id");
        return redirect('socialmedia');
    }
}
