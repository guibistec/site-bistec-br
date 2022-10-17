@extends('template')

@section('style')
    <link rel="stylesheet" href="/css/styleProdutos.css">
@stop

@section('corpo')
<article id="first_section">
        <!-- banner -->
        <section class="banner-bistec">
            <img src="https://ik.imagekit.io/bistecpt/imagens/produtos/bistec-renting-intro.jpg" alt="Imagem de fundo do produto Bistec Renting">
            <!--<div class="banner-bistec-texto">
                <h1>Bistec Portugal</h1>
                <h2>Serviços em tecnologia para todas as empresas</h2>
            </div>-->
        </section>

    <!-- texto produto -->
    <div class="produto-texto">
        <h1>Bistec Renting</h1>
        <p>
            Mantenha a sua liquidez adquirindo os sistemas de gestão e TI através da locação de equipamentos.
        </p>
        <p>
            Esta solução permite que preserve as suas linhas de crédito junto aos bancos e assim faça um investimento rentável durante o ciclo de vida dos seus equipamentos, melhorando a sua classificação de crédito.
        </p>
        <p>
            Tenha acesso a tecnologia de ponta e, quando o contrato acabar, faça upgrade dos seus equipamentos.
        </p>
        
        <p>
            <h4>
                Benefícios de trabalhar com o Bistec Renting:
            </h4>
    <br>
            <ul>
                <li>- Não descapitaliza a empresa</li>
                <li>- Incentivos fiscais </li>
                <li>- Parcelas Fixas </li>
                <li>- Equipamentos sempre Atualizados</li>
                <li>- Maior Eficiência em TI</li>
                <li>- Locação 100% sem entrada</li>
            </ul>
     <!--
        <p>
            <a class="nice_button" target="_blank" href="https://api.whatsapp.com/send?phone=5513992101945">ENTRE EM CONTACTO</a>
        </p>  --> 
    </div>
    </article>
@stop