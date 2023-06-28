<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <div class="hhead">
        <div class="adlogo">
            <img src="img/fashion-clothes.png" class="psu-logo" onclick="psulogo()">
            <ul class="links">
                <li><a href="homepage.php" style="color: gold">Schedule</a></li>
                <li><a href="account.php" >Account</a></li>
                <li><a href="#">Blank</a></li>
                <li><a href="#">Blank</a></li>
            </ul>
            <div class="dropdown-menu">
                <ul class="links">
                    <li><a href="homepage.php" style="color: gold">Schedule</a></li>
                    <li><a href="account.php">Account</a></li>
                    <li><a href="#">Blank</a></li>
                    <li><a href="#">Blank</a></li>
                </ul>
            </div>
        </div>
        <!-- <div class="profile">
            <img src="img/fashion-clothes.png" alt="logo" class="logo">
        </div> -->
        <div class="header">
            <h2>Schedule</h2>
        </div>
    </div>
    <div class="hbody">
        <div class="oversched">
            <div class="oversched-head">
                <h3>Schedule of Overall Subject</h3>
            </div>
            <div class="oversched-body">

            </div>
        </div>
    </div>
    <div class="hfooter">
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