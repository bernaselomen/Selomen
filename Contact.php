<!DOCTYPE html>
<html lang="en">
<body>
<?php include "navbar.php" ?>
  <center>
    <div class"Information">
      <center><img class="Device" src="itsme.webp"></center>
      <h1>Wattpad Books<h1>
        <h3>Help and Support Center:</h3>
        <h4>We are here to help!</h4>
        <h6>If you need assistance with NationalBookstore.com, you've come to the right place.</h6>
        <h6>We made it easy for you to help yourself with our Help and Support Center.</h6>
        <h4>Contact Us through the following;</h4>
        <h4>PhoneNumber:</h4>
        <h5>09151930071</h5>
        <h4>E-mail:</h4>
        <h5>wattystore24/7@email.com</h5>
        

    </center>

<button onclick="confirmNav() ? (doubleConfirmNav() ? navigate() : cancelled() ): cancelled();">Contact</button>


<script type="text/javascript">

function confirmNav() {
    var r=confirm("Do you really want to navigate to 'Contact'?");
    if (r==true) {
      return true;
    } else {
      return false;
    }
}

function doubleConfirmNav() {
    var r=confirm("Are you 100% sure?");
    if (r==true) {
      return true;
    } else {
      return false;
    }
}

function cancelled() {
    alert("cancelling navigation");   
}

function navigate() {
    // purposely delay the redirect to give the image of a high traffic site
     setTimeout(function() {   
         window.location = "contact.php";
     }, 5000);   
 }

</script>

</body>
</html>