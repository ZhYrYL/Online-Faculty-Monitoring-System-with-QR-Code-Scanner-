<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" sizes="32x32" href="./img/psu-logo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Log | History</title>
</head>
<body>
    <div class="adhomeheader">
        <div class="adlogo">
                <img src="img/fashion-clothes.png" class="psu-logo" onclick="psulogo()">
                <ul class="links">
                    <li><a href="homepage.php" >Schedule</a></li>
                    <li><a href="account.php" >Account</a></li>
                    <li><a href="attendancelog.php" style="color: gold">Attendance Log</a></li>
                    <li><button class="show-modal1" onclick="logout()">Logout</button></li>
                </ul>
                <div class="dropdown-menu">
                    <ul class="links">
                        <li><a href="homepage.php" >Schedule</a></li>
                        <li><a href="account.php">Account</a></li>
                        <li><a href="attendancelog.php" style="color: gold">Attendance Log</a></li>
                        <li><button class="show-modal" onclick="logout()">Logout</button></li>
                    </ul>
                </div>
        </div>
        <div class="adtab">
            <h2>Attendance Log</h2>
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

    <div class="notification">

</div>

    <div class="adhomebody">
        <div class="adsched">
            <div class="adinshead">
                <h3>Scan History</h3>
            </div>
            <div class="adinstructor">
                <table></table>
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