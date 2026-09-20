# Website Desa Betteng

Prototype portal Desa Betteng, Kecamatan Pamboang, Kabupaten Majene.

## Status
- Frontend statis untuk preview di Vercel.
- Source tersimpan di GitHub.
- Struktur visual disiapkan agar mudah diadaptasi menjadi theme WordPress ketika hosting PHP/MySQL tersedia.

## Deploy ke Vercel
1. Login Vercel.
2. Add New > Project.
3. Import repository `wadaiiiii/desabetteng`.
4. Framework Preset: **Other**.
5. Root Directory: `./`.
6. Build Command: kosong.
7. Output Directory: kosong.
8. Deploy.

Setiap push ke branch `main` akan memicu deployment baru bila repository sudah terhubung ke Vercel.

## Tahap WordPress
Ketika cPanel tersedia, frontend ini akan dipecah menjadi theme WordPress:
- header.php
- footer.php
- front-page.php
- functions.php
- style.css
- template-parts/
- assets/

Berita, halaman, menu, dokumen, dan profil selanjutnya dikelola melalui Dashboard WordPress.

## Catatan Data
Beberapa informasi pada versi awal merupakan placeholder. Jangan isi nama kepala desa, nomor layanan, APBDes, perangkat desa, atau data resmi lainnya sebelum diverifikasi.
