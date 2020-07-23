<!DOCTYPE html>

<?php
require('loginauth.php');
?>

<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="resources/lms.css" rel="stylesheet">
</head>
    <body>
 
        <div class="col-3" style="padding:0px 0px;float:left;height:100%">
            <div id="particles-js"></div>
            <script type="text/javascript" src="resources/particles.js-master/particles.js"></script>
            <script type="text/javascript" src="resources/particles.js-master/app.js"></script>
        </div>
        
        <div class="login-card" style="float:left;height:100%;">
            <div class="log-form">
              <form method="post" action="loginauth.php">
                <p id="def-text" style="text-align:center;font-weight:bold;">Login</p>
                <input type="text" name="user_id"  placeholder="Username" />
                <input type="password" name="user_pass" placeholder="Password" />
                <button id="def-btn" type="submit" value="Submit" >Login </button>
              </form>
                <?php if(isset($_GET["error"])):?>
                    <div class="error">Invalid Username or Password</div>
                <?php endif; ?>  
            </div>
        </div>
            
    </body>
</html>

    