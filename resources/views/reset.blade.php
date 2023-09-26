<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Password Reset</title>
</head>

<body style="margin: 100px">
    <h1>You Have Request to Reset your Password</h1>
    <hr>
    <p>We can not simply send you your old password. A unique link to reset your password has been generated
        for you.To reset your password, click the following link and follow the instractions.
    </p>
    <h1><a href="http://127.0.0.1:8000/api/reset/{{ $token }}">Click Here to reset password</a></h1>
</body>

</html>
