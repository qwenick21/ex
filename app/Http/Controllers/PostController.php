<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\PostRepository;


class PostController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     protected $postRepo;

    public function __construct(PostRepository $postRepo)
    {
        $this->postRepo = $postRepo;
    }

    public function index()
    {
        $posts = $this->postRepo->index();
        return view('post.index', ['posts' => $posts]);
    }

    // ...略


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
       $post = $this->postRepo->create(request()->only('cAccount','cName','cGender','cBirthday','cEmail','cExplain'));

    if ($post) {
        return redirect()->route('post.show', $post->id);
    }

    return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = $this->postRepo->find($id);

        if (!$post) {
            return redirect()->route('post.index');
        }

        return view('post.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
{
    $post = $this->postRepo->find($id);

    if (!$post) {
        return redirect()->route('post.index');
    }

    return view('post.edit', ['post' => $post]);
}


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function update($id)
{
    $result = $this->postRepo->update($id, request()->only('cAccount','cName','cGender','cBirthday','cEmail','cExplain'));

    if (!$result) {
        return redirect()->route('post.index');
    }

    return redirect()->route('post.show', $id);
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    $result = $this->postRepo->delete($id);

    if ($result) {
        return redirect()->route('post.index');
    }

    return back();
}



}
