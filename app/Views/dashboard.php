<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>logged in successfully</h1>
       <h3>Welcome, <?= session()->get('username'); ?> </h3>
    <p>Email: <?= session()->get('email'); ?></p>


    <a href="<?= site_url('logout') ?>" class="btn btn-outline-primary w-100">LOGOUT</a>
    <button type="button">auto  routing</button>
    <button type="button">upload profile pic</button>
    <button type="button">change password</button>
     <button type="button">edit profile</button>
     <button type="button">forget password</button>
      <button type="button">filters</button>
</body>
</html>