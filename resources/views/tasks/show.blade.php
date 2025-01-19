<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>task show</title>
</head>
<body>
    <h1>{{ $task->title }}</h1>
    <p>{!! nl2br(e($task->body)) !!}</p>
    <a href="{{ route('tasks.index') }}">一覧へ戻る</a>
</body>
</html>
