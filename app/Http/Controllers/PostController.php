<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\post_short_descs;
use App\Models\category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->paginate(20);
        return view('dashboard.post.all', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::latest()->get();
        return view('dashboard.post.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|unique:posts,title',
            'location'=>'required',
            'post_pic'=>'required',
            'body'=>'required',
            'short_desc'=>'required'
          ]);
    
            $input = $request->all();
            $input['user_id'] = Auth()->id();
            if ($file = $request->file('post_pic')) {
              $name = $input['title']. ' '. $file->getClientOriginalName();
              $file->move('storage/images/posts/', $name);
              $input['post_pic'] = $name;
            }
            Post::create(['title'=>$input['title'], 'post_pic'=>$input['post_pic'], 'category_id'=>$input['category_id'], 'user_id'=>$input['user_id'], 'body'=>$input['body'], 'location'=>$input['location'], 'status'=>$input['status']]);
            $retrive_post = Post::latest()->take(1)->get()->first();
            if ($file1 = $request->file('short_pic')) {
              $name1 = $input['title']. '-2 '. $file1->getClientOriginalName();
              $file1->move('storage/images/posts', $name1);
              $input['short_pic'] = $name1;
            }
            post_short_descs::create(['short_desc'=> $input['short_desc'], 'short_pic'=> $input['short_pic'], 'post_id'=> $retrive_post->id]);
            // toastr()->success('Your post created successfuly');
            return redirect('dashboard/all-posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id)->delete();
        // toastr()->warning('Your post was deleted successfuly');
        return back();
    }

    public function publish($id)
    {
      $post = Post::findOrFail($id)->update(['status'=> 1]);
    //   toastr()->info('Your post Has been published');
      return back();
    }


    public function draft($id)
    {
      $post = Post::findOrFail($id)->update(['status'=> 0]);
    //   toastr()->warning('Your post Has been added to Draft');
      return back();
    }
}
