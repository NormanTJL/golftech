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
                <td width="15%"><a href="../../ballmanage"><img src="../../media/RangeTechFinal.jpg" alt="Range Tech" style="width:100%;height:10%;"></a></td>
                <td>
                     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Ball Management</b></a>
                  <ul class="dropdown-menu">
                     <li><a href="../large"><b>Large Ball Management System</b></a></li>
                    <li><a href="../small"><b>Small Ball Management System</b></a></li>
                  </ul>
                </li>
               <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dispensers<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                    <li><a href="../../golfdispenser"><b>Golf Ball Dispensers</b></a></li>
                    <li><a href="../../golfdispenser/flattop"><b>Flat Top</b></a></li>
                    <li><a href="../../golfdispenser/conetop"><b>Cone Top</b></a></li>
                    <li><a href="../../golfdispenser/combi"><b>Combi</b></a></li>
                  </ul>
                </li>
                <li><a href="../../golfwasher"><b>Golf Ball Washers</b></a></li>
                <li><a href="../../elevator"><b>Range Ball Elevators</b></a></li>
                <li><a href="../../blowershooter"><b>Range Ball Blower/Shooter</b></a></li>
                <li><a href="../../management"><b>Payment/Management System</b></a></li>
                
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
                <img src="../../media/RangeTechFinal.jpg" align="center" alt="Range Tech" style="width:40%;height:10%;">
                <img src="../../media/lbms.jpg" align="right" alt="Large Ball Manangement System" style="width:35%;height:30%;">
             <h2><font color="#336633">Large Ball Management Systems</font></h2>
                <p class="h4">To ensure the highest performance and reliability of our ball management systems, we work according to our project model, which runs through our entire working process from quotation, design, production to the completed installation. Each project step has to pass through a grid criteria and be approved prior to proceeding to the next step in the project. Using this method we ensure that our customers are involved in each step and receives a system that fulfills their requirements.</p>
                <p class="h4">Our relationship with the customer do not end at the point of installation, though. A one year warranty check up is included with all our systems together with a one year contract to our suppoart line.</p>
                <img src="../../media/smallbms2.jpg" align="center" alt="Small Ball Manangement System" style="width:100%;height:30%;">
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
