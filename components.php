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

$sqli="SELECT * FROM `natija` ORDER BY ID DESC LIMIT 1";
$dat=mysqli_query($connect, $sqli);
$dat=mysqli_fetch_all($dat);

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
<body class="body-pink">
    <div class="page-wrapper">
        <!-- ******Header****** -->
        <header id="header" class="header">
            <div class="container">
                <div class="branding">
                    <h1 class="logo">
                        <a href="index.php">
                            <span aria-hidden="true" class="icon_documents_alt icon"></span>
                            <span class="text-highlight">NATIJA</span><span class="text-bold">JADVALI</span>
                        </a>
                    </h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"></li>
                </ol>
            </div>
        </header>
        <div class="doc-wrapper">
            <div class="container">
                <div id="doc-header" class="doc-header text-center">
                    <h1 class="doc-title"><span aria-hidden="true" class="icon icon_puzzle_alt"></span> Mening natijam</h1>
                    <?php foreach($data as $value){
                        if($value[1]==$email and $value[3]==$kod){
                            foreach($dat as $val):
                           
                     ?>
                    
                        
                    <div class="meta"><i class="fa fa-clock-o"></i> Ohirgi yangilanish <?= $val [7] ?></div>
                </div>
                <div class="doc-body">
                    <div class="doc-content">
                        <div class="content-inner">
                            <section id="dashboards" class="doc-section">
                                <h2 class="section-title"></h2>
                                <p><h2>Oxirgi test natijasi</h2></p>
                                <div class="section-block">
                                    <p>Togri javoblar soni: <?= $val[5] ?></p>
                                    <p>Foizdagi hisobi: <?= $val[6] ?> %</p>
                                    <h2 class="section-title"></h2>
                                    <!-- <ul class="list list-inline">
                                        <li><a class="btn btn-cta btn-pink" href="https://wrapbootstrap.com/theme/appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><i class="fa fa-external-link"></i> AppKit Details</a></li>
                                        <li><a class="btn btn-cta btn-primary" href="https://wrapbootstrap.com/theme/appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><i class="fa fa-eye"></i> AppKit Demo</a></li>
                                    </ul> -->
                                   <?php endforeach; 
                                        }
                                    } ?>
                                </div>
                                <div id="doc-header" class="doc-header text-center">
                                    <h1 class="doc-title"><span aria-hidden="true" class="icon icon_puzzle_alt"></span> Barcha natijalar</h1>
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Fan</th>
                                        <th scope="col">Natija</th>
                                        <th scope="col">Foiz</th>
                                        <th scope="col">Sana</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $k=0;
                                        foreach($da as $valll): ?>
                                        <tr>
                                        <th scope="row"><?php echo ++$k; ?></th>
                                        <td><?= $valll[8] ?></td>
                                        <td><?= $valll[5] ?></td>
                                        <td><?= $valll[6] ?></td>
                                        <td><?= $valll[7] ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <div id="doc-header" class="doc-header text-center">
                                    <h1 class="doc-title"><span aria-hidden="true" class="icon icon_puzzle_alt"></span> Natijalarning diagramma korinishi</h1>
                                </div>
                        <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

                            <script>
                               
                                var xValues = ["Italia", "France", "Spain", "USA", "Argentina"];
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


                                <!-- <div class="section-block">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 col-sm-12">
                                            <h6>Use Case 1</h6>
                                            <p>Project management</p>
                                            <div class="screenshot-holder">
                                                <a href="assets/images/demo/appkit-dashboard-1.jpg" data-title="Dashboard - Project Management" data-toggle="lightbox"><img class="img-responsive" src="assets/images/demo/appkit-dashboard-1-thumb.jpg" alt="screenshot" /></a>
                                                <a class="mask" href="assets/images/demo/appkit-dashboard-1.jpg" data-title="Dashboard - Project Management" data-toggle="lightbox"><i class="icon fa fa-search-plus"></i></a>
                                            </div> 
                                        </div>
                                         <div class="col-md-6 col-sm-12 col-sm-12">
                                            <h6>Use Case 2</h6>
                                            <p>Web analytics</p>
                                            <div class="screenshot-holder">
                                                <a href="assets/images/demo/appkit-dashboard-2.jpg" data-title="Dashboard - Web Analytics" data-toggle="lightbox"><img class="img-responsive" src="assets/images/demo/appkit-dashboard-2-thumb.jpg" alt="screenshot" /></a>
                                                <a class="mask" href="assets/images/demo/appkit-dashboard-2.jpg" data-title="Dashboard - Web Analytics" data-toggle="lightbox"><i class="icon fa fa-search-plus"></i></a>
                                            </div> 
                                        </div>
                                        <div class="clearfix"></div>
                                         <div class="col-md-6 col-sm-12 col-sm-12">
                                            <h6>Use Case 3</h6>
                                            <p>Health/Fitness app</p>
                                            <div class="screenshot-holder">
                                                <a href="assets/images/demo/appkit-dashboard-3.jpg" data-title="Dashboard - Health/Fitness" data-toggle="lightbox"><img class="img-responsive" src="assets/images/demo/appkit-dashboard-3-thumb.jpg" alt="screenshot" /></a>
                                                <a class="mask" href="assets/images/demo/appkit-dashboard-3.jpg" data-title="Dashboard - Health/Fitness" data-toggle="lightbox"><i class="icon fa fa-search-plus"></i></a>
                                            </div> 
                                        </div>
                                         <div class="col-md-6 col-sm-12 col-sm-12">
                                            <h6>Use Case 4</h6>
                                            <p>Web hosting</p>
                                            <div class="screenshot-holder">
                                                <a href="assets/images/demo/appkit-dashboard-4.jpg" data-title="Dashboard - Web Hosting" data-toggle="lightbox"><img class="img-responsive" src="assets/images/demo/appkit-dashboard-4-thumb.jpg" alt="screenshot" /></a>
                                                <a class="mask" href="assets/images/demo/appkit-dashboard-4.jpg" data-title="Dashboard - Web Hosting" data-toggle="lightbox"><i class="icon fa fa-search-plus"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="callout-block callout-info">
                                        <div class="icon-holder">
                                            <i class="fa fa-bullhorn"></i>
                                        </div>
                                        <div class="content">
                                            <h4 class="callout-title">Lightbox Example</h4>
                                            <p>Click the screenshot images to trigger the image modal.</p>
                                        </div>
                                    </div>
                                </div> -->
                                
                            </section>
                            
                            <!-- <section id="app-components" class="doc-section">
                                <h2 class="section-title">App Components</h2>
                                <div id="projects" class="section-block">
                                    <h3 class="block-title">Projects</h3>
                                    <p>Intro goes here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis</p>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <h6>Projects Overview</h6>
                                            <div class="screenshot-holder">
                                                <a href="assets/images/demo/appkit-projects.jpg" data-title="Project Overview" data-toggle="lightbox"><img class="img-responsive" src="assets/images/demo/appkit-projects-thumb.jpg" alt="screenshot" /></a>
                                                <a class="mask" href="assets/images/demo/appkit-projects.jpg" data-title="Project Overview" data-toggle="lightbox"><i class="icon fa fa-search-plus"></i></a>
                                            </div> 
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <h6>Project Details</h6>
                                            <div class="screenshot-holder">
                                                <a href="assets/images/demo/appkit-project.jpg" data-title="Project Details" data-toggle="lightbox"><img class="img-responsive" src="assets/images/demo/appkit-project-thumb.jpg" alt="screenshot" /></a>
                                                <a class="mask" href="assets/images/demo/appkit-project.jpg" data-title="Project Details" data-toggle="lightbox"><i class="icon fa fa-search-plus"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div id="discussions" class="section-block">
                                    <h3 class="block-title">Discussions</h3>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <h6>Discussions Overview</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                                            <div class="screenshot-holder">
                                                <a href="assets/images/demo/appkit-discussions.jpg" data-title="Discussion Overview" data-toggle="lightbox"><img class="img-responsive" src="assets/images/demo/appkit-discussions-thumb.jpg" alt="screenshot" /></a>
                                                <a class="mask" href="assets/images/demo/appkit-discussions.jpg" data-title="Discussion Overview" data-toggle="lightbox"><i class="icon fa fa-search-plus"></i></a>
                                            </div> 
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <h6>Discussion Details</h6>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                                            <div class="screenshot-holder">
                                                <a href="assets/images/demo/appkit-discussion.jpg" data-title="Discussion Details" data-toggle="lightbox"><img class="img-responsive" src="assets/images/demo/appkit-discussion-thumb.jpg" alt="screenshot" /></a>
                                                <a class="mask" href="assets/images/demo/appkit-discussion.jpg" data-title="Discussion Details" data-toggle="lightbox"><i class="icon fa fa-search-plus"></i></a>
                                            </div> 
                                        </div>
                                    </div> 
                                </div>
                                
                                <div id="members" class="section-block">
                                    <h3 class="block-title">Members</h3>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <h6>Members Overview</h6>
                                            <div class="screenshot-holder">
                                                <a href="assets/images/demo/appkit-members.jpg" data-toggle="lightbox"><img class="img-responsive" src="assets/images/demo/appkit-members-thumb.jpg" alt="screenshot" /></a>
                                                <a class="mask" href="assets/images/demo/appkit-members.jpg" data-toggle="lightbox"><i class="icon fa fa-search-plus"></i></a>
                                            </div> 
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <h6>Individual Member</h6>
                                            <div class="screenshot-holder">
                                                <a href="assets/images/demo/appkit-member.jpg" data-toggle="lightbox"><img class="img-responsive" src="assets/images/demo/appkit-member-thumb.jpg" alt="screenshot" /></a>
                                                <a class="mask" href="assets/images/demo/appkit-member.jpg" data-toggle="lightbox"><i class="icon fa fa-search-plus"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                
                                <div id="account" class="section-block">
                                    <h3 class="block-title">User Account</h3>
                                    <p>Intro goes here lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <h6>User Profile</h6>
                                            <div class="screenshot-holder">
                                                <a href="assets/images/demo/appkit-account-profile.jpg" data-toggle="lightbox"><img class="img-responsive" src="assets/images/demo/appkit-account-profile-thumb.jpg" alt="screenshot" /></a>
                                                <a class="mask" href="assets/images/demo/appkit-account-profile.jpg" data-toggle="lightbox"><i class="icon fa fa-search-plus"></i></a>
                                            </div> 
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <h6>User Settings</h6>
                                            <div class="screenshot-holder">
                                                <a href="assets/images/demo/appkit-account-settings.jpg" data-toggle="lightbox"><img class="img-responsive" src="assets/images/demo/appkit-account-settings-thumb.jpg" alt="screenshot" /></a>
                                                <a class="mask" href="assets/images/demo/appkit-account-settings.jpg" data-toggle="lightbox"><i class="icon fa fa-search-plus"></i></a>
                                            </div> 
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <h6>User Billing</h6>
                                            <div class="screenshot-holder">
                                                <a href="assets/images/demo/appkit-account-billing.jpg" data-toggle="lightbox"><img class="img-responsive" src="assets/images/demo/appkit-account-billing-thumb.jpg" alt="screenshot" /></a>
                                                <a class="mask" href="assets/images/demo/appkit-account-billing.jpg" data-toggle="lightbox"><i class="icon fa fa-search-plus"></i></a>
                                            </div> 
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <h6>User Messages</h6>
                                            <div class="screenshot-holder">
                                                <a href="assets/images/demo/appkit-account-messages.jpg" data-toggle="lightbox"><img class="img-responsive" src="assets/images/demo/appkit-account-messages-thumb.jpg" alt="screenshot" /></a>
                                                <a class="mask" href="assets/images/demo/appkit-account-messages.jpg" data-toggle="lightbox"><i class="icon fa fa-search-plus"></i></a>
                                            </div> 
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <h6>User Drive</h6>
                                            <div class="screenshot-holder">
                                                <a href="assets/images/demo/appkit-account-drive.jpg" data-toggle="lightbox"><img class="img-responsive" src="assets/images/demo/appkit-account-drive-thumb.jpg" alt="screenshot" /></a>
                                                <a class="mask" href="assets/images/demo/appkit-account-drive.jpg" data-toggle="lightbox"><i class="icon fa fa-search-plus"></i></a>
                                            </div> 
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-6">
                                            <h6>User Reminders</h6>
                                            <div class="screenshot-holder">
                                                <a href="assets/images/demo/appkit-account-reminders.jpg" data-toggle="lightbox"><img class="img-responsive" src="assets/images/demo/appkit-account-reminders-thumb.jpg" alt="screenshot" /></a>
                                                <a class="mask" href="assets/images/demo/appkit-account-reminders.jpg" data-toggle="lightbox"><i class="icon fa fa-search-plus"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                
                                 <div id="others" class="section-block">
                                    <h3 class="block-title">Others</h3>
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 col-xs-6">
                                            <h6>Activities</h6>
                                            <div class="screenshot-holder">
                                                <a href="assets/images/demo/appkit-activities.jpg" data-toggle="lightbox"><img class="img-responsive" src="assets/images/demo/appkit-activities-thumb.jpg" alt="screenshot" /></a>
                                                <a class="mask" href="assets/images/demo/appkit-activities.jpg" data-toggle="lightbox"><i class="icon fa fa-search-plus"></i></a>
                                            </div> 
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-6">
                                            <h6>Tickets</h6>
                                            <div class="screenshot-holder">
                                                <a href="assets/images/demo/appkit-tickets.jpg" data-toggle="lightbox"><img class="img-responsive" src="assets/images/demo/appkit-tickets-thumb.jpg" alt="screenshot" /></a>
                                                <a class="mask" href="assets/images/demo/appkit-tickets.jpg" data-toggle="lightbox"><i class="icon fa fa-search-plus"></i></a>
                                            </div> 
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-6">
                                            <h6>Inbox</h6>
                                            <div class="screenshot-holder">
                                                <a href="assets/images/demo/appkit-inbox.jpg" data-toggle="lightbox"><img class="img-responsive" src="assets/images/demo/appkit-inbox-thumb.jpg" alt="screenshot" /></a>
                                                <a class="mask" href="assets/images/demo/appkit-inbox.jpg" data-toggle="lightbox"><i class="icon fa fa-search-plus"></i></a>
                                            </div> 
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-6">
                                            <h6>Timeline</h6>
                                            <div class="screenshot-holder">
                                                <a href="assets/images/demo/appkit-timeline.jpg" data-toggle="lightbox"><img class="img-responsive" src="assets/images/demo/appkit-timeline-thumb.jpg" alt="screenshot" /></a>
                                                <a class="mask" href="assets/images/demo/appkit-timeline.jpg" data-toggle="lightbox"><i class="icon fa fa-search-plus"></i></a>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="section-block">
                                    <p class="text-center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                                    <div class="center-block text-center">
                                         <a class="btn btn-primary" href="https://wrapbootstrap.com/theme/appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank">More App Components</a>
                                    </div>
                                </div>
                            </section>
                            <section id="ui-components" class="doc-section">
                                <h2 class="section-title">UI Components</h2>
                                <div class="section-block">
                                    <p>Appkit is packed with building blocks. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. </p>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-5 col-xs-12">
                                            <h6>Components List</h6>
                                            <ul class="list list-unstyled">
                                                <li><a href="https://wrapbootstrap.com/theme/appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><i class="fa fa-check"></i> Typography</a></li>
                                                <li><a href="https://wrapbootstrap.com/theme/appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><i class="fa fa-check"></i> Icons</a></li>
                                                <li><a href="https://wrapbootstrap.com/theme/appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><i class="fa fa-check"></i> Buttons</a></li>
                                                <li><a href="https://wrapbootstrap.com/theme/appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><i class="fa fa-check"></i> Panels</a></li>
                                                <li><a href="https://wrapbootstrap.com/theme/appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><i class="fa fa-check"></i> Tabs</a></li>
                                                <li><a href="https://wrapbootstrap.com/theme/appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><i class="fa fa-check"></i> Accordions</a></li>
                                                <li><a href="https://wrapbootstrap.com/theme/appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><i class="fa fa-check"></i> Maps</a></li>
                                                <li><a href="https://wrapbootstrap.com/theme/appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><i class="fa fa-check"></i> Todo</a></li>
                                                <li><a href="https://wrapbootstrap.com/theme/appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><i class="fa fa-check"></i> Carousels</a></li>
                                                <li><a href="https://wrapbootstrap.com/theme/appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><i class="fa fa-check"></i> Notification</a></li>
                                                <li><a href="https://wrapbootstrap.com/theme/appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><i class="fa fa-check"></i> Draggable</a></li>
                                                <li><a href="https://wrapbootstrap.com/theme/appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><i class="fa fa-check"></i> Sortable</a></li>
                                                <li><a href="https://wrapbootstrap.com/theme/appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><i class="fa fa-check"></i> Nestable</a></li>
                                                <li><a href="https://wrapbootstrap.com/theme/appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><i class="fa fa-check"></i> Tree</a></li>
                                                <li><a href="https://wrapbootstrap.com/theme/appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><i class="fa fa-check"></i> Loaders</a></li>
                                                <li><a href="https://wrapbootstrap.com/theme/appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><i class="fa fa-check"></i> Many More...</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-8 col-sm-5 col-xs-12">
                                            <h6>Screenshot</h6>
                                            <div class="screenshot-holder">
                                                <a href="https://wrapbootstrap.com/theme/appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><img class="img-responsive" src="assets/images/demo/appkit-widgets-thumb.jpg" alt="screenshot" /></a>
                                                <a class="mask" href="https://wrapbootstrap.com/theme/appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><i class="icon fa fa-link"></i></a>
                                                </div> 
                                        </div>
                                    </div><
                                </div>
                            </section> -->
                            
                        </div>
                    </div>
                    <!-- <div class="doc-sidebar">
                        <nav id="doc-nav">
                            <ul id="doc-menu" class="nav doc-menu hidden-xs" data-spy="affix">
                                <li><a class="scrollto" href="#dashboards">Dashboards</a></li>
                                <li>
                                    <a class="scrollto" href="#app-components">App Components</a>
                                    <ul class="nav doc-sub-menu">
                                        <li><a class="scrollto" href="#projects">Projects</a></li>
                                        <li><a class="scrollto" href="#discussions">Discussions</a></li>
                                        <li><a class="scrollto" href="#members">Members</a></li>
                                        <li><a class="scrollto" href="#account">User Account</a></li>
                                        <li><a class="scrollto" href="#others">Others</a></li>
                                    </ul>
                                </li>
                                <li><a class="scrollto" href="#ui-components">UI Components</a></li>
                            </ul>
                        </nav>
                    </div> -->
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
                                <a href="https://wrapbootstrap.com/theme/appkit-admin-theme-angularjs-WB051SCJ1?ref=3wm" target="_blank"><img class="img-responsive" src="assets/images/demo/appkit-dashboard-1-thumb.jpg" alt="AppKit Theme" /></a>
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
        
    </div>
    
    <footer id="footer" class="footer text-center">
        <div class="container">
            <small class="copyright">Designed with <i class="fa fa-heart"></i> by <a href="http://themes.3rdwavemedia.com/" target="_blank">Xiaoying Riley</a> for developers</small>
            
        </div>
    </footer>
    
             
    <script type="text/javascript" src="assets/plugins/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/plugins/prism/prism.js"></script>    
    <script type="text/javascript" src="assets/plugins/jquery-scrollTo/jquery.scrollTo.min.js"></script>  
    <script type="text/javascript" src="assets/plugins/lightbox/dist/ekko-lightbox.min.js"></script>                                                                 
    <script type="text/javascript" src="assets/plugins/jquery-match-height/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    
</body>
</html> 
