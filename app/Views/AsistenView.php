<!DOCTYPE html>
<html>

<body>

    <h1>Pendaftaran Asisten Praktikum</h1>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Praktikum</th>
                <th>IPK</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($asisten as $a) : ?>
                <tr>
                    <td><?= $a['no']; ?></td>
                    <td><?= $a['nim']; ?></td>
                    <td><?= $a['nama']; ?></td>
                    <td><?= $a['praktikum']; ?></td>
                    <td><?= $a['ipk']; ?></td>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
    <br>
    <a href="/asisten/simpan">Tambah Data Asisten</a></br>
    <a href="/asisten/update">Edit Data Asisten</a></br>
    <a href="/asisten/delete">Hapus Data Asisten</a></br>
    <a href="/login">Logout</a>
</body>

</html>