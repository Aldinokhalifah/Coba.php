<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="landingpage.css">
    <link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<?php
require 'dbkoneksi.php';

if(isset($_POST["send"])) {
    $_nama = $_POST['name'];
    $_email = $_POST['email'];
    $_message = $_POST['pesan'];
    $data = [$_nama,$_email,$_message];
    $sql = "INSERT INTO form_kontak (nama,email,pesan) VALUES (?,?,?)";
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);
}

?>

<body>
    <header>
        <a href="#" class="logo">
            <img src="img/logo platform streaming.jpg" alt="">
        </a>
        
        <ul class="navbar">
            <li ><a href="#home"></a>Home</li>
            <li ><a href="#about"></a>About Us</li>
            <li ><a href="#products"></a>Products</li>
            <li ><a href="#contact"></a>Contact</li>
        </ul>
        <button type="button"><i class="btn"></i>Login</button> <button type="button"><i class="btn"></i>Get Started</button>
    </header>

    <section class="home">
        <div class="home-text">
            <h1>Exploring the Digital World <br>Together</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, minus.</p>
        </div>

    </section>
    
    <section class="search">
        <input type="search" placeholder="search...">
        <i class='bx bx-search'></i>
    </section>

    <section class="sponsor">
        <div class="sponsor-item">
            <h2>collaborating with big world companies</h2>
            <img data-aos="flip-up" data-aos-duration="1000" src="img/apple-logo.png" alt="">
            <img data-aos="flip-up" data-aos-duration="1000" data-aos-delay="200" src="img/facebook-app-symbol.png" alt="">
            <img data-aos="flip-up" data-aos-duration="1000" data-aos-delay="400" src="img/google.png" alt="">
            <img data-aos="flip-up" data-aos-duration="1000" data-aos-delay="600" src="img/netflix.png" alt="">
            <img data-aos="flip-up" data-aos-duration="1000" data-aos-delay="800" src="img/spotify.png" alt="">
            <img data-aos="flip-up" data-aos-duration="1000" data-aos-delay="1000" src="img/youtube.png" alt="">
        </div>
    </section>

    <section class="social-media">
        <div class="sosmed-text">
            <h2>Follow us on <b>Instagram</b></h2>
        </div>
        <div class="sosmed-img" data-aos="fade-down" data-aos-duration="2000">
            <img   class="satu" src="img/gambar streaming platform.jpg" alt="">
            <img   class="dua" src="img/gambar streaming platform(2).jpg" alt="">
            <img   class="tiga" src="img/gambar streaming platform(3).jpg" alt="">
            <img   class="empat" src="img/gambar streaming platform(4).jpg" alt="">
            <img   class="lima" src="img/gambar streaming platform(5).jpg" alt="">
            <img   class="enam" src="img/gambar streaming platform(6).jpg" alt="">
        </div>
    </section>

    <section class="products">
        <div class="products-container">
            <div class="box" data-aos="fade-down"
            data-aos-offset="300"
            data-aos-easing="ease-in-sine"
            data-aos-duration="500" data-aos-delay="600"> 
                <h3>Standard</h3> 
                <ul>
                    <li>Good quality vidoes</li>
                    <li>Up to 1080p resolution</li>
                    <li>Up to 20 000+ vidoes</li>
                    <li>Up to 10 members</li>
                </ul>
                <div class="content">
                    <span>$25</span>
                    <button type="button"><i class="btn"></i>Buy</button>
                </div>
            </div>
            <div class="box" data-aos="fade-down"
        data-aos-offset="300"
        data-aos-easing="ease-in-sine"
        data-aos-duration="500" data-aos-delay="400">
                <h3>Premium</h3>
                <ul>
                    <li>Better quality videos</li>
                    <li>Up to 2k HDR resolution</li>
                    <li>Up to 50 000+ videos</li>
                    <li>Up to 25 members</li>
                </ul>
                <div class="content">
                    <span>$36</span>
                    <button type="button"><i class="btn"></i>Buy</button>
                </div>
            </div>
            <div class="box" data-aos="fade-down"
        data-aos-offset="300"
        data-aos-easing="ease-in-sine"
        data-aos-duration="500" data-aos-delay="200">
                <h3>Premium+</h3>
                <ul>
                    <li>Best quality videos</li>
                    <li>Up to 4k HDR resolution</li>
                    <li>Up to 100 000+ vidoes</li>
                    <li>Up to 50 members</li>
                </ul>
                <div class="content">
                    <span>$49</span>
                    <button type="button"><i class="btn"></i>Buy</button>
                </div>
            </div>

        </div>
    </section>

    <section class="contact">
        <h2>Contact Us</h2>
        <div class="form">
        <form class="form-text"  method="post">
            <label>Name</label>
            <input type="text" name="name">
            <br><br>
            <label>Email</label>
            <input type="email" name="email">
            <br><br>
            <label>Message</label>
            <textarea cols="50" rows="4" name="pesan"></textarea>
            <br><br>
            <input type="submit" value="Send" name="send">
        </form>

        </div>
    </section>

    <section class="footer">
        <div class="footer-box">
            <h2>Social Media</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe, animi?</p>
            <div class="social">
                <a href="#"><i class='bx bxl-'></i></a>
                <a href="https://www.linkedin.com/in/aldino-khalifah-163169293/"><i class='bx bxl-linkedin'></i></a>
                <a href="https://www.instagram.com/aldinokhalifah/"><i class='bx bxl-instagram'></i></a>
                <a href="https://github.com/Aldinokhalifah"><i class='bx bxl-github'></i></a>
            </div>
        </div>

        <div class="footer-box">
            <h2>Supports</h2>
            <li><a href="#">Product</a></li>
            <li><a href="#">Help & Support</a></li>
            <li><a href="#">Return Policy</a></li>
            <li><a href="#">Terms Of Use</a></li>
            <li><a href="#">Product</a></li>
        </div>
        <div class="footer-box">
            <h2>View Guides</h2>
            <li><a href="#">Featuress</a></li>
            <li><a href="#">Blog Posts</a></li>
            <li><a href="#">Our Branches</a></li>
        </div>
        <div class="footer-box">
            <h3>Contact</h3>
            <div class="contact">
                <span><i class='bx bxs-map'></i>365 Jakarta Pusat, Indonesia 10640</span>
                <span><i class='bx bxs-phone'></i>+62 813 8203 9103</span> 
                <span><i class='bx bxs-envelope'></i>khalifahaldino@gmail.com</span>
            </div>
        </div>
    </section>

    <div class="copyright">
        <p>&#169; AldinoKhalifah All Right Reserved</p>
    </div>



    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
</body>
</html>