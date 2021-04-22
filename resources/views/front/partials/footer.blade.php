<div class="footer-container">
    <div class="footer-buttons">

        {{-- this is only available for menu page page --}}
        <div class="menu-social-midia d-none">
            <a target="_blank" href="https://twitter.com/Unidosportv" class="social-a mx-1" >@svg('twitter', ['class' => 'icon-social twitter'])</a>
                <a target="_blank" href="https://www.facebook.com/Unidosportorresvedras" class="social-a mx-1" >@svg('facebook', ['class' => 'icon-social facebook'])</a>
                <a target="_blank" href="https://www.instagram.com/unidosportorresvedras/" class="social-a mx-1" >@svg('instagram', ['class' => 'icon-social instagram'])</a>
                <a target="_blank" href="" class="social-a mx-1" >@svg('youtube', ['class' => 'icon-social youtube'])</a>
                <a target="_blank" href="" class="social-a mx-1" >@svg('rss', ['class' => 'icon-social rss'])</a>
        </div>
        <div class="left-button">
            <a href="{{route('politica-privacidade')}}" class="policy-privacy">Política de Proteção de Dados e Privacidade</a>
                <span class="mx-2">&#8226;</span>
                <a href="{{route('politica-termos-gerais')}}" class="politica-termos-gerais">Termos e Condições Gerais de Utilização</a>
                <span class="mx-2">&#8226;</span>
            <a href="{{route('politica-cookies')}}" class="policy-cookies">Política de Cookies</a>
        </div>
        <div class="right-button">
            <a href="www.slingshot.pt">
                Por <span>Slingshot</span> {{date("Y")}}
            </a>
        </div>
    </div>
</div>
<div class="faixa">
    <div class="colado-direito text-right">
        <img src="images/svg/faixas coloridas-footer.svg" class="faixas coloridas-footer ml-auto" alt="">
    </div>
</div>
