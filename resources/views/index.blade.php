<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo</title>
</head>

<body>
  <h1>Todo List</h1>
  <form action="todo/create" method="POST">
    @csrf
    <input type="text" name="content" >
    <input type="submit" value="追加">

    <table>
        <tr>
            <th>作成日</th>
            <th>タスク名</th>
            <th>更新</th>
            <th>削除</th>
        </tr>

        
        <th>作成日</th>
        <th>タスク名</th>
        <th>
                <form action="todo/update" method="POST">
    @csrf
                <input type="hidden" name="txt" value="">
        <input type="submit" value="更新">
            </th>

            <th>
                <form action="todo/delete" method="POST">
    @csrf
        <input type="hidden" name="del" value="">
        <input type="submit" value="削除">
            </th>
    </table>
  </form>
</body>

</html>