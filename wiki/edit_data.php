<?php
  include_once "./include/connection.php";
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
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
  <title>Edit Data</title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/sidebar.css">

</head>

<body>
  <input type="checkbox" name="MenuToggle" id="MenuToggle">
<aside class="sidebar">
   <nav>
      <a href="#" class="logo">Logo</a>
      <div class="nav_items">
        <a href="allData.php" >All Data</a>
        <a href="insert_data.php">Insert Data</a>
        <a href="edit_data.php" class="active">Edit Data</a>
      </div>
   </nav>
</aside>
<main class="right">
   <label for="MenuToggle" class="toggle__icon">
   <span class="line line1"></span>
   <span class="line line3"></span>
   <span class="line line2"></span>
   </label>
   <div class="content">
      <div class="fluid">
    <div class="container mt-5">
      <div class='jumbotron jumbotron-fluid text-center color-set '>
        <div class="container">
          <h1 class='display-3'>
            Edit Post
          </h1>
          <p class='lead'>
            Here you will be able to edit your Post;
          </p>

        </div>
      </div>
    <?php
        $post_Id=$_GET['Id'];
        // echo $post_Id;
            $post_query = mysqli_query($conn, "SELECT * FROM `Posts` where Id='$post_Id'");
                if (mysqli_num_rows($post_query)>0) {
                        # code...
                        $post_results=mysqli_fetch_assoc($post_query);
                    } 
                

    ?>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <form method="post" action="" role="form" enctype="multipart/form-data">
              <div class="form-group">
                <span>Title</span><input type="text" class="form-control" name="title" placeholder="Title"  value="<?php  echo $post_results['Title'] ?>"/>
              </div>
              <div class="form-group">
                <span>Author</span><input type="text" name="author" class="form-control" placeholder="Author" id="" value="<?php  echo $post_results['Author'] ?>">
              </div>
              <div class="form-group">
              <span>Category:</span><input type="text" name="category" class="form-control" placeholder="Category" id="" value="<?php  echo $post_results['Category'] ?>">
              </div>
              <div class="form-group">
                <label> Image </label>
                <div class="form-group">
                  <input type='file' name="postImage" class='form-control form-control-lg' accept="image/*" >                                    
              </div>
              <div class="form-group">
                <span>Paragraph1</span><textarea class="form-control bcontent" name="paragraph01" placeholder="Paragraph" maxlength="700"><?php  echo $post_results['Paragraph1'] ?></textarea>
              </div>
              <div class="form-group">
                <span>Paragraph2</span><textarea class="form-control bcontent" name="paragraph02" placeholder="Paragraph" maxlength="700"><?php  echo $post_results['Paragraph2'] ?></textarea>
              </div>
              <div class="form-group">
                <span>Paragraph3</span><textarea class="form-control bcontent" name="paragraph03" placeholder="Paragraph" maxlength="700"><?php  echo $post_results['Paragraph3'] ?></textarea>
              </div>
              <div class="form-group">
                <input type="submit" name="submit" value="Publish" class="btn btn-primary form-control" />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
   </div>
</main>
 

</body>
<?php
if (isset($_POST['submit'])) {
  # code...
      // GETTING  INPUT VALUES
      $edited_title=mysqli_real_escape_string($conn, $_POST['title']);

      $edited_author=mysqli_real_escape_string($conn, $_POST['author']);

      $edited_category=mysqli_real_escape_string($conn,$_POST['category']);      

      $edited_paragraph1=mysqli_real_escape_string($conn,$_POST['paragraph01']);

      $edited_paragraph2=mysqli_real_escape_string($conn,$_POST['paragraph02']);

      $edited_paragraph3=mysqli_real_escape_string($conn,$_POST['paragraph03']); 

      // book Path
                  //Detaile for the Book image
              $imageTmpPath=$_FILES['postImage']['tmp_name'];
              
              $image_name=str_replace(' ','',$_FILES['postImage']['name']);         //without space
              $image_directory="../Images/";                                        //image directory from this current file

              $image_dir=$image_directory.$image_name;                               // path for writing
              $image_path="./Images/".$image_name;                                   // path for reading file

              // $image_target_file = $image_dir . basename($_FILES["postImage"]["name"]);
              $uploadOk = 1;      

              
              $edit_query="UPDATE `Posts` SET `Category`='$edited_category',
                                              `Author`='$edited_author',
                                              `Title`='$edited_title',
                                              `Image_Path`='$image_path',
                                              `Paragraph1`='$edited_paragraph1',
                                              `Paragraph2`='$edited_paragraph2',
                                              `Paragraph3`='$edited_paragraph3'                                            
                                            WHERE `Id`='$post_Id'";


              $update_query=mysqli_query($conn,"$edit_query");

              if (!$edit_query) {
                 # code...
              }
              else{
                  move_uploaded_file($imageTmpPath,$image_dir);
                  header("Location:allData.php");
              }
}
?>

</html>