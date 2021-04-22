@extends('front.layouts.app', ['footersize' => 'footer-page-menu'])

@section('content')



<div class="menu-content-full">
    <div class="left-content">
        <a href="{{route('home-page')}}"><img src="images/logo-unidos-vertical.png" class="m-0" alt="left img join -us"></a>
    </div>
    <div class="right-content">

        <div class="menu-header">
            <span class="linha-titulo"></span><span>Menu</span>
        </div>
        <div class="menu-contents">
            <a href="{{route('join-us')}}">O MOVIMENTO</a>
            <!-- <a href="">PROGRAMA ELEITORAL</a> -->
            <a href="{{route('candidatos.index')}}">CANDIDATOS</a>
            <!-- <a href="">AGENDA</a> -->
        </div>
        <div class="join-us">
                    <a href="{{route('join-us')}}#form-refs">Junte-se a nós</a>
        </div>

    </div>
</div>

@endsection
