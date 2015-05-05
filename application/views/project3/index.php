<!Doctype html>
<html>
<head>
	<title>Title</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" rel="stylesheet">
	<link href="<?php echo base_url("assets/css/styles.css"); ?>" rel="stylesheet">
    <script src="<?php echo base_url("assets/js/jquery-2.1.3.min.js") ?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap.js") ?>"></script>
    <script src="<?php echo base_url("assets/js/jquery.windows.js") ?>"></script>
    <script src="<?php echo base_url("assets/js/main.js") ?>"></script>
   
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
            <div class="navbar-header">
                <a href="#" class="navbar-brand">Logo</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#">LINK</a></li>
                    <li><a href="#">LINK</a></li>
                    <li><a href="#">LINK</a></li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">LOGIN<span class="caret"></span></a>
                        <div class="dropdown-menu">
                            <form method="post">
                                <input type="text" placeholder="Username" name="username" class="log">
                                <input type="password" placeholder="Password" name="password" class="log">
                                <input type="checkbox" name="remember-me" value="1">
                                <label class="string optional">remember me</label>
                                <input class="btn btn-primary btn-block" type="submit" id="sign-in" value="Sign In">
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
		</div>
	</nav>

    <div>
        <div class="window">
            <p>Lorem ipsum dolor amet something something sick and something somthing stupid .Lorem ipsum dolor set amet something something sick Lorem ipsum dolor amet.</p>
        </div>
        <div class="window">

            <p>Lorem ipsum dolor amet something something sick and something somthing stupid .Lorem ipsum dolor set amet something something sick Lorem ipsumwdqdqdaaadashdgqwerqwrqqwertyuiopasdfghj\\\\````` amet.</p>
        </div>
        <div class="window">

            <p>Lorem ipsum dolor amet something something sick and something somthing stupid .Lorem ipsum dolor set amet something somethingash\hhaaaadsadqw sick Lorem ipsum dolor amet.</p>
        </div>
        <div class="window">

            <p>Lorem ipsum dolor amet something something sick and something somthing stupid .Lorem ipsum dolor set amet something something sick Lorem ipsum dolor amet.</p>
        </div>
    </div>
     
    <script>
         $(document).ready(function(){
                var $windows = $('.window');
                $windows.windows({
                    snapping: true,
                    snapSpeed: 500,
                    snapInterval: 1100,
                    onScroll: function(s){},
                    onSnapComplete: function($el){},
                    onWindowEnter: function($el){}
                });
            });
    </script>
</body>
</html>