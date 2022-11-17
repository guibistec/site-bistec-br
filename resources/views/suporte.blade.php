@extends('layouts.template')
@section('style')
    <link rel="stylesheet" href="/css/styleSuporte.css">
@stop

@section('corpo')
<!-- CORPO -->
<article id="first_section">
        <!-- banner -->
        <section class="bistec-suporte">
            <h1>Suporte Técnico</h1>
            <p>Este canal é exclusivo para clientes de contrato.</p>
            <!--<p>Helpdesk on-line aberto de <strong>segunda à sexta</strong>, das <strong>8:15h às 18:00h.</strong></p>-->
            <p>Caso a sua empresa ainda não seja parceira, fale conosco!
            </p>
            <p>Faça Download do Anydesk!</p>
            <div class="bt-dialog-anydesk">
                <a href="https://download.anydesk.com/AnyDesk.exe" class="button_text">DOWNLOAD ANYDESK</a>                   
            </div>

            <p>Faça Download do TeamViewer!</p>
            <div class="bt-dialog-teamviewer">
                <a href="http://download.teamviewer.com/download/TeamViewerQS_pt.exe" class="button_text">DOWNLOAD TEAMVIEWER</a>                   
            </div>

            <p>Fale conosco também pelo <strong><a class="suporte-wpp" href="https://api.whatsapp.com/send?phone=5513992101945" target="_blank">WhatsApp Business no +55 13 4042-0777</a></strong> ou pelo <strong><a href="https://t.me/BISTEC_BOT" target="_blank" class="suporte-telegram">Telegram – Procure por Atendimento BISTEC.</a></strong> </p>
        </section>
    </article>
@stop