<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daftar Ulang | Olimpiade Farmasi</title>

    <link rel="shortcut icon" href="http://kofeinunair.com/images/ico/favicon.ico">

	<!-- stylesheets -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/hover.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/hover-min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/fileinput.css') }}" rel="stylesheet">

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <!-- Custom style -->
    <style type="text/css">
    body {
      font-family: MuseoSans, serif;
    }
    .shadow {
        box-shadow: 0 1px 0px 0 rgba(0, 0, 0, 0.2), 0 3px 20px 0 rgba(0, 0, 0, 0.19);
    }
    </style>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body data-spy="scroll" data-target="#main-nav-collapse" data-offset="100">


        <!-- site-navigation start -->  
        <nav id="mainNavigation" class="navbar navbar-fixed-top" role="navigation">
            <div class="container" style="height:70px">

                <div class="navbar-header">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- navbar logo -->
                    <div class="navbar-brand">                       
                        <span class="sr-only">Cloud Agency</span>
                        <a href="{{ url('/') }}" id="homeurl">
                            <img src="{{ asset('/img/main_logos.png') }}" class="img-responsive center-block" alt="logo">
                        </a>
                    </div>
                    <!-- navbar logo -->

                </div><!-- /.navbar-header -->
                <?php
                $x=1;
                if ($x == 0) {
                    echo '<div class="collapse navbar-collapse" id="main-nav-collapse">
                    <ul class="nav navbar-nav navbar-right text-uppercase">                    
                    <li>
                            <a href="' . base_url() . '" class="hvr-wobble-horizontal">home</a>
                    </li>
                    <li>
                    <a href = "' . base_url() . 'payment" class = "hvr-wobble-horizontal">payment</a>
                    </li>
                    <li>
                    <a href = "' . base_url() . 'registration" id="to-registration" class = "hvr-wobble-horizontal">registration</a>
                    </li>
                    <li>
                    <a href = "' . base_url() . 'profile" class = "hvr-wobble-horizontal">Profile</a>
                    </li>
                    <li>
                    <a href="" onclick="gologout();" class = "hvr-wobble-horizontal">Log Out</a>
                    </li>
                    </ul>
                    </div>';
                } else {
                    
                }
                ?>
            </div><!-- /.container -->
        </nav>

	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

    <script type="text/javascript">
        $('#add_more').click(function () {
            $(this).before($(".gpfield").clone());
        });
    </script>

    <script type="text/javascript">
        document.getElementById('gurupendamping').addEventListener('change', function () {
            var style = this.value == 1 ? 'none' : 'block';
            document.getElementById('gpfield').style.display = style;
        });
    </script>

</body>
</html>
