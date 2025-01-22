<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>タスク一覧表示</title>
</head>
<body>
    <h1>タスク一覧</h1>
    <ul>
        @foreach ($tasks as $task)
            <!-- // リンク先をidで取得し名前で出力 -->
            <li><a href="{{ route('tasks.show', $task) }}">{{ $task->title }}</a></li>
        @endforeach
    </ul>

    <!-- 新規登録画面へジャンプする -->
    <button onclick='location.href="{{ route("tasks.create") }}"'>登録する</button>
</body>
</html>
