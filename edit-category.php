<?php require_once('check_login.php');?>
<?php include('head.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>
<?php include('connect.php');
if(isset($_POST['submit']))
    {
        $aid=$_SESSION['vpmsaid'];
        $catname=$_POST['catename'];
        $rate = $_POST['rate'];
    $eid=$_GET['editid'];
    
        $query=mysqli_query($conn, "update tblcategory set VehicleCat='$catname' ,rate='$rate' where ID='$eid'");
        if ($query) {
        $msg="Category has been updated.";
    }
    else
        {
        $msg="Something Went Wrong. Please try again";
        }

    }
?>
<div class="pcoded-content">
<div class="pcoded-inner-content">

<div class="main-body">
<div class="page-wrapper">

<div class="page-header">
<div class="row align-items-end">
<div class="col-lg-8">
<div class="page-header-title">
<div class="d-inline">
<h4>Vehicle Category</h4>


</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href=""> <i class="feather icon-home"></i> </a>
</li>
<li class="breadcrumb-item"><a>Manage Category</a>
</li>
<li class="breadcrumb-item"><a href="edit-category.php">edit-category</a>
</li>
</ul>
</div>
</div>
</div>
</div>

<div class="page-body">

<div class="card">
<div class="card-block">
<form role="form" method="post">
<form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <p style="font-size:16px; color:green" align="center"> <?php if(isset($msg)){
                                        echo $msg;
                                    }  ?> </p>
                                                        
                                    <?php
                                    $cid=$_GET['editid'];
                                    $ret=mysqli_query($conn,"select * from  tblcategory where id='$cid'");
                                    $cnt=1;
                                    while ($row=mysqli_fetch_array($ret)) {

                                    ?>
    <div class="form-group row">
        <label class="col-lg-2">Category</label>
        
        <input type="text" id="catename" name="catename" class="form-control col-lg-6" placeholder="Vehicle Category" required="true" value="<?php  echo $row['VehicleCat'];?>">
        <br>
    </div>
     <div class="form-group row">
        <label class="col-lg-2">Rate per hour</label>
        
        <input type="text" id="catename" name="rate" class="form-control col-lg-6" placeholder="Rate per Hour" required="true" value="<?php  echo $row['rate'];?>">
        <br>
    </div>
    <?php } ?>
        <div class="col-lg-12">
      <button type="submit" name="submit" class="btn btn-primary m-b-0">Update</button>
    </div>
</form>
</div>
</div>


</div>

</div>
</div>

<div id="#">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!--  Author Name: Mayuri K. 
 for any PHP, Codeignitor or Laravel work contact me at mayuri.infospace@gmail.com  -->
<?php include("footer.php"); ?>