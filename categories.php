<!DOCTYPE html>
<html>
<?php include 'head.php';?>
<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">

  <?php include 'sidebar.php';?>
  
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
     <!-- Main Content -->
      <div id="content">
   
       <?php include 'topbar.php';?>
      
       <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Categories</h1>

 <!-- Begin Here to write-->

<p>  hello world icne ceciuhco ceocheocnle cei         </p>


<form action="addstudent">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Full name</label>
    <div class="col-sm-10">
      <input type="text" name="full_name" class="form-control"  placeholder="Full Name" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Name with intials</label>
    <div class="col-sm-10">
      <input type="text" name="intial_name" class="form-control"  placeholder="Eg: K.A Ruwan">
    </div>
  </div>
  
<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="inlineFormCustomSelectPref">Gender</label>
  <select name="gender" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
    <option selected>Choose...</option>
    <option value="male" >Male</option>
    <option value="female">Female</option>
  </select>
  </div>
  
  
  
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Address</label>
    <div class="col-sm-10">
      <input type="text" name="address"  class="form-control"  placeholder="Address">
    </div>
  </div>
  
    <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Phone Number</label>
    <div class="col-sm-10">
      <input type="text" name="tp"  class="form-control"  placeholder="TP">
    </div>
  </div>

 <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" name="email"  class="form-control"  placeholder="email">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" name="sub" class="btn btn-primary">Add</button>
    </div>
  </div>
</form>




        </div>
        <!-- /.container-fluid -->
           
      </div>
      <!-- End of Main Content -->
      
       <?php include 'footer.php';?>
     
    </div>
    <!-- End of Content Wrapper -->
  
  </div>
  <!-- End of Page Wrapper -->
   <?php include 'end.php';?>
 
</body>
</html>