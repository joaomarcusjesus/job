<?php

namespace Modules\Posts\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Mockery\Exception;

class PostsCategory extends Controller
{

    private $categories;

    public function __construct(\Modules\Posts\Entities\PostsCategory $category)
    {
        $this->categories = $category;
    }


    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $myCategories = $this->categories->paginate(5);

        return view('posts::posts_categories.index', compact('myCategories'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('posts::posts_categories.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        try {
            $newCategorie = $this->categories->create($request->all());
            if($newCategorie):
                return redirect()->route('admin.posts_categories.index');
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
