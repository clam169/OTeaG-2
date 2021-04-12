<?php

$valid = false;
$val_messages = Array();

function the_results()
{
  global $valid;
  if ($valid) {
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
      ?>
        <div class="results">
          <div class="result-text">Congratulations, <?php echo $_POST["firstName"]?>! Your order has been successfully placed. 
            The order information will be sent to <?php echo $_POST["email"]?>
          </div>
        </div>
      <?php
    }
  }
}

function validate() {
  global $valid;
  global $val_messages;

  $result = true;
  
  if($_SERVER['REQUEST_METHOD']== 'POST') {
    
    if (isset($_POST["email"]) && isset($_POST["firstName"])) {

      foreach($_POST as $type => $value) {

        if ($type=='email') {
          $submitted = $_POST["email"];
          $pattern = '#^(.+)@([^\.].*)\.([a-z]{2,})$#';
          $this_result = preg_match($pattern, $submitted);
          $result= $result && $this_result;

          if($this_result == true) {
            $val_messages[$type]="";
          } else {
            $val_messages[$type]="Email is not correct format";
          }            
        } else if ($type=='firstName') {
          $submitted = $_POST["firstName"];
          $pattern = '([a-z,A-Z]{2})';
          $this_result = preg_match($pattern, $submitted);
          $result= $result && $this_result;

          if($this_result == true) {
            $val_messages[$type]="";
          } else {
            $val_messages[$type]="Please enter a valid name.";
          }    
        }
      }
    } else {
        echo "<p>Something has gone wrong with the form!</p>";
    }
  }
  $valid = $result;
}

function the_validation_message($type) {
  global $val_messages;

  if($_SERVER['REQUEST_METHOD']== 'POST') {
    echo "<div class = failure-message> $val_messages[$type] </div>";
  }
}