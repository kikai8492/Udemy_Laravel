@extends('layouts.default')

@section('title', 'GETフォーム')
@section('content')
    <form ation= "/query-strings" method ="get">
      <label>キーワード:<input type="text" name="keyword"></label>
      <button type="submit">送信</button>
    </form>
@endsection