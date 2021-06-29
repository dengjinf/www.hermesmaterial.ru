<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Customize</title>
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

        {{--家居定制内容--}}
        <div class="customize-content">
            <div class="banner"><img src="{{ asset('index') }}/images/customize/customize-bg.png" alt=""></div>
            <div class="main container">
                <h2 class="title">По заказу</h2>
                <div class="items">
                    <div class="box">
                        <div class="item">
                            <div class="img-box"><img src="{{ asset('index') }}/images/customize/color.png" alt=""></div>
                            <p>Цвет по вашему желанию</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="item">
                            <div class="img-box"><img src="{{ asset('index') }}/images/customize/material.png" alt=""></div>
                            <p>Материал по вашему желанию</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="item">
                            <div class="img-box"><img src="{{ asset('index') }}/images/customize/size.png" alt=""></div>
                            <p>Сортировка по размеру заказчика</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="item">
                            <div class="img-box"><img src="{{ asset('index') }}/images/customize/style.png" alt=""></div>
                            <p>Стиль по вашему желанию</p>
                        </div>
                    </div>
                </div>
                <div class="design">
                    <img src="{{ asset('index') }}/images/customize/customize-1.png" alt="">
                    <div class="introduce">
                        <h2>Комплексный дизайн домашнего интерьера</h2>
                        <div class="grid">
                            <div class="grid-piece one">Индивидуальный заказ</div>
                            <div class="grid-piece two">Неподвижные элементы интерьера</div>
                            <div class="grid-piece three">Подвижные элементы интерьера</div>
                            <div class="grid-piece four">Мебель по индивидуальному заказу</div>
                        </div>
                    </div>
                </div>
                <div class="commission">
                    <div class="commission-items">
                        <div class="contain">
                            <div class="item">
                                <div style="overflow: hidden;"><img src="{{ asset('index') }}/images/customize/customize-2.png" alt=""></div>
                                <img class="adorn" src="{{ asset('index') }}/images/customize/customize-3.png" alt="">
                                <p>Гостиная по заказу</p>
                            </div>
                        </div>
                        <div class="contain">
                            <div class="item">
                                <div style="overflow: hidden;"><img src="{{ asset('index') }}/images/customize/customize-7.png" alt=""></div>
                                <img class="adorn" src="{{ asset('index') }}/images/customize/customize-3.png" alt="">
                                <p>Спальня по заказу</p>
                            </div>
                        </div>
                        <div class="contain">
                            <div class="item">
                                <div style="overflow: hidden;"><img src="{{ asset('index') }}/images/customize/customize-8.png" alt=""></div>
                                <img class="adorn" src="{{ asset('index') }}/images/customize/customize-3.png" alt="">
                                <p>Pесторан по заказу</p>
                            </div>
                        </div>
                        <div class="contain">
                            <div class="item">
                                <div style="overflow: hidden;"><img src="{{ asset('index') }}/images/customize/customize-9.png" alt=""></div>
                                <img class="adorn" src="{{ asset('index') }}/images/customize/customize-3.png" alt="">
                                <p>Кухня по заказу</p>
                            </div>
                        </div>
                        <div class="contain">
                            <div class="item">
                                <div style="overflow: hidden;"> <img src="{{ asset('index') }}/images/customize/customize-10.png" alt=""></div>
                                <img class="adorn" src="{{ asset('index') }}/images/customize/customize-3.png" alt="">
                                <p>Ванная по заказу</p>
                            </div>
                        </div>
                        <div class="contain">
                            <div class="item">
                                <div style="overflow: hidden;"><img src="{{ asset('index') }}/images/customize/customize-11.png" alt=""></div>
                                <img class="adorn" src="{{ asset('index') }}/images/customize/customize-3.png" alt="">
                                <p>Балкон по заказу</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tailored">
                    <div class="text">
                        <h2> Уникальный неповторимый</h2>
                        <p>дизайн интерьера для вашего дома</p>
                    </div>
                    <div class="content">
                        <img src="{{ asset('index') }}/images/customize/customize-4.png" alt="">
                        <img class="right-top" src="{{ asset('index') }}/images/customize/customize-5.png" alt="">
                        <img class="right-bottom" src="{{ asset('index') }}/images/customize/customize-6.png" alt="">
                    </div>
                </div>
                <div class="material">
                    <div class="text">
                        <h2>Качественный материал</h2>
                        <p>Гарантия качества</p>
                    </div>
                    <div class="material-items">
                        <div class="box">
                            <div class="item">
                                <img src="{{ asset('index') }}/images/customize/wood.png" alt="">
                                <p>Мссив дерева</p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="item">
                                <img src="{{ asset('index') }}/images/customize/leather.png" alt="">
                                <p>Кожа</p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="item">
                                <img src="{{ asset('index') }}/images/customize/cloth.png" alt="">
                                <p>Ткань</p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="item">
                                <img src="{{ asset('index') }}/images/customize/fillingmaterial.png" alt="">
                                <p>Наполнитель</p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="item">
                                <img src="{{ asset('index') }}/images/customize/stone.png" alt="">
                                <p>Камень</p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="item">
                                <img src="{{ asset('index') }}/images/customize/paint.png" alt="">
                                <p>Масляная краска</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="process">
                    <h2>Процесс заказа</h2>
                    <div class="process-items">
                        <div class="box">
                            <div class="item">
                                <img src="{{ asset('index') }}/images/customize/step-1.png" alt="">
                                <p>Расскажите нам о том, что вы хотели</p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="item">
                                <img src="{{ asset('index') }}/images/customize/step-2.png" alt="">
                                <p>Дадим проектный чертеж и согласуем с Вами</p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="item">
                                <img src="{{ asset('index') }}/images/customize/step-3.png" alt="">
                                <p>Производство</p>
                            </div>
                        </div>
                    </div>
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

    </script>
</html>
