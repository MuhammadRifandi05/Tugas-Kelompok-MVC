<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Data Pelatihan</title>
</head>
<body>
    <h1>Edit Data Pelatihan</h1>

    <form action="/data_pelatihan/update" method="post">
        <!-- Hidden field to store ID Pelatihan -->
        <input type="hidden" name="id_pelatihan" value="<?= $data_pelatihan['id_pelatihan']; ?>">

        <label for="nama">Nama</label>
        <input type="text" name="nama" value="<?= $data_pelatihan['nama']; ?>" required>

        <label for="keterangan">Keterangan</label> 
        <input type="text" name="keterangan" value="<?= $data_pelatihan['keterangan']; ?>" required>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
