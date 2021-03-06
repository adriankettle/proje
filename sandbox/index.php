<?php
  require ('config/db.php');

  //Create Query
  $query = 'SELECT * FROM post';

  $result = mysqli_query($conn, $query);
    //fetch data
    $post = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
    <h2>Post</h2>
    <?php foreach($post as $post) : ?>
      <div class="well">
        <h4><?php echo $post['title']; ?></h4>
        <small>Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
        <p><?php echo $post['body']; ?></p>
        <a href="post.php?id=<?php echo $post['id']; ?>">Read More</a>
      </div>
    <?php endforeach; ?>
    <script src="js/db.js" charset="utf-8"></script>
  </body>
</html>
