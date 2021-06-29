<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oneshop</title>
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

        {{--首页内容--}}
        <div class="one-content">
            <div class="banner">
                <img src="{{ asset('index') }}/images/oneshop/oneshop-bg.png" alt="">
                <div class="hover">
                    <h2>Комплексный универсальный магазин on-line строительных материалов и мебели для любых  креативных идей</h2>
                    <div class="button">Более 100 примеров дизайна домашнего интерьера&nbsp;<br/>Более 1000+ вариантов мебели</div>
                </div>
            </div>
            <div class="four-advantage container">
                <h2 class="title">Комплексный универсальный магазин on-line / <span>Четыре преимущества продукта</span></h2>
                <div class="items">
                    <div class="item">
                        <img src="{{ asset('index') }}/images/oneshop/money.png" alt="">
                        <h3>Большая экономия</h3>
                        <p>Прямые поставки с заводов<br/>без наценок посредников</p>
                    </div>
                    <div class="item">
                        <img src="{{ asset('index') }}/images/oneshop/design.png" alt="">
                        <h3>Профессионально</h3>
                        <p>Дизайн домашнего интерьера 3D<br/>Индивидуальное обслуживание</p>
                    </div>
                    <div class="item">
                        <img src="{{ asset('index') }}/images/oneshop/thumb.png" alt="">
                        <h3>Без лишних хлопот</h3>
                        <p>Большой выбор<br/>разнообразных сочетаний</p>
                    </div>
                    <div class="item">
                        <img src="{{ asset('index') }}/images/oneshop/time.png" alt="">
                        <h3>Экономия времени</h3>
                        <p>одним шагом подберите всё нужное</p>
                    </div>
                </div>
            </div>
            <div><img src="{{ asset('index') }}/images/oneshop/oneshop-banner.png" alt=""></div>
            <div class="main container">
                <div class="bg"><img src="{{ asset('index') }}/images/oneshop/main-bg.png" alt=""></div>
                <div class="text">
                    <h2>Универсальный полный дом <br/><span>Экономьте деньги и беспокойтесь</span></h2>
                    <p class="subtitle">Богатый ассортимент товаров для выбора</p>
                </div>
                <div class="category">
                    @if( isset($category->data) )
                    <ul>
                        @foreach ( $category->data as $key=>$value )
                            <li><span>{{ $key+1 }}</span> {{ $value->name }}</li>
                        @endforeach
                    </ul>
                    @endif
                </div>
                <div class="detail">
                    <h2>Профессиональные дизайнеры<br/> Эффект брэнда</h2>
                    <p class="subtitle">Команда экспертов</p>
                    <div class="box">
                        <div class="img-box img-left"><img src="{{ asset('index') }}/images/oneshop/main-1.png" alt=""></div>
                        <div class="desc desc-left">
                            <p><span>01.</span>Высокая эффективность</p>
                            <span class="info">Вместе с Вами сформируем идею, ответим на все ваши вопросы, подберем материалы и цвета, а после создадим эскиз, учитывающий каждую деталь и все особенности вашего дома. </span>
                        </div>
                    </div>
                    <div class="box">
                        <div class="img-box img-right"><img src="{{ asset('index') }}/images/oneshop/main-2.png" alt=""></div>
                        <div class="desc desc-right">
                            <p><span>02.</span>Комплексное обслуживание</p>
                            <span class="info">В один клик выберите коллекцию и расскажите нам о том, что вы хотели бы изменить:<br/> - Цвет, материал, покрытие<br/> - Размер<br/> - Функциональность и наполнение<br/> - Различная фурнитура: от ручек до креплений</span>
                        </div>
                    </div>
                    <img class="combination" src="{{ asset('index') }}/images/oneshop/main-4.png" alt="">
                    <img src="{{ asset('index') }}/images/oneshop/main-5.png" alt="">
                    <img class="combination" src="{{ asset('index') }}/images/oneshop/main-6.png" alt="">
                </div>
                <div class="project">
                    <h2 class="title">Избранные кейсы</h2>
                    <p class="subtitle">Различные коллекции для выбора</p>
                    <div class="items">
                        <div class="item"><a href=""><img src="{{ asset('index') }}/images/oneshop/project-1.png" alt=""></a></div>
                        <div class="item"><a href=""><img src="{{ asset('index') }}/images/oneshop/project-2.png" alt=""></a></div>
                        <div class="item"><a href=""><img src="{{ asset('index') }}/images/oneshop/project-3.png" alt=""></a></div>
                        <div class="item"><a href=""><img src="{{ asset('index') }}/images/oneshop/project-4.png" alt=""></a></div>
                        <div class="item"><a href=""><img src="{{ asset('index') }}/images/oneshop/project-5.png" alt=""></a></div>
                        <div class="item"><a href=""><img src="{{ asset('index') }}/images/oneshop/project-6.png" alt=""></a></div>
                    </div>
                </div>
                <div class="quality">
                    <h2 class="title">Проводим строгий контроль за качеством продукции</h2>
                    <p class="subtitle">Строгий контроль за деталями</p>
                    <img src="{{ asset('index') }}/images/oneshop/main-7.png" alt="">
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
