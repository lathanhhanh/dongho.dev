<h1 class="heading1"><strong>Đồng hồ nam, Đồng hồ Thụy Sỹ</strong></h1><div class="commonTop">
    <div id="header">
        <div class="wrp">
            <!--Thay đổi-->
            <div class="dnTablet-l">
                <a href="/" class="logo">
                    <img src="https://www.dangquangwatch.vn/view/Css/icon/Logo.png" alt="Home"/>
                </a>
            </div>
            <div class="dn dbtablet-l">
                <a href="/" class="logo">
                    <img src="https://www.dangquangwatch.vn/view/Css/icon/LogoMobile.png" alt="Home"/>
                </a>
            </div>
            <div class="flex">
                <form action="https://www.dangquangwatch.vn/search/" role="search" method="post" class="search">
                    <input type="text" name="keyword" class="form-control" placeholder="Tìm kiếm sản phẩm ...">
                    <button type="submit" class="btnSearch">
                        <i class="fas fa-search"></i>
                        <span>Tìm kiếm</span>
                    </button>
                </form>
                <ul class="right">
                    <li>
                        <a href="javascript://" title="Giỏ hàng">
                            <i class="icon icon-cart"></i>
                            <span class="text">
		<span class="dnTablet-l dbmobile-l">Giỏ hàng (0)</span>
		<span class="num dn dbtablet-l dnmobile-l">0</span>
	</span>
                        </a>
                    </li>
                    <li>
                        <a href="tel:18006005" title="">
                            <i class="icon icon-phone"></i>
                            <span class="text">
                                <span class="dnmobile-l">Hotline</span>
                                <span>1800.6005</span>
                            </span>
                        </a>
                    </li>
                    <li class="dn dbmobile-l" id="bttop">
                        <a href="javascript://" title="">
                            <i class="fas fa-arrow-up"></i>
                        </a>
                    </li>
                    <li>
                        <a href="/he-thong-cua-hang/" title="Hệ thống cửa hàng">
                            <i class="icon icon-showroom"></i>
                            <span class="text">
                                <span>Hệ thống cửa hàng</span>
                                <span>(100) showroom</span>
                            </span>
                        </a>
                    </li>
                </ul>
                <a href="javascript://" class="openList">
                    <hr />
                    <hr />
                    <hr />
                </a>
            </div>
        </div>
    </div>
    <div id="menuMain" class='inside'>
        <div class="wrp">
            <div class="menuLeft">
                <a href="javascript://" title="" class="title">
                    <i class="fas fa-bars"></i> Danh mục sản phẩm
                </a>
                <ul id="menu">
                    @if(isset($categories))
                        @foreach($categories as $category)
                            <li>
                                <a href="{{ route('get.category.list', $category->c_slug.'-'.$category->id) }}" title="{{$category->c_name}}">
                                    {{$category->c_name}}
                                    <span class="openSub">
									<i class="icon icon-submenu"></i>
								</span>
                                </a>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
            <div class="menuRight">
                <div class="left">
                    <ul>
                        <li>
                            <a href="/sp/dong-ho-thuy-sy.html" title="Đồng hồ Thụy Sỹ">
									<span class="name">
										Đồng hồ
									</span>
                                <i class="icon icon-clock"></i>
                            </a>
                        </li>
                        <li>
                            <a href="/kinh-mat-thoi-trang.html" title="Kính mát thời trang">
									<span class="name">
										Kính mắt
									</span>
                                <i class="icon icon-glasses"></i>
                            </a>
                        </li>
                        <li>
                            <a href="/phu-kien-dong-ho.html" title="Phụ kiện đồng hồ">
									<span class="name">
										Phụ kiện đồng hồ
									</span>
                                <i class="icon icon-accessories"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://daugia.tv" title="Đấu giá" target="_blank">
									<span class="name">
									   Đấu giá
									</span>
                                <i class="icon icon-aution"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="right">
                    <a href="/tin-tuc/561/Mua-hang-tra-gop-lai-suat-0-Rinh-ngay-dong-ho-hieu.html" title="Trả góp">
                        <span class="text">Trả góp 0%</span>
                        <i class="icon icon-installment"></i>
                    </a>
                    <a href="/tin-tuc-dong-ho.html" title="Tin tức - Sự kiện">
                        <i class="icon icon-news"></i>
                        <span class="text">Tin tức</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
