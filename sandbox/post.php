<?php
  //had to comment that don't respond properly to be continued....
  // require ('config/config.php');
  require ('config/db.php');

  //Get id
  $id = mysqli_real_escape_string($conn, $_GET['id']);

  //Create Query
  $query = 'SELECT * FROM post WHERE id= '. $id;

  $result = mysqli_query($conn, $query);
    //fetch data
    $post = mysqli_fetch_assoc($result);
    // var_dump($post);
    mysqli_free_result($result);

    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/db.css">
    <title>Post</title>
  </head>
  <body>
    <div class="nav">
      <nav>
        <a href="./">Home</a>
      </nav>
    </div>
    <h2>Post</h2>
      <div class="well">
        <h4><?php echo $post['title']; ?></h4>
        <small>Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
        <p><?php echo $post['body']; ?></p>
      </div>

    <script src="js/db.js" charset="utf-8"></script>
  </body>
</html>
