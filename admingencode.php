<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate QR Code</title>
</head>
<body>
    <div class="adhomeheader">
        <div class="adlogo">
            <img src="img/psu-logo.png" class="psu-logo" onclick="psulogo()">
            <ul class="links">
                <li><a href="adminhomepage.php">Attendance</a></li>
                <li><a href="adminanalytics.php" >Analytics</a></li>
                <li><a href="adminschedule.php">Schedule</a></li>
                <li><a href="adminaddpersonal.php" style="color: gold">Add Instructor</a></li>
            </ul>
            <div class="dropdown-menu">
                <ul class="links">
                    <li><a href="adminhomepage.php">Attendance</a></li>
                    <li><a href="adminanalytics.php">Analytics</a></li>
                    <li><a href="adminschedule.php">Schedule</a></li>
                    <li><a href="adminaddpersonal.php" style="color: gold">Add Instructor</a></li>
                </ul>
            </div>
        </div>
        <div class="adtab">
            <h2>Add Instructor</h2>
        </div>
    </div>
    <div class="adhomebody">
        <div class="generate-code">
            <div class="qr-code">1</div>
            <div class="download-qr">
                <a href="adminaddsched.php">Back</a>
                <button>Download QR Code</button>
            </div>
        </div>
    </div>
    <div class="adhomefooter"></div>

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