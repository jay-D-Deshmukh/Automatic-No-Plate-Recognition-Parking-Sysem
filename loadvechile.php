<?php require_once('check_login.php');


$number = $_POST["number"];

echo $number;







?>

<?php include('connect.php');







  

$sql = "SELECT * FROM `tblvehicle` WHERE `RegistrationNumber` like $number";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    
$cat =  $row["VehicleCategory"];
$company = $row["VehicleCompanyname"];
$name = $row["OwnerName"];
$contact = $row["OwnerContactNumber"];

  }
} else {
  echo "0 results";
}

echo "<br>";
echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";










if(isset($_POST['submit']))
  {
    $parkingnumber=mt_rand(100000000, 999999999);
    $catename=$_POST['catename'];
     $vehcomp=$_POST['vehcomp'];
    $vehreno=$_POST['vehreno'];
    $ownername=$_POST['ownername'];
    $ownercontno=$_POST['ownercontno'];
    $enteringtime=$_POST['enteringtime'];
    
     
   $query=mysqli_query($conn, "insert into  tblvehicle(ParkingNumber,VehicleCategory,VehicleCompanyname,RegistrationNumber,OwnerName,OwnerContactNumber) value('$parkingnumber','$catename','$vehcomp','$vehreno','$ownername','$ownercontno')");
    if ($query) {
echo "<script>alert('Vehicle Entry Detail has been added');</script>";
echo "<script>window.location.href ='manage-incomingvehicle.php'</script>";
  }
  else
    {
     echo "<script>alert('Something Went Wrong. Please try again.');</script>";       
    }

  
}
?>

<?php include('head.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>
<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>

<div class="pcoded-content">
<div class="pcoded-inner-content">

<div class="main-body">
<div class="page-wrapper">

<div class="page-header">
<div class="row align-items-end">
<div class="col-lg-8">
<div class="page-header-title">
<div class="d-inline">
<h4>Enter Vehicle</h4>

</div>
</div>
</div>
<div class="col-lg-4">
<div class="page-header-breadcrumb">
<ul class="breadcrumb-title">
<li class="breadcrumb-item">
<a href="dashboard.php"> <i class="feather icon-home"></i> </a>
</li>
<li class="breadcrumb-item"><a>Enter Vehicle</a>
</li>
<li class="breadcrumb-item"><a href="add-vehicle.php">Enter Vehicle</a>
</li>
</ul>
</div>
</div>
</div>
</div>


<div class="page-body">
<div class="row">
<div class="col-sm-12">

<div class="card">
<div class="card-header">

</div>
<div class="card-block">
<form id="main" method="post" enctype="multipart/form-data">




<div class="form-group row">
<label class="col-sm-2 col-form-label">Select</label>
<div class="col-sm-4">
  <input type="text" class="form-control" id="vehcomp" name="catename" required="" value="<?php  echo $cat; ?>" readonly="">
<span class="messages"></span>
</div>
<label class="col-sm-2 col-form-label">Vehicle Company</label>
<div class="col-sm-4">
<input type="text" class="form-control" readonly="" value="<?php echo $company;  ?>" id="vehcomp" name="vehcomp" placeholder="Vehicle Company" required="">
<span class="messages"></span>
</div>
</div>


<div class="form-group row">
<label class="col-sm-2 col-form-label">Registration Number</label>
<div class="col-sm-4">
<input type="text" class="form-control" id="vehreno" name="vehreno"  readonly="" value="<?php echo $number;  ?>"   placeholder="Registration Number"  required="">
<span class="messages"></span>
</div>
<label class="col-sm-2 col-form-label">Owner Name</label>
<div class="col-sm-4">
<input type="text" id="ownername" name="ownername" class="form-control"  readonly="" value="<?php echo $name;  ?>"  placeholder="Owner Name"  required="true">
<span class="messages"></span>
</div>
</div>


<div class="form-group row">
<label class="col-sm-2 col-form-label">Owner Contact Number</label>
<div class="col-sm-4">
<input type="text" id="ownercontno" name="ownercontno" readonly="" value="<?php echo $contact;  ?>"  class="form-control" placeholder="Owner Contact Number" required="true" maxlength="10" pattern="[0-9]+">
<span class="messages"></span>
</div>
</div>

<div class="form-group row">
<label class="col-sm-2"></label>
<div class="col-sm-10">
<button type="submit" name="submit" class="btn btn-primary m-b-0">Submit</button>
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

<?php include('footer.php');?>