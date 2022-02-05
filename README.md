<h1 align="center">
    <a href="http://sipax.co" title="SIPAX" target="_blank">
        <img src="https://github.com/AIMAGU/sipax/blob/master/sipax-git.png" alt="Sipax Logo"/>
    </a>
    <br>
    Sistem Pakar Diagnosis Penyakit Anthrax pada Hewan dengan Metode Certainty Factor
    <hr>
    <a href="https://paypal.me/aimagu"
       title="Donate via Paypal" target="_blank">
        <img src="http://kartik-v.github.io/bootstrap-fileinput-samples/samples/donate.png" alt="Donate"/>
    </a>
</h1>

Aplikasi berbasis website menggunakan PHP dengan framework Yii versi 2 menerapkan metode forward chaining dalam proses penentuan diagnosa dan pengolahan nilai kepastian menggunakan metode certainty factor.

> NOTE: Aplikasi ini dibangun pada 29 Juni 2019. Pastikan selalu memperbarui apabila terdapat pembaruan sistem.

## Paket Aplikasi

Pada aplikasi ini terdiri dari beberapa modul diantaranya:

- Modul Gejala 
- Modul Diagnosa
- Modul Pakar
- Modul Aturan / Basis Pengetahuan
- Modul User / Pengguna 
- Modul Konsultasi
- Menggunakan cara kerja Forward Chaining
- Menggunakan Metode Certainty Factor (Metode CF)

## Kebutuhan Sistem

Adapun kebutuhan sistem untuk menjalankan program ini diantaranya:
- Yii Framework versi 2 keatas
- Web server
- PostgreSQL / MySQL
- Bootstrap versi 4.0
- PHP versi 7 keatas

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/). Remember to refer to the [composer.json](https://github.com/kartik-v/yii2-widgets/blob/master/composer.json) for 
this extension's requirements and dependencies. 

### Install

Clone master

```
git clone https://github.com/AIMAGU/sipax.git
```

### Demo
You can see a [demonstration here](http://triwaluyo.16mb.com/web/) on usage of these widgets with documentation and examples.
<br>
```
[PETUGAS]
Username: userpetugas
Password: petugas

[PAKAR]
Username: userpakar
Password: pakar

[PENGGUNA]
Username: userkonsultasi
Password: konsultasi
```
<br>
Naskah dapat di download pada link berikut [demonstration here](http://triwaluyo.16mb.com/web/) [Download Naskah](http://eprints.akakom.ac.id/8430/)
<br>(Mohon gunakan aplikasi demo ini dengan bijak, kami hanya ingin berbagi)

## Pengaturan

### Database
```php
//Path config/db.php
return [
    'class' => 'yii\db\Connection',
	'dsn' => 'pgsql:host=localhost;port=5433;dbname=db_name', //PostgreSQL
	//'dsn' => 'mysql:host=localhost;dbname=db_name', //MySQL
	'username' => 'username',
	'password' => 'password',
	'charset' => 'utf8',
];
```

### Konfigurasi Pertanyaan
```php
//Path config/params.php
return [
    'adminEmail' => 'email@example.com',
    'senderEmail' => 'emailkirim@example.com',
    'senderName' => 'Nama Pengirim',
    'tanya_awal' => 'Apakah ', //Digunakan untuk mengatur pertanyaan tanya jawab saat konsultasi
    'tanya_akhir' => '?',
];
```
## Screenshot Aplikasi
### Tampilan Desktop
<img src="https://github.com/AIMAGU/sipax/blob/master/screenshot/1.jpg" alt="Screenshot"/>
<img src="https://github.com/AIMAGU/sipax/blob/master/screenshot/2.jpg" alt="Screenshot"/>
<img src="https://github.com/AIMAGU/sipax/blob/master/screenshot/3.jpg" alt="Screenshot"/>
<img src="https://github.com/AIMAGU/sipax/blob/master/screenshot/4.jpg" alt="Screenshot"/>
<img src="https://github.com/AIMAGU/sipax/blob/master/screenshot/5.jpg" alt="Screenshot"/>
<img src="https://github.com/AIMAGU/sipax/blob/master/screenshot/6.jpg" alt="Screenshot"/>
<img src="https://github.com/AIMAGU/sipax/blob/master/screenshot/7.jpg" alt="Screenshot"/>
<img src="https://github.com/AIMAGU/sipax/blob/master/screenshot/8.jpg" alt="Screenshot"/>
<img src="https://github.com/AIMAGU/sipax/blob/master/screenshot/9.jpg" alt="Screenshot"/>

### Tampilan Mobile
<img src="https://github.com/AIMAGU/sipax/blob/master/screenshot/mobile-1.jpeg" alt="Screenshot"/>
<img src="https://github.com/AIMAGU/sipax/blob/master/screenshot/mobile-2.jpeg" alt="Screenshot"/>
<img src="https://github.com/AIMAGU/sipax/blob/master/screenshot/mobile-3.jpeg" alt="Screenshot"/>

## Database Installation
```
yii migrate
```

## Kontak
Kontak via [Whatsapp](https://api.whatsapp.com/send?phone=6285742974933&text=Saya%20tertarik%20untuk%20membeli%20aplikasi%20SIPAX)

## License
**SIPAX** is released under the BSD-3-Clause License. See the bundled `LICENSE.md` for details.
