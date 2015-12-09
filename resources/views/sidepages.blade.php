<html>
<meta name="description" content="{{$pages->description}}">
<meta name="keywords" content="{{$pages->keyword}}">
<link rel="shortcut icon" href="{{Asset('')}}/public/images/ico/favicon.ico">
 <meta name="author" content="lovadweb.com">
<head>
	<title>{{$pages->title}}</title>
</head>
<body>
@extends('masterpage')
@section('sidepages')
	<div class="container" style="background: rgb(244, 244, 244);">
	<?php echo $pages->details;?>
	<div>
		<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-comments" data-href="http://lovadweb.com/pages/{{$pages->name}}.html" data-width="100%" data-numposts="10"></div>

@stop()
</body>
</html>
