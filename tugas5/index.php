<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="form pendaftaran"></meta>
    <meta name="keywords" content="HTML,CSS,Website"></meta>
    <meta name="author" content="Muhammad Rizky Maulana Darmawan"></meta>
    <title>FORM</title>

<style>

body {
    background:#f0e8db;
}

    h1{
        color:#21252B;
        font-family:helvetica;
        font-size:50px;
        font-variant-caps: small-caps;
        font-style:oblique;
    }

    .satumini{
        color:#21252B;
        font-family:helvetica;
        font-size:40px;
        font-variant-caps: small-caps;
        font-style:oblique;
    }

    h2{
        color:#21252B;
        font-family: helvetica;
        font-style:oblique;
        font-variant-caps: small-caps;
        font-size: 40px;
    }

    .duamini{
        color:#21252B;
        font-family:helvetica;
        font-size:20px;
        font-variant-caps: small-caps;
        font-style:oblique;
    }

    p{
        color:#21252B;
        font-family:helvetica;
    }

    .paragraf{
        color: #21252B;
        font-family: helvetica;
        font-size: 20px;
    }

    label{
        font-family:arial;
        color:red;
    }

    input[type=text]{
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
    }

    textarea {
        width: 100%;
        height: 150px;
        padding: 12px 20px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
        resize: none;
    }

    input[type=button], input[type=submit], input[type=reset] {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 16px 32px;
        text-decoration: none;
        margin: 8px 4px;
        cursor: pointer;
        width: 200px;
    }

</style>
</head>
<body>

    <h1 align="center">Formulir Pendaftaran Training Of a Trainer & Rekrutmen Relawan</h1>
    <h2 align="center">Yayasan Taman Semesta</h2>
        <p class="paragraf">Assalamualaikum Warahmatullahi Wabarakatuh</p>
        <p class="paragraf">Semoga menjumpa dalam keadaan sehat. Kami mengucapkan terima kasih atas ketertarikan teman-teman mengikuti Training Of A Trainer dan Rekrutmen Relawan ini. Agar memudahkan kami mengenal calon peserta, silahkan mengisi formulir di bawah ini!</p>

    <form action="" method="POST">
    <h1 class="satumini">1 . Identitas</h1>

        <label>
            <li class="duamini">Nama</li>
        </label>
        <input type="text" name="Nama">

        <label>
            <li class="duamini">Alamat</li>
        </label>
        <textarea name="Alamat">Masukan alamat</textarea>

        <label>
            <li class="duamini">Tempat, Tanggal Lahir</li>
        </label>
        <input type="text" name="Kelahiran">

        <label>
            <li class="duamini">Asal Institut</li>
        </label>
        <input type="text" name="Institut">

        <label>
            <li class="duamini">Jurusan</li>
        </label>
        <input type="text" name="Jurusan">

        <label>
            <li class="duamini">Nomer HP</li>
        </label>
        <input type="text" name="Nomer HP">

    <h1 class="satumini">2 . Motivasi</h1>

        <label>
            <li class="duamini">Pendapat Dan Impianmu Tentang Pendidikan Indonesia</li>
        </label>
        <textarea name="Pendapat">Isi Pendapatmu Disini</textarea>

        <label>
            <li class="duamini">Alasan Bergabung Pada Yayasan Ini</li>
        </label>
        <textarea name="Alasan">Isi Jawabanmu Disini</textarea>

        <label>
            <li class="duamini">Harapan Setelah Diterima</li>
        </label>
        <textarea name="Harapan">Tulis Harapanmu Disini</textarea>

        <center>
            <input type="submit" name="kirim" value="Kirim" onclick='jacascript:confirm("Apa anda sudah yakin dengan jawaban anda ? pastikan tidak ada kesalahan !")' href='#'>
        </center>
    </form>

</body>
</html>