<title>Lovadweb - Chuyên thiết kế website</title>
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