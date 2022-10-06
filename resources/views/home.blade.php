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
        <section class="bistec-produtos" id="bistec-automacao">
                <img src="https://ik.imagekit.io/bistecpt/imagens/img-lg-bistec-automacao_unO6Y7PW8m.png" alt="Bistec Automação" width="610" height="210"> 
                <img src="https://ik.imagekit.io/bistecpt/imagens/img-lg-bistec-automacao-branco_r_afgqS8gN.png" alt="Bistec Automação" width="610" height="210">
                <div class="texto-produtos">
                    <h2>Troque a anotação pela automação</h2>
                    <h3>Facilite a sua gestão e o consumo dos seus clientes. Automatize!</h3>

                    <a href="/produtos/automacao" class="button_text bt-dialog">Saiba Mais · Bistec Automação</a>     
                </div>
        </section>

        <section class="bistec-produtos" id="bistec-cloud">
            <img src="https://ik.imagekit.io/bistecpt/imagens/img-lg-bistec-cloud_c0xiNBXYJa.png" alt="Bistec Cloud" width="610" height="210">
            <img src="https://ik.imagekit.io/bistecpt/imagens/img-lg-bistec-cloud-branco_YOnT9yY0l8.png" alt="Bistec Cloud" width="610" height="210">
                <div class="texto-produtos">
                    <h2>Backup corporativo na nuvem</h2>
                    <h3>Guarde o que é importante com segurança, sem ocupar espaço algum!</h3>

                    <a href="/produtos/cloud" class="button_text bt-dialog">Saiba Mais · Bistec Cloud</a>
                </div>
        </section>

        <section class="bistec-produtos" id="bistec-edu">
            <img src="https://ik.imagekit.io/bistecpt/imagens/img-lg-bistec-edu_PSjyfl7MM5.png" alt="Bistec Edu" width="610" height="210">
            <img src="https://ik.imagekit.io/bistecpt/imagens/img-lg-bistec-edu-branco_sPWJsPTdbd.png" alt="Bistec Edu" width="610" height="210">
                <div class="texto-produtos">
                    <h2>Treinamentos: use a tecnologia com capacidade máxima.</h2>
                    <h3>Faça o treinamento com toda a sua equipe e explore 100% da capacidade das soluções adquiridas.</h3>
                    <a href="/produtos/edu" class="button_text bt-dialog">Saiba Mais · Bistec Edu</a>
                </div>
        </section>

        <section class="bistec-produtos" id="bistec-msp">
            <img src="https://ik.imagekit.io/bistecpt/imagens/img-lg-bistec-msp_B0X1--rWjF.png" alt="Bistec MSP" width="610" height="210">
            <img src="https://ik.imagekit.io/bistecpt/imagens/img-lg-bistec-msp-branco_c3-cULE23-.png" alt="Bistec MSP" width="610" height="210">
                <div class="texto-produtos">
                    <h2>Você sabe o que é um MSP?</h2>
                    <h3>
                        A Bistec atua utilizando ferramentas gerenciais para analisar em tempo real o que esta acontecendo com seu sistemas.
                    </h3>
                    
                    <a href="/produtos/msp" class="button_text bt-dialog">Saiba Mais · Bistec MSP</a>

                </div>
        </section>

        <section class="bistec-produtos" id="bistec-outsourcing" >
            <img src="https://ik.imagekit.io/bistecpt/imagens/img-lg-bistec-outsourcing_cM1x9Psys9.png" alt="Bistec OutSourcing" width="610" height="210">
            <img src="https://ik.imagekit.io/bistecpt/imagens/img-lg-bistec-outsourcing-branco_apnbX3QYz.png" alt="Bistec OutSourcing" width="610" height="210">
                <div class="texto-produtos">
                    <h2>Contrate outsourcing de TI</h2><p>
                    <h3>Contrate técnicos preparados para cuidar de sua empresa.</h3>
                    
                    <a href="/produtos/outsourcing" class="button_text bt-dialog">Saiba Mais · Bistec Outsourcing</a>
                </div>
        </section>

        <section class="bistec-produtos" id="bistec-renting" >
            <img src="https://ik.imagekit.io/bistecpt/imagens/img-lg-bistec-renting_cK1Za3wHw.png" alt="Bistec Renting" width="610" height="210">
            <img src="https://ik.imagekit.io/bistecpt/imagens/img-lg-bistec-renting-branco_xiNheO_TG.png" alt="Bistec Renting" width="610" height="210">
                <div class="texto-produtos">
                    <h2>Renting de TI</h2>
                    <h3>Faça a locação de equipamentos, e mantenha a liquidez de sua empresa</h3>
                    
                    <a href="/produtos/renting" class="button_text bt-dialog">Saiba Mais · Bistec Renting</a>
                </div>
        </section>

        <section class="bistec-produtos" id="bistec-gpdr" >
            <img src="https://ik.imagekit.io/bistecpt/imagens/img-lg-bistec-rgpd_0IWki3lZ8n.png" alt="Bistec RGPD" width="610" height="210">
            <img src="https://ik.imagekit.io/bistecpt/imagens/img-lg-bistec-rgpd-branco_rM3Ix9jp9.png" alt="Bistec RGPD" width="610" height="210">
            <div class="texto-produtos">
                <h2>Adeque sua empresa ao RGPD</h2>
                <h3>
                    Estar preparado para cumprir o Regulamento Geral de Proteção de Dados e proteger contra multas e fugas de informações de terceiros
                </h3>
                
                <a href="/produtos/rgpd" class="button_text bt-dialog">Saiba Mais · Bistec RGPD</a>
            </div>
        </section>

        <section class="bistec-produtos" id="bistec-soft" >
            <img src="https://ik.imagekit.io/bistecpt/imagens/img-lg-bistec-soft_XRbY6Mmd5.png" alt="Bistec Soft" width="610" height="210">
            <img src="https://ik.imagekit.io/bistecpt/imagens/img-lg-bistec-soft-branco_WIS0Fccj7.png" alt="Bistec Soft" width="610" height="210">
                <div class="texto-produtos">
                    <h2>Todo tipo de software</h2><p>
                    <h3>O Bistec soft agora cuida do seu site e contas de e-mail!</h3>
                    
                    <a href="/produtos/soft" class="button_text bt-dialog">Saiba Mais · Bistec Soft</a>
                </div>
        </section>

        <section class="bistec-produtos" id="bistec-wifi" >
            <img src="https://ik.imagekit.io/bistecpt/imagens/img-lg-bistec-wifi_SucXMC_nx.png" alt="Bistec wifi" width="610" height="210">
            <img src="https://ik.imagekit.io/bistecpt/imagens/img-lg-bistec-wifi-branco_zJt9JTD5y4.png" alt="Bistec wifi" width="610" height="210">
            <div class="texto-produtos">
                <h2>Conheça a nossa solução WAAS: Wi-Fi as a service.</h2>
                <h3>
                    Tudo que a sua empresa precisa para ter uma rede wi-Fi com alto desempenho e de qualidade.
                </h3>
                
                <a href="/produtos/wifi" class="button_text bt-dialog">Saiba Mais · Bistec Wifi</a>
            </div>
        </section>
    </article>
@stop