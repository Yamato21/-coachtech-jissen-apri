<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todolist</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/reset.css">
  <style>
  </style>
</head>
<body>
  <div class="all">
    <div class="card">
      <div class="top">
        <div class="header">
          <h1 class="title">Todo list</h1>
          @if (Auth::check())
          <p>「{{$user->name}}」でログイン中</p>
        @else
        <a href="/login">ログイン</a>
  　　　 <a href="/register">登録</a>
        @endif
          <form method="post" action="/logout">
            @csrf
            <p class="login"></p>
            <input class="btn_logout" type="submit" value="ログアウト">
          </form>
        </div>
        <a class="btn_search" href="/find">タスク検索</a>
        <form action="/create{task_name,tag_id,user_id}" method="post" class="flex">
        @csrf
        <input class="border" type="text" name="task_name">
        <select name="tag_id" class="select-tag">
          <option value="1">家事</option>
          <option value="2">勉強</option>
          <option value="3">運動</option>
          <option value="4">食事</option>
          <option value="5">移動</option>
        </select>
        <input class="plus" type="submit" name="buttton_task" value="追加">
        @error('task_name')
        <p>{{$message}}</p>
        @enderror
      </form>
       </div>
       <table class="List">
        <tr class="tble">
          <th class="createday">作成日</th>
          <th class="task_date">タスク名</th>
          <th class="tag_tag">タグ</th>
          <th class="kousin">更新</th>
          <th class="sakujyo">削除</th>
        </tr>
        <tr>
        @if ($indexs->isNotEmpty())
        @foreach($indexs as $index)
          <td>{{$index->created_at}}</td>
          <td>
          <form action="/update{{$index->id}}" method="post" class="Upd_form">
            @csrf
            <input class="task" type="text" name="task_name" size="50" value={{$index->task_name}}>
          </td>
          <td>
            <select name="tag_id" class="select-tag">
              <option value="1">家事</option>
              <option value="2">勉強</option>
              <option value="3">運動</option>
              <option value="4">食事</option>
              <option value="5">移動</option>
            </select>
          <td>
            <button class="upd">更新</button>
          </td>
          </form>
          <td>
            <form action="/delete{{$index->id}}" method="post" >
             @csrf
              <button class="del">削除</button>
            </form>
          </td>
          </tr>
         @endforeach
        @endif
      </table>
      <a class="btn_back" href="/">戻る</a>
    </div>
  </div>
</body>
</html>