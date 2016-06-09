<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Add Comment</title>

    <!-- Bootstrap -->
    <link href="asset/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php
    require_once '../include.php';

    $theID=mysql_escape_string($_GET["ID"]);

    $sql= "Select Title from Article where ID =".$theID."";
    $row=fetchOne($sql);
    $theTile = $row['Title'];
    ?>
    <div class="wrap">
        <form class="audit-form" method="post" action="../doAction.php?act=comment&ID=<?php echo $theID?>">
            <div class="form-group">
                <span name="Title" class="form-control"><?php echo $row['Title']?></span>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="Comment" rows="8" cols="40"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" name="Download" class="btn btn-default form-control">Download</button>
            </div>
            <div class="form-group">
                <button type="submit" name="Reject" class="btn btn-warning form-control">Reject</button>
            </div>
            <div class="form-group">
                <button type="submit" name="Pass" class="btn btn-success form-control">Pass</button>
            </div>


        </form>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="asset/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
