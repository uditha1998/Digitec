<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Admin Dashboards</title>
        <link href="css/modern.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
        <div class="wrapper">
            
             <!-- Header Start  -->
            <?php
            include './include/admin_side_nav.php';
            ?>
            <!-- Header End -->

            <div class="main">
                <jsp:include page="/include/admin_top_nav.jsp"/>
                
                 <?php
            include './include/admin_top_nav.php';
            ?>

                <main class="content">
                    <div class="container-fluid">

                        <div class="header">
                            <h1 class="header-title">
                                Analytics Overview
                            </h1>

                        </div>

                        <div class="row">
                            <div class="col-xl-6 col-xxl-5 d-flex">
                                <div class="w-100">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col mt-0">
                                                            <h5 class="card-title">Employees</h5>
                                                        </div>

                                                        <div class="col-auto">
                                                            <div class="avatar">
                                                                <div class="avatar-title rounded-circle bg-primary-dark">
                                                                    <i class="align-middle" data-feather="users"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <h1 class="display-5 mt-2 mb-4">15</h1>

                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col mt-0">
                                                            <h5 class="card-title">Projects</h5>
                                                        </div>

                                                        <div class="col-auto">
                                                            <div class="avatar">
                                                                <div class="avatar-title rounded-circle bg-primary-dark">
                                                                    <i class="align-middle" data-feather="package"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h1 class="display-5 mt-2 mb-4">50</h1>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col mt-0">
                                                            <h5 class="card-title">Services</h5>
                                                        </div>

                                                        <div class="col-auto">
                                                            <div class="avatar">
                                                                <div class="avatar-title rounded-circle bg-primary-dark">
                                                                    <i class="align-middle" data-feather="globe"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h1 class="display-5 mt-2 mb-4">30</h1>

                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col mt-0">
                                                            <h5 class="card-title">Branches</h5>
                                                        </div>

                                                        <div class="col-auto">
                                                            <div class="avatar">
                                                                <div class="avatar-title rounded-circle bg-primary-dark">
                                                                    <i class="align-middle" data-feather="home"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h1 class="display-5 mt-2 mb-4">37</h1>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-6 col-xxl-5 d-flex">
                                <div class="w-100">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col mt-0">
                                                            <h5 class="card-title">Network</h5>
                                                        </div>

                                                        <div class="col-auto">
                                                            <div class="avatar">
                                                                <div class="avatar-title rounded-circle bg-primary-dark">
                                                                    <i class="align-middle" data-feather="wifi"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h1 class="display-5 mt-2 mb-4">30</h1>

                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col mt-0">
                                                            <h5 class="card-title">Admin</h5>
                                                        </div>

                                                        <div class="col-auto">
                                                            <div class="avatar">
                                                                <div class="avatar-title rounded-circle bg-primary-dark">
                                                                    <i class="align-middle" data-feather="users"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h1 class="display-5 mt-2 mb-4">1</h1>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col mt-0">
                                                            <h5 class="card-title">Deactive SIM</h5>
                                                        </div>

                                                        <div class="col-auto">
                                                            <div class="avatar">
                                                                <div class="avatar-title rounded-circle bg-primary-dark">
                                                                    <i class="align-middle" data-feather="wifi-off"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h1 class="display-5 mt-2 mb-4">22</h1>

                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col mt-0">
                                                            <h5 class="card-title">Agents</h5>
                                                        </div>

                                                        <div class="col-auto">
                                                            <div class="avatar">
                                                                <div class="avatar-title rounded-circle bg-primary-dark">
                                                                    <i class="align-middle" data-feather="users"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h1 class="display-5 mt-2 mb-4">43</h1>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>


                    </div>
                </main>



            </div>

        </div>




        <script src="js/app.js"></script>


    </body>

</html>