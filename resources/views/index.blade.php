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
  <h1>Todo List</h1>
  <form action="/add" method="post">
    @csrf
    <input type="text" name="content">
    <button type="button">追加</button>
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
      <td>
        <input type="text" name="content" value={{$todo->content}}>
      </td>
      <td>
        <button>更新</button>
      </td>
      <td>
        <button>削除</button>
      </td>
    </tr>
    @endforeach
  </table>
</body>
</html>