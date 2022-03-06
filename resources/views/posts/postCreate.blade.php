@extends('layouts.master')


@section('content')
    <div class="form-group h-screen bg-indigo-200 p-2 flex flex-col items-center justify-center">
        <form action="/post" method="POST">
            @csrf
            <select class="form-control" name="userId" id="userId">
                @forelse ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @empty
                    <option>No Users Found</option>
                @endforelse

            </select>

            <input type="text" class="form-control mt-1 w-full" name="title" id="title" aria-describedby="helpId"
                placeholder="enter the post title">
            <textarea type="text" class="form-control mt-1 w-full" name="body" id="body" aria-describedby="helpId"
                placeholder="enter the post body" cols="40" rows="5"></textarea>
            <div class="flex justify-content-end">
                <button type="submit" class="w-full btn btn-success bg-green-500 mt-2">Post</button>
            </div>
        </form>
    </div>
@endsection
@section('body')
@endsection
