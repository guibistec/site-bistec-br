@extends('template')

@section('style')
    <link rel="stylesheet" href="/css/styleContato.css">
@stop

@section('corpo')
<!-- CORPO -->
<article id="first_section" class="article_contact">
        <div class="formulario">
            <form action="email/" method="POST" id="formContato">
                <h1>Formulário para Contato</h1>
                <div class="campos">
                    <label>Nome completo:</label><br>
                    <input type="text" name="nomeRemetente" placeholder="Digite seu nome aqui" required>
                </div>
                
                <div class="campos">
                    <label>Seu endereço de e-mail:</label><br>
                    <input type="email" name="emailRemetente" placeholder="Digite seu endereço de e-mail aqui" required>
                </div>            
                
                <div class="campos">
                    <label>Assunto do e-mail:</label><br>
                    <input type="text" name="assuntoEmail" placeholder="Digite aqui sobre o que seu e-mail se trata" required>
                </div>
                
                <div class="campos">
                    <label> Seu comentário: </label><br>
                    <textarea name="conteudoEmail" placeholder="Deixe seu comentário" required></textarea>
                </div>
                
    
                <div class="campos">
                    <input type="submit" name="enviarEmail" value="Enviar" id="btEnviaForm">
                </div>
                
            </form>
        </div>
    </article>
@stop