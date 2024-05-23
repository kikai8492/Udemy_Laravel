@extends('layouts.default')
@section('title','画像アップロード')
@section('content')
  <form action="{{route('photos.store')}}" method="post" enctype="multipart/form-data">
    @if(session()->has('success'))
      <p>{{session()->get('success')}}</p>
    @endif
    <img src="{{asset('storage/photos/'. $fileName)}}" alt="">
  </form>
@endsection