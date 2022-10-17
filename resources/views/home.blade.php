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

        <!-- APRESENTAÇÃO EMPRESA -->
        <section class="bistec_presentation">
            <div class="image_presentation">
                <img src="https://www.bistec.com.br/wp-content/uploads/2014/11/home-services-1024x746.png" alt="" width="410" height="380">
            </div>
            <div class="text_presentation">
                <h1>A Nova Bistec</h1>
                <h2>Desde 1999, em constante evolução: </h2>
                <p>
                    Entregamos soluções em tecnologia que atendem a todas as necessidades da sua empresa, unindo o que há de mais inovador com um atendimento personalizado.
                </p>
            </div>
        </section>
        <!-- PRODUTOS -->

        <section class="bistec-produtos">
            <a href="/produtos/automacao" id="bistec-automacao">
                <img src="{{$automacao}}" alt="Bistec Automação" width="610" height="210">
                <img src="{{$automacaowhite}}" alt="Bistec Automação" width="610" height="210">
            </a>
            <a href="/produtos/cloud" id="bistec-cloud">
                <img src="{{$cloud}}" alt="Bistec Cloud" width="610" height="210">
                <img src="{{$cloudwhite}}" alt="Bistec Cloud" width="610" height="210">
            </a>
            <a href="/produtos/edu" id="bistec-edu">
                <img src="{{$edu}}" alt="Bistec Edu" width="610" height="210">
                <img src="{{$eduwhite}}" alt="Bistec Edu" width="610" height="210">
            </a>
            <a href="/produtos/ged" id="bistec-ged">
                <img src="{{$ged}}" alt="Bistec GED" width="610" height="210">
                <img src="{{$gedwhite}}" alt="Bistec GED" width="610" height="210">
            </a>
            <a href="/produtos/green" id="bistec-green">
                <img src="{{$green}}" alt="Bistec Green" width="610" height="210">   
                <img src="{{$greenwhite}}" alt="Bistec GED" width="610" height="210">      
            </a>
            <a href="/produtos/lgpd" id="bistec-lgpd">
                <img src="{{$lgpd}}" alt="Bistec LGPD" width="610" height="210">
                <img src="{{$lgpdwhite}}" alt="Bistec LGPD" width="610" height="210">
            </a>
            <a href="/produtos/msp" id="bistec-msp">
                <img src="{{$msp}}" alt="Bistec MSP" width="610" height="210">
                <img src="{{$mspwhite}}" alt="Bistec MSP" width="610" height="210">
            </a>
            <a href="/produtos/outsourcing" id="bistec-outsourcing">
                <img src="{{$outsourcing}}" alt="Bistec Outsourcing" width="610" height="210">
                <img src="{{$outsourcingwhite}}" alt="Bistec Outsourcing" width="610" height="210">
            </a>
            <a href="/produtos/pay" id="bistec-pay">
                <img src="{{$pay}}" alt="Bistec Pay" width="610" height="210">
                <img src="{{$paywhite}}" alt="Bistec Pay" width="610" height="210">
            </a>
            <a href="/produtos/renting" id="bistec-renting">
                <img src="{{$renting}}" alt="Bistec Renting" width="610" height="210">
                <img src="{{$rentingwhite}}" alt="Bistec Renting" width="610" height="210">
            </a>
            <a href="/produtos/sign" id="bistec-sign">
                <img src="{{$sign}}" alt="Bistec Sign" width="610" height="210">
                <img src="{{$signwhite}}" alt="Bistec Sign" width="610" height="210">
            </a>
            <a href="/produtos/soft" id="bistec-soft">
                <img src="{{$soft}}" alt="Bistec Soft" width="610" height="210">
                <img src="{{$softwhite}}" alt="Bistec Soft" width="610" height="210">
            </a>
            <a href="/produtos/voip" id="bistec-voip">
                <img src="{{$voip}}" alt="Bistec Voip" width="610" height="210">
                <img src="{{$voipwhite}}" alt="Bistec Voip" width="610" height="210">
            </a>
            <a href="/produtos/wifi" id="bistec-wifi">
                <img src="{{$wifi}}" alt="Bistec wifi" width="610" height="210">
                <img src="{{$wifiwhite}}" alt="Bistec wifi" width="610" height="210">
            </a>
            <a href="/produtos/xml" id="bistec-xml">
                <img src="{{$xml}}" alt="Bistec XML" width="610" height="210">
                <img src="{{$xmlwhite}}" alt="Bistec XML" width="610" height="210">
            </a>
        </section>
    </article>
@stop