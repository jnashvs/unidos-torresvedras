@extends('front.layouts.app')

@section('content')

<div class="join-us extend homepage">
    <div class="banner-join-us join-us-page">

        <div class="two-box-full">
            <div class="left-block">
                <a href="{{route('home-page')}}"><img src="images/logo-unidos-vertical.png" alt="left img join -us"></a>
            </div>
            <div class="right-block">
                <div class="title">
                    O Movimento
                </div>
                <div class="social share">
                    <span class="linha-titulo"></span> <span class="share-title">Partilhar</span>
                    <a target="_blank" href="https://twitter.com/Unidosportv" class="social-a mx-1">@svg('twitter', ['class' => 'icon-social twitter'])</a>
                    <a target="_blank" href="https://www.facebook.com/Unidosportorresvedras" class="social-a mx-1">@svg('facebook', ['class' => 'icon-social facebook'])</a>
                    <a target="_blank" href="https://www.instagram.com/unidosportorresvedras/" class="social-a mx-1">@svg('instagram', ['class' => 'icon-social instagram'])</a>
                    <a target="_blank" href="" class="social-a mx-1">@svg('youtube', ['class' => 'icon-social youtube'])</a>
                    <a target="_blank" href="" class="social-a mx-1">@svg('rss', ['class' => 'icon-social rss'])</a>
                </div>
            </div>
        </div>

        <div class="resume-description">
            <div class="full-text">
                <div class="title">
                    O que é um movimento cívico?
                </div>
                <div class="description">
                    <p>
                        A possibilidade de grupos de cidadãos apresentarem listas a órgãos autárquicos representa uma mudança no panorama do poder local. Um movimento cívico como o <b>Unidos por Torres Vedras</b> abre-se à participação de todos, formalizando-se numa lista composta por cidadãos livres e independentes. Um pouco por todo o país, listas independentes têm apresentado resposta às necessidades e ambições das populações, alargando o debate público, reforçando a cidadania e permitindo a participação ativa dos cidadãos nos órgãos de poder.
                    </p>
                    <br><br>

                </div>

                <div class="title">
                    O Nosso Movimento.
                </div>
                <div class="description">
                    <p>
                        Torres Vedras é ponto central na produção agrícola do país, no cruzamento de rotas económicas, turísticas e culturais, com uma linha marítima de excelência, riquezas naturais únicas, um potencial enorme para ser referência na qualidade de vida.

                    </p>
                    <p>
                        A identidade de Torres Vedras faz-se dessa ambição constante de querer mais e melhor, nessa confiança de quem sabe ser capaz, que tem a competência para aproveitar todas as suas potencialidades e reúne a credibilidade para unir à sua volta quem queira abrir novos caminhos para o futuro do nosso concelho.
                    </p>
                    <p>
                        No entanto, a gestão da nossa autarquia tem ficado para trás na resposta aos desafios colocados pelos novos tempos que vivemos. Os partidos não apresentam alternativas, afastados das pessoas e presos a interesses próprios. A população precisa de uma ideia de esperança no futuro.
                    </p>
                    <p>
                        Unidos por Torres Vedras é um movimento cívico que responde à necessidade coletiva de mudança na sociedade, caracterizando-se por servir e proteger os interesses das populações do concelho. Uma ação transformadora que envolva os cidadãos, que lhes permita a participação e envolvimento, que seja transparente e inovadora na forma de estar no serviço público.
                    </p>
                    <p>
                        Os desafios são enormes mas também muito estimulantes. É tempo de nos unirmos, de ouvirmos quem sabe, reunir consenso e transformar. Criar uma visão de confiança, competência e credibilidade para que se possa ver, de forma planeada, o caminho a seguir. Somos um movimento aberto à participação de todos os cidadãos que queiram unir-se, de forma a, juntos, construirmos um futuro que é, de facto, possível!
                    </p>
                    <p>
                        Hoje, em vez de partidos, seguimos unidos.
                    </p>
                </div>
            </div>
        </div>

    </div>

    <div class="green-bg-section join-page">
        <!-- <div class="bg-img"></div> -->
        @svg('simbolo-verde', ['class' => 'bg-img'])

        <div class="description">
            <h1> <span id="form-refs" style="margin-top: -3px;padding-bottom: 3px;display: block;"></span>

                Unidos somos mais fortes!
            </h1>

            <h6>
                <b>Porquê?</b> Porque Unidos participamos no futuro do nosso concelho. <br>
                A construção do programa baseia-se numa ação transformadora que integra os cidadãos, que lhes permite a participação e envolvimento, de uma maneira transparente e inovadora na forma de estar no serviço público. <br>
                As suas ideias, ambições e projetos, vão fazer parte do futuro do concelho, integrando-se no debate que construirá em Torres Vedras um lugar melhor para todos os que aqui vivem.
            </h6>


        </div>
    </div>

    <div class="section-formulario">

        <formulario-component :joinpage="1" url_politica="{{route('politica-privacidade')}}" />

    </div>

</div>
@endsection