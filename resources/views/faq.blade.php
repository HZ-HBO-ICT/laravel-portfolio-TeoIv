<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frequently Asked Questions</title>
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
<div class="container">
    <!-- Navigation bar and name on top left corner on all pages-->
    <nav class="navbar">
        <div class="max-width">
            <div class="name"><a href="/">Teodor <span>Ivanov</span></a></div>
            <ul class="nav">
                <li><a href="/">Home</a></li>
                <li><a href="profile">Profile</a></li>
                <li><a href="dashboard">Dashboard</a></li>
                <li><a href="blog">Blog</a></li>
                <li><a href="faq" class="active">FAQ</a></li>
                <li><a href="gallery">Gallery</a></li>
            </ul>
        </div>
    </nav>
    <div class="img"></div>
    <div class="backgroundfade"></div>
    <div class="faqheader">
        <p> <span> F</span>requently <span>A</span>sked <span>Q</span>uestons</p>
    </div>
    <div class="maincontentfaq">
        <ul style="font-size: 25px">
            @foreach($faqs as $faq)
                <li style="color: white">{{ $faq->question }}</li>
            @endforeach
        </ul>
    </div>
    <div class="asidemenu">
        <section>
            <aside>
                <ul>
                    <h2>Useful links</h2>
                    <li><a href="https://github.com/HZ-HBO-ICT" target="_blank">Github</a></li>
                    <li><a href="https://apps.hz.nl/angular/studievoortgang/studiestatus" target="_blank">Study progress</a></li>
                    <li>
                        <a href="https://teams.microsoft.com/_?tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c#/school/conversations/unknown?groupId=95bddebc-a340-4d88-81fc-b80e0bfc70c3&threadId=19:2e2afa0286b04932be16cb8ad2d9d2c0@thread.skype&ctx=channel" target="_blank">Teams</a>
                    </li>
                    <li><a href="https://learn.hz.nl/my/" target="_blank">Learn</a></li>
                    <li>
                        <a href="https://hz.nl/uploads/documents/Regelingen/NL/Onderwijs-examenregelingen/OER-HZ-2021-2022-BaDEF19-8-2021naBDT13-7-21-Nvdw.pdf" target="_blank">Education and Examination Regulations</a>
                    </li>
                    <li>
                        <a href="https://hz.nl/uploads/documents/Regelingen/OERS/2021-2022/11.-Uitvoeringsregeling-OER-ICT-Voltijd-2021-2022.pdf" target="_blank">Implementation Regulations </a>
                    </li>
                </ul>
            </aside>
        </section>
    </div>
</div>
<script src="js/animation.js"></script>
</body>

</html>
