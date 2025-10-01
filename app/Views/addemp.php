<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Employee</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Add Employee</h2>

    <?php $session = session(); ?>
    <!-- Success Message -->
    <?php if($session->getFlashdata('success')): ?>
        <div class="alert alert-success">
            <?= $session->getFlashdata('success') ?>
        </div>
    <?php endif; ?>

    <!-- Error Messages -->
    <?php if(isset($errors)): ?>
        <div class="alert alert-danger">
            <ul class="mb-0">
                <?php foreach($errors as $err): ?>
                    <li><?= esc($err) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <?= form_open('auto/addemp') ?>

    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" name="name" value="<?= set_value('name') ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" name="email" value="<?= set_value('email') ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">City</label>
        <input type="text" class="form-control" name="city" value="<?= set_value('city') ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Department</label>
        <input type="text" class="form-control" name="department" value="<?= set_value('department') ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Salary</label>
        <input type="text" class="form-control" name="salary" value="<?= set_value('salary') ?>">
    </div>

    <div class="d-flex gap-2">
        <button type="submit" class="btn btn-primary">Add Employee</button>
        <a href="<?= base_url("auto/viewemp") ?>" class="btn btn-secondary">Back</a>
    </div>

    <?= form_close() ?>
</div>

<!-- Bootstrap JS (optional for alerts/buttons) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
