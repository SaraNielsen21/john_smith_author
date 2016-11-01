<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Books</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/united/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
    </head>
    
    <body>

        <?php include '../resources/navigation.php'; ?>

        <div class="container">
          <div class="below_menu_container">
            <h1>Books</h1>
             <table class="table table-bordered table-responsive">
                <thead>
                    <tr>
                        <th class="col-xs-2"> Book Name</th>
                        <th class="col-xs-2"> Release Date </th>
                        <th class="col-xs-8"> Description </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> Men of The Mountain </td>
                        <td> February 3, 2006 </td>
                        <td> In this thriller, the main character, Billy, finds himself trapped on a mountain side 
                        after a severe storm stops him in his tracks. As Billy tries to make his way back down the
                        mountain, he finds a mysterious group of men hiding out in the woods. What are these men doing?
                        Find out in this action packed novel. </td>
                    </tr>
                    <tr>
                        <td> Giants of The Night </td>
                        <td> June 6, 2007 </td>
                        <td> As Sean and Mikayla are driving down the highway during a dark stormy night, a large spooky 
                        shadow appears in the middle of the road. Sean slams on the brakes. More and more shadows appear 
                        through the dense fog that sits between thick forest on either side of the road. "What are these things?"
                        They wonder as their hearts beat faster and faster.  </td>
                    </tr>
                    <tr>
                        <td> The Giants Return </td>
                        <td>August 17, 2008</td>
                        <td> After Sean and Mikayla think they had finally gotten rid of the giant shadows of the night, they 
                        have returned. They were going out on their annual camping trip and something just didn't feel right.
                        Sean kept feeling like they were being watched, could it be the shadows? Join Sean and Mikayla as they 
                        join forces again in the anticipated sequel to <i>Giants of the Night</i>!</td>
                    </tr>
                    <tr>
                        <td> Barefoot Trucker </td>
                        <td> December 15, 2016 </td>
                        <td> Caleb, a truck driver who has been in the business for over 20 years, finds himself spewn across the seats of his truck, miles from a main road. Without any money or any belongings, he must find his way home. On the way, he begins to learn what happened to him that disasterous night.</td>
                    </tr>
                </tbody>
             </table>
          </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
     
        <?php include '../resources/footer.php'; ?>
        
    </body>
    
</html>
