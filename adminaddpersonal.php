<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Instructor</title>
</head>
<body>
    <div class="adhomeheader">
        <div class="adlogo">
            <img src="img/psu-logo.png" class="psu-logo" onclick="psulogo()">
            <ul class="links">
                <li><a href="adminhomepage.php" >Attendance</a></li>
                <li><a href="adminanalytics.php" >Analytics</a></li>
                <li><a href="adminschedule.php">Schedule</a></li>
                <li><a href="adminaddpersonal.php" style="color: gold">Add Instructor</a></li>
            </ul>
            <div class="dropdown-menu">
                <ul class="links">
                    <li><a href="adminhomepage.php" >Attendance</a></li>
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
        <form class="admin-add-personal" action="adminaddsched.php">
            <div class="add-instruc-head">
                <h3>Personal Information</h3>
            </div>
            <div class="add-instruc-body">
                <div class="addpersonal">
                    <div class="addlabel">
                        <label for="fname">First Name</label>
                    </div>
                    <div class="addinfo">
                        <input type="text" name="fname" id="fname" required>
                    </div>
                </div>
                <div class="addpersonal">
                    <div class="addlabel">
                        <label for="lname">Last Name</label>
                    </div>
                    <div class="addinfo">
                        <input type="text" name="lname" id="lname" required>
                    </div>
                </div>
                <div class="addpersonal">
                    <div class="addlabel">
                        <label for="email">Email</label>
                    </div>
                    <div class="addinfo">
                        <input type="text" name="email" id="email" required>
                    </div>
                </div>
                <div class="addpersonal">
                    <div class="addlabel">
                        <label for="cnum">Contact Number</label>
                    </div>
                    <div class="addinfo">
                        <input type="text" name="cnum" id="cnum" required>
                    </div>
                </div>
            </div>
            <div class="add-instruc-footer">
                <input type="submit" value="Next" name="next">
            </div>
        </form>
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