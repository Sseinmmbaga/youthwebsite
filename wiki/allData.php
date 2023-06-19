<?php
include_once "./include/connection.php";
session_start();

      if ($_SESSION['name'] == NULL ) {
          # code...
            session_destroy();
            session_unset();            
            header("location:index.php");
        }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap Datatables CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

    <!-- Bootstrap Datatables Js -->
    <script defer src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script defer src="./assets/js/script.js"></script>


    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/sidebar.css">
    <title>All Data</title>

</head>

<body>
    <input type="checkbox" name="MenuToggle" id="MenuToggle">
<aside class="sidebar">
   <nav>
      <a href="#" class="logo">Logo</a>
      <div class="nav_items">
         <a href="allData.php" class="active">All Data</a>
         <a href="insert_data.php">Insert Data</a>
         <a href="allData.php">Edit Data</a>
         <a href="logout.php">Log out</a>
      </div>
   </nav>
</aside>
<main class="right ">
   <label for="MenuToggle" class="toggle__icon">
   <span class="line line1"></span>
   <span class="line line3"></span>
   <span class="line line2"></span>
   </label>
   <div class="content">
     <div class="container">
       <div class="fluid">        
        <div class="container mt-5">
            <div class='jumbotron jumbotron-fluid text-center color-set '>
                <div class="container">
                    <h1 class='display-3'>
                        All Post
                    </h1>
                    <p class='lead'>
                        Here you will be able to view all your Post;
                    </p>

                </div>
            </div>
            <div class="container">
                <table class="table table-striped table-bordered" id="example">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Category</th>
                            <th>Author</th>
                            <th>Title</th>
                            <th>Image Path</th>
                            <!-- <th>Paragraph1</th> -->
                            <!-- <th>Paragraph2</th> -->
                            <!-- <th>Paragraph3</th> -->
                            <th>CreatedAt</th>
                            <th>Edit</th>
                            <th>Delete</th>
                    </thead>
                    </tr>
                    <tbody>
                        <?php
                        $post_query = mysqli_query($conn, "SELECT * FROM `Posts` order by Id ASC");
                        while ($data = mysqli_fetch_array($post_query)) {
                            # code...
                        ?>
                            <tr>
                                <td><?php echo $data['Id']  ?></td>
                                <td><?php echo $data['Category']  ?></td>
                                <td><?php echo $data['Author']  ?></td>
                                <td><?php echo $data['Title']  ?></td>
                                <td><?php echo $data['Image_Path']  ?></td>
                                <!-- <td><?php //echo $data['Paragraph1']  
                                            ?></td> -->
                                <!-- <td><?php //echo $data['Paragraph2']  
                                            ?></td> -->
                                <!-- <td><?php //echo $data['Paragraph3']  
                                            ?></td> -->
                                <td><?php echo $data['CreatedAt']  ?></td>
                                <td>
                                    <a href="edit_data.php?Id=<?php echo $data['Id'] ?>">
                                        <button type="button btn-sm" name="edit" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" <?php echo $book_results['Book_Id'] ?>>Edit</button>
                                    </a>
                                </td>
                                <td>
                                    <a href="delete.php?Id=<?php echo $data['Id'] ?>">
                                        <button type="button btn-sm" class="btn btn-danger">Delete</button>
                                    </a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
     </div>
   </div>
</main>
   

</body>

</html>