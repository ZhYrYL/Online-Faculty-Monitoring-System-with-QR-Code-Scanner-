<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" sizes="32x32" href="./img/psu-logo.png">
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
        <form class="admin-add-personal" action="db/connection.php">
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