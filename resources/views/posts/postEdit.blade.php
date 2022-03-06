@extends('layouts.master')


@section('content')
    <div class="form-group h-screen bg-indigo-200 p-2 flex flex-col items-center justify-center">


        <form action="/post/{{ $post->post_id }}" method="POST">
            @csrf
            @method('PUT')

            <input type="text" class="form-control mt-1 w-full" name="postId" id="postId" aria-describedby="helpId"
                placeholder="Post ID" value="{{ $post->post_id }}" readonly>

            <input type="text" class="form-control mt-1 w-full hidden" name="userId" id="userId" aria-describedby="helpId"
                placeholder="User ID" value="{{ $post->user->id }}" readonly>

            <input type="text" class="form-control mt-1 w-full" name="user_name" id="user_name" aria-describedby="helpId"
                placeholder="User Name" value="{{ $post->user->name }}" >
            <input type="text" class="w-full form-control mt-1" name="title" id="title" aria-describedby="helpId"
                placeholder="enter the post title" value="{{ $post->title }}">

            <textarea type="text" class="w-full form-control mt-1" name="body" id="body" aria-describedby="helpId"
                placeholder="enter the post body" cols="40" rows="10">{{ $post->body }}</textarea>
            <div class="flex justify-content-end">
                <button type="submit" class="w-full bg-blue-500 btn btn-primary mt-2">Update</button>
            </div>
        </form>
    </div>
@endsection
@section('body')
@endsection
