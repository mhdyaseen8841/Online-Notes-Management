
<?php include 'includes/connection.php'; ?>

<?php include 'includes/adminheader.php';
?>

    <div id="wrapper">
<?php ?>
       <?php include 'includes/adminnav.php';?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                        <div class="col-xs-4">
            <a href="addDepartment.php" class="btn btn-primary">Add Department</a>
            </div>
                         MY NOTES
                        </h1>
                         
<div class="row">
<div class="col-lg-12">
        <div class="table-responsive">

<form action="" method="post">
            <table class="table table-bordered table-striped table-hover">


            <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>delete</th>
                        
                    </tr>
                </thead>
                <tbody>

                 <?php
                 $currentuser = $_SESSION['username'];

$query = "SELECT * FROM department ";
$run_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
if (mysqli_num_rows($run_query) > 0) {
while ($row = mysqli_fetch_array($run_query)) {
    $id = $row["id"];
    $name = $row["dname"];

    echo "<tr>";
    echo "<td>$id</td>";
    echo "<td>$name</td>";
    echo "<td><a onClick=\"javascript: return confirm('Are you sure you want to delete this post?')\" href='?del=$id'><i class='fa fa-times' style='color: red;'></i>delete</a></td>";
    echo "</tr>";

}
}
else {
    echo "<script>alert('Error');
    window.location.href= 'uploadnote.php';</script>";
}
?>


                </tbody>
            </table>
</form>
</div>
</div>
</div>
 <?php
 
    if (isset($_GET['del'])) {
        $note_del = mysqli_real_escape_string($conn, $_GET['del']);
        $file_uploader = $_SESSION['username'];
        $del_query = "DELETE FROM department WHERE  id = ".$_GET["del"];
        $run_del_query = mysqli_query($conn, $del_query) or die (mysqli_error($conn));
        if (mysqli_affected_rows($conn) > 0) {
            echo "<script>alert('department deleted successfully');
            window.location.href='department.php';</script>";
        }
        else {
         echo "<script>alert('error occured.try again!');</script>";   
        }
        }
   ?>    


 <script src="js/jquery.js"></script>

    
    <script src="js/bootstrap.min.js"></script>

</body>

</html

