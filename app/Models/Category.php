<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Category extends Model
{
    use HasFactory;
    public static function getForMenu(){
        try{
            $data = DB::table('categories')
                ->select('id', 'name')
                ->get();
            return $data;
        }catch (\Exception $e){
            Log::error('ERROR: ' . $e->getMessage());
            die;
        }
    }
}
