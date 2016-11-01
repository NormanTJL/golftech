<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bare - Start Bootstrap Template</title>

    <link href="../../css/template.css" rel="stylesheet">
    <link href="../../css/bootstrap.css" rel="stylesheet">


    <style>
    body {
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
   <?php include("../../template/top-kids.php");?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-left">
                <br>
                <table align="center"><tr><td colspan="2" width="60%"><img src="../../media/lbms.jpg" align="left" alt="Large Ball Manangement System" style="width:150%;height:110%;"></td><td colspan="2"></td></tr></table>
                <br><br>
             <h2><font color="#336633">Large Ball Management Systems</font></h2>
                <p class="h4">To ensure the highest performance and reliability of our ball management systems, we work according to our project model, which runs through our entire working process from quotation, design, production to the completed installation. Each project step has to pass through a grid criteria and be approved prior to proceeding to the next step in the project. Using this method we ensure that our customers are involved in each step and receives a system that fulfills their requirements.</p>
                <p class="h4">Our relationship with the customer do not end at the point of installation, though. A one year warranty check up is included with all our systems together with a one year contract to our support line.</p>
                <br><br>
                <figure>
                  <img src="../../media/largeballmanagement1.jpg" alt="Large Ball Manangement System" style="width:100%;height:30%;">
                  <figcaption align="center" > <p class="h4"><b>Fig. 1 </b>  <br>A Typical System For Washing Ditch/ Ball Shooter Transportaion/ To 4 Dispensers</p></figcaption>
                </figure>
               <br>
               <br>
               <table>
               <tr>
               <td width="40%">
                <figure align="center">
                  <img src="../../media/largeball2.jpg" align="center" alt="Large Ball Manangement System" style="width:70%;height:30%;">
                  <figcaption align="center"> <p class="h4"><b>Fig. 2</b><br>A Typical Layout for Conveyor Belt Transportation</p></figcaption>
                </figure>
                </tr>
                </table>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="../../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../js/bootstrap.min.js"></script>
    <script type="text/javascript">
        
            $(function(){
            $(".dropdown").hover(            
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
              //  $('b', this).toggleClass("caret caret-up");                
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');
              //  $('b', this).toggleClass("caret caret-up");                
            });
    });
    
    </script>
</body>

</html>
