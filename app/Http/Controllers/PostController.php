<?php

namespace App\Http\Controllers;

use App\Post;
use Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function adminIndex(Post $posts)
  {
    $posts = Post::orderBy('id', 'DESC')->get();
    return view('admin.posts.index', [
      'posts' => $posts,
    ]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    return view('admin.posts.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store()
  {
    $inputs = request()->validate([
      'title' => ['required', 'max:255'],
      'post_image' => ['image:jpeg,jpg,png,webp,jfif'],
      'body' => ['required'],
      'category' => ['required'],
    ]);

    if (request('post_image')) {
      $inputs['post_image'] = request('post_image')->store('images');
    }

    auth()
      ->user()
      ->posts()
      ->create($inputs);

    return redirect()
      ->route('admin-post-index')
      ->with('success', 'Post został zapisany.');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Post  $post
   * @return \Illuminate\Http\Response
   */
  public function show(Post $post)
  {
    return view('admin.posts.detail', [
      'post' => $post,
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Post  $post
   * @return \Illuminate\Http\Response
   */
  public function edit(Post $post)
  {
    if ($post->user->id == Auth::user()->id) {
      return view('admin.posts.edit', [
        'post' => $post,
      ]);
    } else {
      return redirect()
        ->route('admin-post-index')
        ->with('warning', 'Nie możesz tego zrobić');
    }
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Post  $post
   * @return \Illuminate\Http\Response
   */
  public function update(Post $post)
  {
    $inputs = request()->validate([
      'title' => ['required', 'max:255'],
      'post_image' => ['image:jpeg,jpg,png,webp,jfif'],
      'body' => ['required'],
    ]);

    if (request('post_image')) {
      $inputs['post_image'] = request('post_image')->store('images');
      $post->post_image = $inputs['post_image'];
    }

    $post->title = $inputs['title'];
    $post->body = $inputs['body'];

    auth()
      ->user()
      ->posts()
      ->save($post);

    return redirect()
      ->route('admin-post-index')
      ->with('success', 'Zmiany zostały zapisane.');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Post  $post
   * @return \Illuminate\Http\Response
   */
  public function destroy(Post $post)
  {
    if ($post->user->id == Auth::user()->id) {
      $post->delete();
      return redirect()
        ->route('admin-post-index')
        ->with('danger', 'Usunięto ogłoszenie.');
    }
  }
}
