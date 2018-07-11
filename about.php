<!DOCTYPE html>
<html>
<head>
    <title> Travolla </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="shortcut icon" href="css/images/weblogo.png"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css\main.css">
    <link rel="stylesheet" type="text/css" href="css\signup.css">
    <link rel="stylesheet" type="text/css" href="css\about.css">
    <link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">

    <script>
        function feedbackCheck() {
            var comment = $("#Feedback").val();
            if (comment.length == 0) {
                alert("Please Enter Feedback");
            } else {
                alert("Thank you for your feedback!");
                window.location.href = "index.php";
            }
            return;
        }
    </script>

    <!-- Script for interactive card
    <script>
        $(document).ready(function() {
            $(".rounded-rectangle3").mouseover(function() {
                $(".slidingPanel").animate({height:'350px'});
                $("img.round2").animate({width:'350%'});
                $("p.slidingPanelText").animate({opacity: 1});
            });
            $(".rounded-rectangle3").mouseout(function() {
                $(".slidingPanel").animate({height:'100px'});
                $("img.round2").animate({width:'300%'});
                $("p.slidingPanelText").animate({opacity: 0});
            });
        });
    </script>
    -->

</head>

<body  onload="displayWindowSize()" onresize="displayWindowSize()">
<?php
include('header.php');
?>


<div class="container-fluid">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " >
        <h1 id="toptitle"> About </h1>
    </div>
</div>


<!--FAQs-->

<div class="container-fluid">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
        <h2 class="AboutHeaders"> FAQs </h2>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <h3 class="FAQ"> Lorem Ipsum dolor sit amet, consectetur?</h3>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
            <p class="FAQ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at magna in velit auctor lacinia ut et leo. Donec tempus accumsan nulla at tempor. Duis efficitur ullamcorper nibh sit amet pharetra. Quisque sit amet cursus risus.</p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <h3 class="FAQ"> Lorem Ipsum dolor sit amet, consectetur?</h3>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
            <p class="FAQ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at magna in velit auctor lacinia ut et leo. Donec tempus accumsan nulla at tempor. Duis efficitur ullamcorper nibh sit amet pharetra. Quisque sit amet cursus risus.</p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <h3 class="FAQ"> Lorem Ipsum dolor sit amet, consectetur?</h3>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
            <p class="FAQ">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at magna in velit auctor lacinia ut et leo. Donec tempus accumsan nulla at tempor. Duis efficitur ullamcorper nibh sit amet pharetra. Quisque sit amet cursus risus.</p>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
    </div>
</div>


<!--About Developers-->

<div class="container-fluid">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
        <h2 class="AboutHeaders"> About the Developers </h2>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
            <div class="text-center rounded-rectangle">
                <div>
                    <img src="css/images/bg.jpg" alt = welcomepic class="round">
                </div>
                <h3 class="card-title">Lorem Ipsum</h3>
                <p class="rounded-center card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at magna in velit auctor lacinia ut et leo. Donec tempus accumsan nulla at tempor. Duis efficitur ullamcorper nibh sit amet pharetra. Quisque sit amet cursus risus. </p>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1"></div>

        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
            <div class="text-center rounded-rectangle">
                <div>
                    <img src="css/images/bg.jpg" alt = welcomepic class="round">
                </div>
                <h3 class="card-title">Lorem Ipsum</h3>
                <p class="rounded-center card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at magna in velit auctor lacinia ut et leo. Donec tempus accumsan nulla at tempor. Duis efficitur ullamcorper nibh sit amet pharetra. Quisque sit amet cursus risus. </p>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1"></div>

        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
            <div class="text-center rounded-rectangle">
                <div>
                    <img src="css/images/bg.jpg" alt = welcomepic class="round">
                </div>
                <h3 class="card-title">Lorem Ipsum</h3>
                <p class="rounded-center card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at magna in velit auctor lacinia ut et leo. Donec tempus accumsan nulla at tempor. Duis efficitur ullamcorper nibh sit amet pharetra. Quisque sit amet cursus risus. </p>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
            <div class="text-center rounded-rectangle">
                <div>
                    <img src="css/images/bg.jpg" alt = welcomepic class="round">
                </div>
                <h3 class="card-title">Lorem Ipsum</h3>
                <p class="rounded-center card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at magna in velit auctor lacinia ut et leo. Donec tempus accumsan nulla at tempor. Duis efficitur ullamcorper nibh sit amet pharetra. Quisque sit amet cursus risus. </p>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1"></div>

        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
            <div class="text-center rounded-rectangle">
                <div>
                    <img src="css/images/bg.jpg" alt = welcomepic class="round">
                </div>
                <h3 class="card-title">Lorem Ipsum</h3>
                <p class="rounded-center card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at magna in velit auctor lacinia ut et leo. Donec tempus accumsan nulla at tempor. Duis efficitur ullamcorper nibh sit amet pharetra. Quisque sit amet cursus risus. </p>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1"></div>

        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
            <div class="text-center rounded-rectangle">
                <div>
                    <img src="css/images/bg.jpg" alt = welcomepic class="round">
                </div>
                <h3 class="card-title">Lorem Ipsum</h3>
                <p class="rounded-center card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at magna in velit auctor lacinia ut et leo. Donec tempus accumsan nulla at tempor. Duis efficitur ullamcorper nibh sit amet pharetra. Quisque sit amet cursus risus. </p>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
    </div>

    <!-- content for interactive card
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="text-center rounded-rectangle2">
                <div class="rounded-rectangle3"></div>
                <div style="position: absolute; top: 0">
                    <img src="css/images/bg.jpg" alt = welcomepic class="round2">
                </div>
                <div class="slidingPanel">
                    <h3 class="card-title2">Lorem Ipsum</h3>
                    <p class="rounded-center card-text2 slidingPanelText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at magna in velit auctor lacinia ut et leo. Donec tempus accumsan nulla at tempor. Duis efficitur ullamcorper nibh sit amet pharetra. Quisque sit amet cursus risus. </p>
                </div>

            </div>
        </div>
    </div>

    -->


</div>


<!--Enquiries-->

<div class="container-fluid">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
        <h2 class="AboutHeaders"> Enquiries </h2>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            <form>
                <div class="form-group">
                    <label>Email Address:</label>
                    <input type="email" class="form-control form-control-lg" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                    <label>Feedback:</label>
                    <textarea id="Feedback" class="form-control" rows="3"></textarea>
                </div>
                <button id="SubmitButton" type="submit" class="btn btn-primary" onclick="feedbackCheck()">Submit</button>
            </form>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2"></div>
    </div>
</div>


<?php include('footer.php') ?>

<!--Responsiveness-->

<script>
    function displayWindowSize() {

        //Retrieve the screen height of the user

        var screenheight = window.innerHeight;
        console.log(screenheight);
        //Adapt the landing container to have the screenheight minus 100px
        $('.container-fluid').css('margin-top',"7%");
    };
</script>

<!-- Optional JavaScript-->


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
</body>
</html>