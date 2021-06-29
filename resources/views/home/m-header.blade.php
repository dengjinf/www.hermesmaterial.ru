<div class="header">
    <div class="header-content">
        <div class="category-icon"><img src="{{ asset('index') }}/images/category-icon.png" alt=""></div>
        <div class="logo"><img src="{{ asset('index') }}/images/header-logo.png" alt=""></div>
        <div class="menu-icon"><img src="{{ asset('index') }}/images/menu-icon.png" alt=""></div>
        <div class="nav-box">
            <ul class="nav">
                <li id="catalog"><a href="/">Каталог</a></li>
                <li><a href="oneshop">Комплексное обслуживание</a></li>
                <li><a href="customize">Дизайн домашнего интерьера по заказу</a></li>
                <li><a href="project">Строительный подряд</a></li>
                <li><a href="furniture">Мебельный тур в Китай</a></li>
                <li><a href="https://mall.hermesmaterial.ru">Магазин on-line</a></li>
                <li><a href="faq">Чаво</a></li>
                <li><a href="contact">Свяжитесь с нами</a></li>
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
                    <a href="https://mall.hermesmaterial.ru/index.php?route=product/category&path={{$value->categoryId}}" target="_blank">{{ $value->name }}<span></span></a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<script>
    $('#category-list').hide()
    $('.nav-box').hide()

    $('.category-icon').click(function(){
        $('#category-list').slideToggle(500)
        $('.nav-box').hide()
    })

    $('.menu-icon').click(function(){
        $('.nav-box').slideToggle(500)
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
