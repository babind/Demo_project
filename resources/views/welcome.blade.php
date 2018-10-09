<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>        
        <link rel="stylesheet" href="http://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <style>
            .loader {
              border: 16px solid #f3f3f3;
              border-radius: 50%;
              border-top: 16px solid #3498db;
              width: 120px;
              height: 120px;
              -webkit-animation: spin 2s linear infinite; /* Safari */
              animation: spin 2s linear infinite;
              margin: 0px auto;
            }

            /* Safari */
            @-webkit-keyframes spin {
              0% { -webkit-transform: rotate(0deg); }
              100% { -webkit-transform: rotate(360deg); }
            }

            @keyframes spin {
              0% { transform: rotate(0deg); }
              100% { transform: rotate(360deg); }
            }
            .loading {              
              opacity: 0.3;
            }

            .form-item {
              padding-top: 10px;
              padding-bottom: 10px;
            }
        </style>        
    </head>
    <body>
      <div class='container'>
        <div class="jumbotron text-center">
            <h1>Property App</h1>
        </div>        
         <div id="app">                        
        </div>
      </div>
        <script type="text/javascript" src="js/app.js"></script>
    </body>

</html>
