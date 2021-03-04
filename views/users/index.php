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

<main id="main-wrapper">
</main>

<?php require("views/footer.php"); ?>

<script>
  const URL = "<?= URL; ?>"
  const page = "users"
</script>
<script src="<?= URL; ?>assets/js/index.js" type="module"></script>
<script>
  $(".toast").toast({
    delay: 3000
  });
  $(".toast").toast('show');
  $('#usersLink').addClass('active');
</script>
</body>

</html>