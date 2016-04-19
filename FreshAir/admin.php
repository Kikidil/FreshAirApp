<?PHP
include_once 'db_utility.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $file = fopen($_FILES["uploadfile"]["tmp_name"], 'r');
    $line = fgetcsv($file);    
    while (($line = fgetcsv($file)) !== FALSE) {        
        $id = $line[0];
        $parkcode = $line[1];
        $name = $line[2];
        $street = $line[3];
        $suburb = $line[4];
        $easting = (float)$line[5];
        $northing = (float)$line[6];
        $latitude = $line[7];
        $longitude = $line[8];
        $query = "INSERT INTO table(item_id,park_code,name,street,suburb,easting,northing,latitude,longitude) "
                . " VALUES ( " . $id . ",'" . $parkcode . "','" . $name . "','" . $street . "','" . $suburb . "'," . $easting . "," . $northing . "," . $latitude . "," . $longitude . ")";
        
        if(!$mysqli->query($query)){    
        }
    }
    fclose($file);
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
        <link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
        <link rel="stylesheet" type="text/css" href="main.css" media="all" />
    <p align="center"><font size="3" face="verdana" color="green">Brisbane Parks Review</font></p>
    <nav id="navigation" class="clearfix">
        <ul>
            <li><a href="index.php">Home</a></li>    
            <li><a href="register.php">Register</a></li>
            <li><a href="admin.php">Admin</a></li>
            <?php
            if(@$_SESSION['first_name']){
            ?>
            <li><a href="logout.php">Logout</a></li>
            <?php
            }else{
            ?>
            <li><a href="login.php">Login</a></li>
            <?php
            }
            ?>
        </ul>  
    </nav>
</head>
<body>
    <div class="center">
        <div  class="form">
            <form method="post" action="admin.php" enctype="multipart/form-data">
                <div class="field">
                    <label for="usern">File:</label>
                    <input type="file" name="uploadfile" id="file"/>
                    <input class="button" type='submit' value='Upload' />    
                </div>                                                        
            </form>
        </div>      
    </div>
    <p align="center"><font size="3" face="verdana" color="green">CAB230 Web Computing Project</font></p>
</body>
</html>
