<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact</title>
        <!-- Fonts -->
{{--        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">--}}

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('index') }}/css/main.css">
        <script type="text/javascript" src="{{ asset('index') }}/js/jquery-2.1.1.min.js"></script>

        <!--引用百度地图API-->
        <script type="text/javascript" src="https://api.map.baidu.com/api?v=2.0&ak=tcNUnMmjPlYxGcffIls0RFgMYECb8Gbs&s=1"></script>
    </head>
    <body>
        {{--头部--}}
        @if ($agent->isMobile())
            @include('home.m-header')
        @else
            @include('home.header')
        @endif

        {{--联系我们--}}
        <div class="contact-content">
            <div class="banner"><img src="{{ asset('index') }}/images/contact/contact.png" alt=""></div>
            <div class="main container">
                <div class="bread">
                    <ul>
                        <li><a href="/">Домашняя страница</a></li>
                        <li><a href="contact">Свяжитесь с нами</a></li>
                    </ul>
                </div>
                <div class="heading">Свяжитесь с нами</div>
                <div class="content">
                    <div class="info">
                        <ul>
                            <li><p class="subtitle">Телефон :</p><p class="detail">7-800-5555-277</p></li>
                            <li><p class="subtitle">Почтовый ящик :</p><p class="detail">hermes@hermesexpo.ru</p></li>
                            <li><p class="subtitle">Адрес :</p><p class="detail">Город Фошань, район Чаньчен,  улица Цзихуалю, 3, Цзиудингоцзи 1, здание 2, офис 2501</p></li>
                        </ul>
                    </div>
                    <div class="map" id="dituContent"></div>
                </div>
            </div>
        </div>

        {{--底部--}}
        @include('home.footer')
    </body>

    <script>
        //创建和初始化地图函数：
        function initMap(){
            createMap();//创建地图
            setMapEvent();//设置地图事件
            addMapControl();//向地图添加控件
        }

        //创建地图函数：
        function createMap(){
            var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
            var point = new BMap.Point(113.13789,23.018634);//定义一个中心点坐标
            map.centerAndZoom(point,17);//设定地图的中心点和坐标并将地图显示在地图容器中
            window.map = map;//将map变量存储在全局
        }

        //地图事件设置函数：
        function setMapEvent(){
            map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
            map.enableScrollWheelZoom();//启用地图滚轮放大缩小
            map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
            map.enableKeyboard();//启用键盘上下左右键移动地图
        }

        //地图控件添加函数：
        function addMapControl(){
            //向地图中添加缩放控件
            var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_SMALL});
            map.addControl(ctrl_nav);
            //向地图中添加缩略图控件
            var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
            map.addControl(ctrl_ove);
            //向地图中添加比例尺控件
            var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
            map.addControl(ctrl_sca);
        }

        initMap();//创建和初始化地图
    </script>
</html>
