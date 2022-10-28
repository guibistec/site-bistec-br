@extends('template')

@section('style')
    <link rel="stylesheet" href="/css/styleProdutos.css">
@stop

@section('corpo')
<!-- CORPO -->
<article id="first_section">
        <!-- banner -->
        <section class="banner-bistec">
            <img src="https://ik.imagekit.io/bistecbr/hostfiber.jpg" alt="Imagem de fundo do Hostfiber"> 
            <!--<div class="banner-bistec-texto">
                <h1>Bistec Portugal</h1>
                <h2>Serviços em tecnologia para todas as empresas</h2>
            </div>-->
        </section>

    <!-- texto produto -->
        <div class="produto-texto">
            <h1>HostFiber – Fibra Óptica</h1>
            <p>
                A HostFiber opera backbone 100% em fibra óptica com mais de 3.000km de extensão e presença em 108 cidades do estado de São Paulo.
            </p>

            <p>
                Infraestrutura de ponta, gestão com foco na qualidade e valorização do potencial humano são diferenciais que mantém a HostFiber em posição de destaque no mercado.
            </p>

            <p>
                Ainda restam dúvidas sobre qual solução adquirir? <a class="link_msp" target="_blank" href="https://api.whatsapp.com/send?phone=5513992101945&text=Ol%C3%A1,%20estou%20com%20uma%20d%C3%BAvida%20sobre%20a%20solu%C3%A7%C3%A3o%20Bistec%20MSP">Converse com um de nossos atendentes sobre a solução Hostfiber</a>
            </p>
        </div>
    </article>
@stop