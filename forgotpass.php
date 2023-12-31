<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="css/forgotpass.css">
    <link rel="icon" href="images/logo-round.png" type="image/x">
</head>
<body>
  
    <!-- -------------------------------Body-------------------------------->
    <section id="login">
        <h1>PASSWORD CHANGE</h1>
        <div class="login-body">
            <img src="images/passwordchange.png" class="login-icon"alt="">
            <div class="content">
                <form action="" method="POST">
                    <input type="text"  name="username" placeholder="Username" autocomplete="off" required>
                    <input type="text"  name="security" placeholder="Year-Of-Birth" autocomplete="off" required>
                    <input type="text"  name="newpass" placeholder="New Password" autocomplete="off" required>
                    
                    <input type="submit" value="Change">
                    
                    
                </form>
                
            <?php
            include('auth/forgotpass_auth.php');

            ?>
                
    
            </div>
           
          
        </div>
    </section>


    <!-- -------------------------------Body-------------------------------->
    <!-- -------------------------------footer-------------------------------->
    <footer class="footer">
        <div class="container">
        <div class="row">
        <div class="footer-col">
            <h4>Company</h4>
            <ul>
            <li><a href="#">about us</a></li>
            <li><a href="#">our services</a></li>
            <li><a href="#">privacy policy</a></li>
            <li><a href="#">affiliate programs</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4>get help</h4>
            <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">shipping</a></li>
            <li><a href="#">returns</a></li>
            <li><a href="#">order status</a></li>
            <li><a href="#">payment options</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4>online shop</h4>
            <ul>
            <li><a href="#">watch</a></li>
            <li><a href="#">bag</a></li>
            <li><a href="#">shoes</a></li>
            <li><a href="#">dress</a></li>
            </ul>
        </div>
        <div class="footer-col">
            <h4>follow us</h4>
            <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
        </div>
        </div>
    </footer>
</body>
</html>