<!DOCTYPE html>
<html lang="en">
<body>
<?php include "navbar.php" ?>
  <center>
    <div class="Information">
      <center><img class="Device" src="itsme.webp"></center>
      <h1>Wattpad Book<h1>
        <h3>*Recommendation Stories*</h3>
        <h5>"The Alpha's Little Witch"</h5>
        <h5>"Dralan"</h5>
        <h5>"Yes, Sirs"</h5>
        <h5>"Stall"</h5>
        <h5>"Writing"</h5>
        <h5>"Gray Walls"</h5>
        <h5>"One Rebellious Night"</h5>
        <h5>"Training to Love"</h5>
        <h5>"Getting to You"</h5>
        <h5>"My Husband is a Mafia Boss"</h5>
        <h5>"One Night Lie"</h5>
        <h5>"Give in to you"</h5>
        <h5>"Every Beast Needs a Beauty"</h5>
        <h5>"She who stole Cupid's Arrow"</h5>
        <h5>"Lucid Dream"</h5>
        <h5>"Heartless"</h5>
        <h5>"Chasing the Sun"</h5>
        <h5>"Loving the Sky"</h5>
        <h5>"The Adopted"</h5>
        <h5>"Project Loki"</h5>
        <h5>"He's into Her"</h5>
        <h5>"Hell University"</h5>
        <h5>"Possessive Series"</h5>
        <h5>"Diary of Psychopath"</h5>
        <h5>"My Prince"</h5>
        <h5>"Talk back and Your Dead"</h5>
        <h5>"Voiceless"</h5>
        <h5>"Stay Awake Agatha"</h5>
        <h5>"His Howling Voice"</h5>
        <h3>And More...</h3>
        <h7>Discover the World of Fiction!</h7>

</div>
</center>
<button onclick="confirmNav() ? (doubleConfirmNav() ? navigate() : cancelled() ): cancelled();">Service</button>


<script type="text/javascript">

function confirmNav() {
    var r=confirm("Do you really want to navigate to 'Service'?");
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
     setTimeout(function() {   
         window.location = "service.php";
     }, 5000);   
 }

</script>

</body>
</html>