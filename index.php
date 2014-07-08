<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>XKCD password generator</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.css" rel="stylesheet">

    <?php require 'logic.php' ?>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <div id="my-modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="password-dismiss">&times;</button>
                    <h4 class="modal-title">XKCD Generate password</h4>
                </div>
                <div class="modal-body">
                <?php echo $password; ?>
                </div>
            </div>
        </div> 
    </div>

    <? if($password) {?>
    <script type="text/javascript">
    $(window).load(function(){
        $('#my-modal').modal({show:true});
    });
    </script>
    <? } ?>

  </body>
</html>

