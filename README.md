<h3>#Penjelasan Project</h3>
Project ini adalah Project digunakan sebagai challenge untuk mendaftar di program magang yang diadakan oleh DOT. Project ini berisi barisan code menggunakan bahasa pemograman PHP dnegan framework Laravel 8. Project ini menghasilkan API yang dimana responnya berbentuk JSON, dengan fungsi Read all list data, Read detail data, Searc data by name, Create, Update, dan Delete data. Project ini juga menghasilkan web yang memiliki fungsi Create, Read, Upload, dan Delete 2 tabel yaitu tabel Karyawan dan tabel Perusahaan.

<h3>#Desain Database</h3>
Tabel Karyawan dan Perusahaan merupakan 2 relasi tabel yang memiliki relasi one to many, dimana seorang karyawan hanya bisa bekerja di satu perusahaan dan satu perusahaan dapat memiliki banyak karyawan. Rancangan database ini sangat sederhana, dimana tabel karyawan hanya memiliki 6 kolom yaitu, id, nama, umur, perusahaan_id, created_at, dan deleted_at. Sama dengan tabel karyawan, tabel Perusahaan juga memiliki 6 kolom yaitu, id, nama, alamat, status, created_at, dan deleted_at.

<h3>#Screenshot Aplikasi</h3>
![Screenshot (900)](https://user-images.githubusercontent.com/64339909/177305835-ed9a2314-aa7d-4030-ab20-a6b79b8128b8.png)



<h3>#Dependency</h3>
<ul>
        <li>Folder vendor</li>
        <li>File .env</li>
</ul>

<h3>#Informasi Lain</h3>
jika ingin melanjutkan project ini, masih sangat banyak kekurangan aplikasi ini, contohnya terdapat pada keamanan aplikasi. Namun untuk melihat bagaimanan aplikasi bekerja, silahkan kunjungi link berikut http://kevin.trpl19.com/
