<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">


    <style>
      body {
        background-color: #f8f9fa; 
      }
      .card {
        margin-top: 80px;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      }
      h1 {
        text-align: center;
        margin-bottom: 30px;
        color: #333;
      }
      .btn-primary {
        width: 100%;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card">
            <h1>Sign In</h1>
            
            <?php if(session()->getFlashdata('msg')): ?>
              <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
            <?php endif; ?>

            <form action="/login/auth" method="post">
              <div class="mb-3">
                <label for="InputForEmail" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?>">
              </div>

              <div class="mb-3">
                <label for="InputForPassword" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="InputForPassword">
              </div>

              <button type="submit" class="btn btn-primary">Login</button>
            </form>

            <hr>
            <p class="text-center">
              <a href="<?= site_url('/') ?>" class="btn btn-outline-primary w-100">Don't have an account? Sign Up</a>
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
  </body>
</html>
