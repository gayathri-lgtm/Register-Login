<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg p-4">
        <h1 class="text-center text-success mb-4">Logged in Successfully</h1>

        <div class="text-center mb-3">
            <h2 class="h5">Profile Picture</h2>
            <!-- Placeholder (you can replace with actual profile image later) -->
            <img src="https://via.placeholder.com/120" class="rounded-circle border" alt="Profile Picture">
        </div>

        <div class="mb-3 text-center">
            <h3>Welcome, <span class="text-primary"><?= esc($user_name); ?></span></h3>
            <p class="mb-0"><strong>Email:</strong> <?= esc($user_email); ?></p>
        </div>

        <div class="d-grid gap-2 mt-4">
            <a href="<?= site_url('logout') ?>" class="btn btn-outline-danger">Logout</a>
            <a href="<?= base_url("auto/viewemp") ?>" class="btn btn-primary">See Employee Data</a>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
