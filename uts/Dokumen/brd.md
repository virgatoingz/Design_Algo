# **Business Requirements Document (BRD)**  
**Sistem Manajemen Data Pasien Rumah Sakit**

---

## **1. Introduction**

### 1.1 Purpose of Document
Dokumen ini merupakan *Business Requirement Document* (BRD) yang bertujuan untuk menjelaskan kebutuhan dan alur kerja pada proyek pengembangan Sistem Manajemen Data Pasien Rumah Sakit. Sistem ini dirancang untuk mendukung proses registrasi pasien, pengelolaan data medis, pengecekan ketersediaan layanan, dan manajemen riwayat medis pasien.

### 1.2 Project Scope
Sistem ini akan mencakup modul-modul berikut:
- **Registrasi Pasien**: Mengelola registrasi pasien baru, termasuk proses penerimaan dan penolakan dengan notifikasi.
- **Manajemen Data Medis**: Melakukan pembaruan, penambahan, dan penghapusan data medis pasien.
- **Pengecekan Ketersediaan Layanan**: Memastikan ketersediaan dokter sebelum layanan diberikan.
- **Riwayat Medis**: Menyimpan dan menampilkan riwayat medis pasien untuk akses oleh dokter atau perawat.

---

## **2. System Requirement**

### 2.1 Business Flow

1. **Registrasi Pasien**:
   - Pasien melakukan registrasi.
   - Admin menerima notifikasi registrasi.
   - Data pasien diupdate oleh admin.
   - Jika registrasi diterima, pasien menerima notifikasi dan dapat melanjutkan proses layanan medis. Jika ditolak, pasien menerima notifikasi penolakan.

2. **Pengecekan Ketersediaan Layanan**:
   - Pasien mengajukan layanan pemeriksaan.
   - Dokter memeriksa ketersediaan jadwal.
   - Jika tersedia, pasien diberikan jadwal pemeriksaan. Jika tidak tersedia, layanan dihentikan dengan pemberitahuan kepada pasien.

3. **Manajemen Data Medis**:
   - Dokter atau admin dapat memperbarui data medis pasien, menambah, atau menghapus data sesuai kebutuhan.

---

## **3. Business Requirement**

### 3.1 Fungsional Requirement

| No | Kebutuhan Modul/Doctype                         | Status             |
|----|-------------------------------------------------|--------------------|
| 1  | **Registrasi Pasien**<br>- Insert<br>- View<br>- Update<br>- Delete | Modul/doctype baru |
| 2  | **Penerimaan/Notifikasi Status Registrasi**<br>- Ditolak<br>- Diterima | Modul/doctype baru |
| 3  | **Manajemen Data Medis**<br>- Menambah Data<br>- Menghapus Data<br>- Update Data | Modul/doctype baru |
| 4  | **Pengecekan Ketersediaan Layanan**<br>- Tersedia<br>- Tidak Tersedia | Modul/doctype baru |
| 5  | **Riwayat Medis Pasien**<br>- Menyimpan Riwayat<br>- Menampilkan Data | Modul/doctype baru |

---

## **4. Approval**

| No. | Modul/Doctype             | Tingkat Approval                                               |
|-----|----------------------------|----------------------------------------------------------------|
| 1   | **Registrasi Pasien**      | Admin melakukan verifikasi data pasien baru dan menentukan status diterima atau ditolak. |
| 2   | **Pengecekan Ketersediaan**| Dokter memverifikasi jadwal ketersediaan dan menyetujui layanan jika tersedia. |
| 3   | **Manajemen Data Medis**   | Dokter atau admin memperbarui, menambah, atau menghapus data medis pasien. |

---

Dokumen ini dapat digunakan sebagai panduan untuk pengembangan sistem manajemen data pasien rumah sakit.
