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

    <div class="container-fluid text-center mt-5">
        <h1>Corona India Live Updates</h1>
        <hr class="w-25 mx-auto pt-2 mb-5">
    </div>


    <div class="container">
        <div class="row text-center">




            <div class="col-lg-4 col-md-4 col-sm-12">

                <h4>Total Confirmed</h4>
                <?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$daywise = json_decode($data, true);

$totalcount = count($daywise['cases_time_series']);
 

$i= $totalcount-1;

 ?>
                <h3 style="color:#FF073A"><?php echo $daywise['cases_time_series'][$i]['totalconfirmed'];?></h3>
            </div>






            <div class="col-lg-4 col-md-4 col-sm-12">

                <h4>Total Recovered </h4>
                <?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$daywise = json_decode($data, true);

$totalcount = count($daywise['cases_time_series']);
 

$i= $totalcount-1;

 ?>
                <h3 style="color:#28A745"><?php echo $daywise['cases_time_series'][$i]['totalrecovered'];?></h3>
            </div>





            <div class="col-lg-4 col-ms-4 col-sm-12">

                <h4>Total Deceased</h4>
                <?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$daywise = json_decode($data, true);

$totalcount = count($daywise['cases_time_series']);
 

$i= $totalcount-1;?>
                <h3 style="color:#6C757D"><?php echo $daywise['cases_time_series'][$i]['totaldeceased'];?></h3>



            </div>


        </div>
    </div>

    <hr>
    <form action="" class="form-control">
        <input class="shadow" type="text" id="myInput" placeholder="Search any state...">
    </form>

    <div class="container-fluid">

        <table class="table text-center table-fixed">
            <thead>
                <tr class="header">

                    <th class="the">State</th>
                    <th class="the">Confirmed</th>
                    <th class="the">Active</th>
                    <th class="the">Recovered</th>
                    <th class="the">Deaths</th>
                    <th class="the">Last Updated</th>
                </tr>
            </thead>
            <tbody id="tbval">
                <?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$coranalive = json_decode($data, true);

$statescount = count($coranalive['statewise']);

 


$i=1;
while($i < $statescount){
?>
                <tr>


                    <td><?php echo $coranalive['statewise'][$i]['state']; ?></td>

                    <td><?php echo $coranalive['statewise'][$i]['confirmed']; ?></td>

                    <td><?php echo $coranalive['statewise'][$i]['active']; ?></td>

                    <td><?php  echo $coranalive['statewise'][$i]['recovered']; ?></td>

                    <td><?php  echo $coranalive['statewise'][$i]['deaths']; ?></td>

                    <td><?php echo $coranalive['statewise'][$i]['lastupdatedtime']; ?></td>
                </tr>





                <?php
                $i++;
                }


                ?>
            </tbody>

        </table>


    </div>




    <script>
    $(document).ready(function() {
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#tbval tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
    </script>