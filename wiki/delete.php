<?php
include_once "./include/connection.php";
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
$post_Id=$_GET['Id'];
// Check if the deletion is confirmed
if (isset($_POST['confirm_delete'])) {
    // Delete data from the database
    $sql = "DELETE FROM Posts WHERE Id='$post_Id'";

    if ($conn->query($sql) === TRUE) {
        echo "Data deleted successfully.";
        header("Location:allData.php");
    } 
    else {
        echo "Error deleting data: " . $conn->error;
    }

    // Close the connection
    $conn->close();
    exit; // Stop execution after deletion
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Confirmation</title>
    <script>
        function confirmDeletion() {
            var result = window.confirm("Are you sure you want to delete the data?");
            if (result) {
                document.getElementById("deleteForm").submit();
            }
        }
    </script>
</head>
<body>
    <h2>Delete Confirmation</h2>
    <button onclick="confirmDeletion()">Delete Data</button>
    <form id="deleteForm" method="POST" action="">
        <input type="hidden" name="confirm_delete" value="1">
    </form>
</body>
</html>