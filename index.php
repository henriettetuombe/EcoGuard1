
<?php
    include("connection.php");
    if(isset($_POST['submit'])){
        $username = mysqli_real_escape_string($conn, $_POST['user']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['pass']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpass']);
        
        $sql="select * from users where username='$username'";
        $result = mysqli_query($conn, $sql);
        $count_user = mysqli_num_rows($result);

        $sql="select * from users where email='$email'";
        $result = mysqli_query($conn, $sql);
        $count_email = mysqli_num_rows($result);

        if($count_user == 0 & $count_email==0){
            if($password==$cpassword){
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$hash')";
                $result = mysqli_query($conn, $sql);
                if($result){
                    header("Location: index.php");
                }
            }
            else{
                echo '<script>
                    alert("Passwords do not match");
                    window.location.href = "index.php";
                </script>';
            }
        }
        else{
            if($count_user>0){
                echo '<script>
                    window.location.href="index.php";
                    alert("Username already exists!!");
                </script>';
            }
            if($count_email>0){
                echo '<script>
                    window.location.href="index.php";
                    alert("Email already exists!!");
                </script>';
            }
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3c31c60669.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./style.css">
    <title>Ecoguard</title>
</head>
<body>
    <div id="header">
        <div id="header-slide">
            <p>TEL: +250 781045480</p>
            <p>EMAIL: ecoguard@info.com</p>
        </div>

        <div id="main-header">
            <img src="./img/GUARD.png" class="logo" alt="ecoguard png">

            <div class="search-container">
                <input type="text" id="searchInput" placeholder="Search...">
                <img src="./img/search-icon.png" alt="Search" class="search-icon" width="30px" height="30px">
            </div>
        </div>

        <div id="nav-header">
           <nav>
            <ul id="down-menu" class="nav-links">
                <li><a href="#">HOME</a> <i class="fa-sharp fa-regular fa-pipe"></i></li>
                <li><a href="#">ABOUT US</a></li>
                <li><a href="#">PRODUCTS</a></li>
                <li><a href="#">RESOURCES</a></li>
                <li><a href="#">CONTACT US</a></li>
            </ul>
           </nav> 
        </div>

        <div class="header-hero">
            <div id="video-wrapper">
                <video src="./img/pexels_videos_1448735 (2160p).mp4" autoplay muted loop width="100%">
                    <source src="./img/pexels_videos_1448735 (2160p).mp4">
                </video>
            </div>

        </div>
    </div>


    <section id="body-content">
        <div class="container">
            <div class="body-content-item">
                <h2>WELCOME TO <span class="inner-content">EcoGuard</span></h2>
                <p>EcoGuard is a comprehensive environmental monitoring and protection system aimed at addressing ecological challenges in Africa through afforestation and community development initiatives. 
                </p>
            </div>

            <div class="body-content-item">
                <h2>WHAT <span class="inner-content">WE DO</span></h2>
                <p>
                    EcoGuard specializes in environmental monitoring, afforestation, and community development in Africa. We restore ecosystems, conduct afforestation campaigns, and engage in sustainable agriculture and renewable energy projects. Our initiatives include waste management, environmental education, and policy advocacy. We emphasize research and innovation to develop effective solutions. By empowering communities and promoting sustainable practices, EcoGuard strives to address ecological challenges and promote environmental stewardship for a greener, healthier planet.
            </div>

            <div class="body-content-item">
                <h2>WHAT MAKES <span class="inner-content">US DIFFERENT</span></h2>
                <p>We provide environmentally compatible solutions for:</p>
            </div>
       

            <div id="content-items">
                <div class="content-items-row">
                    <div class="content-item">
                        <div class="item-img">
                            <!-- <i class="fa-light fa-tree"></i> -->
                            <img src="" alt="">
                        </div>
                        
                        <div class="item-texts">
                            <h2>Afforestation Initiatives</h2>
                            <p>EcoGuard focuses on planting trees and restoring degraded ecosystems, contributing to biodiversity conservation and carbon sequestration.</p>
                        </div>
                    </div>

                    <div class="content-item">
                        <div class="item-img">
                            <img src="" alt="">
                        </div>
                        
                        <div class="item-texts">
                            <h2>Sustainable Agriculture Practices</h2>
                            <p>We promote sustainable farming techniques that minimize environmental impact, such as organic farming, agroforestry, and permaculture.</p>
                        </div>
                    </div>
                </div>

                <div class="content-items-row">
                    <div class="content-item">
                        <div class="item-img">
                            <img src="" alt="">
                        </div>
    
                        <div class="item-texts">
                            <h2>Renewable Energy Adoption</h2>
                            <p>EcoGuard encourages the use of renewable energy sources like solar, wind, and hydroelectric power to reduce reliance on fossil fuels and decrease carbon emissions.</p>
                        </div>
                    </div>

                    <div class="content-item">
                        <div class="item-img">
                            <img src="" alt="">
                        </div>
                        
                        <div class="item-texts">
                            <h2>Waste Management Solutions</h2>
                            <p>We implement innovative waste management strategies, including recycling, composting, and waste-to-energy conversion, to minimize landfill waste and pollution.</p>
                        </div>
                    </div>
                </div>

                <div class="content-items-row">
                    <div class="content-item">
                        <div class="item-img">
                            <img src="" alt="">
                        </div>
                        
                        <div class="item-texts">
                            <h2>Community Engagement Programs</h2>
                            <p>EcoGuard actively involves local communities in environmental conservation efforts through education, training, and participatory decision-making processes.</p>
                        </div>
                    </div>

                    <div class="content-item">
                        <div class="item-img">
                            <img src="" alt="">
                        </div>
                        
                        <div class="item-texts">
                            <h2>Eco-Tourism Development</h2>
                            <p>We support the development of eco-friendly tourism initiatives that promote conservation awareness, provide sustainable livelihoods, and preserve natural habitats.</p>
                        </div>
                    </div>
                </div>

                <div class="content-items-row">
                    <div class="content-item">
                        <div class="item-img">
                            <img src="" alt="">
                        </div>
                        
                        <div class="item-texts">
                            <h2>Water Resource Management</h2>
                            <p>EcoGuard implements water conservation measures, watershed restoration projects, and clean water access initiatives to safeguard freshwater ecosystems and ensure water security.</p>
                        </div>
                    </div>

                    <div class="content-item">
                        <div class="item-img">
                            <img src="" alt="">
                        </div>
                        
                        <div class="item-texts">
                            <h2>Green Infrastructure Development</h2>
                            <p>We advocate for the construction of green buildings, green transportation systems, and green infrastructure projects to enhance urban sustainability and reduce environmental footprint.</p>
                        </div>
                    </div>
                </div>   
            </div>
        </div>  
    </section>

    <section id="image-section">
        <!-- <img src="./img/plant4.jpg" width="100%" height="415px"> -->
        <div id="image=text">
            <h2>WE PROVIDE COMPATIBLE <span class="innertext">SOLUTIONS</span></h2>
        </div>
    </section>

    <section id="newsletter-section">
        <div class="container">
            <div class="hr-rule">
                <hr>
            </div>
            <div>
                <h2>SIGN UP FOR PLANTING TREES <span class="innertext">EVENT</span></h2>
            </div>

           <!-- <form action="process.php">
                <div class="field-input">
                    <input type="text" id="name" placeholder="Name" name="user">
                </div>

                <div class="field-input">
                    <input type="email" id="email" placeholder="Email" name="email">
                </div>

                <div id="input-btn">
                    <input type="submit" id="submit-btn" value="SUBSCRIBE"name='submit'>
                </div>
            </form>-->
        </div>
        <div id="form">
        
        <form name="form" action="" method="POST" class="field-input" >
            <label></label>
            <input type="text" id="user" name="user" placeholder="Username" required><br><br>
            <label></label>
            <input type="email" id="email" name="email" placeholder="Email"required><br><br>
            <label></label>
            <input type="password" id="pass" name="pass" placeholder="Password" required><br><br>
            <label> </label>
            <input type="password" id="cpass" name="cpass" placeholder="Retype password" required><br><br>
            <input type="submit" id="submit-btn" value="Subscribe" name = "submit"/>
        </form>
    </div>
    </section>

    <footer>
        <div class="container">
            <div class="footer-items">
                <div class="footer-item footer-home">
                    <div class="footer-home-header">
                        <h2>HOME</h2>
                    </div>

                    <p><a href="#">About Us</a></p>
                    <p><a href="#">Contact Us</a></p>
                    <p><a href="#">Our Products</a></p>
                    <p><a href="#">Resources</a></p>
                </div>

                <div class="footer-item footer-products">
                    <div class="footer-products-header">
                        <h2>PRODUCTS</h2>
                    </div>

                    <p><a href="#">Afforestation Initiatives</a></p>
                    <p><a href="#">Sustainable Agriculture Practices</a></p>
                    <p><a href="#">Renewable Energy Adoption</a></p>
                    <p><a href="#">Waste Management Solutions</a></p>
                    <p><a href="#">Community Engagement Programs</a></p>
                    <p><a href="#">Eco-Tourism Development</a></p>
                    <p><a href="#">Water Resource Management</a></p>
                    <p><a href="#">Green Infrastructure Development</a></p>
                </div>

                <div class="footer-item footer-address">
                    <div class="footer-address-header">
                        <h2>ADDRESS</h2>
                    </div>

                    <p>Rwanda,Kigali / Head Office</p>
                    <p>Kigali Heights</p>
                    <p>KABC Second Floor</p>
                    <p>KG 7 Ave, Kigali</p>
                </div>

                <div class="footer-item footer-facebook">
                    <div class="footer-facebook-header">
                        <h2>Facebook</h2>
                    </div>

                    <p>Contact: Henriette Tuombe</p>
                    <p>Tel: <span class="innertext">+250 781045480</span></p>
                    <p>Email: <span class="innertext">ecoguard@info.com</span></p>
                </div>
            </div>

            <div class="hr-rule">
                <hr>
            </div>

            <div class="footer-undertexts">
                <p>Copyright &copy2024</p>
                <p><a href="#">Terms & Condition of Sale</a></p>
                <p><a href="#">Standard Terms & Condition</a></p>
                <p><a href="#">Email & Disclaimer</a></p>
            </div>
        </div>
    </footer>

    <script src="./register.js"></script>
</body>
</html>