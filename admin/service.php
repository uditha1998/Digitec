<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>SIM Manage</title>
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

                      <?php
            include './include/admin_top_nav.php';
            ?>

                <main class="content">
                    <div class="container-fluid">

                        <div class="header">
                            <h1 class="header-title">
                                Add Service
                            </h1>

                        </div>

                        <!--From start-->
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body" style="margin-top: 20px;">
                                  
                                  
                                        <form action="simUpdate" method="post">
                                     

                                      
                                            <input type="hidden" class="form-control"  value="${editSim.id}" name="id" >
                                       

                                            <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <label for="inputEmail4">SIM Number</label>
                                                    <input type="text" class="form-control"  value="${editSim.simNumber}" name="number" >
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="inputPassword4">Customer NIC</label>
                                                    <input type="text" class="form-control"  value="${editSim.customerNIC}"  name="nic">
                                                </div>
                                            </div>


                                            <button type="submit" class="btn btn-primary">Submit</button>

                                        </form>
                                </div>
                            </div>
                        </div>

                        <!--Table start-->
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">SIM Table</h5>
                                </div>
                                <div class="card-body">
                                    <table id="datatables-basic" class="table table-striped" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>SIM Number</th>
                                                <th>Customer NIC</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>


                                          

                                            <tr>
                                                <td>test</td>
                                                <td>test</td>
                                                <td>test</td>
                                                <td>test</td>
                                              

                                                <td class="table-action" style="width: 25%">
                                                  
                                                 
                                                   
                                                    <a href="simEdit?id=<%=sim.getId()%>" style="margin-left: 8px"><i class="align-middle fas fa-fw fa-pen"></i></i></a>
                                                  
                                                    <a href="simDelete?id=<%=sim.getId()%>" style="margin-left: 8px"><i class="align-middle fas fa-fw fa-trash"></i></a>
                                                    
                                                    <a href="manageSimPackage?simid=<%=sim.getId()%>" style="margin-left: 20px">   <button type="submit" class="btn btn-primary">Manage Package</button></a>
                                                </td>
                                            </tr>
<!--                                            <%}%>-->
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>



                    </div>
                </main>




            </div>



        </div>





        <script src="js/app.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                // Datatables basic
                $('#datatables-basic').DataTable({
                    responsive: true
                });
                // Datatables with Buttons
                var datatablesButtons = $('#datatables-buttons').DataTable({
                    lengthChange: !1,
                    buttons: ["copy", "print"],
                    responsive: true
                });
                datatablesButtons.buttons().container().appendTo("#datatables-buttons_wrapper .col-md-6:eq(0)")
            });
        </script>
    </body>
</html>
