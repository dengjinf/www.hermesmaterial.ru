<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Project</title>
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

        {{--工程案例内容--}}
        <div class="project-content">
            <div class="banner"><img src="{{ asset('index') }}/images/project/banner.png" alt=""></div>
            <div class="main container">
                <h2>Детали проекта</h2>
                <div class="series">
                    <ul id="series">
                        <li><span>Казахстан, Нур-Султан </span><span class="arrow"></span></li>
                        <li><span>Россия, Казань </span><span class="arrow"></span></li>
                        <li><span>Россия, Якутск </span><span class="arrow"></span></li>
                    </ul>
                    <div class="series-content">
                        <div class="list">
                            <div class="box">
                                <div class="item">
                                    <p class="title">Аппартаменты Коркем 3</p>
                                    <img src="{{ asset('index') }}/images/project/case-1.png" alt="">
                                    <div class="info">
                                        <p class="site">Казахстан, Нур-Султан</p>
{{--                                        <p class="square">1520 平方</p>--}}
                                        <img src="{{ asset('index') }}/images/project/postmark.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list">
                            <div class="box">
                                <div class="item">
                                    <p class="title">Ресторан Регина</p>
                                    <img src="{{ asset('index') }}/images/project/case-3.png" alt="">
                                    <div class="info">
                                        <p class="site">Россия, Казань</p>
                                        <img src="{{ asset('index') }}/images/project/postmark.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list">
                            <div class="box">
                                <div class="item">
                                    <p class="title">Версаль торговый центр</p>
                                    <img src="{{ asset('index') }}/images/project/case-2.png" alt="">
                                    <div class="info">
                                        <p class="site">Россия, Якутск</p>
                                        <img src="{{ asset('index') }}/images/project/postmark.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="separate"></div>
                <div class="detail">
                    <div class="series">
                        <a name="series-1"></a>
                        <div class="detail-row">
                            <div class="series-name"><span style="position: relative;">Казахстан, Нур-Султан </span><span class="arrow"></span></div>
                            <div class="project-name">Аппартаменты Коркем 3</div>
                            <p class="customer">Клиент: строительная компания TOO IHLAS GROUP</p>
                            <p class="sort">Категория: аппартаменты</p>
                            <p class="site">Адрес: Казахстан, Нур-Султан</p>
                            <div class="project-img">
                                <img src="{{ asset('index') }}/images/project/project-img.png" alt="">
                                <img class="postmark" src="{{ asset('index') }}/images/project/bigpostmark.png" alt="">
                            </div>
                            <div class="story">
                                <p class="title">История проекта</p>
                                <p class="narrative">
                                    Строительная компания TOO IHLAS GROUP занимает ведущее место в городе НурСултан в строительной отрасли. Их исполнительный директор Даулет Джакишев в 2017 году три раза прилетал к нам,закупал фасадное освещение、керамогранит、мрамор для пола и панно、противопожарные двери и клинкерные плиты. При установке      противопожарных дверей был небольшой вопрос, но мы быстро его решили и не задержали строительство. После завершения проекта они пригласили  нашего директора Чай Хунбо в гости, и достигли соглашения, что для аппартаментов Коркем 4 материалы тоже будем поставлять мы.
                                </p>
                            </div>
                            <div class="drawing">
{{--                                <p class="title">Чертежи дизайна</p>--}}
{{--                                <div class="picture">--}}
{{--                                    <img src="{{ asset('index') }}/images/project/casedetail-1-1.png" alt="">--}}
{{--                                </div>--}}
                                <p class="title">Изображение проекта</p>
                                <div class="picture">
                                    <img src="{{ asset('index') }}/images/project/casedetail-1-1.png" alt="">
                                    <img src="{{ asset('index') }}/images/project/casedetail-1-2.png" alt="">
                                    <img src="{{ asset('index') }}/images/project/casedetail-1-3.png" alt="">
                                    <img src="{{ asset('index') }}/images/project/casedetail-1-4.png" alt="">
                                    <img src="{{ asset('index') }}/images/project/casedetail-1-5.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="series">
                        <a name="series-2"></a>
                        <div class="detail-row">
                            <div class="series-name"><span style="position: relative;">Россия, Казань </span><span class="arrow"></span></div>
                            <div class="project-name">Ресторан Регина</div>
                            <p class="customer">Клиент: дизайнерская комната Азарова & Зинурова</p>
                            <p class="sort">Категория: Регина</p>
                            <p class="site">Адрес: Россия, Казань</p>
                            <div class="project-img">
                                <img src="{{ asset('index') }}/images/project/project-img.png" alt="">
                                <img class="postmark" src="{{ asset('index') }}/images/project/bigpostmark.png" alt="">
                            </div>
                            <div class="story">
                                <p class="title">История проекта</p>
                                <p class="narrative">
                                    В 2018 году летом я и коллега Зарема впервые были в городе Казань.В этом городе у нас не было знакомых. Мы полетели искать партнёров. Мы были незнакомы с местностью и даже не знали с чего        начинать. Мы просматривали интернет, звонили много раз но получали одни отказы. Вдруг дизайн-студия Азарова&Зинурова попалась нам на  глаза, возникло такое чувство, что мы с ними знакомы уже много лет.   Мы набрали номер, Наташа взяла трубку, мы поговорили по телефону,ответили на все их вопросы и договорились увидеться в кафе. Вот так они стали нашим первым партнёром в Казани, а мы их в  Китае.  После 2 месяцев Наташа с ее клиентами прилетели к нам, мы вместе выполнили ремонт для ресторана Регина,поставили мрамор、искуственные растения、уличную мебель、светильники、фонтан и так далее. А так же показали им город Гуанчжоу и Фошань, это поездка оставила у них глубокое впечатление.
                                </p>
                            </div>
                            <div class="drawing">
                                <p class="title">Изображение проекта</p>
                                <div class="picture">
                                    <img src="{{ asset('index') }}/images/project/casedetail-2-2.png" alt="">
                                    <img src="{{ asset('index') }}/images/project/casedetail-2-3.png" alt="">
                                    <img src="{{ asset('index') }}/images/project/casedetail-2-7.png" alt="">
                                    <img src="{{ asset('index') }}/images/project/casedetail-2-6.png" alt="">
                                    <img src="{{ asset('index') }}/images/project/casedetail-2-4.png" alt="">
                                    <img src="{{ asset('index') }}/images/project/casedetail-2-5.png" alt="">
                                    <img src="{{ asset('index') }}/images/project/casedetail-2-1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="series">
                        <a name="series-3"></a>
                        <div class="detail-row">
                            <div class="detail-row">
                                <div class="series-name"><span style="position: relative;">Россия, Якутск </span><span class="arrow"></span></div>
                                <div class="project-name">Версаль торговый центр</div>
                                <p class="customer">Клиент: Дугар</p>
                                <p class="sort">Категория: торговый центр</p>
                                <p class="site">Адрес: Россия, Якутск</p>
                                <div class="project-img">
                                    <img src="{{ asset('index') }}/images/project/project-img.png" alt="">
                                    <img class="postmark" src="{{ asset('index') }}/images/project/bigpostmark.png" alt="">
                                </div>
                                <div class="story">
                                    <p class="title">История проекта</p>
                                    <p class="narrative">
                                        Было очень высокоэффективное сотрудничество с Дугаром. В конце       ноября завод предоставил проектную документацию и расчет, он                  прилетел в начале декабря и сразу перевел нам предоплату, дальше до        февраля следующего года все было отправлено  за границу. 212тонн              метталоконструкций - 12 фур при помощи завода и транспортной                  компании мы очень успешно завершили работу.
                                    </p>
                                </div>
                                <div class="drawing">
                                    <p class="title">Чертежи дизайна</p>
                                    <div class="picture">
                                        <img src="{{ asset('index') }}/images/project/casedetail-3-1.png" alt="">
                                    </div>
                                    <p class="title">Изображение проекта</p>
                                    <div class="picture">
                                        <img src="{{ asset('index') }}/images/project/casedetail-3-2.png" alt="">
                                        <img src="{{ asset('index') }}/images/project/casedetail-3-5.png" alt="">
                                        <img src="{{ asset('index') }}/images/project/casedetail-3-3.png" alt="">
                                    </div>
                                </div>
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

        $(window).load(function(){
            if (window.location.hash){
                //锚点链接
                var series = window.location.hash.substr(window.location.hash.length-1,1) - 1
                $('#series>li').eq(series).addClass('active').find('.arrow').addClass('change')
                $(".series-content>.list").eq(series).show().siblings().hide()
                $(".project-content .main .detail>.series").eq(series).show().siblings().hide()
                $(".project-content .main .detail .series>.detail-row").eq(series).show().siblings().hide()
            }else{
                $('#series>li').eq(0).addClass('active').find('.arrow').addClass('change')
                $(".series-content>.list").eq(0).show().siblings().hide()
                $(".project-content .main .detail>.series").eq(0).show().siblings().hide()
                $(".project-content .main .detail .series>.detail-row").eq(0).show().siblings().hide()
            }
        });

        $("#series>li").click(function () {
            $(this).addClass('active').find('.arrow').addClass('change').parents('li').siblings().removeClass('active').find('.arrow').removeClass('change')
            var index = $(this).index()
            $(".series-content>.list").eq(index).show().siblings().hide()
            $(".project-content .main .detail>.series").eq(index).show().siblings().hide()
        })

        $(".series-content .list .box").click(function(){
            var parent_index = $(this).parent('.list').index()
            var index = $(this).index()
            console.log(parent_index)
            console.log(index)
            $(".project-content .main .detail .series").eq(parent_index).find('.detail-row').eq(index).show().siblings().hide()
        })
    </script>
</html>
