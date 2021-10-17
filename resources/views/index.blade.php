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
  <div class="conateiner">

    <div class="card">
      <p class="title">Todo List</p>

      <div class="todo">
        <form action="/todo/create" method="POST" class="flex between mb-30">
          @csrf


          <input type="txet" class="input-add" name="content">



          <input class="button-add" type="submit" value="追加">
        </form>


        <table>

          <tbody>
            <tr>
              <th>作成日</th>
              <th>タスク名</th>
              <th>更新</th>
              <th>削除</th>
            </tr>
            @foreach($todos as $todo)

            <tr>
              <td>
                {{$todo->created_at}}
              </td>
              <form action="/todo/update" method="post">
                @csrf
              </form>
              <input type="hidden" name="" value="">

              <td>
                <input type="txt" class="input-update" value="{{$todo->content}}" name="content">
              </td>

              <td>
                <button class="button-update">更新</button>
              </td>




              <td>
                <form action="/todo/delete" method="POST">
                  @csrf
                  <input type="hidden" name="del" value="">
                  <button class="buton-delete">削除</button>
                  </from>


              </td>

            </tr>
          </tbody>
          @endforeach
        </table>




      </div>
    </div>
  </div>
</body>

</html>