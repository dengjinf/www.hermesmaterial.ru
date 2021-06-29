<div class="footer">
    <div class="footer-content">
        <div class="box container">
            <div class="footer-logo"><img src="{{ asset('index') }}/images/footer-logo.png" alt=""></div>
            <div class="particular">
                <div class="social">
                    <p class="title">Социальная платформа</p>
                    <ul>
                        <li><div class="li-box"><img src="{{ asset('index') }}/images/footer-instagram.png" alt=""><a
                                    href="">instagram</a></div></li>
                        <li><div class="li-box"><img src="{{ asset('index') }}/images/footer-facebook.png" alt=""><a
                                    href="">facebook</a></div></li>
                        <li><div class="li-box"><img src="{{ asset('index') }}/images/footer-youtube.png" alt=""><a
                                    href="">youtube</a></div></li>
                        <li><div class="li-box"><img src="{{ asset('index') }}/images/footer-twitter.png" alt=""><a
                                    href="">twitter</a></div></li>
                    </ul>
                </div>
                <div class="catalog">
                    <p class="title">Каталог</p>
                    @if ($category->data)
                    <ul>
                        @foreach ($category->data as $value)
                            <li><a href="https://mall.hermesmaterial.ru/index.php?route=product/category&path={{ $value->categoryId }}">{{ $value->name }}</a></li>
                        @endforeach
                    </ul>
                    @endif
                </div>
                <div class="contact">
                    <p class="title">Контактная информация</p>
                    <ul>
                        <li><div class="li-box"><img src="{{ asset('index') }}/images/footer-phone.png" alt="">7-800-5555-277</div></li>
                        <li><div class="li-box"><img src="{{ asset('index') }}/images/footer-address.png" alt="">Город Фошань, район Чаньчен,  улица Цзихуалю, 3, Цзиудингоцзи 1, здание 2, офис 2501</div></li>
                        <li><div class="li-box"><img src="{{ asset('index') }}/images/footer-email.png" alt="">hermes@hermesexpo.ru</div></li>
                        <li><div class="li-box"><img src="{{ asset('index') }}/images/footer-web.png" alt="">https://mall.hermesmaterial.ru</div></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
