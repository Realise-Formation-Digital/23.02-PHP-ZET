<?php

require_once 'logicContact.php';


 require 'header.php';
?>

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
              
              <input type="email" id="email" name="email"  />

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

    <form class="text-center">
  <div class="mb-3 ">
    <input type="text" class="form-control" id="" aria-describedby="">
  </div>
  <div class="mb-3">
    <input type="email" class="form-control" id="exampleInputemail1">
  </div>
  <div class="mb-3 ">
    <input type="textarea" class="form-control" id="" aria-describedby="">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>




<?php
 require 'footer.php';
?>