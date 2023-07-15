<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
</head>
<body>
    <div class="hhead">
        <div class="adlogo">
            <img src="img/fashion-clothes.png" class="psu-logo" onclick="psulogo()">
            <ul class="links">
                <li><a href="homepage.php" >Schedule</a></li>
                <li><a href="account.php" style="color: gold">Account</a></li>
                <li><a href="attendancelog.php" >Attendance Log</a></li>
                <li><a href="#">Blank</a></li>
            </ul>
            <div class="dropdown-menu">
                <ul class="links">
                    <li><a href="homepage.php">Schedule</a></li>
                    <li><a href="account.php"  style="color: gold">Account</a></li>
                    <li><a href="attendancelog.php" >Attendance Log</a></li>
                    <li><a href="#">Blank</a></li>
                </ul>
            </div>
        </div>
        <!-- <div class="profile">
            <a href="homepage.php"><img src="img/back.png" alt="back button" class="back-btn"></a>
        </div> -->
        <div class="header">
            <h2>Account Name</h2>
        </div>
    </div>
    <div class="abody">
        <div class="account-container">
            <div class="abody1">
                <div class="acc-pic">
                    <img src="img/posadas.jpg" alt="instructor picture" class="instruc-pic">
                </div>
                <div class="afaculty">
                    <h2>Faculty</h2>
                </div>
            </div>
            <div class="abody2">
                <div class="aemail">
                    <div class="aemail1">
                        <h3>Email</h3>
                    </div>
                    <div class="aemail2">
                        <p>instructor@gmail.com</p>
                    </div>
                </div>
                <div class="aphone">
                    <div class="aphone1">
                        <h3>Mobile Phone</h3>
                    </div>
                    <div class="aphone2">
                        <p>09123456789</p>
                    </div>
                </div>
                <div class="aempty"></div>
            </div>
        </div>
    </div>
    <div class="adhomefooter">
        <div class="footer-1">
            <p>Pangasinan State University</p>
        </div>
        <div class="footer-2">
            <img src="img/internet.png">
            <a href="https://main.psu.edu.ph/" target="_blank">www.psu.edu.ph</a>
        </div>
    </div>


    <script>
        const toggleBtn = document.querySelector('.psu-logo')
        const dropDown = document.querySelector('.dropdown-menu')

        toggleBtn.onclick = function () {
            dropDown.classList.toggle('open');
        }
        // const psulogo = () => {
        //     image.classList.toggle("open");
        // };
    </script>
</body>
</html>