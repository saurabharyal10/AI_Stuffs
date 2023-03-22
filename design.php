<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">

    <style>
        .road {
            width: 1150px;
            background: yellow;
            position: relative;
            margin-top: 320px;
            border: 1px solid black;
            padding-top: 0px;
        }

        #vehicle {
            position: absolute;
            left: 0px;
            margin-top: -6rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="sample_row">
                <div class="light" style="margin-top:7rem; border:1px solid black; padding: 1rem; width: 200px; margin-left: 450px; ">
                    <div class="traffic_light justify-content-center align-items-center d-flex">
                        <div class="red mx-1" id="red" style="width:30px; border:1px solid red; height: 30px;">
                        </div>

                        <div class="yellow mx-1" id="yellow" style="width:30px; border:1px solid yellow; height: 30px;">
                        </div>

                        <div class="green mx-1" id="green" style="width:30px; border:1px solid green; height: 30px;">
                        </div>
                    </div>
                </div>

                <div class="start_button d-flex justify-content-end " style="margin-top: -3rem;">
                    <button class="btn btn-secondary" onclick="lightChange(), move()" style="border-radius: 12px; width: 120px; height: 42px; color: white; border-color: black;">Start</button>
                </div>
            </div>

            <div class="road">
                <div id="vehicle">
                    <!-- <marquee direction="right"> -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="118" height="118" fill="currentColor" class="bi bi-bicycle" viewBox="0 0 16 16">
                        <path d="M4 4.5a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1v.5h4.14l.386-1.158A.5.5 0 0 1 11 4h1a.5.5 0 0 1 0 1h-.64l-.311.935.807 1.29a3 3 0 1 1-.848.53l-.508-.812-2.076 3.322A.5.5 0 0 1 8 10.5H5.959a3 3 0 1 1-1.815-3.274L5 5.856V5h-.5a.5.5 0 0 1-.5-.5zm1.5 2.443-.508.814c.5.444.85 1.054.967 1.743h1.139L5.5 6.943zM8 9.057 9.598 6.5H6.402L8 9.057zM4.937 9.5a1.997 1.997 0 0 0-.487-.877l-.548.877h1.035zM3.603 8.092A2 2 0 1 0 4.937 10.5H3a.5.5 0 0 1-.424-.765l1.027-1.643zm7.947.53a2 2 0 1 0 .848-.53l1.026 1.643a.5.5 0 1 1-.848.53L11.55 8.623z" />
                    </svg>
                    <!-- </marquee> -->
                </div>
            </div>

        </div>
    </div>

</body>
<script type="text/javascript">
    var x;

    function lightChange() {
        // var x = Math.floor(Math.random() * 4);
        x = Math.floor(Math.random() * 4);
        move();
        // console.log(x);
        var red = document.getElementById("red");
        red.style.backgroundColor = "";
        var red = document.getElementById("yellow");
        yellow.style.backgroundColor = "";
        var red = document.getElementById("green");
        green.style.backgroundColor = "";

        // move(x);

        if (x == 1) {
            var element = document.getElementById("red");
            element.style.backgroundColor = "red";
        } else if (x == 2) {
            var element = document.getElementById("yellow");
            element.style.backgroundColor = "yellow";
        } else {
            var element = document.getElementById("green");
            element.style.backgroundColor = "green";
        }
    }
    setTimeout(lightChange, 10);

    // function move() {
    //     var vehicle = document.getElementById('vehicle');
    //     var poe = 0;
    //     var anim = setInterval(animate, 5);

    //     var local = x;
    //     console.log(local);

    //     function animate() {
    //         if (poe == 1018) {
    //             clearInterval(anim);
    //         } else {
    //             poe++;
    //             vehicle.style.left = poe + "px";
    //         }
    //     }
    // }

    function move() {
        var vehicle = document.getElementById('vehicle');
        var poe = 0;
        var anim = setInterval(animate, 3);

        var local = x;
        // console.log(local);

        function animate() {
            if (local == 1) {
                if (poe == 518) {
                    clearInterval(anim);
                } else {
                    poe++;
                    vehicle.style.left = poe + "px";
                }
            } else {
                if (poe == 1018) {
                    clearInterval(anim);
                } else {
                    poe++;
                    vehicle.style.left = poe + "px";
                }
            }
        }
    }
</script>

</html>