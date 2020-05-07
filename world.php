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
        <h1>Corona World Live Updates</h1>
        <hr class="w-25 mx-auto pt-2 mb-5">
    </div>


    <form action="" class="form-control">
        <input class="shadow" type="text" id="myInput" placeholder="Search any country...">
    </form>

    <div class="container-fluid">

        <table class="table text-center table-fixed">
            <thead>
                <tr class="header">
                    <th class="the">Country</th>
                    <th class="the">Total Confirmed</th>
                    <th class="the">Total Recovered</th>
                    <th class="the">Total Deaths</th>
                    <th class="the">Last Updated</th>

                </tr>
            </thead>
            <tbody id="tbval">
                <tr>

                </tr>
            </tbody>

        </table>


    </div>

    <script>
    function fetch() {
        $.get("https://api.covid19api.com/summary",
            function(data) {
                var tbval = document.getElementById('tbval');
                for (var i = 1; i < (data['Countries'].length); i++) {
                    var x = tbval.insertRow();

                    x.insertCell(0);
                    tbval.rows[i].cells[0].innerHTML = data['Countries'][i - 1]['Country'];
                    tbval.rows[i].cells[0].style.fontWeight = "bold";
                    tbval.rows[i].cells[0].style.color = "#a83232";

                    x.insertCell(1);
                    tbval.rows[i].cells[1].innerHTML = data['Countries'][i - 1]['TotalConfirmed'];

                    x.insertCell(2);
                    tbval.rows[i].cells[2].innerHTML = data['Countries'][i - 1]['TotalRecovered'];

                    x.insertCell(3);
                    tbval.rows[i].cells[3].innerHTML = data['Countries'][i - 1]['TotalDeaths'];


                    var asd = data['Countries'][i - 1]['Date'];
                    var date = Date(asd);
                    var ddate = date.substr(0, 25);

                    x.insertCell(4);

                    tbval.rows[i].cells[4].innerHTML = ddate;

                }
            }
        );
    }
    </script>



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