<div class="itemPro">
    <div class="wImage" >
        <a href="{{ route('get.product.detail',$product->pro_slug . '-' . $product->id) }}" title="{{ $product->pro_name }}" class="image">
            <img data-src="{{ pare_url_file($product->pro_avatar) }}" class="lazyload" alt="{{ $product->pro_name }}" src="/view/Css/icon/thumnail.jpg"/>
        </a>
    </div>
    <div class="info">
        <a href="{{ route('get.product.detail',$product->pro_slug . '-' . $product->id) }}" title="{{ $product->pro_name }}" class="name"><h3>{{ $product->pro_name }}</h3></a>
        @if($product->pro_sale > 0)
            <p class="percent">-{{ $product->pro_sale }}%</p>
            @php
                $price = ((100 - $product->pro_sale) * $product->pro_price ) / 100;
            @endphp
            <p class="priceSale">{{ number_format($product->pro_price,0,',','.') }} đ</p>
            <p class="price">{{ number_format($price,0,',','.') }} đ</p>
        @else
            <p class="price">{{ number_format($product->pro_price,0,',','.') }} đ</p>
        @endif
    </div>
</div>
