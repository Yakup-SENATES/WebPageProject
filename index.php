<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <script src="https://kit.fontawesome.com/c20485228a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="owl/owl.carousel.min.css">
    <link rel="stylesheet" href="owl/owl.theme.default.min.css">

</head>

<body>

    <section id="menu">
        <div id="logo">Paylaştıkça</div>
        <nav>
            <a href="#"><i class="fas fa-home ikon"></i>Home</a>
            <a href="#hakkimizda"><i class="fas fa-info-circle ikon"></i>About</a>
            <a href="#egitimler"><i class="fas fa-graduation-cap ikon"></i>Tutoial</a>
            <a href="#ekip"><i class="fas fa-users icon"></i>Team</a>
            <a href="#iletisim"><i class="far fa-comment-alt ikon"></i>Contact</a>
        </nav>

    </section>

    <section id="banner">

        <div id="banner_perde"> </div>

        <div id="banner_icerik">
            <h2>Paylaştıkça</h2>
            <hr width=300 align=left>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, dicta natus nam rem earum maiores commodi
                dolore impedit ratione in consectetur expedita beatae eligendi, vero ipsam. Recusandae commodi
                reprehenderit perspiciatis.</p>
        </div>

    </section>
    <section id="hakkimizda">
        <h3>Hakkımızda</h3>
        <div class="container">
            <div id="sol">
                <h5 id="solh5">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                </h5>
            </div>

            <div id="sag">
                <span> L</span>
                <p id="sagP">orem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quo dicta laborum ipsa
                    consequuntur atque asperiores quisquam nisi nobis doloribus, corporis modi, optio quaerat! Labore
                    odio in repudiandae eius nostrum!</p>

            </div>

            <img src="img/about.jpg" alt="" class="img-fluid mt100">

            <p id="son">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet sit, laboriosam, non eos aliquam
                quos totam nam animi enim assumenda blanditiis, fugiat iusto ea adipisci. Placeat aliquam repellat
                aliquid quas.</p>

        </div>

    </section>
    <section id="egitimler">
        <div class="container">
            <h3>Eğitimler</h3>
            <div class="owl-carousel owl-theme">

                <div class="card item" data-merge="1.5">
                    <img src="img/r2.jpg" alt="" class="img-fluid">
                    <h5 class="cardh5">TML5 ve CSS3 Serisi 1</h5>
                    <p class="cardp"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, nesciunt.</p>
                </div>
                <div class="card item" data-merge="1.5">
                    <img src="img/r2.jpg" alt="" class="img-fluid">
                    <h5 class="cardh5">TML5 ve CSS3 Serisi 2</h5>
                    <p class="cardp"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, nesciunt.</p>
                </div>
                <div class="card item" data-merge="1.5">
                    <img src="img/r2.jpg" alt="" class="img-fluid">
                    <h5 class="cardh5">TML5 ve CSS3 Serisi 3</h5>
                    <p class="cardp"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, nesciunt.</p>
                </div>
                <div class="card item" data-merge="1.5">
                    <img src="img/r2.jpg" alt="" class="img-fluid">
                    <h5 class="cardh5">TML5 ve CSS3 Serisi 4</h5>
                    <p class="cardp"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, nesciunt.</p>
                </div>

            </div>
        </div>

    </section>
    <section id="ekip">
        <div class="container">
            <h3 id="ekiph3">Ekip</h3>,

            <div class="sutun-sol-sag">
                <img src="img/ekip1.jpg" alt="" class="img-fluid oval">
                <h4 class="ekipisim">Semra Koçak</h4>
                <p class="ekipp">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita?</p>
                <div class="ekip-ikon">
                    <a href="#">
                        <i class="fab fa-linkedin social"></i></iclass=></a>
                    <a href="#"><i class="fab fa-github-square social"></i></a>
                    <a href="#"><i class="fab fa-twitter social"></i></a>
                </div>
            </div>

            <div class="sutun-orta">
                <img src="img/ekip2.jpg" alt="" class="img-fluid oval">
                <h4 class="ekipisim">Feyza Çolak</h4>
                <p class="ekipp">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita?</p>
                <div class="ekip-ikon">
                    <a href="#">
                        <i class="fab fa-linkedin social"></i></iclass=></a>
                    <a href="#"><i class="fab fa-github-square social"></i></a>
                    <a href="#"><i class="fab fa-twitter social"></i></a>
                </div>
            </div>

            <div class="sutun-sol-sag">
                <img src="img/ekip3.jpg" alt="" class="img-fluid oval">
                <h4 class="ekipisim">Ayşe Demir</h4>
                <p class="ekipp">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita?</p>
                <div class="ekip-ikon">
                    <a href="#">
                        <i class="fab fa-linkedin social"></i></iclass=></a>
                    <a href="#"><i class="fab fa-github-square social"></i></a>
                    <a href="#"><i class="fab fa-twitter social"></i></a>
                </div>
            </div>

        </div>
    </section>

    <section id="iletisim">
        <div class="container">
            <h3 id="h3iletisim"></h3>

            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>"> 
             <div id="opak">
                <div id="formgroup">
                    <div id="solForm">
                        <input type="text" name="name" class="form-control" placeholder="Adiniz" required>
                        <input type="text" name="no" class="form-control" placeholder="Telefon Numaranız" required>
                    </div>


                    <div id="sagForm">
                        <input type="email" name="email" class="form-control" placeholder="sample@gmail.com" required>
                        <input type="text" name="about" class="form-control" placeholder="Başlık" required>
                    </div>

                    <textarea name="mesaj" id="" rows="10" cols="50" placeholder="Mesajınızı Giriniz"
                        class="form-control" required></textarea>

                    <input type="submit" name="submit" value="Gönder">

                </div>

                <div id="adres">
                    <h4 id="adresbaslik">Adres: </h4>
                    <p class="adresp">M.Akif Ersoy Mah</p>
                    <p class="adresp">Akyıldız Cad</p>
                    <p class="adresp">Oğuzbey Sok No:123</p>
                    <p class="adresp">email: template@gyopmail.com</p>

                </div>

             </div>
            </form>
            <footer>
                <div id="copyright">2021 Tüm hakları saklıdır</div>
                <div id="social-footer">
                    <a href="https://www.linkedin.com/in/yakup-%C5%9Fenate%C5%9F-33215a1b4/">
                        <i class="fab fa-linkedin social"></i></iclass=></a>
                    <a href="https://github.com/Yakup-SENATES/booking2"><i class="fab fa-github-square social"></i></a>
                    <a href="https://twitter.com/jc_yakup"><i class="fab fa-twitter social"></i></a>

                </div>
                <a href="#menu"><i class="fas fa-angle-double-up" id="up"></i></a>
            </footer>



        </div>


    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="owl/owl.carousel.min.js"></script>

    <script src="owl/script.js"></script>
</body>

</html>
<!-- class .   id #-->

<?php 

    include('dbhelper.php');

    if (isset($_POST['submit'])) {
            
        $name=  mysqli_real_escape_string($conn,$_POST['name']);
        $no= mysqli_real_escape_string($conn,$_POST['no']);
        $email = mysqli_real_escape_string($conn,$_POST['email']);
        $about = mysqli_real_escape_string($conn,$_POST['about']);
        $mesaj= mysqli_real_escape_string($conn,$_POST['mesaj']);
        
        $sql="insert into iletisim (name,no,email,about,mesaj) values('$name','$no','$email','$about','$mesaj')";

        if (mysqli_query($conn,$sql)) {
            echo "<script>alert('İşlem Başarılı')</script>";
        }else {
            echo "<script>alert('İşlem Başarısız')</script>";
        }
    }
?>
