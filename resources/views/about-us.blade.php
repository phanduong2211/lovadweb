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
                    <p></p>
                </div>
                <h3>Skills</h3>
                <div class="row-fluid">
                    <div class="span6">
                        <ul class="skills">
                            <li>
                                <span class="bar" data-width="60%"></span>
                                <h3>Graphic Design</h3>
                            </li>
                            <li>
                                <span class="bar" data-width="75%"></span>
                                <h3>Html & Css</h3>
                            </li>
                            <li>
                                <span class="bar" data-width="78%"></span>
                                <h3>javascrip, jQuery</h3>
                            </li>
                            <li>
                                <span class="bar" data-width="70%"></span>
                                <h3>laravel, zend, wordpress</h3>
                            </li>
                        </ul>
                    </div>
                    <div class="span6">
                        <div class="highlighted-box center">
                            <h1>We're Hiring</h1>
                            <p style="text-align:left;">1, you love programing.<br>2, You want to pay according to your ability.<br>3, you are sociable.</p>
                            <button class="button button-sp">Join Us</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About us section end -->