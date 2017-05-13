<?php

namespace Modules\Posts\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Mockery\Exception;
use Modules\Posts\Entities\Post;

class PostsController extends Controller
{
    private $post;
    private $postsCategory;

    public function __construct(Post $post, \Modules\Posts\Entities\PostsCategory $postsCategory)
    {
        $this->post = $post;
        $this->postsCategory = $postsCategory;
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $myPosts = $this->post->paginate(5);

        return view('posts::posts.index', compact('myPosts'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $allCategories = $this->postsCategory->pluck('name', 'id');

        return view('posts::posts.create', compact('allCategories'));
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {

        try {
            $newPost = $this->post->create($request->all());
            if($newPost):
                return redirect()->route('admin.posts.index');
            endif;
        } catch(Exception $exception) {
            $exception->getMessage();
        }
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('posts::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('posts::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
