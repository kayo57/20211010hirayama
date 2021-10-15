<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo</title>
</head>

<body>
  <style>
  </style>

  <h1>Todo List</h1>
  <form action="/todo/create" method="POST">@csrf <input type="text" name="content">
    <input type="submit" value="追加">


  </form>
  <div>
    <h3>作成日</h3>
    <p>作成び </p>
  </div>


  <div>
    <h3>タスク名</h3>
    <input type="text" name="content">
    </form>
  </div>


  <div>
    <h3>更新</h3>
    <form action="/todo/update" method="POST">
      @csrf
      <input type="hidden" name="txt" value="">
      <input type="submit" value="更新">
    </form>
  </div>


  <div>
    <h3>削除</h3>
    <form action="/todo/delete" method="POST">
      @csrf
      <input type="hidden" name="del" value="">
      <input type="submit" value="削除"></from>
  </div>


</body>

</html>