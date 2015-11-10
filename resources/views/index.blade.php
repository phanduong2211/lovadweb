@extends('masterpage')
@section('index')
		@include('sidehome')
        @include('service')
        @include('portfolio')
        @include('about-us')
        <div class="section secondary-section">
            <div class="triangle"></div>
            <div class="container centered">
                <p class="large-text">Elegance is not the abundance of simplicity. It is the absence of complexity.</p>
                <a href="#" class="button">Purshase now</a>
            </div>
        </div>
       	@include('client')
        @include('outclient')
        @include('price')
        <!-- Newsletter section start -->
        <div class="section third-section">
            <div class="container newsletter">
                <div class="sub-section">
                    <div class="title clearfix">
                        <div class="pull-left">
                            <h3>Newsletter</h3>
                        </div>
                    </div>
                </div>
                <div id="success-subscribe" class="alert alert-success invisible">
                    <strong>Well done!</strong>You successfully subscribet to our newsletter.</div>
                <div class="row-fluid">
                    <div class="span5">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    </div>
                    <div class="span7">
                    <form action="//ceca.us10.list-manage.com/subscribe/post?u=93c53aebd14896af588b33a52&amp;id=238c67f1d9" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate inline-form" target="_blank" novalidate>
                    <input type="email" value="" name="EMAIL"  class="span8 required email" id="mce-EMAIL">
                    <button type="submit"  name="subscribe" id="mc-embedded-subscribe"class="button button-sp">Subscribe</button>
                     
                    <div style="position: absolute; left: -5000px;"><input type="text" name="b_93c53aebd14896af588b33a52_238c67f1d9" tabindex="-1" value=""></div>
                    </div>
                    </form>
                        
                        
                    </div>
                </div>
            </div>
        </div>
@stop()