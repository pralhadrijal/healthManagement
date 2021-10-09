


<?php
include('dbconn.php');

?>



<!DOCTYPE html>
<html>
<head>
  <title> This is table for all booking</title>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
 <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body class="page-top">




   <div class="card shadow mb-4">
                        <div class="card-header py-3">
                         
                            <h6 class="m-0 font-weight-bold text-primary">Booking Detail Detail</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Booking ID</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>enquiry</th>
                                            <th>Date</th>
                                            <th>Doctor's Name</th>
                                            
                                        </tr>
                                    </thead>
                                   
                                    
                                    <tbody>
                                        <tr>
                                          <?php 

                                            $sql = "SELECT booking_id, name, phone,enquiry,bdate FROM booking";
                                            $result = $conn->query($sql);

                                            if ($result->num_rows > 0) {
                                              // output data of each row
                                              while($row = $result->fetch_assoc()) {

                                                  echo "<tr>";
                                                  echo " <td>".$row["booking_id"]."</td>";
                                                  echo"<td>".$row["name"]."</td>";
                                                  echo "<td>".$row["phone"] ."</td>" ;
                                                  echo "<td>".$row["enquiry"]."</td>";
                                                  echo "<td>".$row["bdate"]."</td>";
                                                  echo "<td>John Doe </td>";
                                                  echo "</tr>";
                                              }
                                            } else {
                                              echo "0 results";
                                            }
                                            $conn->close();
                                                                                       ?>
                                            
                                           
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
 </div>
</body>
  <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
</html>

