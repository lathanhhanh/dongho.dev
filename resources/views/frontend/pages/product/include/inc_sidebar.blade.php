<input type="hidden" name="strUrl99" id="strUrl99" value="/sp/dong-ho-thuy-sy.html">
<input type="hidden" name="iSort" id="iSort" value="">
<div class="titleCol">Thương hiệu</div>
<div class="filter">
    <ul class="ULGroup" id="CatGroup">
        <li>
            <label>
                <input type="checkbox" value="594"  />
                <h2><span>Đồng hồ Philippe Auguste</span></h2>
            </label>
        </li>
        <li>
            <label>
                <input type="checkbox" value="563"  />
                <h2><span>Đồng hồ Epos Swiss</span></h2>
            </label>
        </li>
    </ul>
</div>
    @if(isset($attributes))
        @foreach($attributes as $key => $attribute )
            <div class="titleCol">{{ $key }}</div>
            <div class="filter">
                <ul class="ULGroup" id="LoaiGroup">
                    @foreach ($attribute as $item)
                        <li>
                            <label>
                                <input type="checkbox" value="{{ $item['id'] }}"  />
                                <span>{{ $item['atb_name'] }}</span>
                            </label>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    @endif
<script>
    $( ".colleft .ULGroup input" ).on("click",function() {
        var UrlActive = $("#strUrl99").val();
        UrlActive = UrlActive +"?";
        var iSort = $("#iSort").val();
        // cat check
        var catStr = getStrCheck("CatGroup");
        if(catStr != '')
            UrlActive = UrlActive +"&c="+catStr;
        // loai dong ho check
        var LoaiStr = getStrCheck("LoaiGroup");
        if(LoaiStr != '')
            UrlActive = UrlActive +"&l="+LoaiStr;
        // price check
        var priceStr = getStrCheck("PriceGroup");
        if(priceStr != '')
            UrlActive = UrlActive +"&p="+priceStr;
        // Nang luong check
        var MacStr = getStrCheck("MacGroup");
        if(MacStr != '')
            UrlActive = UrlActive +"&m="+MacStr;
        // Day check
        var WStr = getStrCheck("WGroup");
        if(WStr != '')
            UrlActive = UrlActive +"&w="+WStr;
        // Day check
        var VStr = getStrCheck("VGroup");
        if(VStr != '')
            UrlActive = UrlActive +"&v="+VStr;
        if(iSort >0)
            UrlActive = UrlActive +"&s="+iSort;

        // href
        window.location.href = UrlActive;
    });
    function getStrCheck(idget){
        var chkArray = [];
        $(".colleft #"+idget+" input:checked").each(function() {
            chkArray.push($(this).val());
        });
        return chkArray.join(',');
    }
</script>
