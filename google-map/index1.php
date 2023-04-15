<!DOCTYPE html>
<html lang='en'>
   <head>
      <title>Find Location</title>
      <meta charset='utf-8' />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
      <script defer src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyD2RfxbIGeSYNnqHkJCzRtE9v-0IYYFoc8&libraries=places" type="text/javascript"></script>
      <link rel="shortcut icon" href="map.pnga" type="image/x-icon">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <style type="text/css">
         body{
            background:#ffc61a;
         }
         a:hover{
         cursor: pointer;
         text-decoration: unset;
         }

         .heading_anchor{
            background:#ffffff ; 
            color: #000000;
         }

         .define_height{
             height: 450px;
         }
      </style>
   </head>
   <body>
      <div class='navbar navbar-default navbar-static-top heading_anchor'>
         <div class='container-fluid'>
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class='navbar-brand heading_anchor' href="main._page.php">Elite-cabs</a>
            </div>
            <div class="navbar-collapse collapse">
               <ul class="nav navbar-nav navbar-right">
                  <li class='active'>
                     <a href=""  class="heading_anchor">REFRESH MAP</a>
                  </li>
               </ul>
            </div>
            <!--/.nav-collapse -->
         </div>
      </div>
      <div class='container-fluid'>
         <div class='row'>
            <div class='col-md-4'>
               <p>WELCOME, search your desired destination and location where you want to go</p>
               <div class='well define_height'>
                  <form id="distance_form">
                     <div class="form-group">
                        <label>Enter Location</label>
                        <input class="form-control" id="from_places" placeholder="Enter Location"/>
                        <input id="origin" name="origin" required="" type="hidden"/>
                        <a onclick="getCurrentPosition()">Turn on my GPS</a>
                     </div>
                     <div class="form-group">
                        <label>Enter Destination</label>
                        <input class="form-control" id="to_places" placeholder="Enter Destination"/>
                        <input id="destination" name="destination" required="" type="hidden"/>
                     </div>
                     <div class="form-group">
                        <label>Travel Mode</label>
                        <select class="form-control" id="travel_mode" name="travel_mode">
                           <option value="VEHICLE">Vehicle</option>
                           <option value="BodaBoda">Bodaboda</option>
                        </select>
                     </div>
                     <input class="btn btn-primary" type="submit" value="Find" style="background: #00C851; width: 30%; border: 0px;" />
                     <input class="btn btn-primary"href="payment.php" type="submit" value="PROCEED" style="background: #007BFF; width: 30%; border: 0px;" />
                  </form>
                  <div class="row" style="padding-top: 20px;">
                     <div class="container">
                        <p id="in_mile"></p>
                        <p id="in_kilo"></p>
                        <p id="duration_text"></p>
                     </div>
                  </div>
               </div>
            </div>
            <div class='col-md-8'>
               <noscript>
                  <div class='alert alert-info'>
                     <h4>Your JavaScript is disabled</h4>
                     <p>Please enable JavaScript to view the map.</p>
                  </div>
               </noscript>
               <div id="map" style="height: 500px; width: 100%" ></div>
            </div>
         </div>
      </div>
      <script src="map.js"></script>
   </body>
</html>