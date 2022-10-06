@extends('template')

@section('style')
    <link rel="stylesheet" href="/css/styleProdutos.css">
@stop

@section('corpo')
<!-- CORPO -->
<article id="first_section">
        <!-- banner -->
        <section class="banner-bistec">
            <img src="https://ik.imagekit.io/bistecpt/imagens/produtos/bistec-edu-intro.jpg" alt="Imagem de fundo do produto Bistec Cloud">
            <!--<div class="banner-bistec-texto">
                <h1>Bistec Portugal</h1>
                <h2>Serviços em tecnologia para todas as empresas</h2>
            </div>-->
        </section>

    <!-- texto produto -->
        <div class="produto-texto">
            <h1>Bistec Edu</h1>
            <p>
                Constantemente, a implementação de um software de gestão acaba por falhar, porque não é dada a atenção necessária ao profissional que utilizará a ferramenta no dia-a-dia. Para evitar este tipo de situação, o Bistec Edu fornece formação para toda a sua equipa explorar 100% da capacidade das soluções adquiridas.
            </p>

            <p>
                Muitas vezes a implantação de um software de gestão fracassa porque não é dada a atenção necessária ao profissional que irá, de facto, fazer uso da ferramenta no dia a dia: o utilizador.
            </p>

            <p>
                Por isso, um dos aspetos mais importantes é a questão  da formação. Quando o utilizador não recebe formação adequada não faz um bom uso da ferramenta e sente-se frustrado. Como resultado, ele pode passar a evitar o uso do software, voltando a executar tarefas da maneira como fazia antes da implementação.
            </p>

            <p>
                O ideal é que o utilizador receba formação constante (ou por um período maior), de forma personalizada, que lhe permita aprender a utilizar todos os recursos do software de gestão da melhor maneira possível. Este comprometimento com o utilizador gera resultados extremamente benéficos para a empresa, principalmente quanto à valorização do investimento realizado.
            </p>

            <p>
                Temos profissionais com mais de 25 anos de experiência académica. Formadores com CCP (Certificado de Competências Pedagógicas), e-Formadores e educadores certificados Google nível 1.
            </p>

            <h2>
                Acesso aos nossos recursos de formação:
            </h2>

            <div class="bistec-edu-plataformas">
                <a href="https://edu.bistec.com.br/ead/login/index.php" target="_blank"><img src="https://ik.imagekit.io/bistecpt/imagens/img-lg-bistec-edu.png" alt="Bistec Edu"></a>
                <a href="https://edu.bistec.com.br/ead/login/index.php" target="_blank"><img src="https://ik.imagekit.io/bistecpt/imagens/img-lg-bistec-edu-branco.png" alt="Bistec Edu"></a>
                <a href="https://www.youtube.com/c/BISTECEDU" target="_blank"><img src="../assets/images/youtube.png" alt="Canal do YouTube da Bistec Edu"></a>
                <a href="https://www.youtube.com/c/BISTECEDU" target="_blank"><img src="../assets/images/youtube_white.png" alt="Canal do YouTube da Bistec Edu"></a>
            </div>
        </div>
    </article>
@stop