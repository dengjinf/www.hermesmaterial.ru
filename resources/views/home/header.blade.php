<div class="header">
    <div class="header-content">
        <div class="logo"><img src="{{ asset('index') }}/images/header-logo.png" alt=""></div>
        <div class="nav-box">
            <ul class="nav">
                <li id="catalog"><a href="/">Каталог</a></li>
                <li><a href="oneshop">Комплексное обслуживание</a></li>
                <li><a href="customize">Дизайн домашнего интерьера по заказу</a></li>
                <li><a href="project">Строительный подряд</a></li>
                <li><a href="furniture">Мебельный тур в Китай</a></li>
            </ul>
            <ul class="nav sub-nav">
                <li><a href="https://mall.hermesmaterial.ru">Магазин on-line</a></li>
{{--                <li><a href="engineering">工程</a></li>--}}
{{--                <li><a href="javascript:;">服务</a></li>--}}
                <li><a href="faq">Чаво</a></li>
                <li><a href="contact">Свяжитесь с нами</a></li>
            </ul>
        </div>
        <div class="information">
            <div>
                <p class="email">hermes@hermesexpo.ru</p>
                <p class="phone">7-800-5555-277</p>
                <p class="tips">Бесплатный звонок на территории РФ</p>
            </div>
            <ul>
                <li><a href=""><img src="{{ asset('index') }}/images/instagram.png" alt=""></a></li>
                <li><a href=""><img src="{{ asset('index') }}/images/facebook.png" alt=""></a></li>
                <li><a href=""><img src="{{ asset('index') }}/images/youtube.png" alt=""></a></li>
                <li><a href=""><img src="{{ asset('index') }}/images/twitter.png" alt=""></a></li>
                <li><img src="{{ asset('index') }}/images/china.png" alt=""></li>
                <li><img src="{{ asset('index') }}/images/russia.png" alt=""></li>
            </ul>
        </div>
        <div class="category">
            <ul id="category-list">
                @foreach( $category->data as $value )
                <li>
                    @if( $value->categoryId == 552 )
                        <img src="{{asset('index')}}/images/sheji.png" alt="">
                    @elseif( $value->categoryId == 770 )
                        <img src="{{asset('index')}}/images/guandao.png" alt="">
                    @elseif( $value->categoryId == 134 )
                        <img src="{{asset('index')}}/images/chugui.png" alt="">
                    @elseif( $value->categoryId == 141 )
                        <img src="{{asset('index')}}/images/menchuang.png" alt="">
                    @elseif( $value->categoryId == 174 )
                        <img src="{{asset('index')}}/images/louti.png" alt="">
                    @elseif( $value->categoryId == 196 )
                        <img src="{{asset('index')}}/images/deng.png" alt="">
                    @elseif( $value->categoryId == 246 )
                        <img src="{{asset('index')}}/images/chazuo.png" alt="">
                    @elseif( $value->categoryId == 417 )
                        <img src="{{asset('index')}}/images/shicai.png" alt="">
                    @elseif( $value->categoryId == 251 )
                        <img src="{{asset('index')}}/images/chuanglian.png" alt="">
                    @elseif( $value->categoryId == 297 )
                        <img src="{{asset('index')}}/images/zhuangxiu.png" alt="">
                    @elseif( $value->categoryId == 305 )
                        <img src="{{asset('index')}}/images/jinshu.png" alt="">
                    @elseif( $value->categoryId == 313 )
                        <img src="{{asset('index')}}/images/cizhuan.png" alt="">
                    @elseif( $value->categoryId == 369 )
                        <img src="{{asset('index')}}/images/weiyu.png" alt="">
                    @elseif( $value->categoryId == 448 )
                        <img src="{{asset('index')}}/images/shafa.png" alt="">
                    @elseif( $value->categoryId == 339 )
                        <img src="{{asset('index')}}/images/dianqi.png" alt="">
                    @elseif( $value->categoryId == 833 )
                        <img src="{{asset('index')}}/images/yingxiao.png" alt="">
                    @endif
                    <a href="https://mall.hermesmaterial.ru/index.php?route=product/category&path={{$value->categoryId}}" target="_blank">{{ $value->name }}<span>></span></a>
                    @if( !empty( $value->subclass ) )
                    <ul class="sub-category">
                        @foreach( $value->subclass as $second )
                        <li>
                            <a href="https://mall.hermesmaterial.ru/index.php?route=product/category&path={{$value->categoryId}}_{{$second->categoryId}}" target="_blank">{{ $second->name }}</a>
                            @if( !empty($second->subclass) )
                                <ul class="sub-category">
                                    @foreach( $second->subclass as $third )
                                        <li><a href="https://mall.hermesmaterial.ru/index.php?route=product/category&path={{$value->categoryId}}_{{$second->categoryId}}_{{$third->categoryId}}" target="_blank">{{ $third->name }}</a></li>
                                    @endforeach
                                </ul>
                            @endIf
                        </li>
                        @endforeach
                    </ul>
                    @endif
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<script>
    $('.sub-category').hide();
    $('#category-list').hide()

    $('.category').mouseleave(function(){
        $('#category-list').hide()
    })

    $('#catalog').hover(function() {
        $('#category-list').show()

        $('#category-list li').has('.sub-category').mouseover(function(){
            $(this).children(".sub-category").show()
        }).mouseleave(function(){
            $(this).children(".sub-category").hide()
        })
    }).siblings('li').hover(function () {
        $('#category-list').hide()
    })

    $(document).ready(function(){
        $(".nav-box a").each(function(){
            $this = $(this);
            if( $this[0].href == String(window.location) ){
                $this.addClass("active");
            }
        });
    });
</script>
