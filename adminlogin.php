<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/psu-logo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Page</title>
</head>
<body class="adminlogin-body">
    <div class="adminheader">
        
    </div>
    <div class="adminbody">
        <div class="admbody">
            <div class="adminlogin">
                <div class="adlogheader">
                    <div class="adbanner">
                        <img src="img/psu-banner.png" alt="psu banner" class="psu-banner" id="psu-banner">
                    </div>
                    <div class="adlogheader1">
                        <h3>ADMIN LOGIN PAGE</h3>
                    </div>
                    <div class="adlogheader2">
                        <p id="alert">Control Panel Login</p>
                    </div>
                </div>
                <div class="adinput1">
                    <div class="username-icon" id="username-icon">
                        <div class="user-icon">
                            <img src="img/user.png" alt="Username Icon">
                        </div>
                        <div class="user-input">
                            <input type="text" name="username" placeholder="Username" id="username" required>
                        </div>
                    </div>
                </div>
                <div class="adinput2">
                    <div class="password-icon" id="password-icon">
                        <div class="pass-icon">
                            <img src="img/black-eye.png" alt="Username Icon" id="toggle-password">
                        </div>
                        <div class="pass-input">
                            <input type="password" name="username" placeholder="Password" id="password" required> 
                        </div>
                    </div>
                </div>
                <div class="adinput3">
                    <input type="submit" value="Login" class="admlogin" onclick="admin()">
                </div>
            </div>
        </div>
        <div class="admfooter">
            <!-- <div class="footer-1">
                <p>Pangasinan State University</p>
            </div>
            <div class="footer-2">
                <img src="img/internet.png">
                <a href="https://main.psu.edu.ph/" target="_blank">www.psu.edu.ph</a>
            </div> -->
        </div>
    </div>

    <script>
        var adminUser = "admin";
        var adminPass = "admin";
        var alert = document.getElementById("alert");
        var username = document.getElementById("username");
        var password = document.getElementById("password");
        var usericon = document.getElementById("username-icon");
        var passicon = document.getElementById("password-icon");
        var togglePassword = document.getElementById("toggle-password");

        const admin = () => {
            if(username.value===adminUser && password.value === adminPass){
                document.location.href= 'adminhomepage.php';
            }else{
                document.getElementById("username-icon").style.border = "2px solid red";
                document.getElementById("password-icon").style.border = "2px solid red";
                alert.innerHTML = "Invalid login credentials";
                alert.style.color = "red";
            }
        }

        togglePassword.addEventListener("click", function() {
            if (password.type === "password") {
                password.type = "text";
                togglePassword.src = "img/white-eye.png";
            } else {
                password.type = "password";
                togglePassword.src = "img/black-eye.png";
            }
        });
    </script>
</body>
</html>