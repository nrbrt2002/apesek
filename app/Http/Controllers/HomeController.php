<?php

namespace App\Http\Controllers;

use App\Models\event;
use App\Models\Post;
use App\Models\comment;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Mail;
use App\Mail\contactMail;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware(['auth','verified']);
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::latest()->get();
        $latest_post = Post::latest()->where('status', 1)->take(1)->get()->first();
        $events = event::orderBy('status', 'asc')->paginate(3);
        // return view('home', compact('categories', 'latest_post', 'events'));
        return view('welcome', compact('categories', 'latest_post','events'));
    }

    public function category($id){
        $category1 = Category::findOrFail($id);
        $categories = Category::latest()->get();
        return view('front.category', compact('category1', 'categories'));
      }

      public function single($id){
        $post = Post::findOrFail($id);
        $other_posts = Post::where('status', '=', 1)->orderBy('title')->paginate(6);
        // $comments = Comment::latest()->where('post_id', '=', $id)->get();
        $categories = category::latest()->get();
        $events = event::orderBy('status', 'asc')->paginate(3);
        return view('front.single', compact('post', 'categories', 'other_posts', 'events'));
      }

      public function contactUs(){
        $categories = Category::latest()->get();
        return view('front.contact', compact('categories'));
      }

      public function sendEmail(Request $request){
        $request->validate([
          'name' => 'required',
          'email' => 'required|email',
          'message' => 'required',
        ]);
        
        $details = [
          'name'=> $request->name,
          'email'=> $request->email,
          'message'=> $request->message,
        ];

        Mail::to('apesegi@yahoo.fr')->send(new contactMail($details));
        return back()->with('message_sent','message sent successfuly');
      }

      public function dashboard(){

        return view('dashboard.dashboard');
      }

      public function founder(){
        $categories = Category::latest()->get();
        return view('front.founder', compact('categories'));
      }
      
      public function mission(){
        $categories = Category::latest()->get();
        return view('front.mission', compact('categories'));
      }
      
      public function history(){
        $categories = Category::latest()->get();
        return view('front.history', compact('categories'));
      }
}