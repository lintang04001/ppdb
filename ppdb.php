<?php

        require_once('koneksi.php');
        $sql = "select * from daftar_ppdb";
        $result = $conn->query($sql);

        $daftar_ppdb = $result->fetch_all(MYSQLI_ASSOC);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=hi, initial-scale=1.0">
    <title>Data siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="container-fluid">
        <div class="card">
            <div class="card">
                <img src="foto/head1.png">
            </div>
            <div class="card-header">
                <h3 class="text-center">DAFTAR SEKOLAH</h3>
            </div>
            <div class="card-body">
                <p class="text-center">Berikut ini merupakan daftar SMP yang mengikuti PPDB Online Kota Karanganyar. Ditampilkan alamat serta identitas dari tiap sekolah. Untuk lebih lanjut silahkan klik Lihat Profil pada masing-masing sekolah.</p>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
            <table class="table table-striped table-bordered">
        <tr>
            <th rowspan="2" style="vertical-align:middle;">#</th>
            <th>KODE</th>
            <th>NAMA SEKOLAH</th>
            <th>KELURAHAN</th>
            <th>KECAMATAN</th>
            <th>STATUS SEKOLAH</th>
            <th>IKUT PPDB</th>
        </tr>
        <tr>
            <th><input type="text" class="form-control"></th>
            <th><input type="text" class="form-control"></th>
            <th><input type="text" class="form-control"></th>
            <th><input type="text" class="form-control"></th>
            <th><input type="text" class="form-control"></th>
            <th><input type="text" class="form-control"></th>
        </tr>
        <?php 
            foreach ($daftar_ppdb as $key => $row) {
        ?>
            <tr>
                <td><?= $key + 1 ?></td>
                <td><?= $row['KODE'];?></td>
                <td><?= $row['Nama_sekolah'];?></td>
                <td><?= $row['Kelurahan'];?></td>
                <td><?= $row['Kecamatan'];?></td>
                <!-- <td><?= $row['Status_sekolah'];?></td> -->
                <td>
                    <?php if ($row['Status_sekolah'] == 'NEGERI') { ?>
                        <div class="badge bg-success">Negeri</div>
                    <?php } else {?>
                        <div class="badge bg-primary">Swasta</div>
                    <?php } ?>
                </td>
    

                <!-- <td><?= $row['Ikut_ppdb'];?></td> -->
                <td>
                    <?php if ($row['Ikut_ppdb'] == 'IYA') { ?>
                        <div class="badge bg-success">Iya</div>
                    <?php } else {?>
                        <div class="badge bg-primary">Tidak</div>
                    <?php } ?>
                </td>
                
                <td>
                    <a href="#" class="btn btn-info text-white">Lihat Profil</a>
                </td>
            </tr>
        <?php } ?>
    </table>
            </div>
        </div>
    </div>
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>