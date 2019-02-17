<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Surat Pengantar</title>
  </head>
  <body>
    <form action="<?php echo base_url(); ?>index.php/Input/simpan_sp" method="POST">
    <u>
      <div align=center>
        <h1>
          <b>
            SURAT PENGANTAR
          </b>
        </h1>
      </div>
    </u>
    <hr>
    <input type="date" name="date" value=""><br>
    <table border="0">
      <tr>
        <td>No</td>
        <td>:</td>
        <td><input type="text" name="nosurat" value=""></td>
      </tr>
      <tr>
        <td>Lamp</td>
        <td>:</td>
        <td>-</td>
      </tr>
      <tr>
        <td>Hal</td>
        <td>:</td>
        <td><u>Permohonan KKLP/Magang</u></td>
      </tr>
    </table><br>
    <p>Kepada Yth: <br>
    Bapak/Ibu Pimpinan <br>
    <input type="text" name="instansi" value="<?php echo $instansi;?>"> <br>
    di Tempat</p>
    <br>
    <p>Dengan Hormat,</p><br>
    <p>
      Sekolah Tinggi Managemen Informatika dan Komputer Kharisma merupakan institusi pendidikan yang bertujuan untuk
      menciptakan lulusan professional dan terampil dibidangnya,
      serta mampu mandiri dan bersaing di tingkat nasional maupun internasional.
      Untuk mewujudkan hal tersebut maka dari itu setiap mahasiswa tingkat akhir
      diwajibkan mengikuti praktik kerja lapangan (PKL) untuk menambah pengetahuan dan wawasan agar mereka betul-betul siap pakai.
    </p>
    <p>
      Sehubung dengan itu,
      kami memohon kepada Bapak/Ibu untuk dapat menerima mahasiswa kami melaksanakan PKL/Magang untuk tahun ajaran 2013/2014
      dari tanggal 4 Januari sampai dengan 30 Maret 2014 (3 bulan) pada perusahaan yang Bapak/Ibu pimpin.
      Daftar nama mahasiswa kami sebagai berikut :
    </p>

  <p>1. Nama Mahasiswa : <input type="text" name="nama1" value="<?php echo $nama1;?>"></p>
  <p>2. Nama Mahasiswa : <input type="text" name="nama2" value="<?php echo $nama2;?>"></p>
  <p>3. Nama Mahasiswa : <input type="text" name="nama3" value="<?php echo $nama3;?>"></p>
  <br>
    <p>
    Demikian Surat ini kami sampaikan kepada Bapak/Ibu. Atas bantuan dan kerjasama yang baik kami ucapkan terima kasih.
  </p>
  <div align=right>
    <p>
        Hormat Kami <br>
        Ketua Program Studi <br><br><br><br><br><br>
        <b><u><input type="text" name="ketuaprodi" value=""></u></b> <br>
        Nip : <input type="number" name="nip" value="">
    </p>
    <button type="submit" class="btn btn-primary">Simpan Data</button>
    <a href="<?php echo base_url(); ?>index.php/Lihatkklp/index">Kembali</a>
  </div>
  </form>
  </body>
</html>
