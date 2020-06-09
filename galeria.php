<?php include "cabecalho.php" ?>

<?php

$filme1 = [
    "titulo" => "Thor",
    "nota" => 8.6,
    "sinopse" => "Como filho de Odin, rei dos deuses nórdicos, Thor logo herdará o trono de Asgard de seu idoso
    pai. Porém, no dia de sua coroação, Thor reage com brutalidade quando os inimigos dos deuses entram
    no palácio violando o tratado. Como punição, Odin manda Thor para a Terra.
    Enquanto seu irmão Loki conspira em Asgard, Thor, agora sem seus poderes, enfrenta sua maior
    ameaça.",
    "poster" => "https://image.tmdb.org/t/p/w300/jWnbuXuzMIl3FDIs0qY9ZdDPxCl.jpg"
];

$filme2 = [
    "titulo" => "Mulher maravilha",
    "nota" => 10.0,
    "sinopse" => "Treinada desde cedo para ser uma guerreira imbatível, Diana Prince (Gal Gadot)
     nunca saiu da paradisíaca ilha em que é reconhecida como Princesa das Amazonas. 
     Quando o piloto Steve Trevor (Chris Pine) se acidenta e cai numa praia do local, 
     ela descobre que uma guerra sem precedentes está se espalhando pelo mundo e decide deixar 
     seu lar certa de que pode parar o conflito. 
    Lutando para acabar com todas as lutas, Diana percebe o alcance de seus poderes e sua verdadeira missão na Terra.",
    "poster" => "https://image.tmdb.org/t/p/w300/ujQthWB6c0ojlARk28NSTmqidbF.jpg"
];

$filme3 = [
    "titulo" => "Coringa",
    "nota" => 9.1,
    "sinopse" => "Arthur Fleck trabalha como palhaço para uma agência de talentos e, 
    toda semana, precisa comparecer a uma agente social, devido aos seus conhecidos problemas mentais. 
    Após ser demitido, Fleck reage mal à gozação de três homens em pleno metrô e os mata. 
    Os assassinatos iniciam um movimento popular contra a elite de Gotham City, da qual Thomas Wayne
     é seu maior representante.",
    "poster" => "https://image.tmdb.org/t/p/w300/xLxgVxFWvb9hhUyCDDXxRPPnFck.jpg"
];

$filme4 = [
    "titulo" => "Guardiões da Galaxia",
    "nota" => 8.9,
    "sinopse" => "O aventureiro do espaço Peter Quill torna-se presa de caçadores de recompensas 
    depois que rouba a esfera de um vilão traiçoeiro, Ronan. Para escapar do perigo, 
    ele faz uma aliança com um grupo de quatro extraterrestres. Quando Quill descobre que a 
    esfera roubada possui um poder capaz de mudar os rumos do universo, ele e seu grupo deverão 
    proteger o objeto para salvar o futuro da galáxia.",
    "poster" => "https://image.tmdb.org/t/p/w300/xaY92XMToaSnBuvCui3LHzNGqZB.jpg"
];

$filme5 = [
    "titulo" => "Doutor Estranho",
    "nota" => 8.2,
    "sinopse" => "Da Marvel Studios vem “Doctor Strange”, a história do mundialmente famoso 
    neurocirurgião Dr. Stephen Strange, cuja vida muda para sempre depois de um terrível acidente de carro, 
    que o rouba do uso de suas mãos. Quando a medicina tradicional o falha, ele é forçado a procurar por 
    cura e esperança, em um lugar improvável - um enclave misterioso conhecido como Kamar-Taj. 
    Ele rapidamente descobre que isso não é apenas um centro de cura, mas também a linha de frente de uma 
    batalha contra as forças ocultas invisíveis empenhadas em destruir nossa realidade. Em pouco tempo, 
    Strange - armado com poderes mágicos recém-adquiridos - é forçado a escolher se quer retornar à sua 
    vida de fortuna e status ou deixar tudo para trás para defender o mundo como o mais poderoso feiticeiro existente.",
    "poster" => "https://image.tmdb.org/t/p/w300/iM1hlVGZ5Qwn3gO6ewTszY7OrLY.jpg"
];

$filmes = [$filme1, $filme2, $filme3, $filme4, $filme5];

?>

<body>

    <nav class="nav-extended cyan lighten-4">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li class="active"><a href="galeria.php">Galeria</a></li>
                <li><a href="cadastrar.php">Cadastrar</a></li>
            </ul>
        </div>
        <div class="nav-header">
            <h1 class="center">Clorocine</h1>
        </div>
        <div class="nav-content">
            <ul class="tabs tabs-transparent teal darken-1">
                <li class="tab"><a class="active" href="#test1">Todos</a></li>
                <li class="tab"><a href="#test2">Assistidos</a></li>
                <li class="tab"><a href="#test3">Favoritos</a></li>
            </ul>
        </div>
    </nav>

    <div class="row">

        <?php foreach ($filmes as $filme) : ?>

            <div class="col s3">
                <div class="card hoverable">
                    <div class="card-image">
                        <img src="<?= $filme["poster"]?>">
                        <a class="btn-floating halfway-fab waves-effect waves-light teal accent-4"><i
                                class="material-icons">favorite_border</i></a>
                    </div>
                    <div class="card-content">
                        <p class="valign-wrapper">
                            <i class="material-icons amber-text">star</i> <?= $filme["nota"]?>
                        </p>
                        <span class="card-title"><?= $filme["titulo"]?></span>
                        <p><?= $filme["sinopse"]?></p>
                    </div>
                </div>
            </div>

        <?php endforeach ?> 

    </div>


</body>

</html>