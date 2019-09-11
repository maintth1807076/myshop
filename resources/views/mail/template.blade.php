<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@component('mail::message')
    Hello **{{$name}}**,  {{-- use double space for line break --}}
    Thank you for choosing Mailtrap!

    Click below to start working right now
    @component('mail::button', ['url' => $link])
        Go to your inbox
    @endcomponent
    Sincerely,
    Mailtrap team.
@endcomponent
</body>
</html>