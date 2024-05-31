<?php

session_start();
$error = "";
if (array_key_exists("logout", $_GET)) {
    unset($_SESSION);
    setcookie("id", "", time() - 60 * 60);
    $_COOKIE["id"] = "";
    session_destroy();
} else if ((array_key_exists("id", $_SESSION) and $_SESSION['id']) or (array_key_exists("id", $_COOKIE) and $_COOKIE['id'])) {

    header("location: loggedinpage.php");
}

$error = '';
if (isset($_POST["submit"])) {
   include("connection.php");

    if (!$_POST["email"]) {
        $error .= "Email is required!<br>";
    }
    if (!$_POST["password"]) {
        $error .= "Password is required!<br>";
    }
    // if ($error != "") {
    //     $error = "There is/are error(s) in your form<br>" . $error;
    // }
    
    else {
        if ($_POST['signup'] == "1") {

            $query = "select * from login_details where email='" . mysqli_real_escape_string($link, $_POST['email']) . "'limit 1";
            $result = mysqli_query($link, $query);
            if (mysqli_num_rows($result) > 0) {
                $error = "This email is already taken! Please try with another email.";
            } else {

                $query = "insert into login_details (email, password) values('" . mysqli_real_escape_string($link, $_POST['email']) . "','" . mysqli_real_escape_string($link, $_POST['password']) . "')";

                if (!mysqli_query($link, $query)) {
                    $error = "<p>Could not sign you up .. try again</p>";
                } else {
                    $email = $_POST['email'];
                    $query = "select * from login_details where email='".$email."'";
                    $result = mysqli_query($link, $query);
                    $r = mysqli_fetch_assoc($result);
                    $salt = md5($r['id']);
                    $query = "update login_details set password='" . md5($salt . md5($_POST['password'])) . "' where email='" . $_POST['email'] . "'";
                    $result = mysqli_query($link, $query);
                    
                    $_SESSION['id'] = $r['id'];
                    if ($_POST['stayloggedin'] == '1') {
                        setcookie("id", $r['id'], time() + 60 * 60 * 24 * 365);
                    }

                    // echo "Sign up successful";
                    header("location: loggedinpage.php");
                }
            }
        } else {


            $query = "select *from login_details where email='" . mysqli_real_escape_string($link, $_POST['email']) . "'";
            $result = mysqli_query($link, $query);
            $row = mysqli_fetch_array($result);
            if (isset($row)) {
                $hashedpassword = md5(md5($row['id']) . md5($_POST['password']));
                if ($hashedpassword == $row['password']) {
                    $_SESSION['id'] = $row['id'];
                    if ($_POST['stayloggedin'] == '1') {
                        setcookie("id", $row['id'], time() + 60 * 60 * 24 * 365);
                    }
                    header("location: loggedinpage.php");
                } else {
                    $error = "This email/password combination could not be found";
                }
            } else {
                $error = "This email/password combination could not be found";
            }
        }
    }
}

?>















    <?php include("header.php");
    ?>
    <div class="container" id="home-container">
        <h1 style="font-family: 'Rampart One', cursive;" class="zoom1">Secret Diary</h1>
        <p><strong>Store your thoughts permanently and securely!</strong></p>

        <div id="error"><?php if($error!=''){

            echo'<div class="alert alert-danger" role="alert">'.$error.'
          </div>';

        }; ?></div>
        <form action="" method="post" id="signup">
            <p>Interested? Sign up now</p>
            <fieldset class="form-group">
                <input class="form-control zoom " type="email" placeholder="Email" name="email">
            </fieldset>
            <fieldset class="form-group">
                <input class="form-control zoom" type="password" placeholder="Password" name="password">
            </fieldset>
            <div class="checkbox">
                <input type="checkbox" id="che" name="stayloggedin" value="1">
                <label for="che" style="font-weight:none;">Remember me</label>
                </input>
                <input type="hidden" name="signup" value="1">
            </div>
            <fieldset class="form-group">
                <input class="btn btn-success  " type="submit" placeholder="Sign up" value="Sign in" name="submit">
            </fieldset>
            <p>Already have an account? <a href="#" class="toggleforms">Log in</a></p>

        </form>
        <form action="" method="post" id="login">
        <p>Login using your email and password.</p>

            <fieldset class="form-group">
                <input class="form-control zoom" type="email" placeholder="Email" name="email">
            </fieldset>
            <fieldset class="form-group">
                <input class="form-control zoom" type="password" placeholder="Password" name="password">
            </fieldset>
            <div class="checkbox">
                <input type="checkbox"id="chel" name="stayloggedin" value="1">
                <label for="chel" style="font-weight:none;">Remember me</label>
                </input>
                <input type="hidden" name="signup" value="0">
            </div>
            <fieldset class="form-group">
                <input class="btn btn-success" type="submit" placeholder="Sign up" value="Log in" name="submit">
            </fieldset>
            <p>Don't have an account? <a href="#" class="toggleforms">Sign up</a></p>

        </form>

    </div>



  <?php
  include("footer.php");
  ?>