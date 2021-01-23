<!DOCTYPE html> 
<!--Réalisé par: Chaoui OUMAIMA -->
<!--           :oumaima.chaoui991@gmail.com  -->
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title></title>  
        <style>
            * {
                margin: 0;
                padding: 0;
            }
        
            html {
                font: 16px "Segoe UI", "Segoe WPC", Helvetica, Arial, "Arial Unicode MS", Sans-Serif;
            }
            
            div {
                float: left;
            }

        </style>
    </head>
    
    <body>
        <div id="page_Wrapper">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
             <!-- <p id="serverResponse" name="serverResponse" style="float: right;margin-right: 0px;"></p>-->
            <img class="imgs" src="dolphin.png" width="50" height="100" id="dauphin" style="position: fixed;
               left: 362px; top: 244px;opacity:0.35;" />
            <img class="imgs" src="tortue.png" width="100" height="50" id="tortue" style="position: fixed;
           opacity:0.35;left:200px;top: 420px;" />
            <img class="imgs"  src="ecu.png" width="75" height="100" id="ecureuil" style="position: fixed;
            opacity:0.35;left:170px;top: 100px;" />
          <canvas id="myCanvas" width="500" height="688" style="height: 75%;border-style: dashed;background:'scream.jpg';margin-right: 50%; "></canvas>
        
        </div>
          
</body>   
    
        <script>

        </script>
     

 
<script language="JavaScript">
<!--
var startTime = 0
var start = 0
var end = 0
var diff = 0
var timerID = 0
function chrono(){
    end = new Date()
    diff = end - start
    diff = new Date(diff)
    var msec = diff.getMilliseconds()
    var sec = diff.getSeconds()
    var min = diff.getMinutes()
    var hr = diff.getHours()-1
    if (min < 10){
        min = "0" + min
    }
    if (sec < 10){
        sec = "0" + sec
    }
    if(msec < 10){
        msec = "00" +msec
    }
    else if(msec < 100){
        msec = "0" +msec
    }
    document.getElementById("chronotime").innerHTML =  min + ":" + sec
    timerID = setTimeout("chrono()", 10)
}
function chronoStart(){
    document.chronoForm.startstop.value = "stop!"
    document.chronoForm.startstop.onclick = chronoStop
    document.chronoForm.reset.onclick = chronoReset
    start = new Date()
    chrono()
}
function chronoContinue(){
    document.chronoForm.startstop.value = "stop!"
    document.chronoForm.startstop.onclick = chronoStop
    document.chronoForm.reset.onclick = chronoReset
    start = new Date()-diff
    start = new Date(start)
    chrono()
}
function chronoReset(){
    document.getElementById("chronotime").innerHTML = "00:00"
    start = new Date()
}
function chronoStopReset(){
    document.getElementById("chronotime").innerHTML = "00:00"
    document.chronoForm.startstop.onclick = chronoStart
}
function chronoStop(){
    document.chronoForm.startstop.value = "start!"
    document.chronoForm.startstop.onclick = chronoContinue
    document.chronoForm.reset.onclick = chronoStopReset
    clearTimeout(timerID)
}
//-->

</script>
<legend></legend>
<h2>Trouver les 3 animaux</h2>
<div id="content_hidden">
<p id="aa">Nombre de click:   </p>
<p id="counter">0</p>
<p>Chrono time:   </p>
<span id="chronotime" style="font-size: 20px;">00:00</span>
<form name="chronoForm">

    <input type="hidden" name="startstop" value="start!" onClick="chronoStart()" /><!---->
    <input type="hidden" id="reset" name="reset" value="reset!" onClick="chronoReset()" />  <!---->
</form>
<div id="pos_log" class="log" >x: 0<br />y: 0</div><!---->
<button class="new_pos" onClick="chronoStart()">Rejouer</button>
</div>
<script type="text/javascript">
    $('.new_pos').click(function() {
    $("#dauphin").show();
  $("#tortue").show();
  $("#ecureuil").show();
        // window_Height =  document.getElementById("myCanvas").height;
          //      window_Width =  document.getElementById("myCanvas").width;
  var bodyWidth = document.getElementById("myCanvas").width;
  var bodyHeight = document.getElementById("myCanvas").height;
  var randPosX1 = Math.floor((Math.random()*bodyWidth));
  var randPosY1 = Math.floor((Math.random()*bodyHeight));
  var posLog = document.getElementById('pos_log');
  var posXY = 'x1: ' + randPosX1 + '<br />' + 'y1: ' + randPosY1;
  
  $('#ecureuil').css('left', randPosX1);
  $('#ecureuil').css('top', randPosY1);
  
  posLog.innerHTML = posXY
  /////////IMAGE2
   var bodyWidth = document.getElementById("myCanvas").width;
  var bodyHeight = document.getElementById("myCanvas").height;
  var randPosX2 = Math.floor((Math.random()*bodyWidth));
  var randPosY2 = Math.floor((Math.random()*bodyHeight));
  var posLog = document.getElementById('pos_log');
  var posXY = 'x2: ' + randPosX2 + '<br />' + 'y2: ' + randPosY2;
  
  $('#tortue').css('left', randPosX2);
  $('#tortue').css('top', randPosY2);
  
  posLog.innerHTML = posXY
   /////////IMAGE3
   var bodyWidth = document.getElementById("myCanvas").width;
  var bodyHeight = document.getElementById("myCanvas").height;
  var randPosX3 = Math.floor((Math.random()*bodyWidth));
  var randPosY3 = Math.floor((Math.random()*bodyHeight));
  var posLog = document.getElementById('pos_log');
  var posXY = 'x3: ' + randPosX3 + '<br />' + 'y3: ' + randPosY3;
  
  $('#dauphin').css('left', randPosX3);
  $('#dauphin').css('top', randPosY3);
  
  posLog.innerHTML = posXY
});
     $('#reset').click(function() {
        // window_Height =  document.getElementById("myCanvas").height;
          //      window_Width =  document.getElementById("myCanvas").width;
  var bodyWidth = document.getElementById("myCanvas").width;
  var bodyHeight = document.getElementById("myCanvas").height;
  var randPosX1 = Math.floor((Math.random()*bodyWidth));
  var randPosY1 = Math.floor((Math.random()*bodyHeight));
  var posLog = document.getElementById('pos_log');
  var posXY = 'x1: ' + randPosX1 + '<br />' + 'y1: ' + randPosY1;
  
  $('#ecureuil').css('left', randPosX1);
  $('#ecureuil').css('top', randPosY1);
  
  posLog.innerHTML = posXY
  /////////IMAGE2
   var bodyWidth = document.getElementById("myCanvas").width;
  var bodyHeight = document.getElementById("myCanvas").height;
  var randPosX2 = Math.floor((Math.random()*bodyWidth));
  var randPosY2 = Math.floor((Math.random()*bodyHeight));
  var posLog = document.getElementById('pos_log');
  var posXY = 'x2: ' + randPosX2 + '<br />' + 'y2: ' + randPosY2;
  
  $('#tortue').css('left', randPosX2);
  $('#tortue').css('top', randPosY2);
  
  posLog.innerHTML = posXY
   /////////IMAGE3
   var bodyWidth = document.getElementById("myCanvas").width;
  var bodyHeight = document.getElementById("myCanvas").height;
  var randPosX3 = Math.floor((Math.random()*bodyWidth));
  var randPosY3 = Math.floor((Math.random()*bodyHeight));
  var posLog = document.getElementById('pos_log');
  var posXY = 'x3: ' + randPosX3 + '<br />' + 'y3: ' + randPosY3;
  
  $('#dauphin').css('left', randPosX3);
  $('#dauphin').css('top', randPosY3);
  
  posLog.innerHTML = posXY
});
</script>
<script type="text/javascript">
//document.getElementById('myCanvas').style.padding-left="233px";
document.getElementById("dauphin").style.opacity = "0.35";
document.getElementById("tortue").style.opacity = "0.35";
document.getElementById("ecureuil").style.opacity = "0.35";
window.onload = canvas;
 
function canvas()
{
  var myCanvas = document.getElementById("myCanvas");
 
  if( myCanvas && myCanvas.getContext("2d") ) 
  {
    var context = myCanvas.getContext("2d");
  
    var myImg = new Image();
    var myImg2 = new Image();
    myImg.src= "dolphin2.png";
    myImg2.src= "scream.jpg";
  
    myImg.onload  = function() {
        //setTimeout(chronoStart(), 1000000);
        context.drawImage(myImg2,0, 0,context.canvas.width, context.canvas.height);
        //context.drawImage(document.getElementById('image'),150, 55, 83, 94);
      }
      /**/
} 
}
</script> 

<?php 
//session_start();
if (isset($_SESSION['username']) && isset($_SESSION['sex']) && isset($_SESSION['age'])) {
 echo ($_SESSION['username']);
 echo($_SESSION['sex']);
 echo ($_SESSION['age']);
}
?>
<script type="text/javascript">
    
    $(document).ready(function(e){
        $('#dauphin').click(function(){
            ///////////////
               var bodyWidth = document.getElementById("myCanvas").width;
                  var bodyHeight = document.getElementById("myCanvas").height;
                  var randPosX3 = Math.floor((Math.random()*bodyWidth));
                  var randPosY3 = Math.floor((Math.random()*bodyHeight));
                  var posLog = document.getElementById('pos_log');
                  var posXY = 'x3: ' + randPosX3 + '<br />' + 'y3: ' + randPosY3;
                  
                  $('#dauphin').css('left', randPosX3);
                  $('#dauphin').css('top', randPosY3);
                  
                  posLog.innerHTML = posXY;
            ////////////
                var x5 = $("#dauphin").position();
                var dt = new Date();
                var temp = $(this).attr('id');
                var time = dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();  
                //var y=x5.top;
                //var y2=x5.left;
                //var offset = $("#image").offset();
                var leftx= $("#dauphin").offset().left ;
                var topx=$("#dauphin").offset().top ;
                //alert("left: " + randPosX3 + " top: " + randPosY3 );

            //var time="hello_sql";
            var positionclick = $('#positionclick').val();
            $.ajax({
                type    :'POST',
                url     :"insert.php",
                data    :{positionclick:temp,clickdate:time,topx:randPosX3,leftx:randPosY3},
                successkey: "value", function(result){
                    alert(result);
                     location.reload(true);
                }
            })

        });
        $('#ecureuil').click(function(){
            //alert("hohiuhiuhuih");    
              var bodyWidth = document.getElementById("myCanvas").width;
                  var bodyHeight = document.getElementById("myCanvas").height;
                  var randPosX1 = Math.floor((Math.random()*bodyWidth));
                  var randPosY1 = Math.floor((Math.random()*bodyHeight));
                  var posLog = document.getElementById('pos_log');
                  var posXY = 'x1: ' + randPosX1 + '<br />' + 'y1: ' + randPosY1;
                  
                  $('#ecureuil').css('left', randPosX1);
                  $('#ecureuil').css('top', randPosY1);
                  
                  posLog.innerHTML = posXY;
                /////////////
                var x2 = $("#ecureuil").position();
                var dt2 = new Date();
                var temp2 = $(this).attr('id');
                var time2 = dt2.getHours() + ":" + dt2.getMinutes() + ":" + dt2.getSeconds();  
                var leftx2= $("#ecureuil").offset().left ;
                var topx2=$("#ecureuil").offset().top ;
               //alert("left: " + randPosX1 + ", top: " + randPosX1 );   
                $.ajax({
                type    :'POST',
                url     :"insert.php",
                data    :{positionclick:temp2,clickdate:time2,topx:randPosX1,leftx:randPosY1},
                successkey: "value", function(result){
                    alert(result);
                     location.reload(true);
                }
            }) 
        });  
        $('#tortue').click(function(){
            ///////////
            /////////IMAGE2
               var bodyWidth = document.getElementById("myCanvas").width;
              var bodyHeight = document.getElementById("myCanvas").height;
              var randPosX2 = Math.floor((Math.random()*bodyWidth));
              var randPosY2 = Math.floor((Math.random()*bodyHeight));
              var posLog = document.getElementById('pos_log');
              var posXY = 'x2: ' + randPosX2 + '<br />' + 'y2: ' + randPosY2;
              
              $('#tortue').css('left', randPosX2);
              $('#tortue').css('top', randPosY2);
              
              posLog.innerHTML = posXY;
            ///////////
                var x1 = $("#tortue").position();
                var dt1 = new Date();
                var temp1 = $(this).attr('id');
                var time1 = dt1.getHours() + ":" + dt1.getMinutes() + ":" + dt1.getSeconds();  
                //var y=x5.top;
                //var y2=x5.left;
                //var offset = $("#image").offset();
                var leftx1= $("#tortue").offset().left ;
                var topx1=$("#tortue").offset().top ;
             //alert("left: " + randPosX2 + " top: " + randPosY2 );
/**/
            $.ajax({
                type    :'POST',
                url     :"insert.php",
                data    :{positionclick:temp1,clickdate:time1,topx:randPosX2,leftx:randPosY2},
                successkey: "value", function(result){
                    alert(result);
                     location.reload(true);
                }
            })
             });
              
    });
</script>
<script type="text/javascript">
    var i=0;
    $( window ).on( "load", function() {
        $('#content_hidden').hide();
       // chronoStart(); 
    });
    //////////////
    $('#ecureuil').one('click', function() {
    $('#content_hidden').show(); 

        //chronoStart();  
       i++;
       if (i==1) {chronoStart();}
       
     });
    $('#dauphin').one('click', function() {
    $('#content_hidden').show();   
      //chronoStart(); 
        i++;
        if (i==1) {chronoStart();}
        
    });
    $('#tortue').one('click', function() {
    $('#content_hidden').show();   
      // chronoStart(); 
        i++; 
         if (i==1) {chronoStart();}
       
    });  
 $('.new_pos').click(function() {
        var count1 = 0;
            count1==0;
         $("#counter").html("0");     
        $("#dauphin").click(function() {
            if(count1!=2) {
            count1++;
            $("#counter").html(count1);
             $("#dauphin").hide();
                         }
            else {
                // count=0;
                $("#counter").html("Oheee Vous avez fini le jeu !! ").css('color', 'green').css("font-size", "20px"); 
                $("#dauphin").hide(); 
                 chronoStop();
                 count1=0;
            }
               
        });
        $("#ecureuil").click(function() {
            if(count1!=2) {
            count1++;
            $("#counter").html(count1);
            $("#ecureuil").hide();
            }
            else {
                 //count=0;
                $("#counter").html("Oheee Vous avez fini le jeu !! ").css('color', 'green').css("font-size", "20px"); 
                $("#ecureuil").hide();  
                 chronoStop();
                 count1=0;
            }
            
        });
        $("#tortue").click(function() {
            if(count1!=2) {
            count1++;
            $("#counter").html(count1);
             $("#tortue").hide();
            }
            else{
                $("#counter").html("Oheee Vous avez fini le jeu !! ").css('color', 'green').css("font-size", "20px"); 
                $("#tortue").hide();   
                chronoStop();
                count1=0;
            }

        });
      }); 

        var count = 0;
     
        $("#dauphin").click(function() {
            if(count<2) {
            count++;
            $("#counter").html(count);
             $("#dauphin").hide();
                         }
            else {
                // count=0;
                $("#counter").html("Oheee Vous avez fini le jeu !! ").css('color', 'green').css("font-size", "20px");; 
                $("#dauphin").hide(); 
                 chronoStop();
                 count = 0;
            }
               
        });
        $("#ecureuil").click(function() {
            if(count<2) {
            count++;
            $("#counter").html(count);
            $("#ecureuil").hide();
            }
            else {
                 //count=0;
                $("#counter").html("Oheee Vous avez fini le jeu !! ").css('color', 'green').css("font-size", "20px"); 
                $("#ecureuil").hide();  
                 chronoStop();
                 count = 0;
            }
            
        });
        $("#tortue").click(function() {
            if(count<2) {
            count++;
            $("#counter").html(count);
             $("#tortue").hide();
            }
            else{
                $("#counter").html("Oheee Vous avez fini le jeu !! ").css('color', 'green').css("font-size", "20px"); 
                $("#tortue").hide();   
                chronoStop();
                count = 0;
            }

        });

</script>
<div id="content_hidden">

</div>
</html>