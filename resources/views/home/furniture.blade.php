<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Furniture</title>
        <!-- Fonts -->
{{--        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">--}}

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('index') }}/css/main.css">
        <script type="text/javascript" src="{{ asset('index') }}/js/jquery-2.1.1.min.js"></script>
    </head>
    <body>
        {{--头部--}}
        @if ($agent->isMobile())
            @include('home.m-header')
        @else
            @include('home.header')
        @endif

        {{--家具团内容--}}
        <div class="furniture-content">
            <div class="banner"><img src="{{ asset('index') }}/images/furniture/furniture-bg.png" alt=""></div>
            <div class="through"></div>
            <div class="main container">
                <div class="catalog-nav">
                    <div class="item">
                        <a href="#livingroom">
                            <div class="img-box"><img src="{{ asset('index') }}/images/furniture/sofa.png" alt=""></div>
                            <span>Гостиная</span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#bedroom">
                            <div class="img-box"><img src="{{ asset('index') }}/images/furniture/bed.png" alt=""></div>
                            <span>Спальня</span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#kitchen">
                            <div class="img-box"><img src="{{ asset('index') }}/images/furniture/kitchen.png" alt=""></div>
                            <span>Кухня</span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#diningroom">
                            <div class="img-box"><img src="{{ asset('index') }}/images/furniture/food.png" alt=""></div>
                            <span>Обеденная зона</span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#bathroom">
                            <div class="img-box"><img src="{{ asset('index') }}/images/furniture/bathroom.png" alt=""></div>
                            <span>Ванная комната</span>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#office">
                            <div class="img-box"><img src="{{ asset('index') }}/images/furniture/office.png" alt=""></div>
                            <span>Кабинет</span>
                        </a>
                    </div>

                </div>
                <div id="furniture" class="content">
                    <div class="item">
                        <a name="livingroom" class="anchor"></a>
                        <div style="overflow: hidden;"><img src="{{ asset('index') }}/images/furniture/furniture-1.png" alt=""></div>
                        <div class="catalog-info">
                            <div class="name">
                                <span>Гостиная</span>
                                <span class="float">Living room</span>
                            </div>
                            <div class="sub-catalog">
                                <ul>
                                    <li><a href="https://mall.hermesmaterial.ru/index.php?route=product/category&path=448_449_646">Диван </a><span>></span></li>
                                    <li><a href="https://mall.hermesmaterial.ru/index.php?route=product/category&path=448_449_648">Чайный столик </a><span>></span></li>
                                    <li><a href="https://mall.hermesmaterial.ru/index.php?route=product/category&path=448_449_648">Тумба под телевизор </a><span>></span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="thumb">
                            <div class="thumb-item">
                                <img src="{{ asset('index') }}/images/furniture/thumb-1.png" alt="">
                            </div>
                            <div class="thumb-item">
                                <img src="{{ asset('index') }}/images/furniture/thumb-2.png" alt="">
                            </div>
                            <div class="thumb-item">
                                <img src="{{ asset('index') }}/images/furniture/thumb-3.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <a name="bedroom" class="anchor"></a>
                        <div style="overflow: hidden;"><img src="{{ asset('index') }}/images/furniture/furniture-2.png" alt=""></div>
                        <div class="catalog-info">
                            <div class="name">
                                <span>Спальня</span>
                                <span class="float">Bed room</span>
                            </div>
                            <div class="sub-catalog">
                                <ul>
                                    <li><a href="https://mall.hermesmaterial.ru/index.php?route=product/category&path=448_451_657">Кровать </a><span>></span></li>
                                    <li><a href="https://mall.hermesmaterial.ru/index.php?route=product/category&path=448_451_660">Прикроватный столик </a><span>></span></li>
                                    <li><a href="https://mall.hermesmaterial.ru/index.php?route=product/category&path=448_451_659">Гардероб </a><span>></span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="thumb">
                            <div class="thumb-item">
                                <img src="{{ asset('index') }}/images/furniture/thumb-4.png" alt="">
                            </div>
                            <div class="thumb-item">
                                <img src="{{ asset('index') }}/images/furniture/thumb-5.png" alt="">
                            </div>
                            <div class="thumb-item">
                                <img src="{{ asset('index') }}/images/furniture/thumb-6.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <a name="kitchen" class="anchor"></a>
                        <div style="overflow: hidden;"><img src="{{ asset('index') }}/images/furniture/furniture-3.png" alt=""></div>
                        <div class="catalog-info">
                            <div class="name">
                                <span>Кухня</span>
                                <span class="float">Kitchen</span>
                            </div>
                            <div class="sub-catalog">
                                <ul>
                                    <li><a href="https://mall.hermesmaterial.ru/index.php?route=product/category&path=134_135">Напольный шкаф </a><span>></span></li>
                                    <li><a href="https://mall.hermesmaterial.ru/index.php?route=product/category&path=134_135">Настенный шкаф </a><span>></span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="thumb">
                            <div class="thumb-item">
                                <img src="{{ asset('index') }}/images/furniture/thumb-7.png" alt="">
                            </div>
                            <div class="thumb-item">
                                <img src="{{ asset('index') }}/images/furniture/thumb-8.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <a name="diningroom" class="anchor"></a>
                        <div style="overflow: hidden;"><img src="{{ asset('index') }}/images/furniture/furniture-4.png" alt=""></div>
                        <div class="catalog-info">
                            <div class="name">
                                <span>Обеденная зона</span>
                                <span class="float">Dining room</span>
                            </div>
                            <div class="sub-catalog">
                                <ul>
                                    <li><a href="https://mall.hermesmaterial.ru/index.php?route=product/category&path=448_450_650">Обеденный стол </a><span>></span></li>
                                    <li><a href="https://mall.hermesmaterial.ru/index.php?route=product/category&path=448_450_651">Обеденный стул </a><span>></span></li>
                                    <li><a href="https://mall.hermesmaterial.ru/index.php?route=product/category&path=448_450_653">Буфет </a><span>></span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="thumb">
                            <div class="thumb-item">
                                <img src="{{ asset('index') }}/images/furniture/thumb-9.png" alt="">
                            </div>
                            <div class="thumb-item">
                                <img src="{{ asset('index') }}/images/furniture/thumb-10.png" alt="">
                            </div>
                            <div class="thumb-item">
                                <img src="{{ asset('index') }}/images/furniture/thumb-11.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="item bedroom-item">
                        <a name="bathroom" class="anchor"></a>
                        <div style="overflow: hidden;"><img src="{{ asset('index') }}/images/furniture/furniture-5.png" alt=""></div>
                        <div class="catalog-bedroom-info">
                            <div class="name">
                                <span>Ванная комната</span>
                                <span class="float">Bathroom</span>
                            </div>
                            <div class="sub-catalog">
                                <ul>
                                    <li><a href="https://mall.hermesmaterial.ru/index.php?route=product/category&path=369_392">Ванна </a><span>></span></li>
                                    <li><a href="https://mall.hermesmaterial.ru/index.php?route=product/category&path=369_370">Унитаз </a><span>></span></li>
                                    <li><a href="https://mall.hermesmaterial.ru/index.php?route=product/category&path=369_383">Душевая кабина </a><span>></span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="bedroom-thumb">
                            <div class="thumb-item">
                                <img src="{{ asset('index') }}/images/furniture/thumb-12.png" alt="">
                            </div>
                            <div class="thumb-item">
                                <img src="{{ asset('index') }}/images/furniture/thumb-13.png" alt="">
                            </div>
                            <div class="thumb-item">
                                <img src="{{ asset('index') }}/images/furniture/thumb-14.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <a name="office" class="anchor"></a>
                        <div style="overflow: hidden;"><img src="{{ asset('index') }}/images/furniture/furniture-6.png" alt=""></div>
                        <div class="catalog-info">
                            <div class="name">
                                <span>Кабинет</span>
                                <span class="float">Office</span>
                            </div>
                            <div class="sub-catalog">
                                <ul>
                                    <li><a href="https://mall.hermesmaterial.ru/index.php?route=product/category&path=448_644_654">Письменный стол </a><span>></span></li>
                                    <li><a href="https://mall.hermesmaterial.ru/index.php?route=product/category&path=448_644_655">Офисный стул </a><span>></span></li>
                                    <li><a href="https://mall.hermesmaterial.ru/index.php?route=product/category&path=448_644_656">Шкаф для документа </a><span>></span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="thumb">
                            <div class="thumb-item">
                                <img src="{{ asset('index') }}/images/furniture/thumb-15.png" alt="">
                            </div>
                            <div class="thumb-item">
                                <img src="{{ asset('index') }}/images/furniture/thumb-16.png" alt="">
                            </div>
                            <div class="thumb-item">
                                <img src="{{ asset('index') }}/images/furniture/thumb-17.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="partner">
            <div class="content container">
                <p class="title">Партнеры</p>
                <div class="brand">
                    <ul>
                        <li><img src="{{ asset('index') }}/images/george.png" alt=""></li>
                        <li><img src="{{ asset('index') }}/images/meide.png" alt=""></li>
                        <li><img src="{{ asset('index') }}/images/hansigeya.png" alt=""></li>
                        <li><img src="{{ asset('index') }}/images/leishi.png" alt=""></li>
                        <li><img src="{{ asset('index') }}/images/laoban.png" alt=""></li>
                    </ul>
                    <ul>
                        <li><img src="{{ asset('index') }}/images/tata.png" alt=""></li>
                        <li><img src="{{ asset('index') }}/images/geli.png" alt=""></li>
                        <li><img src="{{ asset('index') }}/images/langqiong.png" alt=""></li>
                        <li><img src="{{ asset('index') }}/images/oupu.png" alt=""></li>
                        <li><img src="{{ asset('index') }}/images/kendiya.png" alt=""></li>
                    </ul>
                    <ul>
                        <li><img src="{{ asset('index') }}/images/haixin.png" alt=""></li>
                        <li><img src="{{ asset('index') }}/images/aokesi.png" alt=""></li>
                        <li><img src="{{ asset('index') }}/images/feilipu.png" alt=""></li>
                        <li><img src="{{ asset('index') }}/images/songxia.png" alt=""></li>
                        <li><img src="{{ asset('index') }}/images/sanxing.png" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>

        {{--底部--}}
        @include('home.footer')
    </body>

    <script>
        $('.sub-category').hide();
        $('#category-list').hide()

        $('#catalog').hover(function(){
            $('#category-list').show()
        })

        $('#category-list').mouseleave(function(){
            $('#category-list').hide()
        })

        $('#category-list li').hover(function(){
            $(this).children('.sub-category').show()
        },function(){
            $(this).children('.sub-category').hide()
        })

        $("#furniture>.item").each(function(){
            const subscript = $(this).index()
            if( subscript != 4 ){
                // $('#furniture>.item:even').find('.catalog-info').addClass('info-left').siblings('.thumb').addClass('thumb-right')
                // $('#furniture>.item:odd').find('.catalog-info').addClass('info-right').siblings('.thumb').addClass('thumb-left')
                if( subscript%2 == 0 ){
                    $(this).find('.catalog-info').addClass('info-left').siblings('.thumb').addClass('thumb-right')
                }else{
                    $(this).find('.catalog-info').addClass('info-right').siblings('.thumb').addClass('thumb-left')
                }
            }
        });
    </script>
</html>
