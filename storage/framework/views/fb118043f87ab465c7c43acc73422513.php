<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container">
    <h1 class="mt-4 text-primary">Profil Pengguna</h1>
    <p><strong>ID:</strong> <?php echo e($id); ?></p>
    <p><strong>Nama:</strong> <?php echo e($name); ?></p>
    <a href="/" class="btn btn-secondary">Kembali ke Home</a>
</body>
</html>
<?php /**PATH C:\laragon\www\POS\resources\views/user/profile.blade.php ENDPATH**/ ?>