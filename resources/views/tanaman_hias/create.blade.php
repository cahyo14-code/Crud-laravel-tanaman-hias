<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Tanaman</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        table { border-collapse: collapse; }
        td { padding: 6px 10px; vertical-align: top; font-size: 14px; }
        td:first-child { font-weight: bold; width: 100px; }
        input, select, textarea { border: 1px solid #ccc; padding: 5px; font-size: 14px; width: 250px; }
        textarea { height: 80px; resize: vertical; }
        button { margin-top: 10px; padding: 6px 16px; font-size: 14px; cursor: pointer; }
    </style>
</head>
<body>

<h2>Tambah Tanaman</h2>

<form action="{{ route('tanaman_hias.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama_tanaman"></td>
        </tr>
        <tr>
            <td>Jenis</td>
            <td><input type="text" name="jenis_tanaman"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="number" name="harga"></td>
        </tr>
        <tr>
            <td>Stok</td>
            <td><input type="number" name="stok"></td>
        </tr>
        <tr>
            <td>Ukuran</td>
            <td>
                <select name="ukuran">
                    <option value="kecil">Kecil</option>
                    <option value="sedang">Sedang</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Foto</td>
            <td><input type="file" name="foto"></td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td><textarea name="deskripsi"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button type="submit">Simpan</button>
                <a href="{{ route('tanaman_hias.index') }}" style="margin-left: 10px; font-size: 14px;">Batal</a>
            </td>
        </tr>
    </table>
</form>

</body>
</html>