<html>
<meta name="description" content="lovadweb - Thiết kế web cho doanh nghiệp, công ty, cửa hàng kinh doanh online...">
<meta name="keywords" content="HTML,CSS,XML,JavaScript,thiet ke web, thiet ke website,thiet ke web theo yeu cau, thiet ke website chuyen nghiep,bang gia website,
        bao gia website,thiet ke website theo yeu cau, thiet ke web gia re,thiet ke web gia re,bang gai website, thiet ke web chuyen nghiep,lovadweb,lovadweb.com">

 <meta name="author" content="lovadweb.com">
<head>
    <title>Lovadweb - Chuyên thiết kế website</title>
</head>
<body>
@extends('masterpage')
@section('index')
        @include('sidehome')
        @include('service')
        @include('portfolio')
        @include('about-us')
        <div class="section secondary-section">
            <div class="triangle"></div>
            <div class="container centered">
                <p class="large-text">We can do anything but we can't do everything, we need help of you!</p>
                <!-- <a href="#" class="button">Purshase now</a> -->
            </div>
        </div>
        
        @include('partner')
        @include('price')
     
@stop()
</body>
</html>

