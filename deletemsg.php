<?php 
include('dbconn.php');


                                            $sql = "DELETE FROM contact WHERE id";
                                            $result = $conn->query($sql);

                                            if ($result===TRUE) {
                                            header("Location: inbox.php");
                                            }
                                            else{
                                            	echo "Error Deleting";
                                            }





	 ?>