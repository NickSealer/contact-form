<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>{{ $mail->email }}</title>
</head>
<body>
  <div class="container-fluid p-3">
    <p> {{ $mail->message }} </p>
    <p> From:
      {{ $mail->nombres }} {{ $mail->apellidos }}
      <br>
      {{ $mail->cc }}
      <br>
      {{ $mail->direccion }}
    </p>
    <p> Contact: {{ $mail->phone }}
      <br>
      {{ $mail->email }}
    </p>
  </div>
</body>
</html>
