<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Schedule</title>
</head>
<body>
    <div class="adhomeheader">
        <div class="adlogo">
            <img src="img/psu-logo.png" class="psu-logo" onclick="psulogo()">
            <ul class="links">
                <li><a href="adminhomepage.php" >Attendance</a></li>
                <li><a href="adminanalytics.php" >Analytics</a></li>
                <li><a href="adminschedule.php" >Schedule</a></li>
                <li><a href="adminaddpersonal.php" style="color: gold">Add Instructor</a></li>
                <li><a href="adminnotification.php">Notification</a></li>
                <li><button class="show-modal1" onclick="logout()">Logout</button></li>
            </ul>
            <div class="dropdown-menu">
                <ul class="links">
                    <li><a href="adminhomepage.php" >Attendance</a></li>
                    <li><a href="adminanalytics.php" >Analytics</a></li>
                    <li><a href="adminschedule.php" >Schedule</a></li>
                    <li><a href="adminaddpersonal.php" style="color: gold">Add Instructor</a></li>
                    <li><a href="adminnotification.php">Notification</a></li>
                    <li><button class="show-modal" onclick="logout()">Logout</button></li>
                </ul>
            </div>
        </div>
        <div class="adtab">
            <h2>Add Instructor</h2>
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

    
    <div class="adhomebody">
        <form class="add-schedule" action="admingencode.php">
            <div class="add-sched-header">
                <h3>Add Schedule</h3>
            </div>
            <div class="add-sched-body">
                <div class="sched-container">
                    <div class="add-sched">
                    <div class="sched-label">
                        <label>Year Level:</label>
                    </div>
                    <div class="sched-input">
                        <select required>
                            <option value="" disabled selected>year</option>
                            <option>1st Year</option>
                            <option>2nd Year</option>
                            <option>3rd Year</option>
                            <option>4th Year</option>
                        </select>
                    </div>
                    </div>
                    <div class="add-sched">
                    <div class="sched-label">
                        <label>Course Code:</label>
                    </div>
                    <div class="sched-input">
                        <select required>
                            <option value="" disabled selected>code</option>
                            <option>IAS 101</option>
                            <option>IPT 101</option>
                            <option>TECH 101</option>
                            <option>ELEC 1</option>
                            <option>ELEC 2</option>
                            <option>CAP 101</option>
                        </select>
                    </div>
                    </div>
                    <div class="add-sched1">
                    <div class="sched-label">
                        <label>Descriptive Title:</label>
                    </div>
                    <div class="sched-input">
                        <select required>
                            <option value="" disabled selected>subject</option>
                            <option>Information Assurance and Security 1</option>
                            <option>Integrative Programming and Technologies</option>
                            <option>Technopreneurship</option>
                            <option>Elective 1 (Web Systems and Technologies 2)</option>
                            <option>Elective 2 (Mobile Application Development 2)</option>
                            <option>Capstone Project 1</option>
                        </select>
                    </div>
                    </div>
                    <div class="add-sched">
                    <div class="sched-label">
                        <label>Lab:</label>
                    </div>
                    <div class="sched-input">
                        <select required>
                            <option value="" disabled selected>laboratory</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                    </div>
                    <div class="add-sched">
                    <div class="sched-label">
                        <label>Time:</label>
                    </div>
                    <div class="sched-input">
                        <select required>
                            <option value="" disabled selected>time</option>
                            <option>8-10 Face to Face</option>
                            <option>8-10 Online</option>
                            <option>10-12 Face to Face</option>
                            <option>10-12 Online</option>
                            <option>1-3 Face to Face</option>
                            <option>1-3 Online</option>
                            <option>3-5 Face to Face</option>
                            <option>3-5 Online</option>
                        </select>
                    </div>
                    </div>
                    <div class="add-sched">
                    <div class="sched-label">
                        <label>Days:</label>
                    </div>
                    <div class="sched-input">
                        <select required>
                            <option value="" disabled selected>day</option>
                            <option>Monday</option>
                            <option>Tuesday</option>
                            <option>Wednesday</option>
                            <option>Thursday</option>
                            <option>Friday</option>
                        </select>
                    </div>
                    </div>
                    <div class="add-sched">
                    <div class="sched-label">
                        <label>Room:</label>
                    </div>
                    <div class="sched-input">
                        <select required>
                            <option value="" disabled selected>room</option>
                            <option>CLR1</option>
                            <option>CLR2</option>
                            <option>CLR3</option>
                            <option>CLR4</option>
                            <option>AB204</option>
                        </select>
                    </div>
                    </div>
                </div>
            </div>
            <div class="add-sched-footer">
                <div class="add-subject">
                    <button>Add more Subject</button>
                </div>
                <div class="add-next">
                    <input type="submit" value="Generate QR Code" name="gencode">
                </div>
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
        const logoutBtn = document.querySelector(".show-modal1")
        const closeBtn = document.querySelector(".close-btn")


        showBtn.addEventListener("click", () => {
            section.classList.add("active")
            dropDown.classList.remove('open')
        });
        
        logoutBtn.addEventListener("click", () => 
            section.classList.add("active")
        );

        overlay.addEventListener("click", () => 
            section.classList.remove("active")
        );

        closeBtn.addEventListener("click", () => 
            section.classList.remove("active")
            
        );

        

        function logout() {
            section.style.zIndex = "1";
            
            setTimeout(function() {
                section.style.zIndex = "-1";
            }, 5000); 
        }

   
       
       
    </script>
</body>
</html>