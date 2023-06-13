<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instructor's Schedule</title>
</head>
<body>
    <div class="adhomeheader">
        <div class="adlogo">
            <img src="img/psu-logo.png" class="psu-logo" onclick="psulogo()">
            <ul class="links">
                <li><a href="adminhomepage.php">Attendance</a></li>
                <li><a href="adminanalytics.php" >Analytics</a></li>
                <li><a href="adminschedule.php" style="color: gold">Schedule</a></li>
                <li><a href="adminaddpersonal.php">Add Instructor</a></li>
            </ul>
            <div class="dropdown-menu">
                <ul class="links">
                    <li><a href="adminhomepage.php">Attendance</a></li>
                    <li><a href="adminanalytics.php" >Analytics</a></li>
                    <li><a href="adminschedule.php" style="color: gold">Schedule</a></li>
                    <li><a href="adminaddpersonal.php">Add Instructor</a></li>
                </ul>
            </div>
        </div>
        <div class="adtab">
            <h2>Instructor's Schedule</h2>
        </div>
    </div>
   
        <div class="adbodysched">
            <div class="adschedhead">
                <div class="adschedtitle">
                    <h3>Schedule</h3>
                </div>
                <div class="adschedsearch">
                    <input type="submit" name="search-teach" value="Search" class="search-teach">
                    <input type="text" placeholder="Search Instructor" name="search-name" class="search-name">
                </div>
            </div>
            <div class="adschedcontent">
                <div class="empty-sched">
                    <div class="sched-empty"></div>
                    <div class="instruc-sched">
                        <div class="instrucheader">
                            <h3>Clarence Nanlabi Schedule</h3>
                        </div>
                        <div class="instrucbody">
                            <div>
                                <table class="sched-table">
                                    <tr>
                                        <td>Year Level</td>
                                        <td>Course Code</td>
                                        <td>Descriptive Title</td>
                                        <td>Lab</td>
                                        <td>Time</td>
                                        <td>Days</td>
                                        <td>Room</td>
                                    </tr>
                                    <tr>
                                        <td>1st Year</td>
                                        <td>CO101</td>
                                        <td>Computer Organization</td>
                                        <td>4</td>
                                        <td>10:00 - 12:00 PM</td>
                                        <td>Tuesday</td>
                                        <td>CLR4</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="instruc-sched">
                        <div class="instrucheader">
                            <h3>Jackson Soriano Schedule</h3>
                        </div>
                        <div class="instrucbody">
                            <div>
                                <table class="sched-table">
                                    <tr>
                                        <td>Year Level</td>
                                        <td>Course Code</td>
                                        <td>Descriptive Title</td>
                                        <td>Lab</td>
                                        <td>Time</td>
                                        <td>Days</td>
                                        <td>Room</td>
                                    </tr>
                                    <tr>
                                        <td>3rd Year</td>
                                        <td>ELEC 2</td>
                                        <td>Elective 2 (Mobile Application Development 2)</td>
                                        <td>2</td>
                                        <td>1:00 - 3:00 PM</td>
                                        <td>Wednesday</td>
                                        <td>CLR2</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                </div>
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