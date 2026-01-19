# 🗄️ Cripto DB Backend

Backend **Cripto** berbasis **PHP & MySQL** yang digunakan sebagai REST API  
untuk kebutuhan **Login** dan **Register** pada aplikasi Flutter Cripto.

Backend ini **WAJIB dipasang dan dijalankan terlebih dahulu**  
sebelum menjalankan aplikasi Flutter.

🔗 Repository Flutter:
https://github.com/WicfuL-io/flutter_application_cripto

---

## 📌 Prasyarat Sistem

Pastikan environment kamu sudah memiliki:

- Sistem Operasi **Windows**
- **XAMPP** (disarankan versi terbaru)
- **Apache** & **MySQL** (XAMPP)
- **PHP** (bawaan XAMPP)
- **Git**
- Browser (Chrome / Firefox)

---

## 🗄️ Import Database MySQL ke (phpMyAdmin)
Database **TIDAK dibuat manual**.  
Gunakan file **`maysql.sql`** yang ada di repository ini.

## 📥 Instalasi dari Awal (Fresh Install)

### 1️⃣ Clone Repository Backend

⚠️ **WAJIB clone langsung ke folder `htdocs` XAMPP**  
Jika tidak di `htdocs`, backend **TIDAK akan bisa diakses via browser**.

Buka **Command Prompt / Git Bash**, lalu jalankan:

```bash
cd C:\xampp\htdocs
git clone https://github.com/WicfuL-io/cripto_db_backend.git
