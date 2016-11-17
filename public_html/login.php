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

    <div id="amazon-root"></div>
<script type="text/javascript">

  window.onAmazonLoginReady = function() {
    amazon.Login.setClientId('amzn1.application-oa2-client.61cb7df373a44c39800bdfa39d871e72');
  };
  (function(d) {
    var a = d.createElement('script'); a.type = 'text/javascript';
    a.async = true; a.id = 'amazon-login-sdk';
    a.src = 'https://api-cdn.amazon.com/sdk/login1.js';
    d.getElementById('amazon-root').appendChild(a);
  })(document);

</script>

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
                <a href="#" id="LoginWithAmazon">
  <img border="0" alt="Login with Amazon"
    src="https://images-na.ssl-images-amazon.com/images/G/01/lwa/btnLWA_gold_156x32.png"
    width="156" height="32" />
</a>

<script type="text/javascript">

  document.getElementById('LoginWithAmazon').onclick = function() {
    options = { scope : 'profile' };
    amazon.Login.authorize(options, 'https://ec2-35-160-178-198.us-west-2.compute.amazonaws.com/handle_login.php');
    return false;
  };

</script>
<script type="text/javascript">
  document.getElementById('Logout').onclick = function() {
    amazon.Login.logout();
};
</script>
              </div>     
            </form>
          </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

      <?php include '../resources/footer.php'; ?>
        
    </body>
    
</html>