<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/footer.css">
    <link rel="stylesheet" href="CSS/Css.css">
    <title> Patrocinadores Etechnology</title>
</head>

<body>
<!-- Abas Pgs -->
<header class="menu">
    <img class="menu_logo" src="Assets/etechnology.png" alt="Logo Etecnology"></a>
        <a class="menu_link" href="#sobre">Sobre Nós</a>
        <a class="menu_link" href="#">Doações</a>
        <a class="menu_link" href="#">Notícias</a>
        <a class="menu_link" href="">Patrocinadores</a>    
</header>


<!-- Section Titulo -->
<section>
    <img class="titulo" src="Assets/TITULO.png" alt="QuemSãoNossoPatrocinadores">
</section>


<section>
<!--Sobre nossos Patrocinadores-->
<!--Logo menor-->
<div class="rectangle">
    <img class="logoPat" src="Assets/logobes.png" alt="b&s" id="bes">
    <img class="logoPat" src="Assets/novelis.png" alt="novelis" id="novelis">
    <img class="logoPat" src="Assets/phs.png" alt="phs" id="phs">
    <img class="logoPat" src="Assets/extrudtech.png" alt="extrudtech" id="extrud">
    <img class="logoPat" src="Assets/ssk.png" alt="ssk" id="ssk">
    <img class="logoPat" src="Assets/rock.png" alt="rockwell">
    <img class="logoPat" src="Assets/qualcomm.png" alt="qualcomm" id="qualcomm">
    <img class="logoPat" src="Assets/cvd.png" alt="cvd" id="cvd">

</div>
</section>

<!-- Principal -->
<main> 
<div class="menu1">
        <a class="menu_link1" href="#patrocinadores">Nossos Patrocinadores</a>
        <a class="menu_link1" href="#beneficios">Benefícios</a>
        <a class="menu_link1" href="#comosetornarpatrocinador">Como se tornar Patrocinador</a>
        <a class="menu_link1" href="doação.html">Doar para equipe </a>
</div>

<!--B&S -->
<div id="patrocinadores"></div>
<div class="container">
    <?php
        echo"<img class='imagembes' src='Assets/logobes.png'>";
    ?></div>
<div class="container">
    <div class="containermenorbes">
        <?php
            echo "<a href='https://bes.com.br/'target='_blank'><p class='NomePatrocinadorbes'>B&S solutions SQL</p></a>
            <p class='SobrePatrocinadorbes'>A empresa atua na área de engenharia de automação, buscando atender
             eficientemente as necessidades do setor. Acompanha constantemente as mudanças no mercado para proporcionar 
             aos clientes soluções criativas e inovadoras, visando torná-los mais competitivos. Os projetos de alta tecnologia 
             e inovação são entregues por uma equipe multidisciplinar com foco total no cliente, 
            abrangendo os segmentos de máquinas e equipamentos, Industrial IT, Manufatura Digital e serviços.</p>";
        ?>
    </div>
</div>

<!--Novelis -->
<div class="container">
<div class="containermenor">
        <?php
    echo "<a href='https://pt-br.novelis.com/'target='_blank'><p class='NomePatrocinador'>Novelis</p></a>
    <p class='SobrePatrocinador'>A Novelis é líder na produção de alumínio plano laminado e na reciclagem de alumínio, 
    sendo reconhecida como a maior recicladora do mundo. A empresa colabora com seus clientes, 
    proporcionando soluções inovadoras para os mercados aeroespacial, automotivo, de latas de bebidas e de especialidades.</p>";
        ?></div>
    <?php
        echo"<img class='imagem' src='Assets/novelis.png'>";
    ?>

    </div>

<!--PHS -->
<div class="container">
    <?php
        echo"<img class='imagem' src='Assets/phs.png'>";
    ?>
    <div class="containermenor">
        <?php
            echo "<a href='https://pt-br.facebook.com/phsautomacaoeinstalacoes/'target='_blank'><p class='NomePatrocinador'>
            PHS Automação e Instalações</p></a>
            <p class='SobrePatrocinador'>É uma empresa voltada para a execução dos serviços nas áreas de Elétrica, Mecânica, Automação Industrial, Segurança de Máquinas, 
            realizando adequação de NR 10 e NR 12, montagens de painéis, infraestrutura elétrica, Retrofitting de Máquinas, entre outras atividades.</p>";
        ?>
    </div>
</div>

<!--EXTRUDTECH -->
<div class="container">
<div class="containermenor">
        <?php
    echo "<p class='NomePatrocinador'>Extrudtech</p></a>
    <p class='SobrePatrocinador'>É uma empresa de tecnologia</p>";
        ?></div>
    <?php
        echo"<img class='imagem' src='Assets/extrudtech.png'>";
    ?>
    </div>


<!--SSK -->
<div class="container">
    <?php
        echo"<img class='imagem' src='Assets/ssk.png'>";
    ?>
    <div class="containermenor">
        <?php
            echo "<p class='NomePatrocinador'>
            SSK Consultoria</p></a>
            <p class='SobrePatrocinador'>Empresa composta por uma equipe com mais de 25 anos de experiência com projetos de máquinas especiais, 
            desenvolvimento de produtos
             e processos, gerenciamento de projetos e documentação técnica, apresentando soluções criativas e definitivas.</p>";
        ?>
    </div>
</div>
<!--Rockwell-->
<div class="container">
<div class="containermenor">
        <?php
    echo "<a href='https://www.rockwellautomation.com/pt-br.html'target='_blank'><p class='NomePatrocinador'>Rockwell Automation</p></a>
    <p class='SobrePatrocinador'>'A Rockwell Automation é uma provedora global renomada de soluções em automação industrial, energia, controle e informação.
    Trata-se de uma empresa notavelmente moderna, embora sua infraestrutura tenha raízes que remontam há mais de cem anos. 
    A empresa teve seu início com o desenvolvimento
     de controladores lógicos programáveis e posteriormente evoluiu para se tornar a Rockwell Automation.</p>";
        ?></div>
    <?php
        echo"<img class='imagem' src='Assets/rock.png'>";
    ?>
    </div>
<!--CVD-->
    <div class="container">
    <?php
        echo"<img class='imagem' src='Assets/cvd.png'>";
    ?>
    <div class="containermenor">
        <?php
            echo "<a href='https://lp.cvdcoating.com.br/?utm_source=Google&utm_medium=Pesq&utm_campaign=Institucional&gclid=EAIaIQobChMIp_DmhPStgwMVq0VIAB3BCQyLEAAYASAAEgIB5PD_BwE'target='_blank'><p class='NomePatrocinador'>
            CVDCoating</p></a>
            <p class='SobrePatrocinador'>O desafio é utilizar a tecnologia desenvolvida nos laboratórios para atender as necessidades da sociedade.
            Esta essência integra o nosso DNA, e só é possível devido à equipe e o compromisso coletivo de entregar para os nossos clientes uma solução exclusiva e personalizada.</p>";
        ?>
    </div>
<!--Qualcomm-->
    <div class="container">
<div class="containermenor">
        <?php
    echo "<a href='https://www.qualcomm.com/'target='_blank'><p class='NomePatrocinador'>Qualcomm</p></a>
    <p class='SobrePatrocinador'>É uma empresa estadunidense muito conhecida pelos seus Processadores snapdragon, que são destinados para dispositivos móveis, 
    amplamente utilizados em smartphones. A fabricante é responsável por socs (sistem on chip) em geral, sendo uma das mais relevantes no mercado mundial atualmente.</p>";
        ?></div>
    <?php
        echo"<img class='imagem' src='Assets/qualcomm.png'>";
    ?>
    </div>
</div>
<div id="beneficios"></div> 
<br>
<div class="rectangle"> 
    <p class="NovosPatrocinadores">QUAIS SÃO OS BENEFÍCIOS DE SER PATROCINADOR?</p> 
    <div class="containerpat">
        <div class="textonovospat">Descubra:</div>
    </div> 

    <div class="cbenef">
    <li class="textopatrocinador1">Você ajuda a nossa equipe a <h1>mostrar nosso potêncial</h1> para outras pessoas</li>
    <li class="textopatrocinador1">Você pode <h1>ganhar mais visibilidade</h1> com divulgação em nosso instagram!!</li>
    <li class="textopatrocinador1">Contribui para o <h1>futuro dos jovens</h1> que tem interesse em robótica</li>

    <li class="textopatrocinador1">Sua empresa <h1>adquire um lugar</h1> no nosso folder!!</li>
</div>
    <div class="cbenef">
    <li class="textopatrocinador1">Ao patrocinar a nossa equipe <h1>você ganha um espaço em nossa camisa</h1>, nós a levamos para competições tendo <h1>pessoas de vários lugares do Brasil</h1> e do mundo</li>
    <img class="logodino" src="Assets/logo.png">
</div>
</div>

<div id="comosetornarpatrocinador"></div>

<div class="rectangle"> 
    <p class="NovosPatrocinadores">QUER SER NOSSO PATROCINADOR?</p> 
    <div class="containerpat">
        <div class="textonovospat">Saiba Como:</div>
    </div> 

    <div class="containerpatmenor">
    <img class="dinossauro" src="Assets/dinossauro.png">
    <p class="textopatrocinador">Para se tornar patrocinador da Etechnology 8276 <br>você precisa entrar em contato com a gente pelo email da equipe
    <br><br><input type="text" class="inputquadrado" id="copy-input" value="frc8276@gmail.com" readonly>
  <button id="copy-button" class="glow-on-hover"  onclick="copyToClipboard()">Copiar</button>
</p>

</div>
</div>

<script>
  function copyToClipboard() {
    var copyText = document.getElementById("copy-input");
    copyText.select();
    document.execCommand("copy");
    alert("Email Copiado: " + copyText.value + "!");
  }
</script>
</main>

<!--Footer-->

<footer>
    <div class="container-footer">
        <div class="row-footer">
            <!--Logo-->
            <img class="footer_logo" src="Assets/logoe.png" alt="Logo Etec">
            <!--Footer Infos-->
            <div class="footer-col">
                <class id="titulofooter"> Escola </class>
                <ul>
                    <li> <a href="https://www.etecsjcampos.com.br/"> Etec Ilza Nascimento Pintus</a></li>
                    <li> <a href="https://www.cps.sp.gov.br/"> Centro Paula Souza</a></li>
                    <li> <a href="http://www.robotica.cpscetec.com.br/"> Robótica Centro Paula Souza</a></li><br>
                </ul>
            </div>
        
            <div class="footer-col">
                <class id="titulofooter"> First </class>
                <ul>
                    <li> <a href="https://www.firstinspires.org/"> FIRST Robotics Competition </a></li>
                    <li> <a href="https://frc-events.firstinspires.org/"> FIRST Robotics Events </a></li>
                </ul>
            </div>

            <div class="footer-col">
                <class id="titulofooter"> Notificações </class><ul>
            <div class="form-sub"> <!-- Email -->
            <form> 
                <input type="email" placeholder="Digite seu email para notificações">
                <button>Enviar</button>
            </form>
            </div>

            <div class="medias-sociais">
                <a href="https://www.instagram.com/etechnology_8276/"> <i class="fa fa-instagram"></i></a>
                <a href="https://www.youtube.com/@etechnology_8276"> <i class="fa fa-youtube"></i></a>            
            </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
