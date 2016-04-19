<?PHP
/**
 * register user
 */
include_once 'db_utility.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['username'] && $_POST['password'] && $_POST['email']) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $gender = 'Male'; //$_POST['gender'];
        $streetno = $_POST['streetno'];
        $streetname = $_POST['streetname'];
        $streettype = $_POST['streettype'];
        $suburb = $_POST['suburb'];
        $postcode = $_POST['postcode'];
        $state = $_POST['state'];
        $query = "INSERT INTO members(first_name,last_name,sex,user_name,password,street_number,street_name,street_type,suburb,post_code,email_address) "
                . " VALUES ( '" . $firstname . "','" . $lastname . "','" . $gender . "','" . $username . "','" . md5($password) . "','" . $streetno . "','" . $streetname . "','" . $streettype . "','" . $suburb . "','" . $postcode . "','" . $email . "')";

        $mysqli->query($query);
        header('Location: index.php');
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Signup Page</title>
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
    <script src="js/registervalidation.js"></script>
</head>
<body>
    <div class="center">
        <div  class="form">
            <form method="post" name="form" action="register.php" onsubmit="return validateForm()">
                <fieldset>
                    <legend>Person Details</legend>
                    <div class="field">
                        <label for="username">User Name:</label>
                        <input class="small" type="text" name="username"/>
                    </div>
                    <div class="field">
                        <label for="password">Password:</label>
                        <input class="small" type="password" name="password" maxlength="15" />
                    </div>
                    <div class="field">
                        <label for="password">Repeat Password:</label>
                        <input class="small" type="password" name="repeat_password" maxlength="15" />
                    </div>
                    <div class="field">
                        <label for="firstname">First Name:</label>
                        <input type="text" name="firstname"/>
                    </div>
                    <div class="field">
                        <label for="last name">Last Name:</label>
                        <input type="text" name="lastname"/>
                    </div>
                    <div class="field">	
                        <label for="malefemale1">Sex:(optional)</label>
                        <input class="radio" type="radio"  value="Male" name="gender"/>Male<input class="radio" type="radio" name="gender" value="Female"/>Female
                    </div>
                    <div class="field">
                        <label for="email">Email Address:</label>
                        <input type="text" name="email"/>
                    </div>			         
                    <div class="field">
                        <label for="email">Date of birth:</label>
                        <input type="text" name="birthdate" placeholder="dd/mm/yyyy"/>                       
                    </div>			                           
                    <div class="field">
                        <!-- Heading used to separate address fields for ease of use -->
                        <p class="formheading"><strong>Residential Address</strong></p>
                        <label for="streetno">Street Number:</label>
                        <input class="small" type="text" name="streetno"/>
                    </div>
                    <div class="field">
                        <label for="streetname">Street Name:</label>
                        <input type="text" name="streetname"/>
                    </div>
                    <div class="field">
                        <label for="streettype">Street Type:</label>
                        <input class="small" type="text" name="streettype"/>
                    </div>
                    <div class="field">
                        <label for="suburb">Suburb:</label>
                        <input class="small" type="text" name="suburb"/>
                    </div>
                    <div class="field">
                        <label for="postcode">Postcode:</label>
                        <input class="small" type="text" name="postcode"/>
                    </div>
                    <div class="field">
                        <label for="state">State:</label>
                        <select name="state">
                            <option>Please Select</option>
                            <option>New South Wales</option>
                            <option>Queensland</option>
                            <option>Victoria</option>
                            <option>Australia Capital Territory</option>
                            <option>South Australia</option>
                            <option>Western Australia</option>
                            <option>Northern Territory</option>
                        </select><br />
                    </div>                            
                    <div class="field" align="center">
                        <input class="button" type='submit' value='Submit' />
                        <input class="button" type='reset' value='Reset' />                                
                    </div>
                </fieldset>
            </form>
        </div>      
    </div>
    <p align="center"><font size="3" face="verdana" color="green">CAB230 Web Computing Project</font></p>
</body>
</html>
