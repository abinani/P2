<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>XKCD password generator</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css" rel="stylesheet">
  </head>
  <body role="document" style="padding-top: 20px;">
    <div class="container" role="main">
      <div class="jumbotron">
        <h1>XKCD Password Generator!</h1>
      </div>

      <form role="form" method="POST" action="index.php">
        <div class="form-group form-inline">
          <h3>
            <span class="label label-default" for="numberOfWords">Number of Words</span>
            <select class="form-control" name="how_many">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
            </select>
          </h3>
        </div>
        <button type="submit" class="btn btn-default" value="click" name="get_password">Get Me!</button>
      </form>  
    </div>
  </body>
</html>

<?php
function get_password($password_length)
{
    return "xxxxx".$password_length;
}

if(isset($_POST['get_password']))
{
    $password_length = $_POST["how_many"];
    $password = get_password($password_length);
    echo $password;
} 
?>

