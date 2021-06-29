<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>F&Q</title>
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

        {{--联系我们--}}
        <div class="contact-content faq">
            <div class="banner"><img src="{{ asset('index') }}/images/faq/faq.png" alt=""></div>
            <div class="main container">
                <div class="bread">
                    <ul>
                        <li><a href="/">Домашняя страница</a></li>
                        <li><a href="contact">Чаво</a></li>
                    </ul>
                </div>
                <div class="faq-row">
                    <div class="slide">
                        <ul>
                            <li>Как заказать</li>
                            <li>О цене</li>
                            <li>Информация о продукции</li>
                            <li>О поставке</li>
                        </ul>
                    </div>
                    <div class="detail">
                        <ul>
                            <li>
                                <h3 class="question">1. Я первый раз покупаю товар в Китае, что мне делать?</h3>
                                <p class="answer">Не волнуйтесь, мы предоставляем полный спектр товаров и услуг- предоставляем услуги дизайнера, выбора материалов, контроля качества производства, отгрузки в контейнерах и оформления документов. Мы доставим товар до двери. </p>
                            </li>
                            <li>
                                <h3 class="question">2. Я хочу покупать материалы лично для себя, как можно оформить?</h3>
                                <p class="answer">Сначала отправляете чертеж вашего дома и перечень покупок, наш менеджер будет вести каждый следующий шаг.</p>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <h3 class="question">1. Мне нужно платить за услуги дизайна?</h3>
                                <p class="answer">Мы бесплатно проектируем кухню и гардероб, если вам нужен дизайн всей квартиры то нужно дополнительно платить. Мы дадим Вам лучшую цену за дизайн.</p>
                            </li>
                            <li>
                                <h3 class="question">2. Какие условия по цене?</h3>
                                <p class="answer">Если покупаете товар в 20-футовом контейнере, то мы дадим цену FOB, если объема не хватает до объёма 20-футового контейнера, то мы дадим цену EXW. Пожалуйста, свяжитесь с нами для уточнения деталей</p>
                            </li>
                            <li>
                                <h3 class="question">3. Какие условия оплаты?</h3>
                                <p class="answer">Мы принимаем перевод (TT), 30% предоплаты для начала производства и 70% остаток до отгрузки товара. Пожалуйста, свяжитесь с нами для уточнения деталей. Или можно заключить договор с нашими преставителями и оплатить на месте, мы дадим контакты нашего преставителя</p>
                            </li>
                            <li>
                                <h3 class="question">4. Можете ли отправить прайс-лист?</h3>
                                <p class="answer">Мы можем предоставлять прайс-лист, пожалуйста отправляйте ваш чертеж и список покупок, и мы дадим цену. Пожалуйста, свяжитесь с нами для уточнения деталей</p>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <h3 class="question">1. Вы являетесь производителем?</h3>
                                <p class="answer">Часть товара мы сами производим, часть закупаем у других качественных поставщиков.</p>
                            </li>
                            <li>
                                <h3 class="question">2. Какие виды продукции есть у Вас?</h3>
                                <p class="answer">Мы предоставляем полный спектр строительных материалов: кухню, гардероб, окна и двери, паркет, освещение, мрамор, гранит, керамику, аксессуары и так далее.</p>
                            </li>
                            <li>
                                <h3 class="question">3. Если груз потеряется или повредится, то как мне поступить?</h3>
                                <p class="answer">Нужно преставить фото и видео поврежденных товаров, с нами связаться по почте или позвонить по телефону, так же можно обратиться к нашим преставителям ,мы  решим все вопросы. </p>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <h3 class="question">1. Срок поставки?</h3>
                                <p class="answer">Поставка Обычно 60дней (30дней срок изготовление, и доставка примерно 30 дней)</p>
                            </li>
                            <li>
                                <h3 class="question">2. Если у нас строительный проект не для себя лично, можем ли мы покупать ваш товар на организацию?</h3>
                                <p class="answer">Да, можете. Мы для компаний из Казахстана предоставили гранит для наружных стен, и для жилого дома в Канаде поставили кухни и гардеробы, для Якутска керамические плиты, противопажарные двери. Кроме того, мы много строительных материалов поставили в РФ и страны Центральной Азии. У нас в основном происходят поставки метериалов для масштабных проектов (строительные компании, ресторанный, гостиничный бизнес)</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        {{--底部--}}
        @include('home.footer')
    </body>

    <script>
        $(document).ready(function(){

            $('.slide ul>li').eq(0).addClass('current')
            $('.detail ul').eq(0).show().siblings().hide()

            $('.slide ul>li').click(function(){
                var li_index = $(this).index()
                $(this).addClass('current').siblings().removeClass('current')
                $('.detail ul').eq(li_index).show().siblings().hide()
            })

            $('.detail ul li').click(function(){
                $(this).children('.answer').slideToggle()
            })
        })
    </script>
</html>
