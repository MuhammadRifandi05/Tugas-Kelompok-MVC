<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Pelatihan Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Tambah Pelatihan Karyawan</h1>

        <form action="/pelatihan_karyawan/store" method="post" class="mt-4">
            <div class="mb-3">
                <input type="hidden" name="id_pelatihanKaryawan" id="id_pelatihanKaryawan" class="form-control" >
            </div>
            
            <div class="mb-3">
                <label for="id_karyawan" class="form-label">ID Karyawan</label>
                <input type="text" name="id_karyawan" id="id_karyawan" class="form-control" required>
            </div>
            
            <div class="mb-3">
                <label for="id_pelatihan" class="form-label">ID Pelatihan</label>
                <input type="text" name="id_pelatihan" id="id_pelatihan" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <input type="text" name="keterangan" id="keterangan" class="form-control" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
