<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
    <h2>Hi, a new event has been created.</h2>
    <p>Name: {{ $event->name }}</p>
    <p>Slug: {{ $event->slug }}</p>
    <p> Click the below link to view your full details </p>
    <p><a href="{{ route('events.show', $event) }}"></a></p>
</body>
</html>
