<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Donatur Donasi</title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/bootstrap/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/johndoe.css')); ?>">
    <style>
        .header {
            background-color: #4CAF50; /* Warna latar belakang hijau */
            color: #FFD700; /* Warna teks kuning cerah */
            padding: 20px; /* Padding untuk ruang di dalam header */
            text-align: center; /* Pusatkan teks */
            border-radius: 8px; /* Sudut melengkung */
            margin-bottom: 20px; /* Jarak bawah header */
        }
        .header-title {
            font-size: 2.5em; /* Ukuran font untuk judul */
            margin: 0; /* Menghapus margin default */
        }
        .header-subtitle {
            font-size: 1.2em; /* Ukuran font untuk subtitle */
            margin-top: 10px; /* Jarak atas untuk subtitle */
        }
        .brand-img {
            width: 30px; /* Atur lebar logo */
            height: auto; /* Tinggi otomatis untuk menjaga proporsi */
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                <img src="<?php echo e(asset('assets/imgs/hehe.jpg')); ?>" alt="Logo" class="brand-img"> <!-- Ganti dengan path logo Anda -->
                Home
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('/')); ?>">Beranda</a> <!-- Tautan ke halaman beranda -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="header">
        <div class="container">
            <h1 class="header-title" style="color: #FFD700;">Distribusi Donasi</h1> <!-- Teks kuning cerah -->
            <p class="header-subtitle" style="color: #FFEA00;">Daftar Donasi yang telah diberikan</p> <!-- Teks kuning lebih cerah -->
        </div>
    </header>

    <div class="container mt-5">
        <h2 class="mb-4">Daftar Distribusi</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Recipient Name</th>
                    <th>Recipient Contact</th>
                    <th>Amount</th>
                    <th>Details</th>
                    <th>Created At</th>
                    <th>Item Image</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $distributions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $distribution): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($distribution->recipient_name); ?></td>
                        <td><?php echo e($distribution->recipient_contact); ?></td>
                        <td><?php echo e(number_format($distribution->amount, 2)); ?></td>
                        <td><?php echo e($distribution->details); ?></td>
                        <td><?php echo e($distribution->created_at->format('M d, Y H:i:s')); ?></td>
                        <td>
                            <img src="<?php echo e(asset('storage/' . $distribution->item_image_path)); ?>" alt="Item Image" style="width: 50px; height: auto;">
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

    <footer class="footer py-3">
        <div class="container">
            <p class="small mb-0 text-light">
                &copy; <script>document.write(new Date().getFullYear())</script> Dibuat Dengan <i class="ti-heart text-danger"></i> Oleh <a href="http://devcrud.com" target="_blank"><span class="text-danger" title="Bootstrap 4 Themes and Dashboards">DevCRUD</span></a> 
            </p>
        </div>
    </footer>

    <script src="<?php echo e(asset('assets/vendors/jquery/jquery-3.4.1.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendors/bootstrap/bootstrap.bundle.js')); ?>"></script>
</body>
</html>
<?php /**PATH D:\Aqua\TugasNegara\ProjekWeb\back-end-projek\resources\views/distributions/index.blade.php ENDPATH**/ ?>