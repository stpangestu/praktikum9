<?php

require 'functions.php';


$karyawan = query("SELECT * FROM karyawan");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Karyawan</title>
    <style>
        body {
            background-color: #fff2e6;
        }

        h1 {
            text-align: center;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        .btn-add {
            padding: 5px;
            background-color: green;
            color: white;
            text-decoration: none;
            border-radius: 6px;

        }

        .btn-del {
            padding: 5px;
            background-color: red;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }
    </style>
</head>

<body>
    <div>
        <h1>Daftar Karyawan</h1>

        <a class="btn-add" href="tambah.php">Tambah Karyawan</a>
        <br> <br>
        <table>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Gender</th>
                <th scope="col">Position</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>



            <?php foreach ($karyawan as $babu) : ?>
                <tr>
                    <td><?= $babu["id"] ?></td>
                    <td><?= $babu['name']; ?></td>
                    <td><?= $babu['email']; ?></td>
                    <td><?= $babu['address']; ?></td>
                    <td><?= $babu['gender']; ?></td>
                    <td><?= $babu['position']; ?></td>
                    <td><?= $babu['status']; ?></td>
                    <td>
                        <a href="hapus.php?id=<?= $babu['id']; ?>" onclick="return confirm('apakah anda ingin menghapus data?');">
                            <button type="button" class="btn-del">Delete</button>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>

        </table>
    </div>
</body>

</html>