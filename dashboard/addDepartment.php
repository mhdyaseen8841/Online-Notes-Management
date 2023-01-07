<?php include 'includes/connection.php';?>
<?php include 'includes/adminheader.php';?>


<?php
    if(isset($_POST["add"])){
        $name = $_POST["nme"];
        $result = mysqli_query($conn , "INSERT INTO department(dname) VALUES('$name')") or die(mysqli_error($conn));
            if (mysqli_affected_rows($conn) > 0) {
                echo "<script> alert('New Department Added successfully');
                window.location.href='department.php';</script>";
            }
            else {
                "<script> alert('Error...try again');</script>";
            }
    }

?>

<div id="wrapper">

       <?php include 'includes/adminnav.php';?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Add Department
                        </h1>
                        <form role="form" action="" method="POST" >


	<div class="form-group">
		<label for="post_title">Department Name</label>
		<input type="text" name="nme" class="form-control" placeholder="Enter department" >
	</div>

<button type="submit" name="add" class="btn btn-primary" value="Upload Note">Add</button>
<br>
<br>
</form>
</div>
</div>
</div>
</div>
</div>


<script src="js/jquery.js"></script>

    
    <script src="js/bootstrap.min.js"></script>

</body>

</html>



