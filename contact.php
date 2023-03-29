<?php
$name = $email = $sujet = $message = $nameError = $emailError = $sujetError = $messageError = $msgsuccess = "";

if(!empty($_POST)){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $sujet= $_POST['sujet'];
    $message= $_POST['message'];
    $filename = 'message.csv';
    $messageCsv = ('');
    $success = true;
    $msgsuccess = "";
    $existed = 0;


    //checking if the field is filled
    if(empty($name)){
        $nameError = "J'ai besoin d'un nom";
        $success = false;
    }

    if(empty($email)){
        $emailError= "entrer un email";
        $success = false;
    }
    if(empty($sujet)){
        $sujetError = "on parle de quel sujet";
        $success = false;
    }
    if(empty($message)){
        $messageError = "Quel est votre message";
        $success = false;
    }

    if($success===true){

    if (file_exists($filename))
    {
        $existed = 1;
    }
    // creating a file if it doesn't exist
    $messageCsv = fopen('message.csv', 'a');

    
    if(!$existed)
    {
    fputcsv($messageCsv, array('Nom; Mail; Sujet; Message'));
    }
    
    // saving data to file
    fputcsv($messageCsv, array($name.";".$email.";".$sujet.";".$message));
    
    
    //  close file
    fclose($messageCsv);


    $msgsuccess = "Votre message à été envoye.";
    }
}
?>


<?php
 require('header.php');
?>

<div id="contact" class="container-fluid text-center">
      <div class="row">
        <div class="col col-12 col-xl-6 col-sm-12 map">
          <img class="pointer" src="./img/point.png" alt="pointer" />
        </div>
        <div class="col col-12 col-xl-6 col-sm-12 contact overlay">
          <img class="overlay" src="./img/overlay.png" alt="effet" />
          <!-- Formulaire -->
          <form class="formulaire" action="">
            <div class="form-row">
              <label for="name">Name</label>
              <input type="text" id="name" name="name" />
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
    </div>

<?php
 require('footer.php');
?>