@extends('layouts.master')

@section('content')

    <div class="container mt-5 flex flex-col justify-center items-center">
        <a name="" id="" class="w-6/12 mb-4 btn btn-primary" href="{{ url('post/create') }}" role="button">New Post</a>

        @forelse ($posts as $post)
            <a href="/post/{{ $post->post_id }}/edit">

                <div class="card mb-3 col-md-12 w-6/12" style="background-color:#42C2FF;">
                    <div class="row g-0">
                        <div class="col-md-4" style="margin-left:20px;margin-top:10px;">
                            <span class="h2 text-dark pl-5">{{ $post->post_id }}-</span>
                            <span class="card-title h5" style="color:rgb(112, 51, 7);">{{ $post->title }}</span>
                        </div>

                        <div class="col-md-12">
                            <div class="card-body">
                                <span class="h3 col-md-8">Author: </span> <span
                                    class="h4 text-dark">{{ $post->user->name }}</span>
                            </div>
                            <div class="card-body">
                                <span class="card-title h4 text-secondary">
                                    Topic:
                                </span>
                                <h4 class="card-title text-dark">
                                    {{ $post->body }}
                                </h4>

                            </div>
            </a>
            <div class="flex justify-end mb-1 mr-2">
            <form action="/post/{{ $post->post_id }}" method="POST">
                @csrf
                @method('delete')
                <button class="bg-red-900 btn btn-danger col-md-12" type="submit">Delete &rarr;</button>
            </form>
            </div>
    </div>
    </div>
    </div>


@empty
    <div class="card mb-3 bg-warning" style="max-width: 540px">
        <div class="row g-0">
            <div class="col-md-8">
                <div class="card-body">
                    <h4 class="card-title text-primary">No Posts Found</h4>
                </div>
            </div>
        </div>
    </div>
    @endforelse
    </div>
@endsection
