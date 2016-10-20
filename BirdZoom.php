<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-gb" xml:lang="en-gb">
<head>
<title>Bird cam zoom to 80%</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript">
// refreshRate is the time delay between refreshed image requests, in milliseconds. Once a second would be 1000.
var refreshRate = 100;
// refreshError is the time delay between refreshed image requests that fail, in milliseconds. Retry in one second would be 1000.
var refreshError = 5000;
// Uncomment below, and change web page to go to another web page after x time. 120000 Milliseconds = Two minutes.
// setTimeout(function(){location.href="http://foscam.us/forum/post42139.html#p42139"}, 120000);
</script>

<style>
  #info {float:left; margin-left: 100px;}
</style>

</head>

<body>

<div id="container">
<img id="cam3" src="" onload='setTimeout(function() {src = src.substring(0, (src.lastIndexOf("t=")+2))+(new Date()).getTime()+"&size=.80"}, refreshRate)' onerror='setTimeout(function() {src = src.substring(0, (src.lastIndexOf("t=")+2))+(new Date()).getTime()}, refreshError)' alt='deck' />
<script language="javascript" type="text/javascript">
document.getElementById("cam3").src = "BirdDisplay.php?t=" + (new Date()).getTime() + "&size=.80";
</script>
</div> 

</body>
</html>
