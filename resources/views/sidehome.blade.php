<div id="home">
            <!-- Start cSlider -->
            <div id="da-slider" class="da-slider">
                <div class="triangle"></div>
                <!-- mask elemet use for masking background image -->
                <div class="mask"></div>
                <!-- All slides centred in container element -->
                <div class="container">
                    <!-- Start first slide -->
                    @foreach($side as $values)
                    <div class="da-slide">
                        <h2 class="fittext2">{{$values->name}}</h2>
                        <p>{{$values->contents}}</p>
                        <a href="{{$values->url}}" class="da-link button">Chi Tiết</a>
                        <div class="da-img">
                            <img src="public/images/{{$values->images}}" class="img-Thumbnail" alt="image01">
                        </div>
                    </div>
                    @endforeach
                    <!-- End first slide -->
                    
                    <!-- Start third slide -->
                    <!-- Start cSlide navigation arrows -->
                    <div class="da-arrows">
                        <span class="da-arrows-prev"></span>
                        <span class="da-arrows-next"></span>
                    </div>
                    <!-- End cSlide navigation arrows -->
                </div>
            </div>
        </div>
        <!-- End home section -->