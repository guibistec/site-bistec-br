@extends('template')
@section('corpo')
    <!-- CORPO -->
    <article id="first_section">
        <!-- banner -->
        <section class="banner-bistec" id="imagemUnica">
            <img id="img-banner" src="https://ik.imagekit.io/bistecpt/imagens/banner-moliceiro_lQJqvFZuv.png" alt="Imagem de fundo com o moliceiro da cidade de Aveiro" width="1000" height="1000">
            <div class="banner-bistec-texto">
                <h1>Bistec Brasil</h1>
                <h2>Tecnologia para empresas de todos os tamanhos</h2>
            </div>
        </section>
        <!-- PRODUTOS -->

        <section class="bistec-produtos">
            <img src="{{$automacao}}" alt="Bistec Automação" width="610" height="210">
            <img src="{{$cloud}}" alt="Bistec Cloud" width="610" height="210">
            <img src="{{$edu}}" alt="Bistec Edu" width="610" height="210">
            <img src="{{$ged}}" alt="Bistec GED" width="610" height="210">
            <img src="{{$green}}" alt="Bistec Green" width="610" height="210">
            <img src="{{$lgpd}}" alt="Bistec LGPD" width="610" height="210">
            <img src="{{$msp}}" alt="Bistec MSP" width="610" height="210">
            <img src="{{$outsourcing}}" alt="Bistec MSP" width="610" height="210">
            <img src="{{$pay}}" alt="Bistec MSP" width="610" height="210">
            <img src="{{$renting}}" alt="Bistec MSP" width="610" height="210">
            <img src="{{$sign}}" alt="Bistec MSP" width="610" height="210">
            <img src="{{$sign}}" alt="Bistec MSP" width="610" height="210">
            <img src="{{$soft}}" alt="Bistec MSP" width="610" height="210">
            <img src="{{$voip}}" alt="Bistec MSP" width="610" height="210">
            <img src="{{$wifi}}" alt="Bistec wifi" width="610" height="210">
            <img src="{{$xml}}" alt="Bistec MSP" width="610" height="210">
        </section>
    </article>
@stop