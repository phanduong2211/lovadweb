
<!-- Price section start -->
        <div id="price" class="section secondary-section">
            <div class="container">
                <div class="title">
                    <h1>Bảng giá</h1>
                    <p>Dưới đây là thông tin bảng giá của dịch vụ thiết kế website, còn giá của các dịch vụ khác thì bạn vui lòng liên hệ để biết thêm thông tin</p>
                </div>
                <div class="price-table row-fluid">
                    @foreach($planweb as $values)
                    <div class="span4 price-column">
                        <h3>{{$values->name}}</h3>
                        <ul class="list">
                            <li class="price"><?php if($values->price==0)  echo "giá: liên hệ"; else echo "giá: ".number_format($values->price). "VNĐ"; ?></li>
                            <li><strong>{{$values->setup}}</strong> cài đặt</li>
                            <li><strong>{{$values->support}}</strong> hỗ trợ</li>
                        </ul>
                        <a href="{{strtolower($convert->convert($values->name))}}.html" class="button button-ps">Chi tiết</a>
                    </div>
                    @endforeach()
                    <!-- <div class="span4 price-column">
                        <h3>Pro</h3>
                        <ul class="list">
                            <li class="price">$39,99</li>
                            <li><strong>Free</strong> Setup</li>
                            <li><strong>24/7</strong> Support</li>
                            <li><strong>25 GB</strong> File Storage</li>
                        </ul>
                        <a href="#" class="button button-ps">BUY</a>
                    </div>
                    <div class="span4 price-column">
                        <h3>Premium</h3>
                        <ul class="list">
                            <li class="price">$79,99</li>
                            <li><strong>Free</strong> Setup</li>
                            <li><strong>24/7</strong> Support</li>
                            <li><strong>50 GB</strong> File Storage</li>
                        </ul>
                        <a href="#" class="button button-ps">BUY</a>
                    </div> -->
                </div>
                <div class="centered">
                    <p class="price-text">Hãy cho chúng tôi biết thông tin về website mà bạn muốn làm bằng cách click vào nút liên hệ phía dưới</p>
                    <a href="#contact" class="button">Liên hệ</a>
                </div>
            </div>
        </div>
        <!-- Price section end -->