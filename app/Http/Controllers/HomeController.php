<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Task;
use App\Post;
use App\User;

class HomeController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    //$this->middleware('auth');
  }

  public function viewPost(Post $post)
  {
    return view('post-home', [
      'post' => $post,
    ]);
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Post $posts)
  {
    $posts = Post::orderBy('id', 'DESC')->simplepaginate(5);
    return view('home', [
      'posts' => $posts,
    ]);
  }

  public function admin(Task $tasks, User $usesr, Post $posts)
  {
    $tasks = Task::orderBy('id', 'DESC')->paginate(5);
    $users = User::orderBy('id', 'DESC')->paginate(5);
    $posts = Post::orderBy('id', 'DESC')->paginate(5);
    return view('admin.dashboard', [
      'tasks' => $tasks,
      'users' => $users,
      'posts' => $posts,
    ]);
  }
}
