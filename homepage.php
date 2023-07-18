<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/psu-logo.png">
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
                <li><a href="attendancelog.php" >Attendance Log</a></li>
                <li><button class="show-modal1" onclick="logout()">Logout</button></li>
            </ul>
            <div class="dropdown-menu">
                <ul class="links">
                    <li><a href="homepage.php" style="color: gold">Schedule</a></li>
                    <li><a href="account.php">Account</a></li>
                    <li><a href="attendancelog.php" >Attendance Log</a></li>
                    <li><button class="show-modal" onclick="logout()">Logout</button></li>
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
                <a href="scanner.php">Logout</a>
            </div>
        </div>
    </section>


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