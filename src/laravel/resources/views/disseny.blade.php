<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>TouristRent</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   </head>
   <body>
   @include('includes/navbar')
   <!-- <a href="{{ url('treballadors') }}">Treballadors</a>
   <a href="{{ url('apartaments') }}">Apartaments</a>
   <a href="{{ url('lloguers') }}">Lloguers</a>
   <a href="{{ url('clients') }}">Clients</a> -->
      <div class="container">
         @yield('content')
      </div>

      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" type="text/js"></script>
      <style>
         body > div > div > table > tbody > tr > td.text-left > .btn,
         body > div > div > table > tbody > tr > td.text-left > form > button.btn {
            margin-bottom: 0.25rem;
            width: 100px;
         }
      </style>
   </body>
</html>