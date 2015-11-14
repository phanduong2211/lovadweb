<!-- About us section start -->
        <div class="section primary-section" id="about">
            <div class="triangle"></div>
            <div class="container">
                <div class="title">
                    <h1>Liên hệ với chúng tôi để được hỗ trợ</h1>
                    <p>Nếu bạn có bất kỳ câu hỏi hoặc thắc nào thì hãy liên hệ với chúng tôi. Chúng tôi sẽ hỗ trợ bạn hoàn toàn miễn phí! </p>
                </div>
                <div class="row-fluid team" style="width:50%;margin:auto;">
                    @foreach($members as $values)
                    <div class="span4" id="first-person">
                        <div class="thumbnail">
                            <img src="public/images/{{$values->images}}" alt="{{$values->name}}">
                            <h3>{{$values->name}}</h3>
                            <ul class="social">
                                <li>
                                    <a target="_blank" href="{{$values->facebook}}">
                                        <span class="icon-facebook-circled"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="skype:{{$values->skype}}?chat">
                                        <span class="icon-skype-circled"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="mask">
                                <h2>{{$values->position}}</h2>
                                <p>{{$values->skills}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach()
                    
                </div>
                <div class="about-text centered">
                    <h3>Về Chúng tôi</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                </div>
                <h3>Skills</h3>
                <div class="row-fluid">
                    <div class="span6">
                        <ul class="skills">
                            <li>
                                <span class="bar" data-width="80%"></span>
                                <h3>Graphic Design</h3>
                            </li>
                            <li>
                                <span class="bar" data-width="95%"></span>
                                <h3>Html & Css</h3>
                            </li>
                            <li>
                                <span class="bar" data-width="68%"></span>
                                <h3>jQuery</h3>
                            </li>
                            <li>
                                <span class="bar" data-width="70%"></span>
                                <h3>Wordpress</h3>
                            </li>
                        </ul>
                    </div>
                    <div class="span6">
                        <div class="highlighted-box center">
                            <h1>We're Hiring</h1>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, ullamcorper suscipit lobortis nisl ut aliquip consequat. I learned that we can do anything, but we can't do everything...</p>
                            <button class="button button-sp">Join Us</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About us section end -->