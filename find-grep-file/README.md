# Find, Grep and PHP
Script ini dibuat untuk alternatif pencarian file lebih cepat dari pada harus nyari file ke seluruh system yang memakan waktu... 
# Bagaimana Cara Kerjanya 
1. Buat folder <b>test</b> di `Document root` dan copy semua file ke folder tersebut, contoh kalau di linux setelah dibuat hasilnya : /var/www/html/test
2. Setelah itu jalankan script `buat-list-all-file.sh` terlebih dahulu, script ini berfungsi untuk menkoleksi semua file yang terdapat dalam system linux anda bergantung pada folder yang akan di koleksi, anda dapat menambahkan sendiri atau mengurangi sesuai dengan kebutuhan.
3. Buat link untuk mengakses atau langsung ke browser dan tulis alamat url : `localhost/test/listallfile.php`
4. Daftar file dan keterangan : 
	 - `buat-list-all-file.sh`	: File ini adalah bash script untuk malakukan koleksi nama-nama file dan dijadikan `filelist.all`
	 - `cari.sh`	: Script bash ini berfungsi untuk melakukan pencarian dengan filter `grep`,`sed`, dan `awk` tool.
	 - `hcari.sh`	: File ini merupakan script bash untuk menghitung jumlah data/baris yang ditemukan oleh file `cari.sh`
	 - `listallfile.php`	: Ini file utamanya dalam bentuk script php, anda bisa merubah namanya menjadi `index.php` atau biarkan saja.
	 - `filelist.all`	: File ini merupakan hasil dari perintah pada file `buat-list-all-file.sh`, isinya adalah data nama-nama file yang berhasil di koleksi.
	 - `README.md`	: Isinya keterangan yang anda baca ini 

- Next : pagination

