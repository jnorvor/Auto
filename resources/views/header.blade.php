<!doctype html>
<html>
<head>
    <title>Auto ghana</title>
    <!--META-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1"/>
    <meta name="author" content="cavemen"/>
    <meta name="theme-color" content=""/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
{{--    <script src="{{asset('js/jquery-2.1.3.js')}}"></script>--}}
    <script src="{{asset('js/jquery.js')}}"></script>
    <!--<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400i" rel="stylesheet">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300">


</head>
<body>
{{--{{$path =}}--}}
<div class="details-container">
    
        <div class="details-card-header">
            <button class="close-button">X</button>
        </div>
        <div class="details-card">
        <div class="details-card-content">
            {{require_once( resource_path('views/card_details.blade.php')) }}
        </div>

    </div>
</div>
<header>
    <div style="height:40px;width:100%;background:black; padding:11.5px;font-size:15px; color:silver"> <div class="section-container" style="padding:0px">
                <div class="tip show-slide" data-slide="1">tip 1</div>
                <div class="tip" data-slide="2">tip 2</div>
                <div class="tip" data-slide="3">tip 3</div>
            </div> </div>
    <nav class="menu-bar">
        <div class="section-container">
            <div class="logo-container">

                <h1>AUTOGHANA</h1>
            </div>

            <nav class="menu-container">
                <div class="menu">
                    <ul>
                        <li class="menu-item">About us</li>
                        <li class="menu-item">Help & Support</li>
                        <li class="menu-item">Contact us</li>
                    </ul>
                </div>
            </nav>
        </div>
    </nav>
</header>
