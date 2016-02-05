<head>
  <meta charset="utf-8">
  <title>Sending Application | The Russian Blues Kitten Application</title>
  <!-- Making sure that the pages scale to a mobile friendly veiw. -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/master.css" media="screen" title="no title" charset="utf-8">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
  <main class="container well well-background">
    <h1 class="header-title">Kitten Application</h1>

    <?php
    //Information from the app.
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $question1 = $_POST['question1'];
    $question2 = $_POST['question2'];
    $question3 = $_POST['question3'];
    $question4 = $_POST['question4'];
    $question5 = $_POST['question5'];
    $question6 = $_POST['question6'];
    $question7 = $_POST['question7'];
    $question8 = $_POST['question8'];
    $question9 = $_POST['question9'];
    $question10 = $_POST['question10'];
    $question11 = $_POST['question11'];
    $question12 = $_POST['question12'];

    //Variable indicating if form is complete or not.
    $complete = true;

    if(empty($first_name)) {
      echo 'A first name is required.<br/>';
      $complete = false;
    }

    if(empty($last_name)) {
      echo 'A last name is required.<br/>';
      $complete = false;
    }

    if(empty($phone)) {
      echo 'A phone number is required.<br/>';
      $complete = false;
    }

    if(empty($email)) {
      echo 'An email is required.<br/>';
      $complete = false;
    }

    if(empty($question1)) {
      echo 'A first name is required.<br/>';
      $complete = false;
    }

    if(empty($question2)) {
      echo 'You must provide an awesome to question 2.<br/>';
      $complete = false;
    }

    if(empty($question3)) {
      echo 'You must provide an awesome to question 3.<br/>';
      $complete = false;
    }

    if(empty($question4)) {
      echo 'You must provide an awesome to question 4.<br/>';
      $complete = false;
    }

    if(empty($question5)) {
      echo 'You must provide an awesome to question 5.<br/>';
      $complete = false;
    }

    if(empty($question6)) {
      echo 'You must provide an awesome to question 6.<br/>';
      $complete = false;
    }

    if(empty($question7)) {
      echo 'You must provide an awesome to question 7.<br/>';
      $complete = false;
    }

    if(empty($question8)) {
      echo 'You must provide an awesome to question 8.<br/>';
      $complete = false;
    }

    if(empty($question9)) {
      echo 'You must provide an awesome to question 9.<br/>';
      $complete = false;
    }

    if(empty($question10)) {
      echo 'You must provide an awesome to question 10.<br/>';
      $complete = false;
    }

    if(empty($question11)) {
      echo 'You must provide an awesome to question 11.<br/>';
      $complete = false;
    }

    if(empty($question12)) {
      echo 'You must provide an awesome to question 12.<br/>';
      $complete = false;
    }

    // if the form is filled out correctly then send the email with the form content.
    if ($complete == true) {
      // Emailing Varibles.
      $email_to = "matthewthomsmedia@gmail.com";
      $subject_line = "New Kitten Application From: $first_name $last_name";
      $email_message = "You have received a new New Kitten Application from Online Form. \n\n ".
            "Here is the following Information that was submitted:\n\n ".
            "Name: $first_name $last_name \n\n ".
    		    "Phone Number: $phone \n\n ".
            "Email: $email \n\n ".
            "1. Including yourself please list all family members and their ages:\n\n $question1 \n\n ".
            "2. Do you rent or own your home?: \n\n $question2  \n\n ".
            "3. If renting do you have permission from your landlord to have a pet? \n\n $question3  \n\n ".
            "4. Does anyone in your family have allergies? \n\n $question4  \n\n ".
            "5. Will this kitten be kept as indoor only? \n\n $question5  \n\n ".
            "6. Which sex do you prefer? \n\n $question6  \n\n ".
            "7. List any other animals in the home. \n\n $question7  \n\n ".
            "8. How many hours a day on average will the kitten be left alone? \n\n $question8  \n\n ".
            "9. Have you read our contract/health guarantee? \n\n $question9  \n\n ".
            "10. Are you willing to abide by the Contract/health guarantee? \n\n $question10 \n\n ".
            "11. Have you ever relinquished an animal to the pound or animal shelter? \n\n $question11  \n\n ".
            "12. Please tell us any other information that you feel may be helpful in the approval process of your application. \n\n $question12  \n\n ".

      $headers = "From: $email";

      mail($email_to,$subject_line,$email_message,$headers);
      echo "<h2>We have receive your message, we will get back to you as quick as we can.<br />
        Thank-you.</h2>";
    }

     ?>

  </main>
</body>
</html>
