# PHP-OOP-MVC-Tugas2 Jawaban Latihan
1a. Tampilan menampilkan nilai properti nama dan nama yang di masukkan secara langsung dari luar kelas mobil.
1b. Tidak ada perubahan yang terjadi karena parameter $a tidak dipakai ke dalam method
1c. Kita dapat mengubah ubah property tanpa method dari luar kelas

2a. tampilan sebelum modifikasi (berjalan normal)
2b. tampilan setelah modifikasi (error)
2c. Kesimpulan :fungsi konstruktor yang berjalan tiap instansiasi objek dapat digunakan untuk mengisi nilai – nilai tiap properti setiap kita menginstansiasi objek di dalam class, dan  hanya boleh ada satu konstruktor di dalam satu kelas, lalu fungsi destruct memiliki fungki kebalikan dari konstruktor yaitu untuk meruntuhkan properti dalam kelas.

3a. Terjadi Error Karena property nama dari kelas Mahasiswa menggunakan Access Modifier Private, jadi property nama dan nim hanya bisa diakses di dalam kelas Mahasiswa saja. Jadi properti ini tidak bisa diakses dari luar kelas seperti yang dilakukan di latihan 4_3 ini.
3b1. Masih Terjadi error karena protected juga melindungi akses properti nama dan nim dari luar kelas. Protected Properti hanya bisa diakses oleh kelas yang bersangkutan beserta turunannya.
3b2. Berbeda dengan private dan protected , jika kita menggunakan public maka properti bisa diakses dari mana saja. Maka kali ini tidak terjadi error pada kode lat4.3
3c. Jika ingin mengakses properti private dari luar kelas, kita bisa menggunakan method setter dan getter yang sudah ada di dalam kelas Mahasiswa, selanjutnya mengganti pemanggilan properti dari luar kelas yang semula memanggil langsung properti, menjadi memanggil dengan menggunakan method setter dan getter seperti pada gambar sebelah kanan.
3d. Kesimpulan Lat4_3 : Dengan menggunakan Modifier protected dan private, kita bisa melindungi properti milik sebuah class dari akses dari luar kelas yang tidak diinginkan

4. Kelas Asisten mewarisi semua properti dan method dari kelas Mahasiswa. Jadi meski tidak mengisi properti nama dan method setter dan getter nama pada kelas Asisten, PHP dapat menjalankan perintah setter dan getter dari kelas Asisten dan tidak terjadi error.

5a. Tampilan Menampilkan Hasil dari instansiasi Kelas Sarjana dan Kelas Magister yang mewarisi kelas abstrak Mahasiswa beserta method abstrak getTugasAkhir milik kelas Mahasiswa yang wajib diimplementasikan pada kelas-kelas turunannya. Tidak ada error yang ditampilkan.
 5b. Apabila baris 29-32 yang berisi method abstrak getTugasAkhir() dihapus, maka akan tampil error karena di dalam kelas Magister wajib mengimplementasikan 1 method abstrak dari kelas abstrak Mahasiswa yaitu getTugasAkhir() yang dihapus kali ini.
5c. Kesimpulan Lat4_5 : Apabila kita menggunakan kelas abstrak, maka kita wajib memperhatikan satu method abstrak yang harus diimplementasikan pada kelas-kelas turunannya.
