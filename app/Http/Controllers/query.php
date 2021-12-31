<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use Auth;


class query extends Model
{
    public static function get_company_name() {
        return DB::table('company')
                ->select('id', 'name')
                ->get(); 
    }

    public static function store_master($company_id, $text, $tablename) {
        DB::table($tablename)->insert([
            'company_id' => $company_id,
            'text' => $text,
            'updated_at' => date('Y-m-d H:i:s'),
            'updated_by' => Auth::user()->id,
            'created_at'=> date('Y-m-d H:i:s'),
            'created_by' => Auth::user()->id
        ]);
    }

    public static function get_slider_name() {
        return DB::table('vertical_slider_master')
                ->select('id', 'text')
                ->get(); 
    }

    public static function get_center_type_name() {
        return DB::table('center_type_master')->get(); 
    }    

      

}
