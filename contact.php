<?php

require_once 'logicContact.php';


 require 'header.php';
?>


    <!-- drugi formmularz bootstrap -->

<!-- <form class="text-center" action="contact.php" method="post" >

  <div class="mb-3 ">
    <input name="name" type="text" class="form-control" id="" aria-describedby="">
  </div>
  
  <div class="mb-3">
    <input name="email" type="email" class="form-control is-invalid" id="exampleInputemail1">
  </div>
 
  <select name="sujet" class="form-select" aria-label="Default select example">
    <option selected>Open this select menu</option>
    <option value="First">One</option>
    <option value="Second">Two</option>
    <option value="Third">Three</option>
  </select>

  <div class="mb-3 ">
    <input name="message" type="textarea" class="form-control" id="" aria-describedby="">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>

</form> -->


 <!-- Trzeci formmularz bootstrap z ostrzezeniem zeby wpisac dane -->

<div class="container text-center my-5 w-50 border border-secondary rounded shadow-lg">
<form class="was-validated " action="contact.php" method="post">
<div class="mb-3 mx-4" >
    <label for="validationTextarea" class="form-label mt-2"><strong>Name</strong></label>
    <input class="form-control " id="validationTextarea" type="text" name="name" required>
    
  </div>
  <div class="mb-5 mx-4">
    <label for="validationTextarea" class="form-label"><strong>E-mail</strong></label>
    <input class="form-control" id="validationTextarea" type="email" name="email" required>
  </div>


  <div class="mb-3 mx-4">
    <select class="form-select text-center mt-4" required aria-label="select example" name="sujet">
      <option value="">Sélectionner un sujet</option>
      <option value="First">Maintenace</option>
      <option value="Second">Service</option>
      <option value="Third">Questions</option>
    </select>
  </div>
    
  <div class="mb-3 mx-4">
    <label for="validationTextarea" class="form-label"><strong>Message</strong></label>
    <textarea class="form-control" id="validationTextarea" placeholder="" name="message" required></textarea>
  </div>

  <div class="mb-3">
    <button class="btn btn-primary" type="submit" name='submit' >Envoyer</button>
  </div>
</form>
</div>

<?php

 require 'footer.php';
?>