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
    session_start();
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['sex'] = $_POST['sex'];
    $_SESSION['age'] = $_POST['age'];
        
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


       
        echo "<font color='green'>Data added successfully.</font>";
        header("location:canvas3.php");
    }    
    }

    } 
catch(PDOException $e) {
    echo $e->getMessage();
                        }
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Eye tracker</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
    </head>
    <body >
        <div class="container">
            <div class="row">
                <div class="col-md-12 " id="form_container">
                    <h2>Authetifier pour commencer:</h2> 
                    <p> Form : </p>
                    <form role="form" method="POST" action="#" >        
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="username"> UserName:</label>
                                <input type="text" name="username" placeholder="Enter the User Name" class="form-control">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="codepostal">sex:</label>
                                <input type="text" class="form-control" id="codepostal" name="sex" required pattern="({femme,homme,aucun})" placeholder="femme,homme,aucun">
                            </div>
                             <div class="col-sm-6 form-group">
                                <label for="tel"> age:</label>
                                <input type="text" class="form-control" id="tel"  name="age" placeholder=" age" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <input type="submit" name="submit" value="envoyer" >
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>