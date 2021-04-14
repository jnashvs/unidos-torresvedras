
@extends('front.layouts.app')

@section('content')

<div class="homepage">
    <div class="banner-join-us">

        <div class="two-box-full">
            <div class="left-block">
                <img src="images/logo-unidos-horizontal.png" class="home-img-desktop" alt="left img">
                <img src="images/logo-unidos-vertical.png" class="home-img-mobile" alt="left img">
            </div>
            <div class="right-block">
                <div class="description">
                    <span> Hoje, em vez de partidos, seguimos</span> <span class="red-fine">Unidos.</span>
                </div>
                <div class="join-us">
                    <a href="{{route('join-us')}}#form-refs">Junte-se a nós</a>
                </div>
            </div>
            <div class="autarquicas-mobile d-none">
                AUTÁRQUICAS 2021
                @svg('faixas coloridas-footer', ['class' => 'faixas coloridas-footer ml-auto'])

            </div>
        </div>

    </div>
    <div class="the-moviment">
        <div class="the-moviment-content">
            <div class="title">
                O Movimento
            </div>
            <div class="description">
                Hoje, Torres Vedras precisa de mais. Mais liderança, mais visão de futuro, estratégica, inteligível, geradora de emprego e de esperança.  Com coragem e liberdade, respondemos afirmativamente, fundando um movimento cívico que exige um melhor futuro para o concelho de Torres Vedras, com uma Câmara Municipal que tenha como referência servir e proteger.
            </div>
            <div class="know-more mx-auto">
                <a href="{{route('join-us')}}">Conheça o movimento</a>
            </div>
        </div>
    </div>

    <div class="green-bg-section">
        <!-- <div class="bg-img"></div> -->
        @svg('simbolo-verde', ['class' => 'bg-img'])

        <div class="description">
            <h1>
                O nosso programa baseia-se numa ação transformadora, que integra os cidadãos, que lhes permite a participação e o envolvimento, transparente e inovador, na forma de estar no serviço público.
            </h1>
            <h6>
                Preencha no formulário aquilo que quer ver e o que não quer ver no nosso concelho, freguesia, bairro ou rua. Unidos, saberemos responder ao desafio.
            </h6>
        </div>
    </div>

    <div class="section-formulario">

            <formulario-component url_politica="{{route('politica-privacidade')}}"/>

    </div>

    {{-- <div class="block-white" style="min-height: 200px; background-color: red;">

    </div> --}}

</div>
@endsection
