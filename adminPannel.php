<?php
    include("connection.php");
    session_start();
    if (isset($_POST['delete'])) {
    $rowId = $_POST['delete']; // Get the row ID from the form submission

    // Perform the deletion of the row in your database
    $deleteQuery = "DELETE FROM `bookingform` WHERE SL = '$rowId'";
    mysqli_query($con, $deleteQuery);

    if($deleteQuery){
        echo '<script>alert("Delete Successfully")</script>';
    }else{
        echo '<script>alert("Failed")</script>';
    }
    
}
    /*if(!isset($_SESSION['AdminLoginId'])){
        header("location:adminLogin.php");
    }*/
    
    $query = "SELECT * FROM `bookingform`";
    $result = mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="adminpannel.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Montserrat:wght@600&family=Poppins:wght@400;500&display=swap"
        rel="stylesheet">
    <title>Admin Deshboard</title>

</head>

<body>
    <div class="header">
        <h1>WELCOME TO <span style="color: var(--maincolor); font: size 40px;">ADMIN DASHBOARD</span></h1>
        <form method="POST">
            <button name="logout"><a href=""></a>Log Out</button>
        </form>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center">FATECH DATA FROM DATABASE</h2>
                    </div>
                    <div class="card-body">
                        <table  class="table table-bordered border-dark text-center">
                            <tr >
                                <td class=" bg-dark text-white border-end">SL</td>
                                <td class=" bg-dark text-white border-end">FirstName</td>
                                <td class=" bg-dark text-white border-end">LastName</td>
                                <td class=" bg-dark text-white border-end">Email</td>
                                <td class=" bg-dark text-white border-end">Mobile</td>
                                <td class=" bg-dark text-white border-end">Date</td>
                                <td class=" bg-dark text-white border-end">Services</td>
                                <td class=" bg-dark text-white border-end">Message</td>
                                <td class=" bg-dark text-white border-end">Action</td>

                            </tr>
                            <tr>
                                <?php 

                                while($row = mysqli_fetch_assoc($result)){

                                ?>  
                                    <td><?php echo $row['SL'];?> </td>
                                    <td><?php echo $row['Fast_Name'];?> </td>
                                    <td><?php echo $row['Last_Name'];?> </td>
                                    <td><?php echo $row['Email_Address'];?> </td>
                                    <td><?php echo $row['Mobile_Number'];?> </td>
                                    <td><?php echo $row['Date'];?> </td>
                                    <td><?php echo $row['Services'];?> </td>
                                    <td><?php echo $row['Messages'];?> </td>
                                    
                                    <form action="" method="post">
                                        <td><button type="submit" class="btn btn-danger" name="delete" value="<?php echo $row['SL']; ?>">Delete</button></td>
                                    </form>

                                <!---->
                            </tr>

                            <?php

                                } 

                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="bootstrap/bootstrap.min.js"></script>

</body>

</html>

<?php
    if(isset($_POST['logout'])){
        session_destroy();
        header("location:index.php");
        
    }
?>