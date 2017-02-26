<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="statics/stylesheet.css">
    <link rel="stylesheet" href="statics/bootstrap.css">
    <!-- Handwritten font and Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <title>Contact</title>
    <?php
    if($_POST['btnSubmit']) {
        $recipient="cargilldevin@gmail.com";
        $subject="Contact Form Received";
        $sender=$_POST["sender"];
        $senderEmail=$_POST["senderEmail"];
        $message=$_POST["message"];
        $senderPhone = $_POST["senderPhone"];

        $mailBody="Name: $sender\nEmail: $senderEmail\nPhone: $senderPhone\n\n$message";

        mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

        $thankYou="<p>Thank you! Your message has been sent.</p>";
    }?>
    <script type="text/javascript">
      function formControl(){
        var sender = document.getElementById('senderNameID').value;
        var email = document.getElementById('senderEmailID').value;
        var message = document.getElementById('messageID').value;
        var phone = document.getElementById('senderPhoneID').value;
        var contact_form = document.getElementById('contactFormID');

        if(sender == "" || email == "" || message == "" || phone == ""){
          alert("Error: All form elements with an asterisk must be filled out!")
          return false;
        }
        else {
          contact_form.submit();
          return true;
        }
      }
    </script>
  </head>
  <body>
    <div class="backgroundDarkGrey">
      <div class="container">
        <div class="jumbotron">

          <!-- Header  -->
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <h1>Contact</h1>
              </div>
            </div>
          </div>


          <!-- Menu bar -->
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <div class="navbar-header">
                <span class="navbar-brand">Henry J Gentle</span>
              </div>
              <ul class="nav navbar-nav">
                <li><a href="index.html">Home</a></li>
                <li><a href="resume.html">Resume</a></li>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li class="active"><a href="contact.php">Contact Me</a></li>
              </ul>
            </div>
          </nav>

          <!-- Content -->
          <div class="container">

            <?=$thankYou ?>

            <form method="post" onsubmit="return formControl()" action="contact.php" id="contactFormID">
              <div class="form-group">
                <label class="fontSize16">Name:*</label>
                <input name="sender" class="form-control backgroundClean" id="senderNameID">

                <label class="fontSize16">Email address:*</label>
                <input name="senderEmail" class="form-control backgroundClean" id="senderEmailID">

                <label class="fontSize16">Phone Number:*</label>
                <input name="senderPhone" class="form-control backgroundClean" id="senderPhoneID">

                <label class="fontSize16">Message:*</label>
                <textarea rows="5" cols="20" name="message" class="form-control backgroundClean" id="messageID"></textarea>
                <br>
                <input type="submit" class="btn col-sm-12 btn-primary" name="btnSubmit" value="Submit">
              </div>
            </form>
            <p class="fontSize14 col-sm-12 centerText fontBlack">
              Anything with a * is required to submit.
            </p>




        <!-- end container and jumbotron div -->
        </div>
      </div>
    </div>
  </body>
</html>
