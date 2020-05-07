<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corona Tracker</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" href="Assets/corona2.png">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script>
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 350) {
            $(".the").addClass("then");
        } else {
            $(".the").removeClass("then");
        }
    });
    </script>


    <script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <script>
    $(document).ready(function() {
        $('#nav-mhweb-hamburger').click(function() {
            $(this).toggleClass('open');
        });
    });
    </script>
</head>

<body onload="fetch()">
    <!--Nav bar-->

    <?php include"nav.html"?>

    <!--End of Nav bar-->



    <section class="profile_area mb-5 mt-5">
        <div class="container">
            <div class="profile_inner p_120">
                <div class="row">
                    <div class="col-lg-5 text-center">
                        <img class="img-fluid profile mb-5 w-75" src="Assets/ismail.jpg" alt="">
                    </div>
                    <div class="col-lg-7">
                        <div class="personal_text">
                            <h6>Hello Everybody, i am</h6>
                            <h3>Mohammed Ismail</h3>
                            <h4>Web Designer / Developer</h4>
                            <p style="font-family: 'Lora', serif;">“Most good programmers do
                                programming not
                                because they expect to get paid or get
                                adulation
                                by the public, but because it is fun to program”</p>
                            <ul class=" list basic_info" style="list-style-type: none; line-height: 2.2rem;">
                                <li><a><i class="lnr lnr-calendar-full"></i>&nbsp;&nbsp; 4th April,
                                        1999</a></li>
                                <li><a target="_blank" class="phno" href="tel:+919742009361"><i
                                            class="lnr lnr-phone-handset"></i>&nbsp;&nbsp;
                                        +91
                                        9742009361</a></li>
                                <li><a target="_blank" class="phno" href="mailto:mohammedismail97420@gmail.com"><i
                                            class="lnr lnr-envelope"></i>&nbsp;&nbsp;
                                        mohammedismail97420@gmail.com</a>
                                </li>
                                <li><a><i class="lnr lnr-home"></i>&nbsp;&nbsp; Bangalore, India</a></li>
                            </ul>
                            <div class="social">
                                <a style="margin-right: 50px;" target="_blank"
                                    href="https://www.facebook.com/profile.php?id=100022339371304"
                                    class="fa fa-facebook shadow"></a>

                                <a style="margin-right: 50px;" target="_blank"
                                    href="https://www.linkedin.com/in/mohammed-ismail-342aa0164/"
                                    class="fa fa-linkedin shadow"></a>

                                <a target="_blank" href="https://www.instagram.com/_mohammed.ismail_/"
                                    class="fa fa-instagram shadow"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>