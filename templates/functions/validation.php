<?php
// Global result of form validation
$valid = false;
// Global array of validation messages. For valid fields, message is ""
$val_messages = Array();

// Output the results if all fields are valid.
function the_results()
{
  global $valid;

  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    ?>
    <div class="results">
      <div class="result-text">Congratulation! The order information will send to <?php echo $_POST["email"]?></div>
    <?php
  }
}

// Check each field to make sure submitted data is valid. If no boxes are checked, isset() will return false
function validate()
{
    global $valid;
    global $val_messages;

    // Initialize result
    $result = true;
    
    if($_SERVER['REQUEST_METHOD']== 'POST')
    {
      if(isset($_POST["email"])) {
        if ($type=='email')
          {

              $submitted = $_POST["email"];
              $pattern = '#^(.+)@([^\.].*)\.([a-z]{2,})$#';

              $this_result = preg_match($pattern, $submitted);

              $result= $result && $this_result;

              //Update message
              if($this_result == true) {$val_messages[$type]="";}
              else {$val_messages[$type]="email is not correct format";}

          }
      }
      
    }
}

// Display error message if field not valid. Displays nothing if the field is valid.
function the_validation_message($type) {
  global $val_messages;

  if($_SERVER['REQUEST_METHOD']== 'POST') {
    echo "<div class = failure-message> $val_messages[$type] </div>";
  }
}