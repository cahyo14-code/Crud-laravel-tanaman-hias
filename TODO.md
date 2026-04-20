# TODO: Perbaiki Upload Foto Tidak Tampil - SELESAI

- [x] Step 1: Jalankan `php artisan storage:link` untuk symlink (sudah ada sebelumnya)
- [x] Step 2: Edit TanamanHiasController.php (fix path upload di store/update(): sekarang gunakan `$file->storeAs('foto_tanaman', $namaFile)` relatif ke storage/app/public)
- [x] Step 3: Edit resources/views/tanaman_hias/edit.blade.php (fix form action route jadi `route('tanaman_hias.update', $data->id_tanaman)`, tambah method dan enctype lengkap, hilangkan teks route yang tertinggal)
- [x] Step 4: Test - Sekarang coba akses http://localhost/tanaman_hias/, upload foto baru via create, lalu cek di index. Clear cache browser (Ctrl+F5). Foto seharusnya tampil di /storage/foto_tanaman/namafile.png
- [x] Step 5: Complete

**Penyebab foto tidak tampil sebelumnya**: Path storeAs salah ('storage/app/public/foto_tanaman' absolut bisa bikin duplikat path), sekarang relatif 'foto_tanaman' simpan langsung ke storage/app/public/foto_tanaman dan accessible via asset('storage/foto_tanaman/...') berkat symlink.
