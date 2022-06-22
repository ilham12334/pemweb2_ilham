<div class="col-md-12">
<h3>Daftar Dosen</h3>
<table border="1" width="100%">
    <thead>
        <tr>
        <th>NO</th><th>NIDN</th><th>Nama</th><th>Gender</th>
        <th>Tempat Lahir</th><th>Tanggal Lahir</th><th>Pendidikan</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor=1;
        foreach($list_dsn as $dsn){
        ?>
        <tr>
        <td><?=$nomor?></td>
        <td><?=$dsn->nidn?></td>
        <td><?=$dsn->nama?></td>
        <td><?=$dsn->gender?></td>
        <td><?=$dsn->tmp_lahir?></td>
        <td><?=$dsn->tgl_lahir?></td>
        <td><?=$dsn->pendidikan?></td>
        </tr>
        <?php
        $nomor++;
        }
        ?>
    </tbody>
</table>
</div>