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
        <h1>Karnataka District wise Corona Cases</h1>
        <hr class="w-25 mx-auto pt-2 mb-5">
    </div>


    <form action="" class="form-control">
        <input class="shadow" type="text" id="myInput" placeholder="Search any district...">
    </form>

    <div class="container-fluid">

        <table class="table text-center table-fixed">
            <thead>
                <tr class="header">

                    <th class="the">District</th>

                    <th class="the">Confirmed</th>

                    <th class="the">Active</th>

                    <th class="the">Recovered</th>

                    <th class="the">Deceased</th>
                </tr>
            </thead>
            <tbody id="tbval">
                <?php

$data = file_get_contents('https://api.covid19india.org/state_district_wise.json');
$daywise = json_decode($data, true);


?>

                <tr>
                    <td>Bagalkote</td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Bagalkote']['confirmed'] ?></td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Bagalkote']['active'] ?></td>

                    <td><?php echo $daywise['Karnataka']['districtData']['Bagalkote']['recovered'] ?></td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Bagalkote']['deceased'] ?></td>
                </tr>
                <tr>
                    <td>Ballari</td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Ballari']['confirmed'] ?></td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Ballari']['active'] ?></td>

                    <td><?php echo $daywise['Karnataka']['districtData']['Ballari']['recovered'] ?></td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Ballari']['deceased'] ?></td>
                </tr>


                <tr>
                    <td>Belagavi</td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Belagavi']['confirmed'] ?></td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Belagavi']['active'] ?></td>

                    <td><?php echo $daywise['Karnataka']['districtData']['Belagavi']['recovered'] ?></td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Belagavi']['deceased'] ?></td>
                </tr>

                <tr>
                    <td>Bengaluru Rural</td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Bengaluru Rural']['confirmed'] ?></td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Bengaluru Rural']['active'] ?></td>

                    <td><?php echo $daywise['Karnataka']['districtData']['Bengaluru Rural']['recovered'] ?></td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Bengaluru Rural']['deceased'] ?></td>
                </tr>

                <tr>
                    <td>Bengaluru Urban</td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Bengaluru Urban']['confirmed'] ?></td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Bengaluru Urban']['active'] ?></td>

                    <td><?php echo $daywise['Karnataka']['districtData']['Bengaluru Urban']['recovered'] ?></td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Bengaluru Urban']['deceased'] ?></td>
                </tr>

                <tr>
                    <td>Bidar</td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Bidar']['confirmed'] ?></td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Bidar']['active'] ?></td>

                    <td><?php echo $daywise['Karnataka']['districtData']['Bidar']['recovered'] ?></td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Bidar']['deceased'] ?></td>
                </tr>


                <tr>
                    <td>Chikkaballapura</td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Chikkaballapura']['confirmed'] ?></td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Chikkaballapura']['active'] ?></td>

                    <td><?php echo $daywise['Karnataka']['districtData']['Chikkaballapura']['recovered'] ?></td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Chikkaballapura']['deceased'] ?></td>
                </tr>

                <tr>
                    <td>Chitradurga</td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Chitradurga']['confirmed'] ?></td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Chitradurga']['active'] ?></td>

                    <td><?php echo $daywise['Karnataka']['districtData']['Chitradurga']['recovered'] ?></td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Chitradurga']['deceased'] ?></td>
                </tr>

                <tr>
                    <td>Dakshina Kannada</td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Dakshina Kannada']['confirmed'] ?></td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Dakshina Kannada']['active'] ?></td>

                    <td><?php echo $daywise['Karnataka']['districtData']['Dakshina Kannada']['recovered'] ?></td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Dakshina Kannada']['deceased'] ?></td>
                </tr>


                <tr>
                    <td>Davanagere</td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Davanagere']['confirmed'] ?></td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Davanagere']['active'] ?></td>

                    <td><?php echo $daywise['Karnataka']['districtData']['Davanagere']['recovered'] ?></td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Davanagere']['deceased'] ?></td>
                </tr>


                <tr>
                    <td>Dharwad</td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Dharwad']['confirmed'] ?></td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Dharwad']['active'] ?></td>

                    <td><?php echo $daywise['Karnataka']['districtData']['Dharwad']['recovered'] ?></td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Dharwad']['deceased'] ?></td>
                </tr>

                <tr>
                    <td>Gadag</td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Gadag']['confirmed'] ?></td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Gadag']['active'] ?></td>

                    <td><?php echo $daywise['Karnataka']['districtData']['Gadag']['recovered'] ?></td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Gadag']['deceased'] ?></td>
                </tr>

                <tr>
                    <td>Haveri</td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Haveri']['confirmed'] ?></td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Haveri']['active'] ?></td>

                    <td><?php echo $daywise['Karnataka']['districtData']['Haveri']['recovered'] ?></td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Haveri']['deceased'] ?></td>
                </tr>

                <tr>
                    <td>Kalaburagi</td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Kalaburagi']['confirmed'] ?></td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Kalaburagi']['active'] ?></td>

                    <td><?php echo $daywise['Karnataka']['districtData']['Kalaburagi']['recovered'] ?></td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Kalaburagi']['deceased'] ?></td>
                </tr>


                <tr>
                    <td>Kodagu</td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Kodagu']['confirmed'] ?></td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Kodagu']['active'] ?></td>

                    <td><?php echo $daywise['Karnataka']['districtData']['Kodagu']['recovered'] ?></td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Kodagu']['deceased'] ?></td>
                </tr>



                <tr>
                    <td>Mandya</td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Mandya']['confirmed'] ?></td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Mandya']['active'] ?></td>

                    <td><?php echo $daywise['Karnataka']['districtData']['Mandya']['recovered'] ?></td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Mandya']['deceased'] ?></td>
                </tr>


                <tr>
                    <td>Mysuru</td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Mysuru']['confirmed'] ?></td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Mysuru']['active'] ?></td>

                    <td><?php echo $daywise['Karnataka']['districtData']['Mysuru']['recovered'] ?></td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Mysuru']['deceased'] ?></td>
                </tr>

                <tr>
                    <td>Other State</td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Other State']['confirmed'] ?></td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Other State']['active'] ?></td>

                    <td><?php echo $daywise['Karnataka']['districtData']['Other State']['recovered'] ?></td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Other State']['deceased'] ?></td>
                </tr>

                <tr>
                    <td>Tumakuru</td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Tumakuru']['confirmed'] ?></td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Tumakuru']['active'] ?></td>

                    <td><?php echo $daywise['Karnataka']['districtData']['Tumakuru']['recovered'] ?></td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Tumakuru']['deceased'] ?></td>
                </tr>



                <tr>
                    <td>Udupi</td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Udupi']['confirmed'] ?></td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Udupi']['active'] ?></td>

                    <td><?php echo $daywise['Karnataka']['districtData']['Udupi']['recovered'] ?></td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Udupi']['deceased'] ?></td>
                </tr>


                <tr>
                    <td>Uttara Kannada</td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Uttara Kannada']['confirmed'] ?></td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Uttara Kannada']['active'] ?></td>

                    <td><?php echo $daywise['Karnataka']['districtData']['Uttara Kannada']['recovered'] ?></td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Uttara Kannada']['deceased'] ?></td>
                </tr>

                <tr>
                    <td>Vijayapura</td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Vijayapura']['confirmed'] ?></td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Vijayapura']['active'] ?></td>

                    <td><?php echo $daywise['Karnataka']['districtData']['Vijayapura']['recovered'] ?></td>
                    <td><?php echo $daywise['Karnataka']['districtData']['Vijayapura']['deceased'] ?></td>
                </tr>


































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