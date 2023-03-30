<?php

require_once 'logicContact.php';


 require 'header.php';
?>
<!-- pierwszy formularz ze strony -->

<!-- <div id="contact" class="container-fluid text-center">
      <div class="row">
        <div class="col col-12 col-xl-6 col-sm-12 map">
          <img class="pointer" src="./img/point.png" alt="pointer" />
        </div>
        <div class="col col-12 col-xl-6 col-sm-12 contact overlay">
          <img class="overlay" src="./img/overlay.png" alt="effet" /> -->
          <!-- Formulaire -->
          <!-- <form class="formulaire" action="contact.php" method="post">
            <div class="form-row">
              <label for="name">Name</label>
              <input type="text" id="name" name="name" />?>
               
            </div>
            <div class="form-row">
              <label for="email">Email</label>
              <?php if($nameError || $emailError || $sujetError || $messageError): ?>
      
                              <h6><?= $emailError ?></h6>
       
                 <?php endif; ?>
              <input type="text" id="email" name="email"  />

            </div>
            <div class="form-row">
              <label for="suj">Sujet</label>
              <input type="text" id="suj" name="sujet" />
            </div>
            <div class="form-row">
              <label for="message">Message</label>
              <textarea id="message" name="message"></textarea>
            </div>
            <div class="form-row">
              <button type="submit">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div> -->

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

<div class="container text-center w-50">
<form class="was-validated" action="contact.php" method="post">
<div class="mb-3 " >
    <label for="validationTextarea" class="form-label"><strong>Name</strong></label>
    <input class="form-control " id="validationTextarea" type="text" name="name" required>
    
  </div>
  <div class="mb-5">
    <label for="validationTextarea" class="form-label"><strong>E-mail</strong></label>
    <input class="form-control" id="validationTextarea" type="email" name="email" required>
  </div>


  <div class="mb-3 ">
    <select class="form-select text-center mt-4" required aria-label="select example" name="sujet">
      <option value=""><strong>Open this select menu</strong></option>
      <option value="First">One</option>
      <option value="Second">Two</option>
      <option value="Third">Three</option>
    </select>
  </div>
    
  <div class="mb-3">
    <label for="validationTextarea" class="form-label"><strong>Message</strong></label>
    <textarea class="form-control" id="validationTextarea" placeholder="" name="message" required></textarea>
  </div>

  <div class="mb-3">
    <button class="btn btn-primary" type="submit" name='submit' >Submit form</button>
  </div>
</form>
</div>

<?php

 require 'footer.php';
?>