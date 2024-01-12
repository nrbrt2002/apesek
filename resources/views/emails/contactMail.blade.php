<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact mail</title>
</head>
<body>
    <h1>Contact Message</h1>
    <p>Name: {{$details->name}} has contacted Apesek from the contact page one our website</p>
    <p>Email {{ $details->email }}</p>
    <p>Message: {{$details->message}}</p>
</body>
</html>