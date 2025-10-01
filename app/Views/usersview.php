<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee List</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">

    <h1 class="mb-4">Employee List</h1>

    <div class="mb-3">
        <a href="<?= base_url('auto/addemp') ?>" class="btn btn-success">Add Employee</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>City</th>
                <th>Department</th>
                <th>Salary</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if(!empty($emp)): ?>
                <?php $i=1; foreach($emp as $em): ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= esc($em['name']) ?></td>
                    <td><?= esc($em['email']) ?></td>
                    <td><?= esc($em['city']) ?></td>
                    <td><?= esc($em['department']) ?></td>
                    <td><?= esc($em['salary']) ?></td>
                    <td>
                        <a href="<?= base_url('auto/updemp/'.$em['id']) ?>" class="btn btn-primary btn-sm">Edit</a>
                        <a href="<?= base_url('auto/delemp/'.$em['id']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7" class="text-center">No Employees Found</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

</div>

<!-- Bootstrap JS (optional for buttons etc.) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
