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
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Payment/Management Systems</b></a>
                    <ul class="dropdown-menu">
                        <li><a href="../management"><b>Range Ball Elevators</b></a></li>
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
                <h2><font color="#336633">Ball Management Systems</font></h2>
                <p class="h4">With our Ball Management System concept, every range operator is able to develop a cost efficient and easy-to-operate driving range. Through automation of the driving range and through sophisticated IT-Solutions a Ball Management System releases both time and resources to improve core business and customer relations.

Comprehending the specific requirements for designing and operating a golf range, we are able to customize our Ball Management System to suit both the small country club and the large commercial range. We provide solutions that improve your range operations today and prepare you for the future. We have developed four technologies to help create an efficient Ball Management System for your range:</p>
                <img src="../media/lbms.jpg" alt="Large Ball Manangement System" align="centre" style="width:60%;height:40%;">
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
