<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Profil</title>
</head>
<body>
    <h1>Selamat Datang Saudara : {{ $namaLengkap }} Dari Alamat : {{ $alamat }} </h1>

    <h1>Data user {{ $namaLengkap }} : </h1>
    <p>Host Name : {{ $namaHost }}</p>
    <p>Http Host : {{ $httpHost }}</p>
    <p>Skema Http : {{ $skemaHttpHost }}</p>
    <p>Ip Address : {{ $ipAddress }}</p>
    <p>Jenis Kelamin : 

        @if ($jenisKelamin == 1)
            Pria
        @else
            Wanita
        @endif

    </p>
</body>
</html>