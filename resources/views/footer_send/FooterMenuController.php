<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FooterMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footeritems= DB::select('select * from footer_menu');
        return view('Footer_Menu/Index' , ['items'=>$footeritems]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Footer_Menu/create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cid = $request->companyid;
        for ($i= 0; $i<count($request->footermenu);  $i++) {
            if (empty($request->footermenu[$i])) {
            
                //    return back()->with('message' , 'please enter at least one footer menu');
            }
            else {
                $menuname = $request->footermenu[$i];
            $menulink = $request->footermenulink[$i];
            DB::table('footer_menu')->insert(
                [
                    'company_id' => $cid,
                    'text' => $menuname,
                    'link' =>$menulink,
                    'updated_at' => date('Y-m-d H:i:s'),
                    'updated_by' => 'rupesh',
                    'created_at' => date('Y-m-d H:i:s'),
                    'created_by' => 'rupesh'
                    ]
                );
               
            }
            
                
            }
            $request->session()->put('companyid' , $cid);
            return redirect('footersubmenu/show');
         
        }
        
        /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function show()
        {
            
        }
        
        /**
         * Show the form for editing the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
        
       $footermenudetails= DB::select("select * from footer_menu where id=$id");
        return view('Footer_Menu/Edit' , compact('footermenudetails'));
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
       DB::table('footer_menu')->where('id', $id)->update([
              'text'=>$request->footermenuname,
              'link'=>$request->footermenulink
       ]);
       return redirect('footermenu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // echo 'hii';
        dd("asdasd");
    //   DB::table('footer_menu')->delete($id);

    }
}
