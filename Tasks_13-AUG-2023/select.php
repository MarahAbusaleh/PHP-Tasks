<?php

include('./database.php');
$result = mysqli_query($conn, "SELECT * FROM students");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Example 13-AUG</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/nicecss@2.1.0/dist/nice.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<head>
<style>
    th {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #f5f5f5;
    }
</style>
</head>
<body>

<?php

if( mysqli_num_rows($result) > 0){

?>  
    <br>
    <center>
        <a href="./insert.php"><button type="button" class="btn btn-secondary m-1">Add</button></a>
    </center>
    <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Student ID</th>
                <th scope="col">Student Name</th>
                <th scope="col">Student Email</th>
                <th scope="col">Student Age</th>
                <th scope="col">Action</th>
            </tr>
        </thead>



<?php

$i = 0;

while($record = mysqli_fetch_array($result)){
?>
    
        <tr>
            <th><?php echo $record["student_id"]; ?></th>                                
            <td><?php echo $record["student_name"]; ?></td>
            <td><?php echo $record["student_email"]; ?></td>                                
            <td><?php echo $record["age"]; ?></td>
            <td>
                <a href="./update.php?student_id=<?php echo $record["student_id"]; ?>"><button type="button" class="btn btn-outline-success m-1">Edit</button></a>
                <a href="./delete.php?student_id=<?php echo $record["student_id"]; ?>"><button type="button" class="btn btn-outline-danger m-1">Delete</button></a>
            </td>
        </tr>
<?php

$i++;
}

?>
    </table>


<?php
} else{
    echo "<h1>No Record To Display!</h1><br>";
}
?>

</body>
</html>