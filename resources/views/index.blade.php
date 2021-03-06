<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo</title>



  <style>
    body {
      line-height: 1;
    }

    del {
      text-decoration: line-through;
    }

    table {
      border-collapse: collapse;
      border-spacing: 0;
    }

    .flex {
      display: flex;
    }

    .between {
      justify-content: space-between;
    }

    .mb-15 {
      margin-bottom: 15px;
    }

    .mb-30 {
      margin-bottom: 30px;
    }

    .box {
      background: #FFB6C1;
      height: 100vh;
      width: 100vw;
      position: relative;
    }

    .card {
      background-color: #FFFAFA;
      width: 50vw;
      padding: 30px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      border-radius: 10px;
    }

    .title {
      font-weight: bold;
      font-size: 24px;
    }

    .input-add {
      width: 80%;
      padding: 5px;
      border-radius: 5px;
      border: 1px solid #ccc;
      appearance: none;
      font-size: 14px;
      outline: none;
    }

    table {
      text-align: center;
      width: 100%
    }

    tr {
      height: 50px;
    }

    .input-update {
      width: 90%;
      padding: 5px;
      border-radius: 5px;
      border: 1px solid #ccc;
      appearance: none;
      font-size: 14px;
      outline: none;
    }

    .button-add {
      text-align: left;
      border: 2px solid #dc70fa;
      font-size: 12px;
      color: #dc70fa;
      background-color: #fff;
      font-weight: bold;
      padding: 8px 16px;
      border-radius: 5px;
      cursor: pointer;
      transition: 0.4s;
      outline: none;
    }

    .button-add:hover {
      background-color: #dc70fa;
      border-color: #dc70fa;
      color: #fff;
    }

    .button-update {
      text-align: left;
      border: 2px solid #fa9770;
      font-size: 12px;
      color: #fa9770;
      background-color: #fff;
      font-weight: bold;
      padding: 8px 16px;
      border-radius: 5px;
      cursor: pointer;
      transition: 0.4s;
      outline: none;
    }

    .button-update:hover {
      background-color: #fa9770;
      border-color: #fa9770;
      color: #fff;
    }

    .button-delete {
      text-align: left;
      border: 2px solid #71fadc;
      font-size: 12px;
      color: #71fadc;
      background-color: #fff;
      font-weight: bold;
      padding: 8px 16px;
      border-radius: 5px;
      cursor: pointer;
      transition: 0.4s;
      outline: none;
    }

    .button-delete:hover {
      background-color: #71fadc;
      border-color: #71fadc;
      color: #fff;
    }
  </style>


</head>

<body>
  <div class="box">

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



          <input class="button-add" type="submit" value="??????">
        </form>


        <table>

          <tbody>
            <tr>
              <th>?????????</th>
              <th>????????????</th>
              <th>??????</th>
              <th>??????</th>
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
                  <button class="button-update">??????</button>
                </td>
              </form>



              <td>
                <form action="/todo/delete" method="post">
                  @csrf

                  <input type="hidden" name="id" value="{{$todo->id}}">

                  <button class="button-delete">??????</button>
                </form>
              </td>
            </tr>
          </tbody>
          @endforeach
        </table>




      </div>
      <!-------end.todo--------->
    </div>
    <!--------end.card------->
  </div>
  <!-------end.box--------->
</body>

</html>