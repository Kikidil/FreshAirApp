<?PHP
/**
 * comments.php
 * for user to enter comments
 */
include_once 'db_utility.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $query="INSERT INTO reviews(user_id,text,rating) values(".$_POST['user_id'].",'".$_POST['comments']."','".$_POST['rating']."')";
    $mysqli->query($query);        
    header('Location: index.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Park Researcher</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="main.css" media="all" />	   	            
        <meta name="keywords" content="Park, Maps , Suburb,Brisbane" />
        <meta name="description" content="A park researcher" />
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
        <!-- This section is the result search button where the user need to select the suburb -->
            <div align="center">                
                        <form method="post" action="comments.php" >
                            <br/>
                            <br/>
                            <br/>
                            <p>
                            <label for="comment">Comments:</label>
                            </p>
                            <p>
                                <input type="hidden" name="user_id" value="<?php echo @$_GET['id'] ?>"/>                                
                                <textarea  name="comments" rows="20" cols="25">
                                </textarea>
                            </p>
                            <p>
                            <label for="rating">Rating(0-5):</label>
                            </p>
                            <p>                                
                                <input class="small" type="number" name="rating" maxlength="50" />                                
                            </p>
                            <p>
                                <input class="button" type='submit' value='Submit' />
                                <input class="button" type='reset' value='Reset' />                                
                             </p>
                        </form>                    
            </div>             
        <p align="center"><font size="3" face="verdana" color="green">CAB230 Web Computing Project</font></p>
    </body>
</html>


