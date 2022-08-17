{{-- @component('mail::message')
Hello Medical Trading General Trading Admin,

{{ $mailData['body'] }}


Thanks,<br>
<br>
From

@endcomponent --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enquires Mail</title>
</head>

<body>
    <h1>{{ $mailData['title'] }}</h1>
    <br>
    <br>
    <p>Hello Medical Trading General Trading,</p>
    <p>{{ $mailData['body'] }}</p>
    <br>
    <br>
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <p>Thank You</p>
            <p>{{ $mailData['name'] }}</p>
            <p>{{ $mailData['email'] }}</p>
        </div>
    </div>

</body>

</html>
