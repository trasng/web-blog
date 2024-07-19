<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Post extends Model
{

    public static function getAll()
    {
        try {
            $posts   = DB::table('posts')
                ->join('categories', 'posts.category_id', '=', 'categories.id')
                ->select('categories.name', 'posts.*')
                ->limit(5)
                ->get();

            return $posts;
        } catch (\Exception $e) {
            Log::error('ERROR: ' . $e->getMessage());
            die;
        }
    }

    public static function numberOfPages($keywords = "", $id = "")
    {
        try {
            $query = DB::table('posts')
                ->join('categories', 'posts.category_id', '=', 'categories.id')
                ->select('posts.id as idPost', 'categories.name as categories_name', 'posts.*', 'categories.*')
                ->whereNotNull('categories.id');

            if ($id != "") {
                $query->where('categories.id', $id);
            }

            if ($keywords != "") {
                $query->where('posts.title', 'like', '%' . $keywords . '%');
            }

            $data = $query->get();

            return ceil(count($data) / 5);
        } catch (\Exception $e) {
            Log::error('ERROR: ' . $e->getMessage());
            die;
        }
    }

    public static function listPosts($limit1, $limit2, $id = "")
    {
        try {
            $query = DB::table('posts')
                ->join('categories', 'posts.category_id', '=', 'categories.id')
                ->select('categories.id as c_id', 'categories.name', 'posts.*')
                ->whereNotNull('categories.id');

            if ($id != "") {
                $query->where('categories.id', $id);
            }

            $query->orderBy('posts.id', 'DESC')
                ->offset($limit1)
                ->limit($limit2);

            $data = $query->get();

            return $data;
        } catch (\Exception $e) {
            Log::error('ERROR: ' . $e->getMessage());
            die;
        }
    }

    public static function updateView($id)
    {
        try{
            DB::table('posts')
                ->where('id', $id)
                ->increment('view', 1);
        } catch (\Exception $e){
            Log::error('ERROR: ' . $e->getMessage());
            // dd($id);
            die;
        }
    }
    public static function listPostsSearch($limit1, $limit2, $keywords)
    {
        try {
            $query = DB::table('posts')
                ->join('categories', 'posts.category_id', '=', 'categories.id')
                ->select('categories.id as c_id', 'categories.name', 'posts.*')
                ->where('posts.title', 'like', '%' . $keywords . '%');

            $query->orderBy('posts.id', 'DESC')
                ->offset($limit1)
                ->limit($limit2);

            $data = $query->get();

            return $data;
        } catch (\Exception $e) {
            Log::error('ERROR: ' . $e->getMessage());
            die;
        }
    }

    public static function getTopApartFrom($articleNumber, $apartFrom)
    {
        try {

            $excludedIds = DB::table('posts')
                ->orderBy('id', 'DESC')
                ->limit($apartFrom)
                ->pluck('id');

            $query = DB::table('posts')
                ->join('categories', 'posts.category_id', '=', 'categories.id')
                ->select('categories.name', 'posts.*')
                ->whereNotIn('posts.id', $excludedIds)
                ->orderBy('posts.id', 'DESC')
                ->limit($articleNumber);

            $data = $query->get();

            return $data;
        } catch (\Exception $e) {
            Log::error('ERROR: ' . $e->getMessage());
            die;
        }
    }

    public static function getTopCateApartFrom($articleNumber, $apartFrom, $id)
    {
        try {
            $subquery = DB::table('posts')
                ->where('category_id', $id)
                ->orderBy('id', 'DESC')
                ->limit($apartFrom)
                ->pluck('id');

            $query = DB::table('posts')
                ->join('categories', 'posts.category_id', '=', 'categories.id')
                ->select('categories.name', 'posts.*')
                ->whereNotIn('posts.id', $subquery)
                ->where('posts.category_id', $id)
                ->orderBy('posts.id', 'DESC')
                ->limit($articleNumber);

            $data = $query->get();

            return $data;
        } catch (\Exception $e) {
            Log::error('ERROR: ' . $e->getMessage());
            die;
        }
    }

    public static function getTopCate($id, $limit)
    {
        try {
            $query = DB::table('posts')
                ->join('categories', 'posts.category_id', '=', 'categories.id')
                ->select('categories.name', 'categories.id as c_id', 'posts.*')
                ->where('categories.id', $id)
                ->orderBy('posts.id', 'DESC')
                ->limit($limit);

            $data = $query->get();

            return $data;
        } catch (\Exception $e) {
            Log::error('ERROR: ' . $e->getMessage());
            die;
        }
    }

    public static function getTopNew($limit)
    {
        try {
            $query = DB::table('posts')
                ->join('categories', 'posts.category_id', '=', 'categories.id')
                ->select('categories.name', 'categories.id as c_id', 'posts.*')
                ->orderBy('posts.id', 'DESC')
                ->limit($limit);

            $data = $query->get();

            return $data;
        } catch (\Exception $e) {
            Log::error('ERROR: ' . $e->getMessage());
            die;
        }
    }

    public static function getTopOld($limit)
    {
        try {
            $query = DB::table('posts')
                ->join('categories', 'posts.category_id', '=', 'categories.id')
                ->select('categories.name', 'categories.id as c_id', 'posts.*')
                ->orderBy('posts.id', 'ASC')
                ->limit($limit);

            $data = $query->get();

            return $data;
        } catch (\Exception $e) {
            Log::error('ERROR: ' . $e->getMessage());
            die;
        }
    }

    public static function getTrending($limit)
    {
        try {
            $query = DB::table('posts')
                ->join('categories', 'posts.category_id', '=', 'categories.id')
                ->select('categories.name', 'categories.id as c_id', 'posts.*')
                ->where('posts.view', '>', 5)
                ->orderBy('posts.id', 'DESC')
                ->limit($limit);

            $data = $query->get();

            return $data;
        } catch (\Exception $e) {
            Log::error('ERROR: ' . $e->getMessage());
            die;
        }
    }

    public static function getByID($id)
    {
        try {
            $query = DB::table('posts')
                ->join('categories', 'posts.category_id', '=', 'categories.id')
                ->select('categories.name', 'posts.*')
                ->where('posts.id', $id);

            $data = $query->first();

            return $data;
        } catch (\Exception $e) {
            Log::error('ERROR: ' . $e->getMessage());
            die;
        }
    }

    public static function getFirst($id = 0)
    {
        try {
            $query = DB::table('posts')
                ->join('categories', 'posts.category_id', '=', 'categories.id')
                ->select('categories.name', 'categories.id', 'posts.*')
                ->orderBy('posts.id', 'DESC')
                ->limit(1);

            if ($id > 0) {
                $query->where('categories.id', $id);
            }

            $data = $query->first();

            return $data;
        } catch (\Exception $e) {
            Log::error('ERROR: ' . $e->getMessage());
            die;
        }
    }
}
