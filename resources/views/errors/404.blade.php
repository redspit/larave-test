@extends('errors::minimal')


@section('image')
<img src="{{URL::to('/').'/asset/404-error.jpg'}}"  style="width: 600px;height:500px;" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center"/>
@endsection

{{-- @section('image')
<div style="background-image: url({{ URL('asset/404-error.jpg') }}); max-width: 100%;height:500px;" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center" ></div>
@endsection --}}

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found'))
