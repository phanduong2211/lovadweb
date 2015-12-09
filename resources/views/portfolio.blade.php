Portfolio section start -->
        <div class="section secondary-section " id="portfolio">
            <div class="triangle"></div>
            <div class="container">
                <div class=" title">
                    <h1 style="color:white">Dự Án Của Chúng Tôi</h1>
                    <p>Dưới đây là một số dự án nổi bật mà chúng tôi đã từng làm gần đây.</p>
                </div>
                <ul class="nav nav-pills">
                    @foreach($categoryprtfolio as $values)
                    <li class="filter" data-filter="{{strtolower($values->name)}}">
                        <a href="#noAction">{{$values->name}}</a>
                    </li>
                    @endforeach()
                    
                </ul>
                <!-- Start details for portfolio project 1 -->
                <div id="single-project">
                    @foreach($portfolio as $values)
                    <div id="div{{$values->id}}" class="toggleDiv row-fluid single-project">
                        <div class="span6">
                            <img src="public/images/{{$values->images}}" alt="{{$values->name}}" />
                        </div>
                        <div class="span6">
                            <div class="project-description">
                                <div class="project-title clearfix">
                                    <h3>{{$values->name}}</h3>
                                    <span class="show_hide close">
                                        <i class="icon-cancel"></i>
                                    </span>
                                </div>
                                <div class="project-info">
                                    <div style="color:white">
                                        <span>Client</span style="color:white">{{$values->namecustom}}</div>
                                    <div style="color:white">
                                        <span>Date</span style="color:white">{{$values->created_at}}</div>
                                    <div style="color:white">
                                        <?php if($values->skills!="") echo "<span>skills</span>".$values->skills; ?></div>
                                    <div style="color:white">
                                        <?php if($values->url!="") echo "<span>Link</span>".$values->url; ?></div>
                                </div>
                                <p><pre>{{$values->contents}}</pre></p>
                            </div>
                        </div>
                    </div>
                    @endforeach()
                    <!-- End details for portfolio project 1 -->
                    
                    <ul id="portfolio-grid" class="thumbnails row">
                        @foreach($portfolio as $values)
                        <li class="span4 mix {{strtolower($idcategoryprtfolio->find($values->id_categoryportfolio)->name)}}">
                            <div class="thumbnail">
                                <img src="public/images/{{$values->images}}" alt="{{$values->name}}">
                                <a href="#single-project" class="more show_hide" rel="#div{{$values->id}}">
                                    <i class="icon-plus"></i>
                                </a>
                                <h3>[{{$idcategoryprtfolio->find($values->id_categoryportfolio)->name}}] {{$values->name}}</h3>
                                <div class="mask"></div>
                            </div>
                        </li>
                        @endforeach()                        
                    </ul>
                </div>
            </div>
        </div>
        <!-- Portfolio section end