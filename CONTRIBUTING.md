# Contributing Guide

Terima kasih telah bergabung sebagai kolaborator dalam proyek ini! Untuk memastikan kolaborasi berjalan dengan baik, ikuti panduan berikut.

---

## 📌 1. Fork dan Clone Repository
1. **Fork** repository utama ke akun GitHub Anda.
2. Clone repository ke lokal Anda:
   ```sh
   git clone https://github.com/USERNAME/REPO_NAME.git
   ```
3. Pindah ke direktori proyek:
   ```sh
   cd REPO_NAME
   ```
4. Tambahkan remote upstream (repository utama):
   ```sh
   git remote add upstream https://github.com/ORIGINAL_OWNER/REPO_NAME.git
   ```
5. Pastikan konfigurasi remote:
   ```sh
   git remote -v
   ```

---

## 🔀 2. Membuat Branch Baru
Sebelum memulai perubahan, buat branch baru dari `main`:
```sh
# Pastikan berada di main
git checkout main

git pull upstream main  # Sinkronisasi dengan repository utama

git checkout -b nama-feature-anda
```
**Contoh:**
```sh
git checkout -b feature-authentication
```

---

## ✍️ 3. Lakukan Perubahan dan Commit
1. Lakukan perubahan pada kode sesuai dengan tugas Anda.
2. Setelah selesai, cek status perubahan:
   ```sh
   git status
   ```
3. Tambahkan perubahan ke staging area:
   ```sh
   git add .
   ```
4. Commit perubahan dengan pesan yang jelas:
   ```sh
   git commit -m "Menambahkan fitur autentikasi pengguna"
   ```

---

## 📤 4. Push ke Remote Repository
Kirim perubahan ke repository fork Anda:
```sh
git push origin nama-feature-anda
```

Jika branch pertama kali dibuat, gunakan:
```sh
git push --set-upstream origin nama-feature-anda
```

---

## 🔄 5. Buat Pull Request (PR)
1. Buka repository di GitHub.
2. Pilih branch Anda dan klik **Compare & Pull Request**.
3. Isi deskripsi PR dengan jelas:
   - Apa yang ditambahkan atau diperbaiki.
   - Apakah ada perubahan besar yang perlu diperhatikan.
4. Klik **Create Pull Request**.

---

## 🔄 6. Sinkronisasi dengan Repository Utama
Sebelum melanjutkan pekerjaan baru, selalu sinkronkan dengan repository utama:
```sh
git checkout main

git pull upstream main

git push origin main
```
Jika branch Anda perlu diperbarui dengan perubahan terbaru di `main`:
```sh
git checkout nama-feature-anda

git rebase main
```
Jika terjadi konflik, selesaikan, lalu lanjutkan rebase:
```sh
git add .
git rebase --continue
```

---

## ❌ 7. Menghapus Branch Setelah Merge
Setelah PR berhasil diterima, hapus branch lokal yang tidak digunakan lagi:
```sh
git branch -d nama-feature-anda
```
Jika perlu menghapus branch di remote:
```sh
git push origin --delete nama-feature-anda
```

---

## 🎯 Best Practices
✅ Gunakan nama branch yang deskriptif (misalnya, `fix-bug-123` atau `feature-login-page`).  
✅ Gunakan pesan commit yang jelas dan ringkas.  
✅ Selalu lakukan **pull dari upstream main** sebelum memulai perubahan baru.  
✅ Pastikan kode Anda sudah diuji sebelum melakukan push.  
✅ Selalu sinkronkan branch Anda sebelum membuat PR.  

Jika ada pertanyaan, silakan diskusikan di issue atau hubungi maintainer. Happy coding! 🚀

