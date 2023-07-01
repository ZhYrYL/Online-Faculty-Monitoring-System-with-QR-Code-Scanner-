<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Analytics</title>
</head>
<body>
    <div class="adhomeheader">
        <div class="adlogo">
            <img src="img/psu-logo.png" class="psu-logo" onclick="psulogo()">
            <ul class="links">
                <li><a href="adminhomepage.php">Attendance</a></li>
                <li><a href="adminanalytics.php" style="color: gold">Analytics</a></li>
                <li><a href="adminschedule.php">Schedule</a></li>
                <li><a href="adminaddpersonal.php">Add Instructor</a></li>
                <li><a href="adminnotification.php">Notification</a></li>
                <li><a href="adminaccount.php">Account</a></li>
            </ul>
            <div class="dropdown-menu">
                <ul class="links">
                    <li><a href="adminhomepage.php">Attendance</a></li>
                    <li><a href="adminanalytics.php" style="color: gold">Analytics</a></li>
                    <li><a href="adminschedule.php">Schedule</a></li>
                    <li><a href="adminaddpersonal.php">Add Instructor</a></li>
                    <li><a href="adminnotification.php">Notification</a></li>
                    <li><a href="adminaccount.php">Account</a></li>
                </ul>
            </div>
        </div>
        <div class="adtab">
            <h2>Analytics</h2>
        </div>
    </div>
    <div class="adbodyanalytics">
        <div class="analytics-container">
            <div class="analytics-empty"></div>
            <div class="analytics">
                <div class="analytics-header">
                    <h3>Attendance Rate</h3>
                </div>
                <div class="analytics-footer"></div>
            </div>
            <div class="analytics">
                <div class="analytics-header">
                    <h3>Frequency of Logins by Instructor</h3>
                </div>
                <div class="analytics-footer"></div>
            </div>
            <div class="analytics">
                <div class="analytics-header">
                    <h3>Timeliness</h3>
                </div>
                <div class="analytics-footer"></div>
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