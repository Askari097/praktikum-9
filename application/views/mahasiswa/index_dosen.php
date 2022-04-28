<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
</head>
<body>
    <h3>Dosen</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIDN</th>
                <th>Pendidikan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($dosen as $dns) {
            ?>
            <tr>
                <td><?= $dns -> id ?></td>
                <td><?= $dns -> nama ?></td>
                <td><?= $dns -> nidn ?> </td>
                <td><?= $dns -> pendidikan ?></td>
                <td>
                    <a href="<?php echo base_url("index.php/mahasiswa/detail_dosen/$dns->id") ?>">Detail</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>
</html>