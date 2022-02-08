<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profile</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></script>
    <script src="https://fonts.googleapis.com/css?family=Open+Sans:400,800"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <!-- Navigation bar and name on top left corner on all pages-->
    <div class="container">
        <nav class="navbar">
            <div class="max-width">
                <div class="name"><a href="/">Teodor <span>Ivanov</span></a></div>
                <ul class="nav">
                    <li><a href="/">Home</a></li>
                    <li><a href="../../" class="active">Profile</a></li>
                    <li><a href="dashboard">Dashboard</a></li>
                    <li><a href="blog">Blog</a></li>
                    <li><a href="faq">FAQ</a></li>
                    <li><a href="gallery">Gallery</a></li>
                </ul>
            </div>
        </nav>
        <div class="img"></div>
        <div class="backgroundfade"></div>
        <div class="profilephoto">
            <img src="img/circleteo.png" alt="">
        </div>
        <div class="roundbutton" id="bubble1">
            <div>
                <figure class="icon">
                    <ion-icon name="key-outline" size="large"></ion-icon>
                </figure>
                <h4>My mindset</h4>
                <p>One thing i love about life is that you can never get enough. A moto that I adore, just beacause of the simplicity in it. That mindset is always pushing me into trying new things and learning <br> new stuff daily.
                </p>
            </div>
        </div>
        <div class="roundbutton" id="bubble2">
            <div class="profilecontent2">
                <figure class="icon">
                    <ion-icon name="school-outline" size="large"></ion-icon>
                </figure>
                <h4>Previous education</h4>
                <ul>
                    <li>73. High School Vladislav Gramatik</li>
                    <li>Web-Development course</li>
                    <li> Language lessons in:</li>
                    <p></p>
                    <p> | German <img class="flag" src="assets/photos/deu.svg" alt=""> | English <img class="flag" src="assets/photos/gbr.svg" alt=""> | Russian <img class="flag" src="assets/photos/rus.svg" alt=""> | Bulgarian /Native/
                        <img class="flag" src="assets/photos/bgr.svg" alt=""></p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="roundbutton" id="bubble3">
            <div>
                <figure class="icon">
                    <ion-icon name="information-circle-outline" size="large"></ion-icon>
                </figure>
                <h4>General Information</h4>
                <ul>
                    <li>Name: Teodor</li>
                    <li>Age: 21</li>
                    <li>Nationality: Bulgarian</li>
                </ul>
            </div>
        </div>
        <div class="roundbutton" id="bubble5">
            <div class="profilecontent5">
                <figure class="icon">
                    <ion-icon name="fish-outline" size="large"></ion-icon>
                </figure>
                <h4>Hobbies</h4>
                <p>In my rest time I usually prefer to go somewhere quiet. The nature has always been my escape. Just pack and go. Me and my lovely wife-to-be do this all the time when we can catch a breath. Favourite movies: The Hobbit, TLOTR, Lion King
                    etc.
                </p>
            </div>
        </div>
        <div class="roundbutton" id="bubble6">
            <figure class="icon">
                <a href="gallery.html">
                    <ion-icon name="images-outline" size="large"></ion-icon>
                </a>
            </figure>
        </div>
        <div class="nameprofile">
            <p>Teodor Ivanov</p>
        </div>
    </div>
    </div>

    <script src="js/animation.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
