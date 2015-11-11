<!doctype html>
<html>
<head>
    <title>
        {{-- Yield the title if it exists, otherwise default to 'KOTH' --}}
        @yield('title','Pigskin KOTH')
    </title>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Bootstrap CDN Links --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
</head>

<body>

    <header>
        <div class="container">
            <div class="navbar navbar-static-top">
              <div class="navbar-inner">
                <div class="container">             
                    <ul class="nav pull-right">
                        <li>
                            <a href="#">
                                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                            </a>
                        </li>
                    </ul>              
                </div>
              </div>
            </div>
            <h1>Insert Page Logo Here</h1>
        </div>
    </header>

    <section>
        <div class="container">
            @yield('content')
        </div>
    </section>

    <footer>
        <div id = "footer">
            <div class="container">
                <p class="muted credit">
                    <hr />
                    &copy; {{ date('Y') }} Upside Down Studios, LLC
                </p>
            </div>
        </div>
    </footer>
    <script src="public/bootstrap-collapse.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

</body>
</html>
