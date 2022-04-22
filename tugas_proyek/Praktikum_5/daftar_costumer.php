<?php
require_once 'daftar_accountBank.php';

$akun_baru1 = new AccountBank("C001", "Ilham", 6000000);
$akun_baru2 = new AccountBank("C002", "Maulana", 5350000);
$akun_baru3 = new AccountBank("C003", "Hakim", 2500000);

$ar_akun = [$akun_baru1, $akun_baru2, $akun_baru3];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pembukaan Rekening</title>
    <!-- Bundle CDN Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</head>

<body>
    <h1 align="center">Daftar AccountBank Costumer </h1>
                <table class="table table-bordered">
                    <thead>
                        <th>No</th>
                        <th>No. Account</th>
                        <th>Pemilik</th>
                        <th>Saldo</th>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            foreach ($ar_akun as $obj) {
                        ?>
                                <tr>
                                    <td><?=$no?></td>
                                    <td><?=$obj->nomor?></td>
                                    <td><?=$obj->customer?></td>
                                    <td><?=$obj->saldo?></td>
                                </tr>
                        <?php
                            $no++;
                            }
                        ?>
                    </tbody>
            </div>
        </div>
    </div>

</body>


</html>