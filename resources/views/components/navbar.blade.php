<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <style>
            navbar{
                display: flex;
                position: sticky;
                width: 100%;
                background-color: #1c5253;
                align-items: center;
                height: 48px;
            }

            navbar a.icon{
                font-size: 32px;
                color: white;
                margin-left: 10px;
                height: fit-content;
            }
        </style>
    </head>
    <body class="antialiased">
        <navbar class="header">
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
             </a>
        </navbar>
    </body>
</html>
