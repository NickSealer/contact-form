<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>{{ $mail->email }}</title>
</head>
<body>
  <div class="container-fluid p-3">
    <p> {{ $mail->message }} </p>
    <p> From: {{ $mail->email }} </p>
    <p> Contact: {{ $mail->phone }} </p>
  </div>
</body>
</html>
