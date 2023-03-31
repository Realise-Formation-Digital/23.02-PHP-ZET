<?php
session_start()
require_once 'logicContact.php';


 require 'header.php';
?>




 <!-- Trzeci formmularz bootstrap z ostrzezeniem zeby wpisac dane -->

<div class="container text-center my-5 w-50 border border-secondary rounded shadow-lg">
<form class="was-validated " action="contact.php" method="post">
<div class="mb-3 mx-4" >
    <label for="validationTextarea" class="form-label mt-2"><strong>Name</strong></label>
    <input class="form-control " id="validationTextarea" type="text" name="name" >
  </div>
  <?php if($nameError): ?>
    <p class="alert alert-danger"><?= $nameError ?></p>
  <?php endif; ?>
  <div class="mb-5 mx-4">
    <label for="validationTextarea" class="form-label"><strong>E-mail</strong></label>
    <input class="form-control" id="validationTextarea" type="text" name="email">
  </div>
  <?php if($emailError): ?>
    <p class="alert alert-danger"><?= $emailError ?></p>
  <?php endif; ?>
  <?php if($typeEmail): ?>
    <p class="alert alert-danger"><?= $typeEmail?></p>
  <?php endif; ?>

  <div class="mb-3 mx-4">
    <select class="form-select text-center mt-4" aria-label="select example" name="sujet">
      <option value="">Sélectionner un sujet</option>
      <option value="First">Maintenace</option>
      <option value="Second">Service</option>
      <option value="Third">Questions</option>
    </select>
  </div>
  <?php if($sujetError): ?>
    <p class="alert alert-danger"><?= $sujetError ?></p>
  <?php endif; ?>
  <div class="mb-3 mx-4">
    <label for="validationTextarea" class="form-label"><strong>Message</strong></label>
    <textarea class="form-control" id="validationTextarea" placeholder="" name="message"></textarea>
  </div>
  <?php if($messageError): ?>
    <p class="alert alert-danger"><?= $messageError ?></p>
  <?php endif; ?>
  <div class="mb-3">
    <button class="btn btn-primary" type="submit" name='submit' >Envoyer</button>
  </div>
</form>
</div>

<?php
 require 'footer.php';
?>