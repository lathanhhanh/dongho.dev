@extends('layouts.app_master_frontend')
@section('content')
    <link rel="stylesheet" type="text/css" href="https://www.dangquangwatch.vn/core/Smarty/templates/paging/style.css">
    <div id="container">
        <div class="wrp">
            <div id="product" class="list">
                <div class="colleft">
                @include('frontend.pages.product.include.inc_sidebar')
                </div>
                <div class="colright">
                    <div class="pathway">
                        <ul>
                            <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="https://www.dangquangwatch.vn/" title="Home"><span itemprop="title">Trang chủ</span></a> </li>
                            <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="https://www.dangquangwatch.vn/sp/dong-ho-thuy-sy.html" title="Đồng hồ chính hãng"><span itemprop="title">Đồng hồ chính hãng</span></a></li>


                        </ul>
                    </div><div class="filterRight filter ngancach">
                        <ul class="ULGroup" id="PriceGroup">
                            <li>
                                <label>
                                    <input type="checkbox" value="16"  />
                                    <span>Giá < 2 triệu</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" value="1"  />
                                    <span>Giá từ 2 - 5 triệu</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" value="3"  />
                                    <span>Giá từ 5 - 10 triệu</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" value="4"  />
                                    <span>Giá từ 10 - 20 triệu</span>
                                </label>
                            </li>
                            <li>
                                <label>
                                    <input type="checkbox" value="5"  />
                                    <span>Giá > 20 triệu</span>
                                </label>
                            </li>

                        </ul>
                    </div>
                    <div class="order">
                        <div class="price">
                            <span>Tổng số: 2831 sản phẩm</span>
                        </div>
                        <div class="right">
                            <div class="function">
                                <span class="openSubOrder">Hãng <i class="fas fa-caret-down"></i></span>
                                <div class="sub filter">
                                    <div class="group">
                                        <a href="#" title="" class="title" style="width:100%">Dành cho</a>
                                        <ul class="ULGroup" id="LoaiGroup">

                                            <li>
                                                <label>
                                                    <input type="checkbox" value="1"  />
                                                    <span>Đồng hồ nam</span>
                                                </label>
                                            </li>

                                            <li>
                                                <label>
                                                    <input type="checkbox" value="2"  />
                                                    <span>Đồng hồ nữ</span>
                                                </label>
                                            </li>

                                            <li>
                                                <label>
                                                    <input type="checkbox" value="3"  />
                                                    <span>Đồng hồ đôi</span>
                                                </label>
                                            </li>

                                            <li>
                                                <label>
                                                    <input type="checkbox" value="5"  />
                                                    <span>Đồng hồ trẻ em</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="group">
                                        <a href="#" title="" class="title" style="width:100%">Năng lượng</a>
                                        <ul class="ULGroup" id="MacGroup">
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="1"  />
                                                    <span>Đồng hồ cơ</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="2"  />
                                                    <span>Đồng hồ điện tử</span>
                                                </label>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="group wide">
                                        <a href="#" title="" class="title">Thương hiệu sản phẩm</a>
                                        <ul class="ULGroup" id="CatGroup">
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="594"  />
                                                    <span>Đồng hồ Philippe Auguste</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="563"  />
                                                    <span>Đồng hồ Epos Swiss</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="559"  />
                                                    <span>Đồng hồ Atlantic Swiss</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="557"  />
                                                    <span>Đồng hồ Diamond D</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="562"  />
                                                    <span>Đồng hồ Aries Gold</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="568"  />
                                                    <span>Đồng hồ Jacques Lemans</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="574"  />
                                                    <span>Đồng hồ QQ</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="573"  />
                                                    <span>Jacques Du Manoir</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="560"  />
                                                    <span>Bruno Sohnle Glashutte</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="62"  />
                                                    <span>Đồng hồ Citizen</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="558"  />
                                                    <span>Stuhrling Tourbillon</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="556"  />
                                                    <span>Stuhrling Original Swiss</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="553"  />
                                                    <span>Tourbillon Memorigin</span>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" value="549"  />
                                                    <span>Đồng hồ Casio</span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="cb"></div>
                                    <a href="javascript://" class="closeSub"><i class="far fa-times-circle"></i></a>
                                </div>
                            </div>
                            <div class="function odering">
                                <span class="openSubOrder">Sắp xếp <i class="fas fa-caret-down"></i></span>
                                <div class="sub filter">
                                    <div class="group">
                                        <ul>
                                            <li>
                                                <a href="/sp/dong-ho-thuy-sy.html?&s=2" title="" class="active">
                                                    <span>Giá thấp đến cao</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/sp/dong-ho-thuy-sy.html?&s=1" title="" class="active">
                                                    <span>Giá cao xuống thấp</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="javascript://" class="closeSub"><i class="far fa-times-circle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                        $( ".colright .ULGroup input" ).on("click",function() {
                            var UrlActive = $("#strUrl99").val();
                            UrlActive = UrlActive +"?";
                            var iSort = $("#iSort").val();
                            // cat check
                            var catStr = getStrCheckRight("CatGroup");
                            if(catStr != '')
                                UrlActive = UrlActive +"&c="+catStr;
                            // loai dong ho check
                            var LoaiStr = getStrCheckRight("LoaiGroup");
                            if(LoaiStr != '')
                                UrlActive = UrlActive +"&l="+LoaiStr;
                            // Nang luong check
                            var MacStr = getStrCheckRight("MacGroup");
                            if(MacStr != '')
                                UrlActive = UrlActive +"&m="+MacStr;
                            // price check
                            var priceStr = getStrCheckRight("PriceGroup");
                            if(priceStr != '')
                                UrlActive = UrlActive +"&p="+priceStr;
                            if(iSort >0)
                                UrlActive = UrlActive +"&s="+iSort;
                            // href
                            window.location.href = UrlActive;
                        });
                        function getStrCheckRight(idget){
                            var chkArray = [];
                            $(".colright #"+idget+" input:checked").each(function() {
                                chkArray.push($(this).val());
                            });
                            return chkArray.join(',');
                        }
                    </script>

                    <script src="https://www.dangquangwatch.vn/view/Js/mucluc.js"></script>
                    <div class="cb h5"></div>
                    <div class="group">
                        @foreach($products as $product)
                            @include('frontend.components.product_item', ['product' =>$product ])
                        @endforeach
                    </div>
                    <nav class="text-center" style="width:100%;text-align:center;padding:30px 0;">
                        <span   class="paging_div"><span class="span_select_class" rel="nofollow" >&nbsp;1&nbsp;</span>&nbsp;<span class="span_a_class">&nbsp;<a href="/sp/dong-ho-thuy-sy.html?&page=2" rel="nofollow" >2</a>&nbsp;</span>&nbsp;<span class="span_a_class">&nbsp;<a href="/sp/dong-ho-thuy-sy.html?&page=3" rel="nofollow" >3</a>&nbsp;</span>&nbsp;<span class="span_a_class">&nbsp;<a href="/sp/dong-ho-thuy-sy.html?&page=4" class="paging_link_class"><img  class="paging_link_class" src="https://www.dangquangwatch.vn/lib/paging/next.gif" title="Next" border="0"></a>&nbsp;</span>&nbsp;<span class="span_a_class">&nbsp;<a href="/sp/dong-ho-thuy-sy.html?&page=142" class="paging_link_class"><img  class="paging_link_class" src="https://www.dangquangwatch.vn/lib/paging/last.gif" title="Last" border="0"></a>&nbsp;</span></span>
                    </nav>
                </div>
            </div>
            <a href="http://bit.ly/37wPRl4" title="" class="image" style="margin-top: 10px;">
                <img data-src="https://www.dangquangwatch.vn/view/Pic/mua-nhieu-giam-lon.jpg" alt="" class="lazyload" width="100%">
            </a>
            <div class="cb"></div>
        </div>
    </div><div class="bannerLogo">
        <div class="wrp">
            <a href="https://dangquangwatch.vn" title="Đăng Quang Watch">
                <img data-src="https://www.dangquangwatch.vn/view/Css/icon/LogoDQ.png" class="lazyload" alt="Dang Quang Watch" src="https://www.dangquangwatch.vn/view/Css/icon/thumnail.jpg"/>
            </a>
            <a href="https://daugia.tv" title="Đấu giá" target="_blank">
                <img data-src="https://www.dangquangwatch.vnview/Css/icon/LogoDauGia.png" class="lazyload" alt="Dang Quang Watch" src="https://www.dangquangwatch.vn/view/Css/icon/thumnail.jpg"/>
            </a>
            <a href="https://kinhmatdangquang.vn" title="Kính mắt Đăng Quang" target="_blank">
                <img data-src="https://www.dangquangwatch.vn/view/Css/icon/LogoKinhMat.png" class="lazyload" alt="Dang Quang Watch" src="https://www.dangquangwatch.vn/view/Css/icon/thumnail.jpg"/>
            </a>
        </div>
    </div>
@stop
