<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Karyawan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <style>
        .sidebar {
            min-height: 100vh;
            box-shadow: 0 4px 12px 0 rgba(0, 0, 0, 0.05);
        }
        .nav-link {
            color: #333;
            padding: 12px 20px;
        }
        .nav-link:hover {
            background-color: #f8f9fa;
        }
        .nav-link.active {
            background-color: #e9ecef;
            color: #0d6efd;
        }
        .content {
            padding: 20px;
        }
        .welcome-message {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-white sidebar">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-4 gap-3">
                    <h4 class="d-flex align-items-center pb-3 mb-md-1 text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">SI Karyawan</span>
                    </h4>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start w-100" id="menu">
                        <li class="nav-item w-100">
                            <a href="dashboard/index" class="nav-link <?php echo $page == 'dashboard' ? 'active' : ''; ?>">
                                <i class='bx bxs-dashboard'></i>
                                <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item w-100">
                            <a href="?page=karyawan" class="nav-link <?php echo $page == 'karyawan' ? 'active' : ''; ?>">
                                <i class='bx bxs-user-detail'></i>
                                <span class="ms-1 d-none d-sm-inline">Data Karyawan</span>
                            </a>
                        </li>
                        <li class="nav-item w-100">
                            <a href="departemen/index" class="nav-link <?php echo $page == 'departemen' ? 'active' : ''; ?>">
                                <i class='bx bxs-buildings'></i>
                                <span class="ms-1 d-none d-sm-inline">Data Departemen</span>
                            </a>
                        </li>
                        <li class="nav-item w-100">
                            <a href="?page=absensi" class="nav-link <?php echo $page == 'absensi' ? 'active' : ''; ?>">
                                <i class='bx bxs-time-five'></i>
                                <span class="ms-1 d-none d-sm-inline">Data Absensi</span>
                            </a>
                        </li>
                        <li class="nav-item w-100">
                            <a href="data_pelatihan/index" class="nav-link <?php echo $page == 'data_pelatihan' ? 'active' : ''; ?>">
                                <i class='bx bxs-graduation'></i>
                                <span class="ms-1 d-none d-sm-inline">Data Pelatihan</span>
                            </a>
                        </li>
                        <li class="nav-item w-100">
                            <a href="/pelatihan_karyawan/index" class="nav-link <?php echo $page == 'pelatihan' ? 'active' : ''; ?>">
                                <i class='bx bxs-graduation'></i>
                                <span class="ms-1 d-none d-sm-inline">Pelatihan Karyawan</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Content -->
            <div class="col py-3 content">
                <div class="welcome-message">Selamat datang!</div>
                <?php
                switch($page) {
                    case 'karyawan':
                        include '/karyawan/index.php';
                        break;
                    case 'departemen':
                        include '/departemen/index.php';
                        break;
                    case 'absensi':
                        include '/absensi/index.php';
                        break;
                    case 'data_pelatihan':
                        include '/data_pelatihan/index.php';
                        break;
                    case 'pelatihan_karyawan':
                        include '/pelatihan_karyawan/index.php';
                        break;
                    default:
                        include '/dashboard/index.php';
                }
                ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
