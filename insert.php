<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/master.css">
    <title>sup</title>
  </head>
  <body>
    <div class="shades">
      <form>
        Search Users: <input type="text" onkeyup="showSuggestion(this.value)">
      </form>
      <p>Suggestions: <span id="output"></span>
       </p>
    </div>

    <script src="js/index.js" charset="utf-8"></script>
  </body>
</html>
