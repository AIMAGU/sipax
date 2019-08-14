<h1 align="center">
    <a href="http://demos.krajee.com" title="Krajee Demos" target="_blank">
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

Aplikasi berbasis website menggunakan PHP dengan framework Yii versi 2 menerapkan metode forward chaining dalam proses penentuan gejala dan pengolahan nilai kepastian menggunakan metode certainty factor.

> NOTE: Aplikasi ini dibangun pada 29 Juni 2019. Pastikan selalu memperbarui apabila terdapat pembaruan sistem.

## Paket Aplikasi

Pada aplikasi ini terdiri dari beberapa modul diantaranya:

- Modul Gejala 
- Modul Diagnosa
- Modul Pakar
- Modul Aturan / Basis Pengetahuan
- Modul User / Pengguna 
- Modul Konsultasi

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


### Pre-requisites

> Note: Check the [composer.json](https://github.com/kartik-v/yii2-widgets/blob/master/composer.json) for this extension's requirements and dependencies. 
Read this [web tip /wiki](http://webtips.krajee.com/setting-composer-minimum-stability-application/) on setting the `minimum-stability` settings for your application's composer.json.

### Install

Clone master ini

```
git clone https://github.com/AIMAGU/sipax.git
```

## Release Updates

> Refer the [CHANGE LOG](https://github.com/kartik-v/yii2-widgets/blob/master/CHANGE.md) for details on changes to various releases.

The widgets currently available in **yii2-widgets** are grouped by the type of usage.

### Demo
You can see a [demonstration here](http://sipax.co) on usage of these widgets with documentation and examples.

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

## Kontak
Aplikasi full bisa anda dapatkan dengan melakukan kontak via [Whatsapp](https://api.whatsapp.com/send?phone=6285742974933&text=Saya%20tertarik%20untuk%20membeli%20aplikasi%20SIPAX)

## License
**SIPAX** is released under the BSD-3-Clause License. See the bundled `LICENSE.md` for details.
