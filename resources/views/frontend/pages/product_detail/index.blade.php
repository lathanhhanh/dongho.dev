@extends('layouts.app_master_frontend')
@section('content')
    <div id="container">
        <div class="wrp">
            <div id="product" class="detail">
                <div class="pathway">
                    <ul>
                        <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="https://www.dangquangwatch.vn/" title="Home"><span itemprop="title">Trang chủ</span></a> </li>
                        <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="https://www.dangquangwatch.vn/sp/dong-ho-thuy-sy.html" title="Đồng hồ chính hãng"><span itemprop="title">Đồng hồ chính hãng</span></a></li>


                        <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="https://www.dangquangwatch.vn/sp/Dong-ho-Philippe-Auguste.html" title="Đồng hồ Philippe Auguste"><span itemprop="title">Đồng hồ Philippe Auguste</span></a></li>

                    </ul>
                </div>			<div class="top">
                    <div class="left">
                        <div class="imgLarge">
                            <div class="wImage">
                                <a href="javascript://" title="" class="image">
                                    <img data-lazy="{{ pare_url_file($product->pro_avatar) }}" class="lazyload" alt="Dang Quang" src="/view/Css/icon/thumnail.jpg"/>
                                </a>
                            </div>

                            <div class="wImage">
                                <a href="javascript://" title="" class="image">
                                    <img data-lazy="{{ pare_url_file($product->pro_avatar) }}" class="lazyload" alt="Dang Quang" src="/view/Css/icon/thumnail.jpg"/>
                                </a>
                            </div>

                        </div>
                        <div class="imgSmall">
                            <div class="wImage">
                                <a href="javascript://" title="" class="image">
                                    <img data-lazy="{{ pare_url_file($product->pro_avatar) }}" class="owl-lazy" alt="Dang Quang"/>
                                </a>
                            </div>

                            <div class="wImage">
                                <a href="javascript://" title="" class="image">
                                    <img data-lazy="{{ pare_url_file($product->pro_avatar) }}" class="owl-lazy" alt="Dang Quang"/>
                                </a>
                            </div>

                        </div>
                        <div class="cb"></div>
                    </div>
                    <div class="right">
                        <h1 class="namePro">{{ $product->pro_name }}</h1>
                        <div class="flex">
                            <div class="rightl" style="margin-right: 20px;">
                                <div class="prices">
                                    <p>Giá niêm yết: <span class="value">{{ number_format($product->pro_price,0,",",".") }} đ</span></p>
                                    <p>
                                        @php
                                            $price = ((100 - $product->pro_sale) * $product->pro_price ) / 100;
                                        @endphp
                                        Giá bán: <span class="value priceNew">{{ number_format($price,0,',','.') }} đ</span>
                                        <span class="sale">-{{ $product->pro_sale }}%</span>

                                    </p>
                                </div>
                                <div class="btnCart">
                                    <a href="#" title="" onclick="add_cart_detail('17722',0);" class="muangay">
                                        <span>Mua ngay</span>
                                        <span>Hotline: 1800.6005</span>
                                    </a>
                                    <a href="#" title="" onclick="add_cart_detail('17722',1);" class="muatragop">
                                        <span>Mua trả góp 0%</span>
                                        <span>Visa, Master, JCB</span>
                                    </a>
                                </div>
                                <div class="gift giftBound" style="margin-top: 23px;margin-bottom: 10px;">
								<span class="text" style="padding-top: 10px;">
									<p class="salehead">KHUYẾN MÃI</p>
																		<p class="saletitle">Mua thêm <b><a href="http://bit.ly/2SXmZPa" title="Bút ký" target="_blank">Bút ký cao cấp</a></b><br> Giá 550.000đ giảm <b>20%</b><b style="color: red;"> (11.218.400 đ)</b><p>
									<p class="saletitle">Mua thêm <b><a href="http://bit.ly/2w5dYu4" title="Dây da" target="_blank"> Dây da đồng hồ</a></b> <br> Giá từ 300.000đ giảm <b>30%</b><b style="color: red;"> (10.026.100 đ)</b><p>
																			<p class="detail"> <a href="http://bit.ly/37wPRl4" title="">>> Xem chi tiết</a></p>
								</span>
                                </div>
                                <div class="infomation">
                                    <h2 class="title">Thông số kỹ thuật</h2>
                                    <div class="group">

                                        <div class="item">
                                            <p class="text1">Xuất xứ:</p>
                                            <h3 class="text2"> Áo</h3>
                                        </div>
                                        <div class="item">
                                            <p class="text1">Kiểu dáng:</p>
                                            <h2 class="text2">Đồng hồ Nam</h2>
                                        </div>
                                        <div class="item">
                                            <p class="text1">Năng lượng:</p>
                                            <h3 class="text2">Automatic ( cơ tự động )</h3>
                                        </div>
                                        <div class="item">
                                            <p class="text1">Độ chịu nước:</p>
                                            <h3 class="text2">5 ATM</h3>
                                        </div>
                                        <div class="item">
                                            <p class="text1">Chất liệu mặt:</p>
                                            <h3 class="text2">Sapphire</h3>
                                        </div>
                                        <div class="item">
                                            <p class="text1">Đường kính mặt:</p>
                                            <h3 class="text2">40 mm</h3>
                                        </div>
                                        <div class="item">
                                            <p class="text1">Độ dầy:</p>
                                            <h3 class="text2"></h3>
                                        </div>
                                        <div class="item">
                                            <p class="text1">Chất liệu dây:</p>
                                            <p class="text2">Stainless Steel</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="rightr">
                                <a href="http://bit.ly/37wPRl4" title="Giam giá" target="_blank"><img alt="Hoan tien" style="width: 100%;padding-bottom: 10px;" src="https://www.dangquangwatch.vn/view/sanpham/sale142-2020.jpg"/></a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="bot">
                    <div class="left">
                        <div class="commentFacebook pb20" style="font-family:Arial !important;line-height:21px;">
                            <h3 class="titleBot">Chi tiết sản phẩm</h3>
                            <p style="text-align: center;"><iframe width="560" height="315" src="https://www.youtube.com/embed/bAq-bcw8khw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
                            &nbsp;
                            <div class="commentFacebook" style="width: 100%;">
                                <div class="fb-comments" data-href="https://www.dangquangwatch.vn/sp/17722/Dong-ho-Philippe-Auguste-PA5008H.html" data-width="100%" data-numposts="5"></div>
                            </div>
                        </div>
                        <div class="tabs">
                            <ul class="tab-links">
                                <li class="active"><a href="#tab1">CÙNG KHOẢNG GIÁ</a></li>
                                <li class=""><a href="#tab2">THƯƠNG HIỆU</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab1" class="tab active">
                                    <div class="RelatedPro">
                                        <div class="group">

                                            <div class="itemPro catestyle2">
                                                <div class="wImage">
                                                    <a href="/sp/17725/Dong-ho-Philippe-Auguste-PA5008E.html" title="Đồng hồ Philippe Auguste PA5008E" class="image">
                                                        <img data-src="/upload/product/1763156466_DONG-HO-CHINH-HANG-15.jpg" alt="Đồng hồ Philippe Auguste PA5008E" src="/view/Css/icon/thumnail.jpg" class="lazyload"/>
                                                    </a>
                                                </div>
                                                <div class="info">
                                                    <a href="/sp/17725/Dong-ho-Philippe-Auguste-PA5008E.html" title="Đồng hồ Philippe Auguste PA5008E" class="name">Đồng hồ Philippe Auguste PA5008E</a>
                                                    <p class="percent">-10%</p>
                                                    <p class="price">12.125.700 đ</p>
                                                    <p class="priceSale">13.473.000 đ</p>
                                                </div>
                                            </div>

                                            <div class="itemPro catestyle2">
                                                <div class="wImage">
                                                    <a href="/sp/17724/Dong-ho-Philippe-Auguste-PA5008F.html" title="Đồng hồ Philippe Auguste PA5008F" class="image">
                                                        <img data-src="/upload/product/630880838_DONG-HO-CHINH-HANG-16.jpg" alt="Đồng hồ Philippe Auguste PA5008F" src="/view/Css/icon/thumnail.jpg" class="lazyload"/>
                                                    </a>
                                                </div>
                                                <div class="info">
                                                    <a href="/sp/17724/Dong-ho-Philippe-Auguste-PA5008F.html" title="Đồng hồ Philippe Auguste PA5008F" class="name">Đồng hồ Philippe Auguste PA5008F</a>
                                                    <p class="percent">-10%</p>
                                                    <p class="price">12.125.700 đ</p>
                                                    <p class="priceSale">13.473.000 đ</p>
                                                </div>
                                            </div>

                                            <div class="itemPro catestyle2">
                                                <div class="wImage">
                                                    <a href="/sp/17723/Dong-ho-Philippe-Auguste-PA5008G.html" title="Đồng hồ Philippe Auguste PA5008G" class="image">
                                                        <img data-src="/upload/product/1679923602_DONG-HO-CHINH-HANG-17.jpg" alt="Đồng hồ Philippe Auguste PA5008G" src="/view/Css/icon/thumnail.jpg" class="lazyload"/>
                                                    </a>
                                                </div>
                                                <div class="info">
                                                    <a href="/sp/17723/Dong-ho-Philippe-Auguste-PA5008G.html" title="Đồng hồ Philippe Auguste PA5008G" class="name">Đồng hồ Philippe Auguste PA5008G</a>
                                                    <p class="percent">-10%</p>
                                                    <p class="price">12.125.700 đ</p>
                                                    <p class="priceSale">13.473.000 đ</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <div id="tab2" class="tab" style="display: none;">
                                    <div class="noidung">
                                        <div class="fRobotoB fs16 pb8">
                                            Thương hiệu: <a href="https://www.dangquangwatch.vn/sp/Dong-ho-Philippe-Auguste.html" title="Đồng hồ Philippe Auguste"><h2>Đồng hồ Philippe Auguste</h2></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="RelatedPro">
                            <h3 class="titleBot">SẢN PHẨM MỚI</h3>
                            <div class="group">

                                <div class="itemPro">
                                    <div class="wImage">
                                        <a href="/sp/17874/Dong-ho-Aries-Gold-AG-G1031-G-WG.html" title="Đồng hồ Aries Gold AG-G1031 G-WG" class="image">
                                            <img data-src="/upload/product_small/293850258_ĐỒNG-HỒ-CHĨNH-HÃNG-4.jpg" alt="Đồng hồ Aries Gold AG-G1031 G-WG" src="/view/Css/icon/thumnail.jpg" class="lazyload"/>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="/sp/17874/Dong-ho-Aries-Gold-AG-G1031-G-WG.html" title="Đồng hồ Aries Gold AG-G1031 G-WG" class="name">Đồng hồ Aries Gold AG-G1031 G-WG</a>
                                        <p class="percent">-10%</p>
                                        <p class="price">5.152.500 đ</p>
                                        <p class="priceSale">5.725.000 đ</p>
                                    </div>
                                </div>

                                <div class="itemPro">
                                    <div class="wImage">
                                        <a href="/sp/17873/Dong-ho-Aries-Gold-AG-L5038-G-W.html" title="Đồng hồ Aries Gold AG-L5038 G-W" class="image">
                                            <img data-src="/upload/product_small/313779583_ĐỒNG-HỒ-CHĨNH-HÃNG-3.jpg" alt="Đồng hồ Aries Gold AG-L5038 G-W" src="/view/Css/icon/thumnail.jpg" class="lazyload"/>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="/sp/17873/Dong-ho-Aries-Gold-AG-L5038-G-W.html" title="Đồng hồ Aries Gold AG-L5038 G-W" class="name">Đồng hồ Aries Gold AG-L5038 G-W</a>
                                        <p class="percent">-10%</p>
                                        <p class="price">2.902.500 đ</p>
                                        <p class="priceSale">3.225.000 đ</p>
                                    </div>
                                </div>

                                <div class="itemPro">
                                    <div class="wImage">
                                        <a href="/sp/17830/Dong-ho-Philippe-Auguste-PA5004C-+-Diamond-D-DD6005B.html" title="Đồng hồ Philippe Auguste PA5004C + Diamond D DD6005B" class="image">
                                            <img data-src="/upload/product_small/1762452735_dong-ho-doi4.jpg" alt="Đồng hồ Philippe Auguste PA5004C + Diamond D DD6005B" src="/view/Css/icon/thumnail.jpg" class="lazyload"/>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="/sp/17830/Dong-ho-Philippe-Auguste-PA5004C-+-Diamond-D-DD6005B.html" title="Đồng hồ Philippe Auguste PA5004C + Diamond D DD6005B" class="name">Đồng hồ Philippe Auguste PA5004C + Diamond D DD6005B</a>
                                        <p class="percent">-20%</p>
                                        <p class="price">12.591.200 đ</p>
                                        <p class="priceSale">15.739.000 đ</p>
                                    </div>
                                </div>

                                <div class="itemPro">
                                    <div class="wImage">
                                        <a href="/sp/17768/DONG-HO-JACQUES-LEMANS-JL-1-1654.2ZG.html" title="ĐỒNG HỒ JACQUES LEMANS JL-1-1654.2ZG" class="image">
                                            <img data-src="/upload/product_small/1211669676_dong-ho-chinh-hang-2.jpg" alt="ĐỒNG HỒ JACQUES LEMANS JL-1-1654.2ZG" src="/view/Css/icon/thumnail.jpg" class="lazyload"/>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="/sp/17768/DONG-HO-JACQUES-LEMANS-JL-1-1654.2ZG.html" title="ĐỒNG HỒ JACQUES LEMANS JL-1-1654.2ZG" class="name">ĐỒNG HỒ JACQUES LEMANS JL-1-1654.2ZG</a>
                                        <p class="percent">-10%</p>
                                        <p class="price">5.193.000 đ</p>
                                        <p class="priceSale">5.770.000 đ</p>
                                    </div>
                                </div>

                                <div class="itemPro">
                                    <div class="wImage">
                                        <a href="/sp/17669/BUT-KY-PHILIPPE-AUGUSTE-BUTPA-910/BL.html" title="BÚT KÝ PHILIPPE AUGUSTE BUTPA-910/BL" class="image">
                                            <img data-src="/upload/product_small/463369489_but-ky-cao-cap10.jpg" alt="BÚT KÝ PHILIPPE AUGUSTE BUTPA-910/BL" src="/view/Css/icon/thumnail.jpg" class="lazyload"/>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="/sp/17669/BUT-KY-PHILIPPE-AUGUSTE-BUTPA-910/BL.html" title="BÚT KÝ PHILIPPE AUGUSTE BUTPA-910/BL" class="name">BÚT KÝ PHILIPPE AUGUSTE BUTPA-910/BL</a>
                                        <p class="percent">-10%</p>
                                        <p class="price">495.000 đ</p>
                                        <p class="priceSale">550.000 đ</p>
                                    </div>
                                </div>

                                <div class="itemPro">
                                    <div class="wImage">
                                        <a href="/sp/17624/Dong-ho-Diamond-D-DD6016D.html" title="Đồng hồ Diamond D DD6016D" class="image">
                                            <img data-src="/upload/product_small/614010615_DONG-HO-CHINH-HANG-11.jpg" alt="Đồng hồ Diamond D DD6016D" src="/view/Css/icon/thumnail.jpg" class="lazyload"/>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="/sp/17624/Dong-ho-Diamond-D-DD6016D.html" title="Đồng hồ Diamond D DD6016D" class="name">Đồng hồ Diamond D DD6016D</a>
                                        <p class="percent">-10%</p>
                                        <p class="price">5.536.800 đ</p>
                                        <p class="priceSale">6.152.000 đ</p>
                                    </div>
                                </div>

                                <div class="itemPro">
                                    <div class="wImage">
                                        <a href="/sp/16384/Kinh-RAYBAN-RB-4278-6282/71(51IT).html" title="Kính RAYBAN RB-4278-6282/71(51IT)" class="image">
                                            <img data-src="/upload/product_small/2091709855_kính-rayban308.jpg" alt="Kính RAYBAN RB-4278-6282/71(51IT)" src="/view/Css/icon/thumnail.jpg" class="lazyload"/>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="/sp/16384/Kinh-RAYBAN-RB-4278-6282/71(51IT).html" title="Kính RAYBAN RB-4278-6282/71(51IT)" class="name">Kính RAYBAN RB-4278-6282/71(51IT)</a>
                                        <p class="percent">-10%</p>
                                        <p class="price">4.725.000 đ</p>
                                        <p class="priceSale">5.250.000 đ</p>
                                    </div>
                                </div>

                                <div class="itemPro">
                                    <div class="wImage">
                                        <a href="/sp/15958/Dong-ho-QQ-QQ-S278J102Y-+-QQ-S279J102Y.html" title="Đồng hồ Q&Q QQ-S278J102Y + QQ-S279J102Y" class="image">
                                            <img data-src="/upload/product_small/505271425_QQ đôi.jpg" alt="Đồng hồ Q&Q QQ-S278J102Y + QQ-S279J102Y" src="/view/Css/icon/thumnail.jpg" class="lazyload"/>
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="/sp/15958/Dong-ho-QQ-QQ-S278J102Y-+-QQ-S279J102Y.html" title="Đồng hồ Q&Q QQ-S278J102Y + QQ-S279J102Y" class="name">Đồng hồ Q&Q QQ-S278J102Y + QQ-S279J102Y</a>
                                        <p class="percent">-10%</p>
                                        <p class="price">2.815.200 đ</p>
                                        <p class="priceSale">3.128.000 đ</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="right">

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
