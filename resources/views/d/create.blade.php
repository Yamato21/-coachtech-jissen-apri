@extends('index')
@section('add')
   <form action="/create{task_name}" method="POST" class="flex">
    @csrf
    <input class="border" type="text" name="content">
    <input class="plus" type="button" name="task_name" value="追加">
    </form>
@endsection