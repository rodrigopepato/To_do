<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefa</title>
</head>
<body>
    <h1>{{ $task->title }}</h1>
    <p>{{ $task->description }}</p>
    <p>Status: {{ $task->completed ? 'Completa' : 'Incompleta' }}</p>
    <p>Criado em: {{ $task->created_at }}</p>
    <p>Atualizado em: {{ $task->updated_at }}</p>
</body>
</html>
