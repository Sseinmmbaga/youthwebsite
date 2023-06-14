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
  <title>Edit Data</title>

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
            <form method="post" role="form">
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
                <div class="input-group">

                  <span class="input-group-btn">
                    <span class="btn btn-primary btn-file">
                      Browse <input type="file" name="bimgs" multiple>
                    </span>
                  </span>
                  <input type="text" class="form-control">
                </div>
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
                <input type="submit" name="Submit" value="Publish" class="btn btn-primary form-control" />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>

</body>

</html>