<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tanaman Hias</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ccc; padding: 8px 12px; text-align: left; font-size: 14px; }
        th { background: #f0f0f0; }
        img { width: 60px; height: 60px; object-fit: cover; }
    </style>
</head>
<body>

<h2>Tanaman Hias</h2>
<a href="{{ route('tanaman_hias.create') }}">+ Tambah</a>

@if(session('success'))
    <p style="color:green;">{{ session('success') }}</p>
@endif

<br><br>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Ukuran</th>
            <th>Foto</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($data as $index => $d)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $d->nama_tanaman }}</td>
            <td>{{ $d->jenis_tanaman }}</td>
            <td>Rp {{ number_format($d->harga, 0, ',', '.') }}</td>
            <td>{{ $d->stok }}</td>
            <td>{{ $d->ukuran }}</td>
            <td>
                @if(!empty($d->foto))
                    <img src="{{ asset('storage/' . $d->foto) }}" alt="Foto {{ $d->nama_tanaman }}">
                @else
                    -
                @endif
            </td>
            <td>{{ $d->deskripsi ?? '-' }}</td>
            <td>
                <a href="{{ route('tanaman_hias.edit', $d->id_tanaman) }}">Edit</a> |
                <form action="{{ route('tanaman_hias.destroy', $d->id_tanaman) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin ingin menghapus?')"
                            style="background:none; border:none; cursor:pointer; color:red; padding:0;">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="9" style="text-align:center;">Belum ada data.</td>
        </tr>
        @endforelse
    </tbody>
</table>

</body>
</html>