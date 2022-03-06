<?php

namespace App\Http\Controllers\Posts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\User;

class postsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // row sql
        // $posts = DB::select('select * from posts');

        //queryBuilder
        // $posts =DB::table('posts')->get();
        // $posts =DB::table('posts')->where('post_id',5)->get();
        // $posts =DB::table('posts')->where('post_id','>',5)->get();
        // $posts =DB::table('posts')->select('body')->get();
        // $posts =DB::table('posts')->where('post_id',5)->orWhere('post_id',8)->get();
        // $posts =DB::table('posts')->whereBetween('post_id',[5,7])->get();
        // $posts =DB::table('posts')->whereNotNull('title')->get();
        // $posts =DB::table('posts')->select('title')->distinct()->get();
        // $posts =DB::table('posts')->orderBy('title','asc')->get();
        // $posts =DB::table('posts')->latest()->get();
        // $posts =DB::table('posts')->oldest()->get();
        // $posts =DB::table('posts')->inRandomOrder()->get();
        // $posts =DB::table('posts')->select('title)->first();
        // $posts =DB::table('posts')->find($id);
        // $posts =DB::table('posts')->count();
        // $posts =DB::table('posts')->min('post_id');
        // $posts =DB::table('posts')->max('post_id');
        // $posts =DB::table('posts')->sum('post_id');
        // $posts =DB::table('posts')->avg('post_id');
        // $posts =DB::table('posts')->insert(['title'=>'Dr','body'=>'Go Safe','id'=>33]);
        // $posts =DB::table('posts')->where('post_id',11)->update(['title'=>'Mr','body'=>'Luqman the terrible','userId'=>32]);
        // $posts =DB::table('posts')->where('post_id',11)->delete();

        //eloquent
        // $posts = Post::where('title','Dr.')->get();
        // $posts = Post::min('id');
        // $posts = Post::oldest()->get();
        // $posts = Post::all()->chunk(4);
        // dd($posts);

    $posts = Post::all();

    return view('posts.post')->with('posts', $posts);
    }
    // public function userPost(){
    // $users = User::all();

    // return view('posts.user_post')->with('posts', $users);
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
            $users = User::all();
        return view('posts.postCreate')->with('users', $users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // $post = new Post;
        // $post->title = $request->input('title');
        // $post->id = $request->input('userId');
        // $post->body = $request->input('body');
        // $post->save();

        //another way to do it **must all field declared as fillable in Model**

        $post = Post::create([
            'title' => $request->input('title'),
            'user_id' => $request->get('userId'),
            'body' => $request->input('body')
        ]);

        return redirect('/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = Post::where('post_id','=',$id)->get();

        return view('posts.post')->with('posts',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post = Post::where('post_id','=',$id)->first();
        return view('posts.postEdit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $post = Post::where('post_id','=',$id)->update([
            'user_id' => $request->input('userId'),
            'title' => $request->input('title'),
            'body' => $request->input('body')
        ]);
        $userPost = Post::where('post_id','=',$id)->get()->first();

        $user = User::where('id','=', $userPost->user_id)->update([
    'name'=> $request->input('user_name'),
]);
        return redirect('/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post = Post::where('post_id','=',$id)->first();
        $post->delete();
        return redirect('/post');
    }
}
