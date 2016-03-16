<script type="text/javascript" src="http://ajax.googleapis.com/ajax/
libs/jquery/1.3.0/jquery.min.js">
</script>
<body onload="myFunction()">
<script type="text/javascript" >
var myVar;

function myFunction() {
    myVar = setInterval(alertFunc, 10);
}

function alertFunc() {
    $('#mydiv').load('newfile.txt');
}
</script>
<div id="mydiv"></div>
