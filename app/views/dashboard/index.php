<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Sistem Informasi Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <h1 class="mt-4">Dashboard</h1>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card text-white bg-primary mb-4">
                    <div class="card-header">Total Karyawan</div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $totalKaryawan; ?></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-success mb-4">
                    <div class="card-header">Total Departemen</div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $totalDepartemen; ?></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-warning mb-4">
                    <div class="card-header">Total Data Pelatihan</div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $totalDataPelatihan; ?></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>