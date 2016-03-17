<!DOCTYPE html>
<html lang="en">

<head>
    <meta></meta>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/team58.css" rel="stylesheet">

    <link href="http://vjs.zencdn.net/5.8.0/video-js.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div style="display:none">123123Test2123</div>
<div class="container">

    <form>

        <div id="results" class="form-group"></div>

        <div class="form-group">
            <input title="Input text" placeholder="Input phrase" class="form-control" type="text" id="input">
        </div>

        <div id="phrase" class="form-group"></div>

        <button type="button" class="btn btn-success" onclick="play()">Say it!</button>

        <br><br>

    </form>

    <video id="my-video" class="video-js" preload="auto" width="640" height="380" data-setup='{"controls":false}'>
        <p class="vjs-no-js">
            To view this video please enable JavaScript, and consider upgrading to a web browser that
            <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
        </p>
    </video>


</div>
<div style="display:none">Test</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/team58.js"></script>
<script src="http://vjs.zencdn.net/5.8.0/video.js"></script>
</body>
</html>
