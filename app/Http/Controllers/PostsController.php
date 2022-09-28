<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PostsController extends Controller
{



public function __construct()

{

$this->middleware('auth');

}
public function index()

{



$list = DB::table('posts')->get();

return view('posts.index',['list'=>$list]);

}

public function createForm()
{
return view('posts.createForm');
}


public function search(Request $request){


$post = $request->input('search');
$list = DB::table('posts')->where('post', 'like', '%'.$post.'%')->get();
return view('posts.index',['list'=>$list]);


}


public function create(Request $request)

{
$request->validate([
  'newPost' => 'max:100'
],

['newPost.max' => '投稿内容は100文字以内で入力してください。'

]);
$post = $request->input('newPost');

DB::table('posts')->insert([

'post' => $post

]);

return redirect('/');

}
public function updateForm($id)

{

$post = DB::table('posts')

->where('id', $id)

->first();

return view('posts.updateForm', ['post'=>$post]);

}

public function update(Request $request)

{$request->validate([
  'upPost' => 'max:100'
],

['upPost.max' => '投稿内容は100文字以内で入力してください。'

]);

$id = $request->input('id');

$up_post = $request->input('upPost');

DB::table('posts')

->where('id', $id)

->update(

['post' => $up_post]

);

return redirect('/');

}
public function delete($id)

{

DB::table('posts')

->where('id', $id)

->delete();



return redirect('/');

}
}
