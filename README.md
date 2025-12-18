# Lab12Web
## Nama : Sovy Aprianti
## NIM : 312410344
## Kelas : TI.24.A4
## Mata Kuliah : Pemrograman Web 1

# TUGAS PRAKTIKUM 12 – AUTENTIKASI & SESSION

## 1. Login dan Autentikasi
Mahasiswa membuat fitur login menggunakan PHP dan MySQL. Proses login dilakukan dengan mencocokkan username dan password yang tersimpan di database. Password disimpan dalam bentuk terenkripsi menggunakan fungsi `password_hash()` dan diverifikasi menggunakan `password_verify()`.

<img width="1920" height="1200" alt="Screenshot 2025-12-18 162647" src="https://github.com/user-attachments/assets/fd1ce51e-d1fb-45a5-94f1-b2336547bf1a" />

## 2. Session dan Proteksi Halaman
Setelah login berhasil, sistem menyimpan data pengguna ke dalam session. Halaman seperti **Home**, **Artikel**, dan **Profil** hanya dapat diakses jika session login aktif. Jika pengguna belum login, maka akan diarahkan kembali ke halaman login.

### <img width="1920" height="1200" alt="Screenshot 2025-12-18 162828" src="https://github.com/user-attachments/assets/5746c2a4-1a4c-4ce4-a2f9-e4a4e2b783ee" />

### <img width="1920" height="1200" alt="Screenshot 2025-12-18 162841" src="https://github.com/user-attachments/assets/15080da8-084e-4f02-b1eb-48aa0243b35b" />

### <img width="1920" height="1200" alt="Screenshot 2025-12-18 163117" src="https://github.com/user-attachments/assets/5974a468-e1c1-4729-8a53-f456cbcbe089" />

## 3. CRUD Artikel (Create, Read, Update, Delete)
Mahasiswa membuat fitur pengelolaan artikel yang terdiri dari:

### **Create**: Menambahkan artikel baru (judul dan isi)
<img width="1920" height="1200" alt="Screenshot 2025-12-18 163337" src="https://github.com/user-attachments/assets/2bcea31f-a2c7-4a7e-9ec2-17df9be1dc1d" />

### **Read**: Menampilkan daftar artikel
<img width="1920" height="1200" alt="Screenshot 2025-12-18 163446" src="https://github.com/user-attachments/assets/3d0abe26-17aa-4c7c-b814-5b5ec2052242" />

### **Update**: Mengedit artikel
<img width="1920" height="1200" alt="Screenshot 2025-12-18 163546" src="https://github.com/user-attachments/assets/2f19bf1f-dac8-4609-9a44-36a8b8326e6a" />

### **Delete**: Menghapus artikel
<img width="1920" height="1200" alt="Screenshot 2025-12-18 163707" src="https://github.com/user-attachments/assets/78d51080-6c88-4926-9bc1-68ed3e90c443" />

Fitur CRUD hanya dapat diakses oleh user yang sudah login.

## 4. Profil User dan Ubah Password
Mahasiswa membuat halaman profil user yang menampilkan nama dan username. Pada halaman ini juga disediakan fitur untuk mengubah password. Password baru akan disimpan kembali ke database dalam bentuk terenkripsi.

<img width="1920" height="1200" alt="Screenshot 2025-12-18 163812" src="https://github.com/user-attachments/assets/b7245242-58c4-43b0-b8f9-76b214e63616" />

## 5. Logout
Mahasiswa membuat fitur logout untuk menghapus session sehingga user keluar dari sistem dan diarahkan kembali ke halaman login.

## Kesimpulan
Dengan praktikum ini, mahasiswa memahami konsep autentikasi, session, proteksi halaman, serta penerapan CRUD menggunakan PHP dan MySQL dalam aplikasi web.



