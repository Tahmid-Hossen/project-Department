<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table Tennis Tournament</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,700,900i" rel="stylesheet">
  </head>
 <body>
    <div class="header">
     <!-- <img src="{{ URL::to('/image/table_tennis.jpg') }}"> -->
      <div class="logo-box">
       <a href="#" class="logo">Web Amex</a>
      </div>
      <div class="text-box">
       <div class="header-primary">
         <span class="header-primary-main">Welcome</span>
         <span class="header-primary-sub">Table tennis tournament 2018 <br>Organized by Web amex</span>
         <a href="/team-list" target="_blank" class="btn btn-white">Team details</a>
       </div>
      </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>