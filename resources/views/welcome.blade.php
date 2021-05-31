<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            @import url(https://fonts.googleapis.com/css?family=Open+Sans);
            @import url(https://fonts.googleapis.com/css?family=Bree+Serif);

            body {
                background: #212121;
                font-size:22px;
                line-height: 32px;
                color: #ffffff;
                word-wrap:break-word !important;
                font-family: 'Open Sans', sans-serif;
                }

            h1 {
                font-size: 60px;
                text-align: center;
                color: #FFF;
            }

            h3 {
                font-size: 30px;
                text-align: center;
                color: #FFF;
            }

            h3 a {
                color: #FFF;
            }

            a {
                color: #FFF;
            }

            h1 {
                margin-top: 100px;
                text-align:center;
                font-size:60px;
                font-family: 'Bree Serif', 'serif';
                }

            #container {
                margin: 0 auto;
            }

            p {
                text-align: center;
            }

            nav {
                margin: 50px 0;
                background-color: #E64A19;
            }

            nav ul {
                padding: 0;
            margin: 0;
                list-style: none;
                position: relative;
                }

            nav ul li {
                display:inline-block;
                background-color: #E64A19;
                }

            nav a {
                display:block;
                padding:0 10px;
                color:#FFF;
                font-size:20px;
                line-height: 60px;
                text-decoration:none;
            }

            nav a:hover {
                background-color: #000000;
            }

            /* Hide Dropdowns by Default */
            nav ul ul {
                display: none;
                position: absolute;
                top: 60px; /* the height of the main nav */
            }

            /* Display Dropdowns on Hover */
            nav ul li:hover > ul {
                display:inherit;
            }

            /* Fisrt Tier Dropdown */
            nav ul ul li {
                width:170px;
                float:none;
                display:list-item;
                position: relative;
            }

            /* Second, Third and more Tiers	*/
            nav ul ul ul li {
                position: relative;
                top:-60px;
                left:170px;
            }


            /* Change this in order to change the Dropdown symbol */
            li > a:after { content:  ' +'; }
            li > a:only-child:after { content: ''; }
        </style>
    </head>
    <body class="antialiased">
        {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}
            <nav>
                {!! getItem() !!}
            </nav>


            {{-- <ul>
                <li>name 1</li>
                <li>name 2</li>
                <li>name 3</li>
                <ul>
                    <li>name 1.1</li>
                    <li>name 1.2</li>
                    <li>name 1.3</li>
                    <ul>
                        <li>name 1.3.1</li>
                        <li>name 1.3.2</li>
                        <li>name 1.3.2</li>
                        <ul>
                            <li>name 1.3.3.1</li>
                            <li>name 1.3.3.2</li>
                            <li>name 1.3.3.3</li>
                        </ul>
                    </ul>
                </ul>
            </ul> --}}

        {{-- </div> --}}
    </body>
</html>
