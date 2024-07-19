<?php

namespace App\Http\Controllers\Client;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected string $urlKey;

    public function index()
    {
        $postSlide    = Post::getTopNew(4);
        $postFirst    = Post::getTopApartFrom(1, 4);
        $postTop6     = Post::getTopApartFrom(6, 5)->chunk(3);
        $postTrending = Post::getTrending(5);
        $postFirstVH  = Post::getFirst(6);
        $posts2VH     = Post::getTopCateApartFrom(2, 1, 6);
        $posts3VH     = Post::getTopCateApartFrom(1, 3, 6);
        $posts6VH     = Post::getTopCateApartFrom(6, 4, 6);
        $postFirstTT  = Post::getFirst(8);
        $posts2TT     = Post::getTopCateApartFrom(2, 1, 8);
        $posts3TT     = Post::getTopCateApartFrom(1, 3, 8);
        $posts6TT     = Post::getTopCateApartFrom(6, 4, 8);
        $posts3DS     = Post::getTopCate(5, 3);
        $posts6DS     = Post::getTopCateApartFrom(6, 9, 5);
        $postTop6DS   = Post::getTopCateApartFrom(6, 3, 5)->chunk(3);

        $data = [
            'postSlide'    => $postSlide,
            'postFirst'    => $postFirst,
            'postTop6'     => $postTop6,
            'postTrending' => $postTrending,
            'postFirstVH'  => $postFirstVH,
            'posts2VH'     => $posts2VH,
            'posts3VH'     => $posts3VH,
            'posts6VH'     => $posts6VH,
            'postFirstTT'  => $postFirstTT,
            'posts2TT'     => $posts2TT,
            'posts3TT'     => $posts3TT,
            'posts6TT'     => $posts6TT,
            'posts3DS'     => $posts3DS,
            'posts6DS'     => $posts6DS,
            'postTop6DS'   => $postTop6DS,
        ];
        // dd($data);

        return view('Clients.index', $data);
    }

    public function posts(){
        if(isset($_SESSION['url'])) unset($_SESSION['url']);
        $itemsPerPage = 5;
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;

        if ($current_page == '' || $current_page == 1 || $current_page <= 0) {
            $begin = 0;
        } else {
            $begin = ($current_page - 1) * $itemsPerPage;
        }

        $total_pages = (new Post)->numberOfPages();
        $posts       = (new Post)->listPosts($begin, $itemsPerPage);

        if (isset($_GET['key'])) {
            $posts       = Post::listPostsSearch($begin, $itemsPerPage, $_GET['key']);
            $total_pages = Post::numberOfPages($_GET['key']);
        }

        $data = [
            'posts'       => $posts,
            'key'         => !empty($_GET['key']) ? $_GET['key'] : '',
            'total_pages' => $total_pages
        ];
        // dd($data);

        return view('Clients.posts', $data);
    }

    public function show(string $id)
    {
        $this->urlKey = '/post' . $id;
        $data = Post::find($id);
        // dd($data);
        // $data = (new Post)->getByID($id);
        if (empty($data)) {
            return redirect()->back();
        };

        if (!isset($_SESSION['url'])) {
            $_SESSION['url'] = $this->urlKey;
            Post::updateView($id);
        }
        // dd($data);
        return view('Clients.postone', ['post' => $data,]);
    }

    public function about(){
        return view('Clients.about');
    }

    public function contact(){
        return view('Clients.contact');
    }
}
