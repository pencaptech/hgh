<?php
  require_once '../DB.class.php';
  $db = new DB();
  
  $groups = $db->getRows('investor_req_tbl',['where'=>"type='group'"]);
?>
<!DOCTYPE html>
<html lang="en">
    <!-- START: Head-->
    
<head>
        <meta charset="UTF-8">
        <title>:: Hyderabad Group Housing | Groups ::</title>
        <link rel="shortcut icon" href="dist/images/hgh.png" />
        <meta name="viewport" content="width=device-width,initial-scale=1"> 

        <!-- START: Template CSS-->
        <link rel="stylesheet" href="dist/vendors/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="dist/vendors/jquery-ui/jquery-ui.min.css">
        <link rel="stylesheet" href="dist/vendors/jquery-ui/jquery-ui.theme.min.css">
        <link rel="stylesheet" href="dist/vendors/simple-line-icons/css/simple-line-icons.css">        
        <link rel="stylesheet" href="dist/vendors/flags-icon/css/flag-icon.min.css"> 

        <!-- END Template CSS-->   

        <!-- START: Page CSS-->
        <link rel="stylesheet" href="dist/vendors/datatable/css/dataTables.bootstrap4.min.css" />
        <link rel="stylesheet" href="dist/vendors/datatable/buttons/css/buttons.bootstrap4.min.css"/>
        <!-- END: Page CSS-->

        <!-- START: Custom CSS-->
        <link rel="stylesheet" href="dist/css/main.css">
        <!-- END: Custom CSS-->
    </head>
    <!-- END Head-->

    <!-- START: Body-->
    <body id="main-container" class="default">
        
        
        <!-- START: Header-->
        <div id="header-fix" class="header fixed-top">
            <div class="site-width">
                <nav class="navbar navbar-expand-lg  p-0">
                    <div class="navbar-header  h-100 h4 mb-0 align-self-center logo-bar text-left">  
                        <a href="index.html" class="horizontal-logo text-left" style="margin-left: 74px;">
                            <img src="dist/images/hgh.png" width="25%">              
                        </a>                   
                    </div>
                    <div class="navbar-header h4 mb-0 text-center h-100 collapse-menu-bar">
                        <a href="#" class="sidebarCollapse" id="collapse"><i class="icon-menu"></i></a>
                    </div>

                    <form class="float-left d-none d-lg-block search-form">
                        <div class="form-group mb-0 position-relative">
                            <input type="text" class="form-control border-0 rounded bg-search pl-5" placeholder="Search anything...">
                            <div class="btn-search position-absolute top-0">
                                <a href="#"><i class="h6 icon-magnifier"></i></a>
                            </div>
                            <a href="#" class="position-absolute close-button mobilesearch d-lg-none" data-toggle="dropdown" aria-expanded="false"><i class="icon-close h5"></i>                               
                            </a>

                        </div>
                    </form>
                    <div class="navbar-right ml-auto h-100">
                        <ul class="ml-auto p-0 m-0 list-unstyled d-flex top-icon h-100">
                            <li class="d-inline-block align-self-center  d-block d-lg-none">
                                <a href="#" class="nav-link mobilesearch" data-toggle="dropdown" aria-expanded="false"><i class="icon-magnifier h4"></i>                               
                                </a>
                            </li>                        

                            <li class="dropdown align-self-center">
                                <a href="#" class="nav-link" data-toggle="dropdown" aria-expanded="false"><i class="icon-reload h4"></i>
                                    <span class="badge badge-default"> <span class="ring">
                                        </span><span class="ring-point">
                                        </span> </span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right border  py-0">
                                    <li>
                                        <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                            <div class="media">
                                                <img src="dist/images/author.jpg" alt="" class="d-flex mr-3 img-fluid rounded-circle">
                                                <div class="media-body">
                                                    <p class="mb-0">john</p>
                                                    <span class="text-success">New user registered.</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                            <div class="media">
                                                <img src="dist/images/author2.jpg" alt="" class="d-flex mr-3 img-fluid rounded-circle">
                                                <div class="media-body">
                                                    <p class="mb-0">Peter</p>
                                                    <span class="text-success">Server #12 overloaded.</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                            <div class="media">
                                                <img src="dist/images/author3.jpg" alt="" class="d-flex mr-3 img-fluid rounded-circle">
                                                <div class="media-body">
                                                    <p class="mb-0">Bill</p>
                                                    <span class="text-danger">Application error.</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                    <li><a class="dropdown-item text-center py-2" href="#"> See All Tasks <i class="icon-arrow-right pl-2 small"></i></a></li>
                                </ul>

                            </li>
                            <li class="dropdown align-self-center d-inline-block">
                                <a href="#" class="nav-link" data-toggle="dropdown" aria-expanded="false"><i class="icon-bell h4"></i>
                                    <span class="badge badge-default"> <span class="ring">
                                        </span><span class="ring-point">
                                        </span> </span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right border   py-0">
                                    <li>
                                        <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                            <div class="media">
                                                <img src="dist/images/author.jpg" alt="" class="d-flex mr-3 img-fluid rounded-circle w-50">
                                                <div class="media-body">
                                                    <p class="mb-0 text-success">john send a message</p>
                                                    12 min ago
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                            <div class="media">
                                                <img src="dist/images/author2.jpg" alt="" class="d-flex mr-3 img-fluid rounded-circle">
                                                <div class="media-body">
                                                    <p class="mb-0 text-danger">Peter send a message</p>
                                                    15 min ago
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li >
                                        <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                            <div class="media">
                                                <img src="dist/images/author3.jpg" alt="" class="d-flex mr-3 img-fluid rounded-circle">
                                                <div class="media-body">
                                                    <p class="mb-0 text-warning">Bill send a message</p>
                                                    5 min ago
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                    <li><a class="dropdown-item text-center py-2" href="#"> Read All Message <i class="icon-arrow-right pl-2 small"></i></a></li>
                                </ul>
                            </li>
                            <li class="dropdown user-profile align-self-center d-inline-block">
                                <a href="#" class="nav-link py-0" data-toggle="dropdown" aria-expanded="false"> 
                                    <div class="media">                                   
                                        <img src="dist/images/author.jpg" alt="" class="d-flex img-fluid rounded-circle" width="29">
                                    </div>
                                </a>

                                <div class="dropdown-menu border dropdown-menu-right p-0">
                                    <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                        <span class="icon-pencil mr-2 h6 mb-0"></span> Edit Profile</a>
                                    <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                        <span class="icon-user mr-2 h6 mb-0"></span> View Profile</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                        <span class="icon-support mr-2 h6  mb-0"></span> Help Center</a>
                                    <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                        <span class="icon-globe mr-2 h6 mb-0"></span> Forum</a>
                                    <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                        <span class="icon-settings mr-2 h6 mb-0"></span> Account Settings</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item px-2 text-danger align-self-center d-flex">
                                        <span class="icon-logout mr-2 h6  mb-0"></span> Sign Out</a>
                                </div>

                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- END: Header-->

        <!-- START: Main Menu-->
        <div class="sidebar">
            <div class="site-width">
                <!-- START: Menu-->
                <ul id="side-menu" class="sidebar-menu">
                    <li class="dropdown active"><a href="#"><i class="icon-home mr-1"></i> Dashboard</a>                  
                        <ul>
                            <li><a href="groups.php"><i class="icon-people"></i> Groups</a></li>
    						<li><a href="individual.php"><i class="icon-user"></i> Individuals</a></li>
    						<li><a href="enquiries.php"><i class="icon-envelope"></i> Enquiries</a></li>
    						<li><a href="investor.php"><i class="icon-user"></i> Investment</a></li>
    						<li><a href="builders-1.php"><i class="icon-user"></i> Builders</a></li>
    						<li><a href="nri-1.php"><i class="icon-user"></i> NRI Services</a></li>    
                        </ul>
                    </li>
					
					<li class="dropdown active"><a href="#"><i class="icon-home mr-1"></i> Dashboard</a>                  
                        <ul>
                            <li><a href="properties.html"><i class="icon-layers"></i> Properties</a></li>
                            <li><a href="projects.html"><i class="icon-chart"></i> Projects</a></li>
                                    
                                   
                        </ul>
                    </li>
					
					<li class="dropdown active"><a href="#"><i class="icon-home mr-1"></i> Dashboard</a>                  
                        <ul>
                                    <li><a href="agents.html"><i class="icon-organization"></i> Agents</a></li>
                                    <li><a href="companies.html"><i class="icon-grid"></i> Companies</a></li>
                                    <li><a href="#"><i class="icon-link"></i> Referrals</a></li>                          
                                   
                        </ul>
                    </li>
					
					<li class="dropdown active"><a href="#"><i class="icon-home mr-1"></i> Dashboard</a>                  
                        <ul>
                                     <li><a href="#"><i class="icon-social-dropbox"></i> Marketing</a></li>
                                    <li><a href="#"><i class="icon-docs"></i> Reports</a></li> 
                                    <li><a href="#"><i class="icon-settings"></i> Settings</a></li>                         
                                   
                        </ul>
                    </li>
					
					
                    </ul>
                <!-- END: Menu-->
                <ol class="breadcrumb bg-transparent align-self-center m-0 p-0 ml-auto">
                    <li class="breadcrumb-item"><a href="#">Application</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
        <!-- END: Main Menu-->

        <!-- START: Main Content-->
        <main>
            <div class="container-fluid site-width">
                <!-- START: Breadcrumbs-->
                <div class="row ">
                    <div class="col-12  align-self-center">
                        <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto"><h4 class="mb-0">Groups</h4></div>

                            <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item active"><a href="#">Groups</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END: Breadcrumbs-->

                <!-- START: Card Data-->
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="card">
                            <div class="card-header  justify-content-between align-items-center">                               
                                <h4 class="card-title">Data Table</h4> 
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display table dataTable table-striped table-bordered" >
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>TeamSize</th>
                                                <th>Contact Person</th>
    											<th>Mobile</th>
    											<th>Email</th>
    											<th>Property Type</th>
    											<th>Location Preference</th>
    											<th>Budget Type</th>
    											<th>Land Mark</th>
    											<th>Action</th>
                                            </tr>
                                        </thead>
                                        <?php 
    									    if(!empty($groups) && is_array($groups) &&count($groups)>0){
    									        foreach($groups as $group)
    									        {
									    ?>
    									<tbody>
    										<tr>
    											<td><?= $group['name']; ?></td>
    											<td><?= $group['team_size']; ?></td>
    											<td><?= $group['contact_persion']; ?></td>
    											<td><?= $group['mobile']; ?></td>
    											<td><?= $group['email']; ?></td>
    											<td><?= $group['property_type']; ?></td>
    											<td><?= $group['location_pref']; ?></td>
    											<td><?= $group['budget_type']; ?></td>
    											<td><?= $group['land_mark']; ?></td>
    											<td><a href="view.html<?= '?type='.$group['type'].'&id='.$group['id']; ?>"><span class="badge outline-badge-primary">View</span></a></td>
    										</tr>
    									</tbody>
    									<?php
    									        }
    									    }
    									    else{
    									        echo '<p>No Data found</p>';
    									    }
    									?>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>TeamSize</th>
                                                <th>Contact Person</th>
    											<th>Mobile</th>
    											<th>Email</th>
    											<th>Property Type</th>
    											<th>Location Preference</th>
    											<th>Budget Type</th>
    											<th>Land Mark</th>
    											<th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div> 

                    </div>                  
                </div>
                <!-- END: Card DATA-->
            </div>
        </main>
        <!-- END: Content-->



        <!-- START: Footer-->
        <footer class="site-footer">
            2020 &copy; Hyderabad Group Housing
        </footer>
        <!-- END: Footer-->


        <!-- START: Back to top-->
        <a href="#" class="scrollup text-center"> 
            <i class="icon-arrow-up"></i>
        </a>
        <!-- END: Back to top-->

        <!-- START: Template JS-->
        <script src="dist/vendors/jquery/jquery-3.3.1.min.js"></script>
        <script src="dist/vendors/jquery-ui/jquery-ui.min.js"></script>
        <script src="dist/vendors/moment/moment.js"></script>
        <script src="dist/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>    
        <script src="dist/vendors/slimscroll/jquery.slimscroll.min.js"></script>

        <!-- END: Template JS-->

        <!-- START: Page Vendor JS-->
        <script src="dist/vendors/datatable/js/jquery.dataTables.min.js"></script> 
        <script src="dist/vendors/datatable/js/dataTables.bootstrap4.min.js"></script>
        <script src="dist/vendors/datatable/jszip/jszip.min.js"></script>
        <script src="dist/vendors/datatable/pdfmake/pdfmake.min.js"></script>
        <script src="dist/vendors/datatable/pdfmake/vfs_fonts.js"></script>
        <script src="dist/vendors/datatable/buttons/js/dataTables.buttons.min.js"></script>
        <script src="dist/vendors/datatable/buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="dist/vendors/datatable/buttons/js/buttons.colVis.min.js"></script>
        <script src="dist/vendors/datatable/buttons/js/buttons.flash.min.js"></script>
        <script src="dist/vendors/datatable/buttons/js/buttons.html5.min.js"></script>
        <script src="dist/vendors/datatable/buttons/js/buttons.print.min.js"></script>
        <!-- END: Page Vendor JS-->

        <!-- START: Page Script JS-->        
        <script src="dist/js/datatable.script.js"></script>
        <!-- END: Page Script JS-->
    </body>
    <!-- END: Body-->

</html>
