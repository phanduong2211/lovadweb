
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
                        <a data-name='{{$values->name}}' id='button{{$values->id}}' onClick="getdetail('button{{$values->id}}')" type="button" data-detail="{{$values->details}}" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" href="#" class="button button-ps">Chi tiết</a>
                        
                    </div>
                    @endforeach()
                    <!-- Modal -->
                        <div style="display:none" id="myModal" class="modal fade" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 id='detail-name' class="modal-title" style="color:black">Modal Header</h4>
                              </div>
                              <div id='modal-body' class="modal-body">
                                <p>Some text in the modal.</p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-lg" data-dismiss="modal">Đóng</button>
                              </div>
                            </div>

                          </div>
                        </div>
                </div>
                <div class="centered">
                    <p class="price-text">Hãy cho chúng tôi biết thông tin về website mà bạn muốn làm bằng cách click vào nút liên hệ phía dưới</p>
                    <a href="#contact" class="button">Liên hệ</a>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            function getdetail(th)
            {

                var detail = (document.getElementById(th).getAttribute('data-detail'));
                var detail_name = (document.getElementById(th).getAttribute('data-name'));
                var content = document.getElementById("modal-body");
                var name = document.getElementById("detail-name");
                content.innerHTML="";
                name.innerHTML="";
                name.innerHTML = detail_name.toUpperCase();
                content.innerHTML = detail;

            }
        </script>
        <!-- Price section end -->