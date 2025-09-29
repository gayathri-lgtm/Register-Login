<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">

    
    <style>
      body {
        background-color: #f8f9fa;
      }
      .card {
        margin-top: 50px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card shadow-sm">
            <div class="card-body">
              <h2 class="card-title text-center mb-4">Sign Up</h2>

              <?php if(isset($validation)): ?>
                <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
              <?php endif; ?>

              <form action="/register/save" method="post">
                <div class="mb-3">
                  <label for="InputForName" class="form-label">Name</label>
                  <input type="text" name="name" class="form-control" id="InputForName" value="<?= set_value('name') ?>">
                </div>

                <div class="mb-3">
                  <label for="InputForEmail" class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?>">
                </div>

                <div class="mb-3">
                  <label for="InputForPassword" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="InputForPassword">
                </div>

                <div class="mb-3">
                  <label for="InputForConfPassword" class="form-label">Confirm Password</label>
                  <input type="password" name="confpassword" class="form-control" id="InputForConfPassword">
                </div>

                <button type="submit" class="btn btn-primary w-100">Register</button>
              </form>

              <hr>
              <p class="text-center">
                <a href="<?= site_url('login') ?>" class="btn btn-outline-primary w-100">Already have an account?</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsd
