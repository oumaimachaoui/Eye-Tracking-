
<?php
//connexion code
try {
  
    $dbconn = new PDO("mysql:host=localhost;dbname=canvas",'root',"");
    $dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    
//insert code
if(isset($_POST['submit'])) {    
    //$idclient = $_POST['idclient'];
    $username= $_POST['username'];
    $sex= $_POST['sex']; 
 	$age=$_POST['age'];
        
    // checking empty fields
    if(empty($username) || empty($age) || empty($sex)) {
                
        if(empty($username)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
      
        if(empty($sex)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }

         if(empty($age)) {
            echo "<font color='red'>Position field is empty.</font><br/>";
        }
    } 
    else { 
        // if all the fields are filled (not empty)            
        //insert data to database        
        $sql = "INSERT INTO user(id,nom,sex,age) VALUES(:idclient,:username,:sex,:age)";
        $query = $dbconn->prepare($sql);

        $query->bindparam(':idclient', $idclient);
        $query->bindparam(':username', $username);
         $query->bindparam(':sex', $sex);
        $query->bindparam(':age', $age);
        
         $query->execute();


       /* $query->execute (
        	array(':id'=> $_POST["id"],
		        	':name' =>  $_POST["name"], 
		        	':email' =>  $_POST["email"], 
		        	':pos' =>  $_POST["pos"])
        		 ); */
        
       
        echo "<font color='green'>Data added successfully.</font>";
        header("location:canvas.php");
    }    
    }

    } 
catch(PDOException $e) {
    echo $e->getMessage();
                        }
 ?>
 <!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form action="#" method="POST">
<table > 
<tr><td><label>USERNAME*</label></td><td><input type="text" name="username" placeholder="Enter the User Name"/></td></tr><br>
<tr><td><label> sex*</label></td><td><input type="text" name="sex"/></td></tr><br>
<tr><td><label> age:</label></td><td> <input type="text" name="age" placeholder=" age"/></td></tr><br>
<tr><td> </td><td><input type="submit" name="submit" value="envoyer" style="float: right;"></tr></td><br>
</table>
</form>
</body>
</html>