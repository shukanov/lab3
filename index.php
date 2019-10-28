<?php
    require "check.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>lab_3</title>
  </head>
  <body>
    <div class="container">
        <br><br>
        <div class="row">          
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body">
                        <?php
                            echo $text;
                        ?>
                    </div>
                </div>
                <br>
                <div class="card">
                    <div class="card-body">
                        <?php
                            echo $new_text;
                        ?>
                    </div>
                </div>
                <br>
                <a href="index.php"><button type="submit" name="check" class="btn btn-primary">Проверить</button></a>
            </div>
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <?php
                            foreach($words as $word)
                            {
                                echo "$word ";
                            }
                        ?>
                    </div>
                </div>
                <br>
                <form class="form-inline" method="POST">
                    <div class="form-group mx-sm-3 mb-2">
                        <input type="text" name="add" class="form-control" placeholder="text">
                    </div>
                    <a href="index.php"><button type="submit" class="btn btn-primary mb-2">Добавить слово</button></a>
                </form>
            </div>
        </div>
    </div>
  </body>
</html>