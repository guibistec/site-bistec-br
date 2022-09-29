@extends('template')

@section('style')
    <link rel="stylesheet" href="/css/styleProdutos.css">
@stop

@section('corpo')
<!-- CORPO -->
<article id="first_section">
        <!-- banner -->
        <section class="banner-bistec">
            <img id="img-banner" src="https://ik.imagekit.io/bistecpt/imagens/produtos/bistec-cloud-intro.jpg" alt="Imagem de fundo do produto Bistec Cloud">
            <!--<div class="banner-bistec-texto">
                <h1>Bistec Portugal</h1>
                <h2>Serviços em tecnologia para todas as empresas</h2>
            </div>-->
        </section>

        <!-- texto produto -->
        <div class="produto-texto">
            <h1>Bistec Cloud</h1>
            <p>
                As informações corporativas estão cada vez mais digitalizadas e online, por isso as empresas devem prevenir-se contra a perda de informações importantes.
            </p>
            <p>
                Esta solução ajuda-o a proteger os arquivos que a sua empresa precisa e restaura-osrapidamente após uma falha do sistema ou perda de dados.
            </p>
            <p>
                O Bistec Cloud é a solução ideal de backup em nuvem, seguro e elástico, sem custos de investimentos em infraestrutura e de acordo com o Regulamento Geral de Proteção de Dados (RGPD).
            </p>

            <p>
                <a class="nice_button" target="_blank" href="https://bistec.backupmanager.info/">SAIBA MAIS</a>
            </p>
        </div>
    </article>
@stop