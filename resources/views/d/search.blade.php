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
          <form method="post" action="/logout">
            @csrf
            <p class="login"></p>
            <input class="btn_logout" type="submit" value="ログアウト">
          </form>
        </div>
        <form action="/find{task_name,tag_id}" method="post" class="flex">
        @csrf
        <input class="border" type="text" name="task_name">
        <input class="search" type="submit" value="検索">
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
          @foreach($searchs as $search)
        <td>{{$search->createdday}} </td>
        <td>{{$search->task_name}}></td>
        <td>{{$search->tag_id}}>
        <td>
           <button class="upd">更新</button>
        </td>
        <td>
            <button class="del">削除</button>
        </td>
       </tr>
        </tr>
        @endforeach
      </table>
      <a class="btn_back" href="/">戻る</a>
    </div>
  </div>
</body>
</html>

