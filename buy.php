<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<?php
include("./crud.php");
$db = new CRUD();


$name= $email ="";
$nameErr=  $emailErr ="";
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];      

    if(empty($name)) {
        $nameErr = "The name can not empty";
    }
    if(empty($email)) {
        $emailErr = "The email can not empty";
    }
    
   

    if(empty($nameErr)&& empty($emailErr)){
        
        //test insert 
      
        $insert = $db->insert("buy", "`name`,`email`",
             "' $name','$email'");
            header("location:solditem.php?add=1");
    }
}
?>
	
<body>
    
<div class="all-content-wrapper">
    <div class="container-fluid">
           
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Personal Information</a></li>
                            </ul>
                            
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <form id="add-department" action="buy.php" method="post" class="add-department">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                            <label class="login2 pull-left pull-right-pro">name</label>

                                                                <input name="name" type="text" class="form-control" placeholder="Name" value="<?php echo $name; ?>"/>
                                                                <label class="login2 pull-left pull-right-pro" style="color:red"><?php echo $nameErr; ?></label>

                                                                <br><br>
                                                            </div>
                                                            <div class="form-group">
                                                            <label class="login2 pull-left pull-right-pro">email</label>

                                                                <input name="email" type="email" class="form-control" placeholder="Email"value="<?php echo $email; ?>"/>
                                                                <label class="login2 pull-left pull-right-pro" style="color:red"><?php echo $emailErr; ?></label>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="payment-adress">
                                                                <button type="submit" class="btn btn-primary waves-effect waves-light" name="submit">Send</button>
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
 