<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/create.css">
    <title>Insert</title>
  </head>
  <body>
    <div id="form">
      <form action="insert.php" method="post">
          <tr>
            <td>Name</td><br>
            <td><input type="text" name="name" placeholder="Name"></td><br>
            <td>Brand</td><br>
            <td><input type="text" name="brand" placeholder="Brand"></td><br>
            <td>Price</td><br>
            <td><input type="number" name="price" placeholder="Price"></td><br>
            <td>Quantity</td><br>
            <td><input type="number" name="quantity" placeholder="Quantity"></td><br>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><input id="btn" type="submit" name="sibmit" value="+"> </td>
          </tr>
      </form>
    </div>
    <script src="js/create.js" charset="utf-8"></script>
  </body>
</html>
