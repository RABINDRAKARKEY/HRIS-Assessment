<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title>It_Talent - HRIS</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>

<body>
    <!-- header section start -->
    <div class="header_section">
        @include('home.header')
        <div class="banner_section layout_padding">
            @include('home.banner')
        </div>
    </div>
    <div class="services_section layout_padding">
        @include('home.service')
    </div>
    <div class="about_section layout_padding">
        @include('home.about')
    </div>
    <div class="blog_section layout_padding">

        <div class="container">
            <h1 class="blog_taital">It - Talent Connects  --  HRIS</h1>
            <p class="blog_text">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which</p>
            <div class="play_icon_main">
                <div class="play_icon"><a href="#">
                    <img src="images/play-icon.png">
                </a></div>
            </div>
        </div>
    </div>
    <div class="client_section layout_padding">
        @include('home.client')
    </div>
    <div class="choose_section layout_padding">
        @include('home.choose')
    </div>
    <div class="footer_section layout_padding">
        @include('home.footer')
    </div>
    <div class="copyright_section">
        @include('home.copyright')
    <!-- </div> -->
    @include('home.jsfiles')
    @include('home.sidebar')
    @include('home.javascript')
</body>

</html>