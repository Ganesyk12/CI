<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">
   <title>Login</title>
   <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
   <div class="container-fluid">
      <div class="col-md-6 mx-auto mt-5" style="font-family: 'Times New Roman', Times, serif;">

         <?php
         if (session()->getFlashdata('message')) {
         ?>
            <div class="alert alert-info">
               <?= session()->getFlashdata('message') ?>
            </div>
         <?php } ?>

         <form method="post" action="<?= base_url('login/auth') ?>">

            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center; font-family:'Times New Roman', Times, serif">Simple Login Codeingiter 4</h1>
            <div class="form-group">
               <label>Username</label>
               <input type="text" class="form-control" name="username" required="" placeholder="Username">
            </div>
            <div class="form-group">
               <label>Password</label>
               <input type="password" class="form-control" name="password" required="" placeholder="Password">
            </div>
            <div class="form-group">
               <button class="btn btn-primary btn-md" type="submit">Login</button>
            </div>
         </form>
      </div>
   </div>


</body>

</html>