<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todolist</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">

  <style>
  </style>
</head>

<body>
  <div class="all">
    <div class="card">
      <h1 class="title">Todolist</h1>
      <form action="/create{task_name}" method="POST" class="flex">
        @csrf
        <input class="border" type="text" name="content">
        <input class="plus" type="button" name="task_name" value="追加">
      </form>
      <div class="itiram">
    <table>
      <tr>
        <th class="createday">作成日</th>
        <th class="task_date">タスク名</th>
        <th class="kousin">更新</th>
        <th class="sakujyo">削除</th>
      </tr>
    <div class="tble">
      <tr>
        @foreach($indexs as $index)
        <td class="day">{{$index->created_at}}</td>
        <td class="task">{{$index->task_name}}</td>
        @endforeach
        <td>
          <form action="/update{id,task_name}" method="POST">
            @csrf
          <input class="upd" type="submit" name="" value="更新">
        </form>
        </td>
        <td>
        <form action="/delete{id}" method="POST">
          @csrf
          <input class="del" type="button" name="" value="削除">
        </form>
        </td>
      </tr>
    </div>
    </table>
    </div>
    </div>
  </div>
</body>

</html>