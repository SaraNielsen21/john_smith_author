<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/united/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    </head>
    
    <body>

        <?php include '../resources/navigation.php'; ?>

        <div class="container">
          <div class="below_menu_container">
            <h1>Login</h1>
            <form class="form-horizontal">
              <div class="form-group">
                Username:<br>
                <input type="text" class="form-control" name="username" placeholder="Username"><br>
                Password:<br>
                <input type="text" class="form-control" name="password" placeholder="Password"><br/>
                <input type="submit" class="btn btn-primary submit" value="Submit">
              </div>     
            </form>
          </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

      <?php include '../resources/footer.php'; ?>
        
    </body>
    
</html>