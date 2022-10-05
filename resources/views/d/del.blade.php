@extends('index')
@section('del')
<form action="/delete{id}" method="POST">
  @csrf
  <input class="del" type="button" name="" value="削除">
  </form>
@endsection