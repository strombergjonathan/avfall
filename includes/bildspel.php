<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.mySlides {display:none;}
</style>
<body>

<div class="slidesstyle" style="max-width:10000px">
  <img class="mySlides" src="avfall1.jpg" style="width:100%">
  <img class="mySlides" src="sundsvallskommun.jpg" style="width:100%">
  <img class="mySlides" src="avfall2.jpg" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000); // Change image every 2 seconds
}
</script>

</body>
</html>