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
                <li><a href="adminhomepage.php" >Attendance</a></li>
                <li><a href="adminanalytics.php" >Analytics</a></li>
                <li><a href="adminschedule.php" style="color: gold">Schedule</a></li>
                <li><a href="adminaddpersonal.php">Add Instructor</a></li>
                <li><a href="adminnotification.php">Notification</a></li>
                <li><button class="show-modal1">Logout</button></li>
            </ul>
            <div class="dropdown-menu">
                <ul class="links">
                    <li><a href="adminhomepage.php" >Attendance</a></li>
                    <li><a href="adminanalytics.php" >Analytics</a></li>
                    <li><a href="adminschedule.php" style="color: gold">Schedule</a></li>
                    <li><a href="adminaddpersonal.php">Add Instructor</a></li>
                    <li><a href="adminnotification.php">Notification</a></li>
                    <li><button class="show-modal">Logout</button></li>
                </ul>
            </div>
        </div>
        <div class="adtab">
            <h2>Instructor's Schedule</h2>
        </div>
    </div>

    <section>
        <span class="overlay"></span>
        <div class="modal-box">
            <div class="modal-header">
                <h2>Logout</h2>
            </div>
            <div class="modal-body">
                <p>Logging out will end your session</p>
            </div>
            <div class="modal-footer">
                <button class="close-btn">Cancel</button>
                <a href="adminlogin.php">Logout</a>
            </div>
        </div>
    </section>


   
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

        //Navbar
        // const toggleBtn = document.querySelector('.psu-logo')
        const dropDown = document.querySelector('.dropdown-menu')

        function psulogo() {
            dropDown.classList.toggle('open');
        }
       



        //Logout
        const section = document.querySelector("section")
        const overlay = document.querySelector(".overlay")
        const showBtn = document.querySelector(".show-modal")
        const showBtn1 = document.querySelector(".show-modal1")
        const closeBtn = document.querySelector(".close-btn")


        showBtn.addEventListener("click", () => {
            section.classList.add("active")
            dropDown.classList.remove('open')
        });
        
        showBtn1.addEventListener("click", () => 
            section.classList.add("active")
        );

        overlay.addEventListener("click", () => 
            section.classList.remove("active")
        );

        closeBtn.addEventListener("click", () => 
            section.classList.remove("active")
            
        );
        
       
       
    </script>
</body>
</html>