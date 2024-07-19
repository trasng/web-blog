<?php

namespace App\Http\Controllers\Client;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($id){
       if(isset($_SESSION['url'])) unset($_SESSION['url']);
       $itemsPerPage = 5;
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        if ($current_page == '' || $current_page == 1||$current_page <= 0) {
            $begin = 0;
        } else {
            $begin = ($current_page - 1) * $itemsPerPage;
        }
        $data = Post::listPosts($begin,$itemsPerPage,$id);
        $total_pages = Post::numberOfPages("", $id);

        if (!isset($data[0])) {
            abort(404);
        }

        return view('Clients.category',
            [
                'postTop5' => $data,
                'total_pages' => $total_pages,
                'key' => '',
                'id' => $id
            ]
        );

    }
}
