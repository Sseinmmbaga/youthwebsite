<?php
include_once "./include/connection.php";
  error_reporting(E_ALL);
  ini_set('display_errors', 1);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert Data</title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/style.css">

</head>

<body>
  <div class="fluid">
    <div class="container mt-5">
      <div class='jumbotron jumbotron-fluid text-center color-set '>
        <div class="container">
          <h1 class='display-3'>
            New Post
          </h1>
          <p class='lead'>
            Here you will be able to write new Post;
          </p>

        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <form method="post" role="form" enctype="multipart/form-data">
              <div class="form-group">
                <input type="text" class="form-control" name="title" placeholder="Title" />
              </div>
              <div class="form-group">
                <input type="text" name="author" class="form-control" placeholder="Author" id="">
              </div>
              <div class="form-group">
                <input type="text" name="category" class="form-control" placeholder="Category" id="">
              </div>
              <div class="form-group">
                <label> Image </label>
                <div class="form-group">
                  <input type='file' name="postImage" class='form-control form-control-lg' accept="image/*">
                </div>
              </div>
              <div class="form-group">
                <textarea class="form-control bcontent" name="paragraph01" placeholder="Paragraph" maxlength="700"></textarea>
              </div>
              <div class="form-group">
                <textarea class="form-control bcontent" name="paragraph02" placeholder="Paragraph" maxlength="700"></textarea>
              </div>
              <div class="form-group">
                <textarea class="form-control bcontent" name="paragraph03" placeholder="Paragraph" maxlength="700"></textarea>
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

</body>
<?php
if (isset($_POST['submit'])) {
  # code...
  // GETTING  INPUT VALUES
  $new_title = mysqli_real_escape_string($conn, $_POST['title']);

  $new_author = mysqli_real_escape_string($conn, $_POST['author']);

  $new_category = mysqli_real_escape_string($conn, $_POST['category']);

  $new_paragraph1 = mysqli_real_escape_string($conn, $_POST['paragraph01']);

  $new_paragraph2 = mysqli_real_escape_string($conn, $_POST['paragraph02']);

  $new_paragraph3 = mysqli_real_escape_string($conn, $_POST['paragraph03']);


  // book Path
  //Detaile for the Book image
  $imageTmpPath = $_FILES['postImage']['tmp_name'];

  $image_name = str_replace(' ', '', $_FILES['postImage']['name']);         //without space
  $image_directory = "../Images/";                                        //image directory from this current file

  $image_dir = $image_directory . $image_name;                               // path for writing
  $image_path = "./Images/" . $image_name;                                   // path for reading file

  // $image_target_file = $image_dir . basename($_FILES["postImage"]["name"]);
  $uploadOk = 1;


  $edit_query = "INSERT INTO `Posts`(`Category`, `Author`, `Title`, `Image_Path`, `Paragraph1`, `Paragraph2`, `Paragraph3`) 
  VALUES 
          ('$new_category','$new_author','$new_title','$image_path','$new_paragraph1','$new_paragraph2','$new_paragraph3')";


  $update_query = mysqli_query($conn, "$edit_query");

  if (!$edit_query) {
    # code...
  } else {
    move_uploaded_file($imageTmpPath, $image_dir);
    header("Location:allData.php");
  }
}
?>

</html>