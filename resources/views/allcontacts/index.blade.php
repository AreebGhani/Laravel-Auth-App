<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=detail-width, initial-scale=1.0">
    <title>All Contact Details</title>
</head>

<body>
    <h3>All Information About Contact Details</h3>
    <ol>
        @foreach ($details as $detail)
        <li>{{$detail}}</li>
        @endforeach
    </ol>
    <br>
    <h3>Only Names</h3>
    <ol>
        @foreach ($details as $detail)
        <li>{{$detail->name}}</li>
        @endforeach
    </ol>
    <br>
    <h3>Only Numbers</h3>
    <ol>
        @foreach ($details as $detail)
        <li>{{$detail->number}}</li>
        @endforeach
    </ol>
    <br>
    <h3>Only Emails</h3>
    <ol>
        @foreach ($details as $detail)
        <li>{{$detail->email}}</li>
        @endforeach
    </ol>
    <br>
    <h3>Only Message</h3>
    <ol>
        @foreach ($details as $detail)
        <li>{{$detail->message}}</li>
        @endforeach
    </ol>
    <br>
</body>

</html>