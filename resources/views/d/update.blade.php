@extends('index')
@section('upde')
<form action="/update{id,task_name}" method="POST">
    @csrf
  <input class="upd" type="submit" name="" value="更新">
  </form>
@endsection