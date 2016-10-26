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
                    <li><a href="../../ballmanage/large"><b>Large Ball Management System</b></a></li>
                    <li><a href="../../ballmanage/small"><b>Small Ball Management System</b></a></li>
                  </ul>
                </li>
               <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Dispensers</b></a>
                    <ul class="dropdown-menu">
                    <li><a href=".."><b>Golf Ball Dispensers</b></a></li>
                    <li><a href="../flattop"><b>Flat Top</b></a></li>
                    <li><a href="../conetop"><b>Cone Top</b></a></li>
                    <li><a href="../combi"><b>Combi</b></a></li>
                    <li><a href="../rs"><b>RS Ball Dispenser</b></a></li>
                    <li><a href="../greenline"><b>Green Line</b></a></li>
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
                <h2>Golf Ball Dispensers</h2>
                <p class="h4">Range Tech Ball Dispensers can be equipped with more vending options than any other ball dispenser in the golf range business. All Range Tech Ball Machines are made of the strongest materials and carry the most comprehensive warranties available. </p>
                <p align="center"><a href="../flattop"><img src="../../media/flattop.jpg" alt="Flat Top" style="width:35%;height:30%;"></a></p><h3><p align="center">Flat Top</p></h3>  
                <p align="center"><a href="../conetop"><img src="../../media/conetop.jpg" alt="Cone Top" style="width:35%;height:30%;"></a></p><h3><p align="center">Cone Top</p></h3> 
                <p align="center"><a href="../combi"><img src="../../media/combi.jpg" alt="Combi" style="width:35%;height:30%;"></a></p><h3><p align="center">Combi</p></h3> 
                <p align="center"><a href="../rs"><img src="../../media/rsdispenser.jpg" alt="RS Ball Dispenser" style="width:35%;height:30%;"></a></p><h3><p align="center">RS Ball Dispenser</p></h3> 
                <p align="center"><a href="../greenline"><img src="../../media/greenline.jpg" alt="Green Line" style="width:35%;height:30%;"></a></p><h3><p align="center">Green Line</p></h3> 
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
                $('b', this).toggleClass("caret caret-up");                
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            });
    });
    
    </script>
</body>

</html>
