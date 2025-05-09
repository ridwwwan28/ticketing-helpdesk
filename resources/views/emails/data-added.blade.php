<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>{{ $data['title'] }}</h2>
    <p>{{ $data['body'] }}
        {{-- dengan nomor : <strong>{{ $ticket->no_tiket }}</strong>, yang dibuat oleh
        <strong>{{ $ticket->username }}</strong>, Harap segera di respon --}}
    </p>
</body>

</html>
