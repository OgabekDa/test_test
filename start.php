<?php
require_once 'admin-panel/controller/connect.php';
require_once('admin-panel/session.php');
if($q){
    

}else{
    header("Location: index.php");
}

$sql="SELECT * FROM `kitob`";
$data=mysqli_query($connect, $sql);
$data=mysqli_fetch_all($data);

$id=$_POST['id'];
$natija=$_SESSION['natija'];

$sss="SELECT * FROM `user`";
$daaa=mysqli_query($connect, $sss);
$daaa=mysqli_fetch_all($daaa);

$email=$_SESSION['email'];
$kod=$_SESSION['password'];

foreach($daaa as $valu){
    
}



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
    <link rel="stylesheet" href="assets/plugins/elegant_font/css/style.css">
    
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head> 

<body class="body-green">
    <div class="page-wrapper">
        <!-- ******Header****** -->
        <header id="header" class="header">
            <div class="container">
                <div class="branding">
                    <h1 class="logo">
                        <a href="index.php">
                            <?php foreach($data as $value):
                                if($value[0]==$id): ?>
                            <span aria-hidden="true" class="icon_documents_alt icon"></span>
                            <span class="text-highlight"><?= $value[1] ?></span><span class="text-bold"><?php echo "Fani"; ?></span>
                            <?php endif;
                        endforeach; ?>
                        </a>
                    </h1>
                </div><!--//branding-->
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Quick Start</li>
                </ol>
            </div><!--//container-->
        </header><!--//header-->
        <div class="doc-wrapper">
            <div class="container">
                <div id="doc-header" class="doc-header text-center">
                    <h1 class="doc-title"><i class="icon fa fa-paper-plane"></i> Testga omad</h1>
                    <div class="meta"><i class="fa fa-clock-o"></i>Qayta ishga tushirilgan sanasi : 2023.03.03</div>
                </div><!--//doc-header-->
                <div class="doc-body">
                    <div class="doc-content">
                        <div class="content-inner">

                        
                            <section id="download-section" class="doc-section">
                                <h2 class="section-title"></h2>
                                <div class="section-block">
                                    <h2>Test turini tanlang</h2>
                                    <?php foreach($data as $value):
                                if($value[0]==$id): ?>
                                    <?php $q=30;
                                    for($i=5; $i<=$q; $i+=5): ?>
                                    <form action="admin-panel/start/misol.php" method="POST">
                                        <input type="hidden" name="misol" value="<?= $i ?>">
                                        <input type="hidden" name="fan" value="<?= $value[1] ?>">
                                        <p>Testlar soni: <?= $i; ?></p>
                                        <p>Berilgan vaqt: <?= $i; ?> daqiqa</p>
                                        <input type="submit" class="btn btn-green" target="_blank" value="Testni boshlash"><i class="fa fa-download"></i>
                                        <br><br>
                                    </form>
                                    <?php endfor; ?>
                                    <?php endif;
                        endforeach; ?>
                                     </div>
                            </section>
                           
                               
                            <section id="code-section" class="doc-section">
                                <h2 class="section-title">Code</h2>
                                <div class="section-block"> 
                                    
                                    
                                </div><!--//section-block-->
                                <div id="html" class="section-block">
                                    
                                    <div class="callout-block callout-success">
                                        <a href=""><div class="icon-holder">
                                            <i class="fa fa-thumbs-up"></i>
                                        </div></a><!--//icon-holder-->
                                        <div class="content">
                                            <h4 class="callout-title">Test yoqgan bolsa</h4>
                                            <p>shu <i class="fa fa-thumbs-up"></i> tugma ustig bosing</p>
                                        </div><!--//content-->
                                    </div>
                                </div><!--//section-block-->
                               
                                
                                
                               
                            </section><!--//doc-section-->
                            <section id="callouts-section" class="doc-section">
                                <h2 class="section-title">Callouts</h2>
                                <div class="section-block">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. 
                                    </p>
                                </div>

                                <div class="section-block">
                                    <div class="callout-block callout-info">
                                        <div class="icon-holder">
                                            <i class="fa fa-info-circle"></i>
                                        </div><!--//icon-holder-->
                                        <div class="content">
                                            <h4 class="callout-title">Aenean imperdiet</h4>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium <code>&lt;code&gt;</code> , Nemo enim ipsam voluptatem quia voluptas <a href="#">link example</a> sit aspernatur aut odit aut fugit.</p>
                                        </div><!--//content-->
                                    </div><!--//callout-block-->
                                    
                                    <div class="callout-block callout-warning">
                                        <div class="icon-holder">
                                            <i class="fa fa-bug"></i>
                                        </div><!--//icon-holder-->
                                        <div class="content">
                                            <h4 class="callout-title">Morbi posuere</h4>
                                            <p>Nunc hendrerit odio quis dignissim efficitur. Proin ut finibus libero. Morbi posuere fringilla felis eget sagittis. Fusce sem orci, cursus in tortor <a href="#">link example</a> tellus vel diam viverra elementum.</p>
                                        </div><!--//content-->
                                    </div><!--//callout-block-->
                                    
                                    <div class="callout-block callout-success">
                                        <div class="icon-holder">
                                            <i class="fa fa-thumbs-up"></i>
                                        </div><!--//icon-holder-->
                                        <div class="content">
                                            <h4 class="callout-title">Lorem ipsum dolor sit amet</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. <a href="#">Link example</a> aenean commodo ligula eget dolor.</p>
                                        </div><!--//content-->
                                    </div><!--//callout-block-->
                                    
                                    <div class="callout-block callout-danger">
                                        <div class="icon-holder">
                                            <i class="fa fa-exclamation-triangle"></i>
                                        </div><!--//icon-holder-->
                                        <div class="content">
                                            <h4 class="callout-title">Interdum et malesuada</h4>
                                            <p>Morbi eget interdum sapien. Donec sed turpis sed nulla lacinia accumsan vitae ut tellus. Aenean vestibulum <a href="#">Link example</a> maximus ipsum vel dignissim. Morbi ornare elit sit amet massa feugiat, viverra dictum ipsum pellentesque. </p>
                                        </div><!--//content-->
                                    </div><!--//callout-block-->
                                </div>
                            </section><!--//doc-section-->
                            
                            <section id="video-section" class="doc-section">
                                <h2 class="section-title">Video</h2>
                                <div class="section-block">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <h6>Responsive Video 16:9</h6>
                                            <!-- 16:9 aspect ratio -->
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ejBkOjEG6F0?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <h6>Responsive Video 4:3</h6>
                                            <!-- 4:3 aspect ratio -->
                                            <div class="embed-responsive embed-responsive-4by3">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ejBkOjEG6F0?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div><!--//row-->
                                </div><!--//section-block-->
                            <section id="icons-section" class="doc-section">
                                <h2 class="section-title">Icons</h2>
                                <div class="section-block">
                                    
                                </div><!--//section-block-->
                                <div class="section-block">
                                    <h6>Elegant Icon Font</h6>
                                    <a href="https://www.elegantthemes.com/blog/resources/elegant-icon-font" target="_blank"><img class="img-responsive" src="assets/images/demo/elegant-icon-font.jpg" alt="elegant icons" /></a>
                                </div><!--//section-block-->
                                <div class="section-block">
                                    <h6>FontAwesome Icon Font</h6>
                                    <a href="https://fortawesome.github.io/Font-Awesome/" target="_blank"><img class="img-responsive" src="assets/images/demo/fontawesome-icons.png" alt="fontawesome" /></a>
                                </div><!--//section-block-->
                                
                            </section><!--//doc-section-->
                            
                            </section><!--//doc-section-->
                        </div><!--//content-inner-->
                    </div><!--//doc-content-->
                    </div><!--//doc-sidebar-->
                </div><!--//doc-body-->              
            </div><!--//container-->
        </div><!--//doc-wrapper-->
        
        <div id="promo-block" class="promo-block">
            <div class="container">
                <div class="promo-block-inner">
                    <h3 class="promo-title text-center"><i class="fa fa-heart"></i> <a href="https://wrapbootstrap.com/theme/appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank">AppKit - Bootstrap Angular Admin Theme for Developers</a></h3>
                    <div class="row">
                        <div class="figure-holder col-md-5 col-sm-6 col-xs-12">
                            <div class="figure-holder-inner">
                                <a href="https://wrapbootstrap.com/theme/appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><img class="img-responsive" src="assets/images/demo/appkit-widgets-thumb.jpg" alt="AppKit Theme" /></a>
                                <a class="mask" href="#hook"><i class="icon fa fa-heart pink"></i></a>
                                
                            </div>
                        </div><!--//figure-holder-->
                        <div class="content-holder col-md-7 col-sm-6 col-xs-12">
                            <div class="content-holder-inner">
                                <div class="desc">
                                    <h4 class="content-title"><strong>Love this free documentation theme?</strong></h4>
                                    <p>Check out AppKit - an Angular admin theme I created with my developer friend <a href="https://twitter.com/tnajdek">Tom Najdek</a> for developers. AppKit uses modern front-end technologies and is packed with useful components and widgets to speed up your app development.</p>
                                    <p><strong class="highlight">[Tip for developers]:</strong> If your project is Open Source, you can use this area to promote your other projects or hold third party adverts like Bootstrap and FontAwesome do!</p>
                                </div><!--//desc-->
                                <div class="author"><a href="http://themes.3rdwavemedia.com">Xiaoying Riley</a></div>
                            </div><!--//content-holder-inner-->
                        </div><!--//content-holder-->
                    </div><!--//row-->
                </div><!--//promo-block-inner-->  
            </div><!--//container-->
        </div><!--//promo-block-->
        
    </div><!--//page-wrapper-->
    
    <footer id="footer" class="footer text-center">
        <div class="container">
            <!--/* This template is released under the Creative Commons Attribution 3.0 License. Please keep the attribution link below when using for your own project. Thank you for your support. :) If you'd like to use the template without the attribution, you can check out other license options via our website: themes.3rdwavemedia.com */-->
            <small class="copyright">Designed with <i class="fa fa-heart"></i> by <a href="http://themes.3rdwavemedia.com/" targe="_blank">Xiaoying Riley</a> for developers</small>
            
        </div><!--//container-->
    </footer><!--//footer-->
    
     
    <!-- Main Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/plugins/prism/prism.js"></script>    
    <script type="text/javascript" src="assets/plugins/jquery-scrollTo/jquery.scrollTo.min.js"></script>                                                                
    <script type="text/javascript" src="assets/plugins/jquery-match-height/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    
    
</body>
</html> 

