<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kurang-kurangan</title>
</head>

<body>
    <h3>Matematika Sederhana</h3>
    <p>Pilih menu aritmatika dibawah ini</p>
    <form action="{{route('kurang-action')}}" method="post">
        @csrf
        <label for="">Angka 1</label>
        <input type="text" placeholder="Masukkan angka" name="angka1" required>
        <br><br>
        <label for="">Angka 2</label>
        <input type="text" placeholder="Masukkan angka" name="angka2" required>
        <br><br>
        <button>Jumlahkan</button>
    </form>

    <h2>Jumlahnya adalah : {{$jumlah ?? 0}}</h2>
</body>

</html>