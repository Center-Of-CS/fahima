<?php
include("./crud.php");
$db = new CRUD();

if(isset($_GET['id'])){


  $id = (int) $_GET['id'];
  $de .= $db->delete("buy","buyID='$id'");

  
  if($de){
    header("location:solditem.php?deleted=1");
  }
  
  
  }
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    
</head>

<body>
   
    <div class="all-content-wrapper">

    <div class="breadcome-area">
               
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <table id="table" data-toggle="table" style ="border:2px black solid">
                                        <thead>
                                            <tr>
                                                <th data-field="id">ID</th>
                                                <th data-field="name" data-editable="true">Name</th>
                                                <th data-field="Email" data-editable="true">Email</th>
                                                <th data-field="action">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $rows = $db->select("buy","*","");
                                     
                                        foreach ($rows as $re){
                                          $id =$re["buyID"];
                                         $name=$re["name"];
                                         $email=$re["email"];
                                        echo "
                                          <tr>
                                            <td>$id</td>
                                            <td>$name</td>
                                            <td>$email</td>
                                            <td><a href='solditem.php?id=$id'>Delete</a>
                                             <a href='update.php?id=$id'> Update</a></td>
                                          </tr>";

                                         
                                        }  
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

   
</body>

</html>