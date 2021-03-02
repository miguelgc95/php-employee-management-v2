<?php

require("views/header.php");

?>
<section id="form-wrapper">
  <div class="container overflow-hidden">
    <form class="needs-validation" action="<?= URL . "dashboard/" . (isset($this->employee) ?  "updateEmployee" : "addEmployee" ); ?>" method="POST">
      <img src="<?= isset($this->employee) ? $this->employee['avatar'] : URL . "assetsOld/images/no-user.png" ?>" class="img_profile" alt="avatar">
      <div class="container_avatar">
        <?php //require("/assetsOld/umages/imageGallery.php"); ?>
      </div>
      <h4 class="mb-3"><?= isset($this->employee) ? $this->employee['name'] . "'s profile" : "New employee" ?></h4>
      <div class="row">
        <div class="col-sm-6 p-2">
          <label for="uName" class="form-label">First name</label>
          <input type="text" class="form-control" id="uName" name="name" placeholder="" value="<?= isset($this->employee) ? $this->employee['name'] : '' ?>" required="">
          <div class="invalid-feedback">
            Valid first name is required.
          </div>
        </div>

        <div class="col-sm-6 p-2">
          <label for="uLastName" class="form-label">Last name</label>
          <input type="text" class="form-control" id="uLastName" name="lastName" placeholder="" value="<?= isset($this->employee) ? $this->employee['lastName'] : '' ?>" required="">
        </div>

        <div class="col-sm-6 p-2">
          <label for="uEmail" class="form-label">Email</label>
          <input type="email" class="form-control" id="uEmail" name="email" value="<?= isset($this->employee) ? $this->employee['email'] : '' ?>" required="">
        </div>
        <div class="col-sm-6 p-2">
          <label for="uGender" class="form-label">Gender</label><br>
          <select class="form-control" id="uGender" name="gender" required>
            <option value="man" <?= isset($this->employee) ? ($this->employee['gender'] == "man" ? "selected" : "") : '' ?>>Man</option>
            <option value="woman" <?= isset($this->employee) ? ($this->employee['gender'] == "woman" ? "selected" : "") : '' ?>>Woman</option>
            <option value="nobinary" <?= isset($this->employee) ? ($this->employee['gender'] == "nobinary" ? "selected" : "") : '' ?>>No binary</option>
          </select>
        </div>

        <div class="col-md-6 p-2">
          <label for="uAddress" class="form-label">Street Address</label>
          <input type="text" class="form-control" id="uAddress" name="streetAddress" required value="<?= isset($this->employee) ? $this->employee['streetAddress'] : '' ?>">
        </div>

        <div class="col-sm-6 p-2">
          <label for="uState" class="form-label">State</label>
          <input type="text" class="form-control" id="uState" name="state" value="<?= isset($this->employee) ? $this->employee['state'] : '' ?>">
        </div>


        <div class="col-sm-6 p-2">
          <label for="uCity" class="form-label">City</label>
          <input type="text" class="form-control" id="uCity" name="city" value="<?= isset($this->employee) ? $this->employee['city'] : '' ?>">
        </div>

        <div class="col-md-6 p-2">
          <label for="uAge" class="form-label">Age</label>
          <input type="number" class="form-control" id="uAge" name="age" required value="<?= isset($this->employee) ? $this->employee['age'] : '' ?>">
        </div>

        <div class="col-sm-6 p-2">
          <label for="uPC" class="form-label">Postal Code</label>
          <input type="number" class="form-control" id="uPC" name="PC" required value="<?= isset($this->employee) ? $this->employee['PC'] : '' ?>">
        </div>

        <div class="col-sm-6 p-2">
          <label for="uPhoneNumber" class="form-label">Phone Number</label>
          <input type="number" class="form-control" id="uPhoneNumber" name="phoneNumber" required value="<?= isset($this->employee) ? $this->employee['phoneNumber'] : '' ?>">
        </div>
      </div>
      <input type="hidden" name="id" value="<?= isset($this->employee) ? $this->employee['id'] : '' ?>">

      <input type="submit" class="w-30 btn btn-dark mt-5 mr-3" value="<?= isset($this->employee) ? 'Update' : 'Create' ?>" name="employeePage">
      <a class="w-30 btn btn-dark mt-5" href="<?= URL ?>dashboard">Go Back</a>
    </form>
  </div>
</section>

<?php

require("views/footer.php");

?>
</body>

</html>