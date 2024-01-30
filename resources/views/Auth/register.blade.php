<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Register</title>
</head>
<body>
    <h1><strong>Buat Account Baru</strong></h1>

    <h3><strong>Signup Form</strong></h3>

    <form action="/welcome" method="POST">
        @csrf
        <label>First Name :</label>
        <br>
        <input type="text" name="firstName">
        <br>
        <label>Last Name :</label>
        <br>
        <input type="text" name="lastName">
        <br>
        <label>Gender :</label>
        <br>
        <input type="radio" name="gender" value="1">Pria
        <br>
        <input type="radio" name="gender" value="2">Wanita
        <br>
        <label>Language Spoken :</label>
        <br>
        <input type="checkbox" name="lang" value="1">Bahasa Indonesia
        <br>
        <input type="checkbox" name="lang" value="2">English
        <br>
        <input type="checkbox" name="lang" value="3">Arabic
        <br>
        <label>Biodata :</label>
        <br>
        <textarea name="biodata" id="" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="Kirim">
    </form>
</body>
</html>