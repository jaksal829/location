<!DOCTYPE html>
<html>
<body>

<p id="demo"></p>

<script>
var x = "";
var y = "";

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
  }
}
function showPosition(position) {
  x = position.coords.latitude;
  y = position.coords.longitude;
  document.write(x);
  document.write("<br>"+y);
}
getLocation()
</script>

</body>
</html>
