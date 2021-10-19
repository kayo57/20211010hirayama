<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo</title>



  <style>
  .conateiner {
    backgroud-color: #2d197c;
  }
  </style>

</head>

<body>
  <div class="conateiner">

    <div class="card">
      <p class="title">Todo List</p>

      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>

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

                <input type="hidden" name="id" value="{{$todo->id}}">

                <td>
                  <input type="txt" class="input-update" value="{{$todo->content}}" name="content">
                </td>

                <td>
                  <button class="button-update">更新</button>
                </td>
              </form>



              <td>
                <form action="/todo/delete" method="post">
                  @csrf

                  <input type="hidden" name="id" value="{{$todo->id}}">

                  <button class="buton-delete">削除</button>
                </form>
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