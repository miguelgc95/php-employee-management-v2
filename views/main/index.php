
<!-- Application entry point. Login view -->
<?php
// if (isset($_GET['error'])) {
//   $message = $_GET['error'];
//}
?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee management V1</title>
  <link rel="stylesheet" href="<?= URL;?>node_modules/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="<?= URL;?>node_modules/bootstrap-icons/font/bootstrap-icons.css">
  <link rel="stylesheet" href="<?= URL;?>assetsOld/css/main.css">

</head>

<body class="text-center h-100">

<main class="login-ass">
<?= isset($message) ? "
<div class='toast' role='alert' aria-live='assertive' aria-atomic='true'>
  <div class='toast-body'>
    $message
  </div>
</div>" : "" ?>
    <form class="form-signin" action="<?= URL;?>main/login" method="post">
      <img class="" src="<?= URL;?>assetsOld/images/logo_AS2.png" alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
      <input type="email" id="uEmail" name="uEmail" class="mb-2  form-control" aria-describedby="emailHelp" required value="admin@assemblerschool.com">
      <input type="password" id="uPassword" class="mb-3  form-control" placeholder="Password" name="uPassword" value="123456" required>
      <button class="w-100 btn btn-lg btn-ass-submit" type="submit">Sign in</button>
    </form>
  </main>

  <script src="<?= URL;?>node_modules/jquery/dist/jquery.min.js"></script>
  <script src="<?= URL;?>node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>

<script>
  $(".toast").toast({
    delay: 3000
  });
  $(".toast").toast('show');
</script>