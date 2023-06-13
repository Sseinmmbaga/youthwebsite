<?php
  include_once "./connection.php";
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
  <link rel="stylesheet" href="./css/style.css">

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
            <form method="post" role="form">
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
                <textarea class="form-control bcontent" name="paragraph01" placeholder="Paragraph" maxlength="700"></textarea>
              </div>
              <div class="form-group">
                <textarea class="form-control bcontent" name="paragraph02" placeholder="Paragraph" maxlength="700"></textarea>
              </div>
              <div class="form-group">
                <textarea class="form-control bcontent" name="paragraph03" placeholder="Paragraph" maxlength="700"></textarea>
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