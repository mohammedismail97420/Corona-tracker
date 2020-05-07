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
    $(document).ready(function() {
        $('#nav-mhweb-hamburger').click(function() {
            $(this).toggleClass('open');
        });
    });
    </script>




    <script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
</head>

<body>
    <!--Nav bar-->

    <?php include"nav.html"?>


    <!--End of Nav bar-->

    <div class="main_header container-fluid pr-0">
        <div class=" row w-100 h-100">
            <div class="col-Ig-5 col-md-5 col-12 order-lg-1 order-r">
                <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
                    <img class="cor1 img-fluid mt-5 mb-5" src="Assets/corona1.png">
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1 text-center pr-0">
                <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
                    <h1 class="cor2">Let's Stay Safe & Fight Together Against <span class="nowrap">Co<span
                                class="corona_rot2" style="padding-right: 0px;">r</span>
                            <span class="corona_rot2" style="padding-right: 5px;">
                                <span class="corona_rot w-100">
                                    <img class="img-fluid" style="width: 50px;" src="Assets/corona2.png">
                                </span>n</span>a</span> Virus
                    </h1>
                </div>
            </div>
        </div>
    </div>





    <div class="container-fluid text-justify mb-5 divv">
        <h2 class="text-center">ABOUT COVID-19</h2>
        <div class="text-center">
            <hr class="w-25 mx-auto pt-2 mb-5">
        </div>
        <div class="row">

            <div class="col-lg-6 col-md-12">
                <img class="img-fluid" src="Assets/corona3.jpg" alt="">
            </div>
            <div class="col-lg-6 col-md-12">
                <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered
                    coronavirus.</p>

                <p> Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness
                    and recover without requiring special treatment. Older people, and those with underlying medical
                    problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more
                    likely to develop serious illness.
                </p>
                <p>
                    The best way to prevent and slow down transmission is be well informed about the COVID-19 virus, the
                    disease it causes and how it spreads. Protect yourself and others from infection by washing your
                    hands or using an alcohol based rub frequently and not touching your face. </p>
            </div>
        </div>
    </div>


    <section class="symptoms">
        <div class="container">
            <h2 class="text-center">COVID-19 SYMPTOMS</h2>
            <div class="text-center">
                <hr class="w-25 mx-auto pt-2 mb-4">
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 text-center mb-5">
                    <img class="img-fluid mb-2" style="height: 100px;" src="Assets/fever.png" alt="">
                    <h6>Fever</h6>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 text-center mb-5">
                    <img class="img-fluid mb-2" style="height: 100px;" src="Assets/cough.png" alt="">
                    <h6>Cough</h6>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 text-center mb-5">
                    <img class="img-fluid mb-2" style="height: 100px;" src="Assets/runny.png" alt="">
                    <h6>Runny Nose</h6>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 text-center mb-5">
                    <img class="img-fluid mb-2" style="height: 100px;" src="Assets/cold.png" alt="">
                    <h6>Cold</h6>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 text-center mb-5">
                    <img class="img-fluid mb-2" style="height: 100px;" src="Assets/tired.jpg" alt="">
                    <h6>Tiredness</h6>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 text-center mb-5">
                    <img class="img-fluid mb-2" style="height: 100px;" src="Assets/breath.png" alt="">
                    <h6>Breathing Problem</h6>
                </div>
            </div>

        </div>

    </section>







    <section class="measures">
        <div class="container">
            <h2 class="text-center">COVID-19 PREVENTION</h2>
            <div class="text-center">
                <hr class="w-25 mx-auto pt-2 mb-4">
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 text-center mb-5">
                    <div class="row">
                        <div class="col-4">
                            <img class="img-fluid mb-2" style="height: 100px;" src="Assets/wash.png" alt="">
                        </div>
                        <div class="col-8">
                            <p class="text-justify">Wash your hands frequently for about 20 seconds, with soap and
                                water or
                                alcohol based handrub.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 text-center mb-5">
                    <div class="row">
                        <div class="col-4">
                            <img class="img-fluid mb-2" style="height: 100px;" src="Assets/home.png" alt="">
                        </div>
                        <div class="col-8">
                            <p class="text-justify">Stay home and self-isolate from others in the household if you feel
                                unwell
                                and practice social distancing.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 text-center mb-5">
                    <div class="row">
                        <div class="col-4">
                            <img class="img-fluid mb-2" style="height: 100px;" src="Assets/cover.png" alt=""></div>
                        <div class="col-8">
                            <p class="text-justify">Cover your nose and mouth with a disposable tissue or flexed elbow
                                when you cough or
                                sneeze.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 text-center mb-5">
                    <div class="row">
                        <div class="col-4">
                            <img class="img-fluid mb-2" style="height: 100px;" src="Assets/news.png" alt=""></div>
                        <div class="col-8">
                            <p class="text-justify">Stay informed by watching news, follow the recommended practices and
                                don't spread rumors.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 text-center mb-5">
                    <div class="row">
                        <div class="col-4">
                            <img class="img-fluid mb-2" style="height: 100px;" src="Assets/medic.png" alt=""></div>
                        <div class="col-8">
                            <p class="text-justify">If you have a fever, a cough, and difficulty breathing, seek medical
                                attention. Call in
                                advance.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 text-center mb-5">
                    <div class="row">
                        <div class="col-4">
                            <img class="img-fluid mb-2" style="height: 100px;" src="Assets/social.jpg" alt=""></div>
                        <div class="col-8">
                            <p class="text-justify">Avoid close contact ( 1 meter or 3 feet ) with the people who are
                                unwell and wear mask when going out.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <div class="container text-center mt-3 mb-5">
        <a style="margin-right: 50px;" target="_blank" href="https://www.facebook.com/profile.php?id=100022339371304"
            class="fa fa-facebook shadow"></a>

        <a style="margin-right: 50px;" target="_blank" href="https://www.linkedin.com/in/mohammed-ismail-342aa0164/"
            class="fa fa-linkedin shadow"></a>

        <a target="_blank" href="https://www.instagram.com/_mohammed.ismail_/" class="fa fa-instagram shadow"></a>
        <p class="mt-4">Copyright © 2020 Mohammed Ismail</p>
    </div>


    <!--
    <script>
        $('.count').each(function () {
            $(this).prop('Counter', 1).animate({
                Counter: $(this).text()
            }, {
                duration: 1500,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    </script>
-->
</body>

</html>