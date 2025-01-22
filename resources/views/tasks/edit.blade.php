<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>memo edit</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <a href="{{ route('tasks.show', $task) }}">戻る</a>
    <h1>更新</h1>
    <!-- 更新先はmemosのidにしないと増える sail artisan rote:listで確認① -->
    <form action="{{ route('tasks.update', $task) }}" method="post">
        @csrf
        @method('PATCH')
        <p>
            <label for="title">タイトル</label><br>
            <input type="text" name="title" id="title" value="{{ $task->title }}">
        </p>
        <p>
            <label for="body">本文</label><br>
            <textarea name="body" class="body" id="body">{{ $task->body }}</textarea>
        </p>

        <input type="submit" value="更新">
    </form>
</body>
</html>
