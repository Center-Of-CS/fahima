<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php

    if(!isset($_GET['id'])){
        
          header("location:solditem.php?Err_redirec=1");
        
    }
       
	     include("./crud.php");
        $db = new CRUD();
         
        $name = $email=" ";
         $nameErr = $emailErr=" ";

        $id = (int) $_GET['id'];
        $result = $db->select_one("buy","buyID='$id'");
        
         $name =$result["name"];
         $email =$result["email"];
        
    ?>
    
</head>
<?php
      
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];

    if(empty($name)) {
        $nameErr = "The name can not empty";
    }
    
    if(empty($email)) {
        $emailErr = "The email can not empty";
    }
  
        //update function

		$data = sprintf("name='%s',email='%s',size='%s'",
		mysqli_real_escape_string($GLOBALS["DB"],$name),
		mysqli_real_escape_string($GLOBALS["DB"],$email),
    mysqli_real_escape_string($GLOBALS["DB"],$size));

    
        $update = $db->update("buy",$data,"buyID='$id'");
      
		
		 if($update){
		
			header("location:solditem.php?save=1");
		 }
   
}
    function cleanData($data) {
        $data = htmlSpecialChars($data);
        $data = stripslashes($data);
        $data = trim($data);

        return $data;
    }

?>
<body>
       
<div class="all-content-wrapper">
    <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
                </div>
            </div>
        <div class="basic-form-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline12-list">
                            <div class="sparkline12-hd">
                                
                            </div>

                                <div class="sparkline12-graph">
                                    <div class="basic-login-form-ad">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="all-form-element-inner">
                                              
                                                    <form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data" name="update" id="update">
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-1 col-md-3 col-sm-3 col-xs-12">
                                                                    <label class="login2 pull-left pull-right-pro">name</label>
                                                                </div>
                                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                    <input type="text" class="form-control" name="name" id="name" value="<?php echo $name; ?>"/>
                                                                    <label class="login2 pull-left pull-right-pro" style="color:red"><?php echo $nameErr; ?></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-1 col-md-3 col-sm-3 col-xs-12">
                                                                    <label class="login2 pull-left pull-right-pro">email</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                    <input type="email" class="form-control" name="email" id="email" value="<?php echo $email; ?>" />
                                                                    <label class="login2 pull-left pull-right-pro" style="email:red"><?php echo $emailErr; ?></label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        </div>
                                                      
                                                        <div class="form-group-inner">
                                                            <div class="login-btn-inner">
                                                                <div class="row">
                                                                    <div class="col-lg-1"></div>
                                                                    <div class="col-lg-9">
                                                                        <div class="login-horizental cancel-wp pull-left form-bc-ele">
                                                                        <button class="btn btn-sm btn-primary login-submit-cs" type="submit" name="submit">Save</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
