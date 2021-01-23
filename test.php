<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<div id="pos_log" class="log">x: 0<br />y: 0</div>
<button class="new_pos">New position</button>
<img src="ecu.png" width="75" height="100" id="rand_pos" style="position: fixed;
           " />
           <img src="ecu.png" width="75" height="100" id="rand_pos2" style="position: fixed;
           " />
           <img src="ecu.png" width="75" height="100" id="rand_pos" style="position: fixed;
           " />
</body>
<script type="text/javascript">
	$('.new_pos').click(function() {
  var bodyWidth = document.body.clientWidth
  var bodyHeight = document.body.clientHeight;
  var randPosX = Math.floor((Math.random()*bodyWidth));
  var randPosY = Math.floor((Math.random()*bodyHeight));
  var posLog = document.getElementById('pos_log');
  var posXY = 'x: ' + randPosX + '<br />' + 'y: ' + randPosY;
  
  $('#rand_pos').css('left', randPosX);
  $('#rand_pos').css('top', randPosY);
  
  posLog.innerHTML = posXY
  /////////IMAGE2
   var bodyWidth = document.body.clientWidth
  var bodyHeight = document.body.clientHeight;
  var randPosX = Math.floor((Math.random()*bodyWidth));
  var randPosY = Math.floor((Math.random()*bodyHeight));
  var posLog = document.getElementById('pos_log');
  var posXY = 'x: ' + randPosX + '<br />' + 'y: ' + randPosY;
  
  $('#rand_pos2').css('left', randPosX);
  $('#rand_pos2').css('top', randPosY);
  
  posLog.innerHTML = posXY
});
</script>
</html>