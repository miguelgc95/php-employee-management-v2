<?php

require("views/header.php");

?>
<section class="toast-msg">
  <?= isset($this->message) ? "
<div class='toast' role='alert' aria-live='assertive' aria-atomic='true'>
	<div class='toast-body'>
    	{$this->message}
	</div>
</div>" : "" ?>
</section>
<section id="form-wrapper" class="center">
  <div class="container overflow-hidden">
    <form class="needs-validation" action="<?= URL ?>users/addUser" method="POST">
  </div>


  <div class="col-sm-6 p-2">
    <label for="uEmail" class="form-label">Email: </label>
    <input type="email" class="form-control" id="uEmail" name="email" required>
  </div>

  <div class="col-sm-6 p-2">
    <label for="uName" class="form-label">Rol: </label><br>
    <select class="form-control" id="uName" name="name" required>
      <option value="user" selected>User</option>
      <option value="admin">Admin</option>
    </select>
  </div>

  <div class="col-sm-6 p-2">
    <label for="uPassword" class="form-label">Password: </label>
    <input type="password" class="form-control" id="uPassword" name="password" required>
  </div>

  <input type="submit" class="w-30 btn btn-dark mt-5 mr-3">
  <a class="w-30 btn btn-dark mt-5" href="<?= URL ?>users">Go Back</a>
  </form>
  </div>
</section>
<?php

require "views/footer.php";

?>
<script>
  $(".toast").toast({
    delay: 3000
  });
  $(".toast").toast('show');
  $('#newUsersLink').addClass('active');
</script>
</body>

</html>