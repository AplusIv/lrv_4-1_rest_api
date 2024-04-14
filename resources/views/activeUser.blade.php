<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Информация об авторизованном пользователе</h1>
  <p>
    <span>Имя пользователя: {{ $user->name }}</span>
    <br>
    <span>id: {{ $user->id }}</span>
    <br>
    <span>email: {{ $user->email }}</span>
  </p>
  <a href="{{route('home')}}">Перейти на страницу пользователя</a>
</body>
</html>