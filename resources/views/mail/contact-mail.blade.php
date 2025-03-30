<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Grazie per averci conattati</h1>
    <p>il nostro customer Care vi ricontatterà il prima possibile</p>
    <p>ecco il riepilogo dei tuoi dati:</p>
    <ul>
        <li>il tuo nome:{{$contact['userName']}}</li>
        <li>la tua mail:{{$contact['email']}}</li>
        <li>questo è il tuo messaggio:{{$contact['message']}}</li>
    </ul>
</body>
</html>