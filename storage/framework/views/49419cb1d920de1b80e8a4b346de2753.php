<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register</title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/bootstrap/bootstrap.min.css')); ?>">
    <style>
        body {
            background-color: #000; /* Warna latar belakang hitam */
            color: rgb(17, 10, 10); /* Warna teks putih */
            height: 100vh; /* Tinggi penuh viewport */
            display: flex; /* Menggunakan flexbox */
            justify-content: center; /* Pusatkan secara horizontal */
            align-items: center; /* Pusatkan secara vertikal */
            margin: 0; /* Menghapus margin default */
        }
        .container {
            max-width: 500px; /* Lebar maksimum kontainer */
            padding: 20px; /* Padding dalam kontainer */
            background-color: #f3f3f3; /* Warna latar belakang kontainer abu-abu gelap */
            border-radius: 8px; /* Sudut melengkung */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Bayangan */
        }
        h2 {
            text-align: center; /* Pusatkan teks */
            margin-bottom: 20px; /* Jarak bawah */
        }
        .alert {
            margin-bottom: 20px; /* Jarak bawah untuk alert */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
        <form action="<?php echo e(route('register')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Konfirmasi Password:</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Register</button>
        </form>
        <p class="mt-3 text-center">Sudah punya akun? <a href="<?php echo e(url('/signin')); ?>" style="color: #007bff;">Sign In di sini</a></p>
    </div>
</body>
</html><?php /**PATH D:\Aqua\TugasNegara\ProjekWeb\back-end-projek\resources\views/register.blade.php ENDPATH**/ ?>