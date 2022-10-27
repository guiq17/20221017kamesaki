<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">
    <div class="card">
      <p class="title mb-15">Todo List</p>
      <div class="todo">
        @if($errors->any())
        <ul>
          @foreach($errors->all() as $error)
          <li>{{$error}}</li>
          @endforeach
        </ul>
        @endif
        <form action="/add" class="flex between mb-30" method="post">
          @csrf
          <input type="text" class="input-add" name="content">
          <input type="submit" class="button-add" value="追加">
        </form>
        <table>
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
            <form action="/edit" method="post">
              @csrf
              <td>
                <input type="hidden" name="id" value={{$todo->id}}>
                <input type="text" class="input-update" name="content" value={{$todo->content}}>
              </td>
              <td>
                <input type="submit" class="button-update" value="更新">
              </td>
            </form>
            <form action="/delete" method="post">
              @csrf
              <td>
                <input type="hidden" name="id" value={{$todo->id}}>
                <input type="submit" class="button-delete" value="削除">
              </td>
            </form>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
</body>
</html>