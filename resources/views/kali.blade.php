<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Form</title>
</head>

<body>
    <h3>Matematika Sederhana</h3>
    <p>Pilih menu aritmatika dibawah ini</p>
    <a href="aritmatika/tambah">Tambah</a>
    <a href="{{url('aritmatika/kurang')}}">Kurang</a>
    <a href="{{route('aritmatika.bagi')}}">Bagi</a>
    <a href="{{route('aritmatika.kali')}}">Kali</a>

    <form action="{{route('kali-action')}}" method="post">
        @csrf
        <label for="">Angka 1</label>
        <input type="text" placeholder="Masukkan angka" name="angka1" required>
        <br><br>
        <label for="">Angka 2</label>
        <input type="text" placeholder="Masukkan angka" name="angka2" required>
        <br><br>
        <button>Hitung</button>
    </form>

    <h2>Hasilnya adalah : {{$jumlah ?? 0}}</h2>
</body>

</html>