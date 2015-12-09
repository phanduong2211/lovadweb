<!--Service section start -->
        <div class="section primary-section" id="service">
            <div class="container">
                <!-- Start title section -->
                <div class="title">
                    <h1>Dịch Vụ</h1>
                    <!-- Section's title goes here -->
                   <!--  <p>Duis mollis placerat quam, eget laoreet tellus tempor eu. Quisque dapibus in purus in dignissim.</p> -->
                    <!--Simple description for section goes here. -->
                </div>
                <div class="row-fluid">
                    @foreach($service as $values)
                        <div class="span4" style="margin-left:0px">
                            <div class="centered service">
                                <div class="zoom-in">
                                    <img class="img-rounded" src="public/images/{{$values->images}}" alt="{{$values->name}}">
                                </div>
                                <h3><a style="color:yellow" href="pages/{{$values->url}}.html">{{$values->name}}</a></h3>
                                <p style="color:white">{{$values->contents}}</p>
                            </div>
                        </div>
                    @endforeach                   
                </div>
            </div>
        </div>
        <!-- Service section end