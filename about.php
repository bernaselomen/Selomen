<!DOCTYPE html>
<html lang="en">
<body>
  <?php include "navbar.php" ?>
  <center>
    <div class="Information">
      <center><img class="Device" src="itsme.webp"></center>
      <h1>Wattpad Lines<h1>
        <h4>"No one deserves to be hurt but someone can hurt you more than you deserve,</h4>
        <h4>because you love them more than they deserve"</h4>
        <h4>"Same old thing, I got hurt. I got scared. I cried. And no one apologized"</h4>
        <h4>"All you ever did was to stay awake for me"</h4>
        <h4>"Nakabalik na ako sa 2016"</h4>
        <h4>"It's hard to have someone in your heart, but can't have them in your arm's"</h4>
        <h4>"Two kinds of pain. Pain that hurt you and pain that change you"</h4>
        <h4>"I am existing reality and he was a dream traveller"</h4>

</div>
</center>
<button onclick="confirmNav() ? (doubleConfirmNav() ? navigate() : cancelled() ): cancelled();">About</button>


<script type="text/javascript">

function confirmNav() {
    var r=confirm("Do you really want to navigate to 'About'?");
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
         window.location = "about.php";
     }, 5000);   
 }

</script>

</body>
</html>