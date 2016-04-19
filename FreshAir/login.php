<?PHP
/**
 * login page for user to login
 */
include_once 'db_utility.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['username'] && $_POST['password']) {
        $username=$_POST['username'];
        $password=$_POST['password'];        
        
        if($username=='admin'&&$password='admin'){
           $_SESSION['fisrt_name']="Admin"; 
           header('Location: index.php');
        }
        
        /**
         * we use md5 to hash password, so here we use md5 hashed password to compare
         */
        $query="select * from  members where user_name='$username' and password='".md5($password)."'";              
        
        echo $query;
        
        $result = $mysqli->query($query);         
        $row_cnt = $result->rowCount();
        if($row_cnt!=1){
             echo "<b><font color='red'>Invalid username/password</font></b>";
        }else{
           $row=$result->fetch(PDO::FETCH_ASSOC);           
           $_SESSION['first_name']=$row['user_name']; 
           header('Location: index.php');
        }
      } 
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Park Researcher</title>
        <!-- initialising the style sheet and relevant meta data -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="main.css" media="all" />	   	            
        <p align="center"><font size="3" face="verdana" color="green">Brisbane Parks Review</font></p>
    <nav id="navigation" class="clearfix">
        <ul>
            	<li class="active"><a href="index.php">Home</a></li>
				<li><a href="statistics.php">Statistics</a></li>
				<li><a href="aboutus.html">About Us</a></li>
				<li><a href="awareness.html">Awareness</a></li>
				<li><a href="contactus.php">Contact Us</a></li>
				<li><a class="btn" href="signin.html">SIGN IN / SIGN UP</a></li>
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
        <!-- The second outmost content wrapper to ensure opperability with smaller resolution browsers -->
        <div class="center">           
            
            
                        <form method="post" action="login.php" >
                            <p>
                                <label for="username">User Name:</label>
                                <input class="small" type="text" name="username"/>
                            </p>
                            <p>
                                <label for="password">Password:</label>
                                <input class="small" type="password" name="password" maxlength="15" />                                
                            </p>
                            <p>
                                <input class="button" type='submit' value='Login' />
                                <input class="button" type='reset' value='Reset' />                                
                             </p>
                        </form>                    
            </div>
         <p align="center"><font size="3" face="verdana" color="green">CAB230 Web Computing Project</font></p>

    </body>
</html>

