<?php 
require_once('admin-panel/session.php');
if($q){
    

}else{
    header("Location: index.php");
}

require_once 'admin-panel/controller/connect.php';

$sql="SELECT * FROM `user`";
$data=mysqli_query($connect, $sql);
$data=mysqli_fetch_all($data);

$sqlii="SELECT * FROM `natija`";
$da=mysqli_query($connect, $sqlii);
$da=mysqli_fetch_all($da);


?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Responsive website template for documentations</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/plugins/prism/prism.css">
    <link rel="stylesheet" href="assets/plugins/lightbox/dist/ekko-lightbox.min.css">
    <link rel="stylesheet" href="assets/plugins/elegant_font/css/style.css">

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<body class="body-blue">
<?php foreach($data as $value):
                        if($value[1]==$email and $value[3]==$kod){
                           
                     ?>
                    
    <div class="page-wrapper">
        <!-- ******Header****** -->
        <header id="header" class="header">
            <div class="container">
                <div class="branding">
                    <h1 class="logo">
                        <a href="index.php">
                            <span aria-hidden="true" class="icon_documents_alt icon"></span>
                            <span class="text-highlight">Pretty</span><span class="text-bold">Docs</span>
                        </a>
                    </h1>
                </div><!--//branding-->
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Charts</li>
                </ol>
            </div><!--//container-->
        </header><!--//header-->
        <div class="doc-wrapper">
            <div class="container">
                <div id="doc-header" class="doc-header text-center">
                    <h1 class="doc-title"><span aria-hidden="true" class="icon icon_datareport_alt"></span> Charts</h1>
                    <div class="meta"><i class="fa fa-clock-o"></i> Last updated: Jan 25th, 2016</div>
                </div><!--//doc-header-->
                <div class="doc-body">
                    <div class="doc-content">
                        <div class="content-inner">
                            
                        <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

                            <script>
                                <?php foreach($da as $val): ?>
                                var xValues = ["Italia", "France", "Spain", "USA", "Argentina"];
                                <?php endforeach; ?>
                                var yValues = [55, 49, 44, 24, 15];
                                var barColors = ["red", "green","blue","orange","brown"];

                                new Chart("myChart", {
                                type: "bar",
                                data: {
                                    labels: xValues,
                                    datasets: [{
                                    backgroundColor: barColors,
                                    data: yValues
                                    }]
                                },
                                options: {
                                    legend: {display: false},
                                    title: {
                                    display: true,
                                    text: "World Wine Production 2018"
                                    }
                                }
                                });
                                </script>

                           
                            
<!--                             
                            <section id="inline" class="doc-section">
                                <h2 class="section-title">Inline Charts</h2>
                                <div class="section-block">
                                    <h3 class="block-title">1. Screenshot</h3>
                                    <div class="screenshot-holder">
                                        <img class="img-responsive" src="assets/images/demo/appkit-chart-inline.jpg" alt="screenshot" /
                                        <i class="icon fa fa-link"></i>
                                    </div>
                                </div>
                                <div class="section-block">
                                    <h3 class="block-title">2. Charts Used</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                    <ul class="list list-unstyled">
                                        <li><a href="#" target="_blank"><i class="fa fa-external-link-square"></i> Peity</a></li>
                                        <li><a href="#" target="_blank"><i class="fa fa-external-link-square"></i> Easy Pie Chart</a></li>
                                        <li><a href="#" target="_blank"><i class="fa fa-external-link-square"></i> Sparklines</a></li>
                                    </ul>
                                </div>
                                <div class="section-block">
                                    <div class="jumbotron text-center">
                                        <h1>Jumbotron Example</h1>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                        <ul class="list list-inline center-block">
                                            <li><a class="btn btn-cta btn-pink" href="https://wrapbootstrap.com/theme/appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><i class="fa fa-external-link"></i> AppKit Details</a></li>
                                            <li><a class="btn btn-cta btn-primary" href="https://wrapbootstrap.com/theme/appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><i class="fa fa-eye"></i> AppKit Demo</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </section> -->
                            
                        </div>
                    </div>
                    
                </div>             
            </div>
        </div>
        
        <div id="promo-block" class="promo-block promo-block-2">
            <div class="container">
                <div class="promo-block-inner">
                    <h3 class="promo-title text-center"><i class="fa fa-heart"></i> <a href="https://wrapbootstrap.com/theme/appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank">AppKit - Bootstrap Angular Admin Theme for Developers</a></h3>
                    <div class="row">
                        <div class="figure-holder col-md-5 col-sm-6 col-xs-12">
                            <div class="figure-holder-inner">
                                <a href="https://wrapbootstrap.com/theme/appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><img class="img-responsive" src="assets/images/demo/appkit-dashboard-2-thumb.jpg" alt="AppKit Theme" /></a>
                                <a class="mask" href="https://wrapbootstrap.com/theme/appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><i class="icon fa fa-heart pink"></i></a>
                            </div>
                        </div>
                        <div class="content-holder col-md-7 col-sm-6 col-xs-12">
                            <div class="content-holder-inner">
                                <div class="desc">
                                    <h4 class="content-title"><strong>Love this free documentation theme?</strong></h4>
                                    <p>Check out AppKit - an Angular admin theme I created with my developer friend <a href="https://twitter.com/tnajdek">Tom Najdek</a> for developers. AppKit uses modern front-end technologies and is packed with useful components and widgets to speed up your app development.</p>
                                    <p><strong class="highlight">[Tip for developers]:</strong> If your project is Open Source, you can use this area to promote your other projects or hold third party adverts like Bootstrap and FontAwesome do!</p>
                                    <a class="btn btn-cta" href="https://wrapbootstrap.com/theme/appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank">View Demo</a>
                                </div>
                                <div class="author"><a href="http://themes.3rdwavemedia.com">Xiaoying Riley</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div><!--//page-wrapper-->
    
    <footer id="footer" class="footer text-center">
        <div class="container">
             <small class="copyright">Designed with <i class="fa fa-heart"></i> by <a href="http://themes.3rdwavemedia.com/" target="_blank">Xiaoying Riley</a> for developers</small>
            
        </div>
    </footer>
    
     
    <!-- Main Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/plugins/prism/prism.js"></script>    
    <script type="text/javascript" src="assets/plugins/jquery-scrollTo/jquery.scrollTo.min.js"></script>  
    <script type="text/javascript" src="assets/plugins/lightbox/dist/ekko-lightbox.min.js"></script>                                                                
    <script type="text/javascript" src="assets/plugins/jquery-match-height/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <?php  
    }
endforeach; ?>
</body>
</html> 

