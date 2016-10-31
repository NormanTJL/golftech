<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bare - Start Bootstrap Template</title>

    <link href="../css/template.css" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet">


    <style>
    body {
        padding-top: 70px;
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
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
        <table>
            <tr>
                <td>
                     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav">
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Ball Management</b></a>
                  <ul class="dropdown-menu">
                    <li><a href="../ballmanage/large"><b>Large Ball Management System</b></a></li>
                    <li><a href="../ballmanage/small"><b>Small Ball Management System</b></a></li>
                  </ul>
                </li>
               <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Golf Ball Dispensers</b></a>
                    <ul class="dropdown-menu">
                    <li><a href=".."><b>Golf Ball Dispensers</b></a></li>
                    <li><a href="../golfdispenser/flattop"><b>Flat Top</b></a></li>
                    <li><a href="../golfdispenser/conetop"><b>Cone Top</b></a></li>
                    <li><a href="../golfdispenser/combi"><b>Combi</b></a></li>
                  </ul>
                </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Golf Ball Washers</b></a>
                    <ul class="dropdown-menu">
                        <li><a href="../golfwasher"><b>RT24K</b></a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Range Ball Elevators</b></a>
                    <ul class="dropdown-menu">
                        <li><a href="../elevator"><b>Range Ball Elevators</b></a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Range Ball Blower/Shooters</b></a>
                    <ul class="dropdown-menu">
                        <li><a href="../blowershooter"><b>Range Ball Blower/Shooter</b></a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Payment Management Systems</b></a>
                    <ul class="dropdown-menu">
                        <li><a href="../management"><b>Payment Management Systems</b></a></li>
                    </ul>
                </li>
              </ul>
            </div>
                </td>
            </tr>
        </table>
        
            <!-- Brand and toggle get grouped for better mobile display -->
           
            
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-left">
                <img src="../media/RangeTechFinal.jpg" align="center" alt="Range Tech" style="width:60%;height:10%;">   
                <br><br><br>
                <h2><font color="#336633">Range Tech Payment Management Systems</font></h2>
                <p class="h3">For Range Tech Ball Dispenser</p>
                <img src="../media/page1.jpg" align="center" alt="Page 1" style="width:100%;height:10%;">
                <br><br><br>
                <img src="../media/page2.jpg" align="center" alt="Page 2" style="width:100%;height:10%;">
                <br><br><br>
                <img src="../media/page3.jpg" align="center" alt="Page 3" style="width:100%;height:10%;">

               <!-- <br><p class="h4"><b>S</b>ELECT CONTROL is an electronic control system that makes getting golf balls easier and increases revenue at the same time. Based on an electronic package mounted in the Ball Dispenser, Select Control allows you to sell several different amounts of balls depending on the payment method or the time of the day. <br> Select Control can function as a stand-alone unit or can be networked to a central computer. When on-line, Select allows for: </p>
                <ul><li><p class="h4">On-line Payment System - Select uses a reliable read-only card system where all the vital information is stored in a personal account on the computer. Customer flexibility increases and cash handling in Ball Dispenser decreases</p></li>
                    <li><p class="h4">Statistics: All sales are accounted for. Statistics can be broken down from hour of the day to month of the year and presented in easy to use tables and reports</p></li></ul>
                <img src="../media/RangeTechManagement.jpeg" alt="Large Ball Manangement System" align="centre" style="width:60%;height:40%;">
                <p class="h3">Select Stand Alone</p><p class="h4">Stand Alone is the foundation of the Select Control System. It features:</p>
                <ul>
                    <li>Setting of three price levels</li>
                    <li>Up to four daily Happy Hour periods that allow you to vary ball amounts or price</li>
                    <li>Statistical information about tokens, cash and dispensed balls.</li>
                </ul>
                UPGRADE PACKAGE:
                <ul>
                    <li>Electronic Coin Acceptor for up to six different tokens or coins</li>
                    <li>Magnetic Card Reader</li>
                    <li>Bill Acceptor</li>
                    <li>Select Stand Alone Printer (in the machine) for convenient report/statistical print-outs</li>
                </ul>
            -->
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript">
        
            $(function(){
            $(".dropdown").hover(            
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
               // $('b', this).toggleClass("caret caret-up");                
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
