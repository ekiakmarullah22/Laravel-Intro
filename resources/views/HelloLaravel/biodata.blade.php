<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Biodata</title>
</head>
<body>
    <h1>Halaman Biodata</h1>

    <form action="/kirim" method="POST">
        @csrf
        <label>Nama Lengkap :</label>
        <input type="text" name="name"><br/>
        <label>Alamat :</label>
        <textarea name="address" id="" cols="30" rows="10"></textarea><br/>
        <label>Jenis Kelamin</label>
        <input type="radio" name="gender" value="1">Pria
        <input type="radio" name="gender" value="2">wanita
        <br/>
        <input type="submit" value="Kirim">
    </form>
</body>
</html>