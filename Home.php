<!DOCTYPE html>
<html lang="en">
<body>
<button onclick="confirmNav() ? (doubleConfirmNav() ? navigate() : cancelled() ): cancelled();">Home</button>


<script type="text/javascript">

function confirmNav() {
    var r=confirm("Do you really want to navigate to 'Home'?");
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
         window.location = "home.php";
     }, 5000);   
 }

</script>

</body>
</html>