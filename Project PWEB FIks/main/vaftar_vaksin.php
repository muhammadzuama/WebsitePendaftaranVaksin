<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vaksin.css">
    <title>Vaksin</title>
</head>
<body>
    <div class="title">Daftar Vaksinasi</div>
    <div class="wrapper">
      <!-- <div class="title">Daftar Vaksinasi</div> -->
      <form action="" method="post">
        <!-- nama -->
        <div class="field">
            <!-- text agar inputan terlihat. required utk memberikan pesan jika inputan kosong/ada salah -->
            <input type="text" required>
            <label>Nama Lengkap</label>
        </div>
        <!-- nik -->
        <div class="field">
            <input type="text" required>
            <label>NIK</label>
        </div>
        <!-- tanggal lahir -->
        <div class="field">
            <input type="text"required >
            <label>Tanggal lahir (mm-dd-yyyy)</label>
        </div>
        <!-- gender -->
        <div class="field">
            <label class="sex"></label>
                <select name="gender">
                    <option>Jenis Kelamin</option>
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                </select>
        </div>
        <!-- alamat -->
        <div class="field">
            <input type="text" required>
            <label>Alamat</label>
        </div>
        <!-- city -->
        <div class="field">
            <!-- <input type="teks" required>
            <label>Kota</label> -->
            <label class="city"></label>
            <select name="Kota">
                <option>Kota</option>
                <option>Surabaya</option>
                <option>Lumajang</option>
                <option>Malang</option>
                <option>Banyuwangi</option>
                <option>Sidoarjo</option>
                <option>Mojokerto</option>
            </select>
        </div>
        <!-- rumah sakit -->
        <div class="field">
            <!-- <input type="teks" required>
            <label>Rumah Sakit</label> -->
            <label class="rs"></label>
            <select name="hospital">
                <option>Rumah Sakit</option>
                <option>opsi 1</option>
                <option>opsi 2</option>
                <option>opsi 3</option>
                <option>opsi 4</option>
                <option>opsi 5</option>
            </select>
        </div>

        <!-- submit -->
        <div class="field btn">
            <input type="button" value="Submit">
        </div>

      </form>
    </div>
    
</body>
</html>