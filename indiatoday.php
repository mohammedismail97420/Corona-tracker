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

    <div class="container-fluid text-center mt-5">
        <h1>India Corona Cases Today</h1>
        <hr class="w-25 mx-auto pt-2 mb-5">
    </div>


    <form action="" class="form-control">
        <input class="shadow" type="text" id="myInput" placeholder="Search any date...">
    </form>

    <div class="container-fluid">

        <table class="table text-center table-fixed">
            <thead>
                <tr class="header">

                    <th class="the">Date</th>
                    <th class="the">Daily Confirmed</th>
                    <th class="the">Total Confirmed</th>
                    <th class="the">Daily recovered</th>
                    <th class="the">Total recovered</th>
                    <th class="the">Daily Deceased</th>
                    <th class="the">Total Deceased</th>
                </tr>
            </thead>
            <tbody id="tbval">
                <?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$daywise = json_decode($data, true);

$totalcount = count($daywise['cases_time_series']);
 

$i= $totalcount-1;
while($i>-1){
 ?>
                <tr>


                    <td><?php echo $daywise['cases_time_series'][$i]['date']; ?></td>

                    <td><?php echo $daywise['cases_time_series'][$i]['dailyconfirmed']; ?></td>

                    <td><?php  echo $daywise['cases_time_series'][$i]['totalconfirmed']; ?></td>

                    <td><?php  echo $daywise['cases_time_series'][$i]['dailyrecovered']; ?></td>

                    <td><?php  echo $daywise['cases_time_series'][$i]['totalrecovered']; ?></td>

                    <td><?php echo $daywise['cases_time_series'][$i]['dailydeceased']; ?></td>

                    <td><?php  echo $daywise['cases_time_series'][$i]['totaldeceased']; ?></td>







                </tr>


                <?php
                $i--;
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

</body>

</html>