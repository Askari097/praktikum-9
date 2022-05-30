<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
    <script>
        function hapusDosen(pesan){
            if (confirm(pesan)) {
                return true;
            } else {
                return false;
            }
        }
    </script>
</head>
<body>
    <div class="col-md-12">
    <h3 class="text-center">Dosen</h3>
    <table class="table table-bordered, text-center">
        <thead>
            <tr class="table-active">
                <th>No</th>
                <th>Nama</th>
                <th>NIDN</th>
                <th>Pendidikan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($dosen as $dns) {
            ?>
            <tr>
                <td><?php echo $nomor ?></td>
                <td><?= $dns -> nama ?></td>
                <td><?= $dns -> nidn ?> </td>
                <td><?= $dns -> pendidikan ?></td>
                <td>
                    <a href="<?php echo base_url("index.php/dosen/detail_dosen/$dns->id") ?>"
                    class="btn btn-info btn-lg active" role="button" aria-pressed="true">Detail</a>
                    &nbsp;
                    <a href="<?php echo base_url("index.php/dosen/edit_dosen/$dns->id") ?>"
                    class="btn btn-success btn-lg active" role="button" aria-pressed="true">Edit</a>
                    &nbsp;
                    <a href=<?php echo base_url("index.php/dosen/delete_dosen/$dns->id") ?> 
                    class="btn btn-danger btn-lg active" role="button" aria-pressed="true"
                    onclick=" return hapusDosen('Anda Yakin ingin menghapus mahasiswa yang bernama <?php echo $dns->nama ?>?')">Delete</a>
                </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
    <a href= <?php echo base_url("index.php/dosen/form_dosen") ?> class="btn btn-primary btn-lg active" >Tambah</a>
    </div>
</body>
</html>