<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <!-- Fonts -->
{{--        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">--}}

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('index') }}/css/main.css">
        <link rel="stylesheet" href="{{ asset('index') }}/css/swiper.min.css">

        <script type="text/javascript" src="{{ asset('index') }}/js/swiper.min.js"></script>
        <script type="text/javascript" src="{{ asset('index') }}/js/jquery-2.1.1.min.js"></script>
    </head>
    <body>
        {{--头部--}}
        @if ($agent->isMobile())
            @include('home.m-header')
        @else
            @include('home.header')
        @endif

        {{--首页内容--}}
        <div class="home-content">
            <div class="banner">
{{--                <img src="{{ asset('index') }}/images/home-bg.png" alt="">--}}
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('index') }}/images/banner-1.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('index') }}/images/banner-2.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('index') }}/images/banner-3.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('index') }}/images/banner-4.jpg" alt="">
                        </div>
                    </div>
                    <!-- Add Arrows -->
{{--                    <div class="swiper-button-next" style="background-image: url({{ asset('index') }}/images/fanye.png);"></div>--}}
{{--                    <div class="swiper-button-prev" style="background-image: url({{ asset('index') }}/images/fanye_1.png);"></div>--}}
                </div>
            </div>
            <div class="card">
                <div class="card-items">
                    <div class="card-item" style="width:360px; background-image: url('index/images/card-green.png');">
                        <div class="card-content green">
                            <p class="title title-blue">Строительный подряд</p>
                            <div class="button title-blue button-blue float"><a href="project">Разнообразие стили</a></div>
                        </div>
                        <img src="{{ asset('index') }}/images/arrow-green.png" alt="">
                    </div>
                    <div class="card-item" style="width:580px; background-image: url('index/images/card-blue.png');">
                        <div class="card-content blue">
                            <p class="title title-white">Комплексный универсальный магазин on-line строительных материалов и мебели для любых креативных идей</p>
                            <div class="button title-white button-white" style="float: right;"><a href="oneshop">Прямые поставки с заводов</a></div>
                        </div>
                    </div>
                    <div class="card-item" style="width:600px; background-image: url('index/images/card-red.png');">
                        <div class="card-content red">
                            <p class="title title-white" style="text-align: left;height: 75px;">По заказу <br/>Дизайн домашнего интерьера</p>
                            <div class="button title-white button-white" style="text-align: left;padding-left: 16px;"><a href="customize">По вашему желанию</a></div>
                        </div>
                        <img src="{{ asset('index') }}/images/arrow-white.png" alt="">
                    </div>
                    <div class="card-item" style="width:364px; background-image: url('index/images/card-yellow.png');">
                        <img src="{{ asset('index') }}/images/arrow-yellow.png" style="left: 10%;" alt="">
                        <div class="card-content yellow">
                            <p class="title title-blue" style="text-align: left;">Мебельный тур в Китай</p>
                            <div class="button title-blue button-blue" style="text-align: left;padding-left: 16px;"><a href="furniture">По вашему желанию</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="catalogue container">
                <div class="slide">
                    <div class="slide-title">
                        <img src="{{ asset('index') }}/images/list.png" alt="">
                        <span class="title">Каталог</span>
                    </div>
                    <div class="list">
                        @foreach( $category->data as $value )
                            <div class="list-item"><span class="circle"></span>{{ $value->name }}</div>
                        @endforeach
                    </div>
                </div>
                <div class="catalog-content">
                    @foreach($category->data as $value)
                    <div class="items">
                        @foreach( $value->subclass as $second )
                            <div class="box">
                                <div class="content-item">
                                    @if($second->image)
                                    <img src="{{ $second->image }}" alt="">
                                    @else
                                        <img src="https://mall.hermesmaterial.ru/image/cache/catalog/homepage/hermer_logo-300x300.png" alt="">
                                    @endif
                                    <div class="name"><span class="circle"></span> <a href="https://mall.hermesmaterial.ru/index.php?route=product/category&path={{ $value->categoryId }}_{{$second->categoryId}}" target="_blank">{{ $second->name }}</a></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="brief">
                <div class="brief-box container">
                    <div class="same order"><img src="{{ asset('index') }}/images/shoppingcart.png" alt=""><a href="">Заказ товаров по Интернету</a></div>
                    <div class="same freight"><img src="{{ asset('index') }}/images/calculate.png" alt=""><a href="">Стоимость перевозки</a></div>
                    <div class="text">
                        <p>Нужны высококачественные материалы? <br/>Если у вас остались вопросы вы можете связаться с нами</p>
                    </div>
                </div>
            </div>
            <div class="advantage">
                <div class="content container">
                    <p class="title">Наши преимущества / Почему нас выбирают</p>
                    <div class="intro">
                        <div class="intro-item">
                            <div class="image" style="background: #e03e25;">
                                <div class="box">
                                    <img src="{{ asset('index') }}/images/ship.png" alt="">
                                    <p>Служба бережной доставки</p>
                                </div>
                            </div>
                            <div class="desc">
                                HermesMaterial специализируется на разработке индивидуальных маршрутов для грузоперевозок из Китая с полным таможенным оформлением, сертификацией и оперативной обработкой груза.
                            </div>
                        </div>
                        <div class="intro-item">
                            <div class="image" style="background: #8cc63e;">
                                <div class="box">
                                    <img src="{{ asset('index') }}/images/product.png" alt="">
                                    <p>Полный ассортимент товара</p>
                                </div>
                            </div>
                            <div class="desc">
                                Мы поставляем все категории продукции: от одежды, электроники, строительных материалов, мебели, оборудования до химических веществ.
                            </div>
                        </div>
                        <div class="intro-item">
                            <div class="image" style="background: #61afb1;">
                                <div class="box">
                                    <img src="{{ asset('index') }}/images/gold.png" alt="">
                                    <p>Разумная цена</p>
                                </div>
                            </div>
                            <div class="desc">
                                Предлагаем конкурентную цену на строительные и отделочные материалы. Также предоставляем большие скидки для оптовиков.
                            </div>
                        </div>
                        <div class="intro-item">
                            <div class="image" style="background: #ffd052;">
                                <div class="box">
                                    <img src="{{ asset('index') }}/images/certificate.png" alt="">
                                    <p>Гарантийное обслуживание</p>
                                </div>
                            </div>
                            <div class="desc">
                                Возьмем на себя тщательный контроль качества вашей продукции на любом этапе производства в Китае. Наше «внимание к мелочам и деталям» гарантия того, что вы получите товар, полностью соответствующий договорённостям с производителем.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="warranty">
                <div class="content container">
                    <div class="head">
                        <div class="left-img"><img src="{{ asset('index') }}/images/lock.png" alt=""></div>
                        <div class="title">Наши гарантии</div>
                        <div class="right-img"><img src="{{ asset('index') }}/images/badge.png" alt=""></div>
                    </div>
                    <div class="detail">
                        <p>Минимальные цены от производителей. </p>
                        <p>Качественные материалы</p>
                        <p>Фабричное качество</p>
                        <p>Гарантированные сроки</p>
                        <p>Гарантия на мебель 2 года</p>
                        {{--                        <p>我们在线商店运营的一个重要组成部分是，所销售的产品经过认证，并由制造商提供品牌保修。</p>--}}
{{--                        <p>免费提供保修服务。必须: </p>--}}
{{--                        <p>·正确无标记和更正填写的保修卡，其中必须注明产品的型号和序列日、销售日期和贸易组织的印章;采购证明文件《商品发票);</p>--}}
{{--                        <p>完整的商品扭旗。</p>--}}
{{--                        <p>我们还要提请您注意，在收到和支付订单时，买方必须在快递员在场的情况下检查产品是否存在物理缺陷(刘病、裂坟、碎裂等）和完整的拒绑。快递员离开后，不接受有关这些问题的索赔。</p>--}}
{{--                        <p>在下:</p>--}}
{{--                        <p>·丢失或未填写保你卡</p>--}}
{{--                        <p>设备非正式地交付到俄罗斯领土·产品有机械损坏或解剖的痕迹.工厂密封破灭</p>--}}
{{--                        <p>操作、运输或佶存条件被打破由授权服务中心的非员工进行维修使用非原装零件</p>--}}
{{--                        <p>有关保修条款的详细i说明，请去阅所购买商品的文档和/或相关制造商的味站.</p>--}}
{{--                        <p>尊敬的买家请注意。根据《俄罗斯联邦民法典》第437条的规定，网上购如不是公开要约,网站上有关技术规格、库存可用性和货物价值的所有信息都是信息性的。</p>--}}
                    </div>
                    <div class="foot">
                        <div class="abreast">
                            <div class="phone"><img src="{{ asset('index') }}/images/phone.png" alt="">7-800-5555-277</div>
                            <div class="email"><img src="{{ asset('index') }}/images/email.png" alt="">hermes@hermesexpo.ru</div>
                        </div>
                        <div class="address"><img src="{{ asset('index') }}/images/address.png" alt="">Город Фошань, район Чаньчен, улица Цзихуалю, 3, Цзиудингоцзи 1, здание 2, офис 2501</div>
                    </div>
                </div>
            </div>
            <div class="project">
                <div class="project-content container">
                    <p class="title">Наши объекты</p>
                    <div class="project-items">
                        <div class="project-item">
                            <div class="img-box"><img src="{{ asset('index') }}/images/case-1.png" alt=""></div>
                            <p class="name"><a href="javascript:;">Казахстан, Нур-Султан Коркем 3</a></p>
                            <div class="click"><a href="project#series-1">Детали <img src="{{ asset('index') }}/images/arrow-right.png" alt=""></a></div>
                        </div>
                        <div class="project-item">
                            <div class="img-box"><img src="{{ asset('index') }}/images/case-3.png" alt=""></div>
                            <p class="name"><a href="javascript:;">Россия, Казань Регина</a></p>
                            <div class="click"><a href="project#series-2">Детали <img src="{{ asset('index') }}/images/arrow-right.png" alt=""></a></div>
                        </div>
                        <div class="project-item">
                            <div class="img-box"><img src="{{ asset('index') }}/images/case-2.png" alt=""></div>
                            <p class="name"><a href="javascript:;">Россия, Якутск Версаль торговый центр</a></p>
                            <div class="click"><a href="project#series-3">Детали <img src="{{ asset('index') }}/images/arrow-right.png" alt=""></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="partner">
                <div class="content container">
                    <p class="title">Наши клиенты</p>
{{--                    <div class="brand">--}}
{{--                        <ul>--}}
{{--                            <li><img src="{{ asset('index') }}/images/george.png" alt=""></li>--}}
{{--                            <li><img src="{{ asset('index') }}/images/meide.png" alt=""></li>--}}
{{--                            <li><img src="{{ asset('index') }}/images/hansigeya.png" alt=""></li>--}}
{{--                            <li><img src="{{ asset('index') }}/images/leishi.png" alt=""></li>--}}
{{--                            <li><img src="{{ asset('index') }}/images/laoban.png" alt=""></li>--}}
{{--                        </ul>--}}
{{--                        <ul>--}}
{{--                            <li><img src="{{ asset('index') }}/images/tata.png" alt=""></li>--}}
{{--                            <li><img src="{{ asset('index') }}/images/geli.png" alt=""></li>--}}
{{--                            <li><img src="{{ asset('index') }}/images/langqiong.png" alt=""></li>--}}
{{--                            <li><img src="{{ asset('index') }}/images/oupu.png" alt=""></li>--}}
{{--                            <li><img src="{{ asset('index') }}/images/kendiya.png" alt=""></li>--}}
{{--                        </ul>--}}
{{--                        <ul>--}}
{{--                            <li><img src="{{ asset('index') }}/images/haixin.png" alt=""></li>--}}
{{--                            <li><img src="{{ asset('index') }}/images/aokesi.png" alt=""></li>--}}
{{--                            <li><img src="{{ asset('index') }}/images/feilipu.png" alt=""></li>--}}
{{--                            <li><img src="{{ asset('index') }}/images/songxia.png" alt=""></li>--}}
{{--                            <li><img src="{{ asset('index') }}/images/sanxing.png" alt=""></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                    <div class="row">
                        <div class="text">
                            <div class="text-top">Мы успешно сотрудничаем с коммерческими и государственными предприятиями различных отраслей вне зависимости от их размера и наличия опыта работы с Китаем.</div>
                            <div class="text-bottom">Наши постоянные клиенты - это мелкооптовые компании, средние, крупные производственные предприятия из всех субъектов РФ самых разных отраслей и специализаций.
                                <br/>Мы рады любым клиентам и, поверьте, соответствуем их ожиданиям!</div>
                        </div>
                        <div class="sort">
                            <ul>
                                <li><div><img src="{{ asset('index') }}/images/partner-icon-1.png" alt=""></div><p>Дизайнеры</p></li>
                                <li><div><img src="{{ asset('index') }}/images/partner-icon-2.png" alt=""></div><p>Архитектурно-строительные компании</p></li>
                                <li><div><img src="{{ asset('index') }}/images/partner-icon-3.png" alt=""></div><p>Ремонтно-отделочные компании</p></li>
                                <li><div><img src="{{ asset('index') }}/images/partner-icon-4.png" alt=""></div><p>Подрядчики</p></li>
                                <li><div><img src="{{ asset('index') }}/images/partner-icon-5.png" alt=""></div><p>Собственники</p></li>
                                <li><div><img src="{{ asset('index') }}/images/partner-icon-6.png" alt=""></div><p>Омниканальные дистрибьютора строительных и отделочных материалов</p></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--底部--}}
        @include('home.footer')
    </body>

    <script>
        $(window).load(function(){
            $(".catalog-content>.items").eq(0).show().siblings().hide()
            $(".slide>.list>.list-item").eq(0).addClass("active")
        });
        $(".slide>.list>.list-item").click(function () {
            $(this).addClass("active").siblings().removeClass("active")
            var index = $(this).index()
            $(".catalog-content>.items").eq(index).show().siblings().hide()
        })

        var swiper = new Swiper('.swiper-container', {
            cssMode: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination'
            },
            // mousewheel: true,
            keyboard: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false
            },
        });
    </script>
</html>
