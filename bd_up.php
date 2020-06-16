<?php

$bd = new SQLite3("filmes.db");

$sql= "DROP TABLE IF EXISTS filmes";

if ($bd->exec($sql)) 
    echo "\n tabela filmes apagada\n";

$sql= "CREATE TABLE filmes (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        titulo VARCHAR(200) NOT NULL,
        poster VARCHAR(200),
        sinopse TEXT,
        nota DECIMAL(2,1)
    )
";

if ($bd->exec($sql)) 
    echo "\n tabela filmes criada\n";
else
    echo "\n erro ao criar tabela filmes\n";

$sql = " INSERT INTO filmes (titulo, poster, sinopse, nota) VALUES (
        'Thor',
        'https://image.tmdb.org/t/p/w300/jWnbuXuzMIl3FDIs0qY9ZdDPxCl.jpg',
        'Como filho de Odin, rei dos deuses nórdicos, Thor logo herdará o trono de Asgard de seu idoso pai. Porém, no dia de sua coroação, Thor reage com brutalidade quando os inimigos dos deuses entram no palácio violando o tratado. Como punição, Odin manda Thor para a Terra. Enquanto seu irmão Loki conspira em Asgard, Thor, agora sem seus poderes, enfrenta sua maior ameaça.',
        8.6
    )";

if ($bd->exec($sql)) 
    echo "\n filme Thor inserido com secesso\n";
else
    echo "\n erro ao inserir filmes\n";

$sql = " INSERT INTO filmes (titulo, poster, sinopse, nota) VALUES (
        'Mulher maravilha',
        'https://image.tmdb.org/t/p/w300/ujQthWB6c0ojlARk28NSTmqidbF.jpg',
        'Treinada desde cedo para ser uma guerreira imbatível, Diana Prince (Gal Gadot) nunca saiu da paradisíaca ilha em que é reconhecida como Princesa das Amazonas. Quando o piloto Steve Trevor (Chris Pine) se acidenta e cai numa praia do local,  ela descobre que uma guerra sem precedentes está se espalhando pelo mundo e decide deixar seu lar certa de que pode parar o conflito. Lutando para acabar com todas as lutas, Diana percebe o alcance de seus poderes e sua verdadeira missão na Terra.',
        10.0
    )";

if ($bd->exec($sql)) 
    echo "\n filme Mulher Maravilha inserido com secesso\n";
else
    echo "\n erro ao inserir filmes\n";

$sql = " INSERT INTO filmes (titulo, poster, sinopse, nota) VALUES (
        'Coringa',
        'https://image.tmdb.org/t/p/w300/xLxgVxFWvb9hhUyCDDXxRPPnFck.jpg',
        'Arthur Fleck trabalha como palhaço para uma agência de talentos e, toda semana, precisa comparecer a uma agente social, devido aos seus conhecidos problemas mentais. Após ser demitido, Fleck reage mal à gozação de três homens em pleno metrô e os mata. Os assassinatos iniciam um movimento popular contra a elite de Gotham City, da qual Thomas Wayne é seu maior representante.',
        9.1
    )";

if ($bd->exec($sql)) 
    echo "\n filme Coringa inserido com secesso\n";
else
    echo "\n erro ao inserir filmes\n";

$sql = " INSERT INTO filmes (titulo, poster, sinopse, nota) VALUES (
        'Guardiões da Galaxia',
        'https://image.tmdb.org/t/p/w300/xaY92XMToaSnBuvCui3LHzNGqZB.jpg',
        'O aventureiro do espaço Peter Quill torna-se presa de caçadores de recompensas depois que rouba a esfera de um vilão traiçoeiro, Ronan. Para escapar do perigo, ele faz uma aliança com um grupo de quatro extraterrestres. Quando Quill descobre que a esfera roubada possui um poder capaz de mudar os rumos do universo, ele e seu grupo deverão proteger o objeto para salvar o futuro da galáxia.',
        8.9
    )";

if ($bd->exec($sql)) 
    echo "\n filme Guardiões da Galaxia inserido com secesso\n";
else
    echo "\n erro ao inserir filmes\n";

$sql = " INSERT INTO filmes (titulo, poster, sinopse, nota) VALUES (
        'Doutor Estranho',
        'https://image.tmdb.org/t/p/w300/iM1hlVGZ5Qwn3gO6ewTszY7OrLY.jpg',
        'Da Marvel Studios vem “Doctor Strange”, a história do mundialmente famoso neurocirurgião Dr. Stephen Strange, cuja vida muda para sempre depois de um terrível acidente de carro, que o rouba do uso de suas mãos. Quando a medicina tradicional o falha, ele é forçado a procurar por cura e esperança, em um lugar improvável - um enclave misterioso conhecido como Kamar-Taj. Ele rapidamente descobre que isso não é apenas um centro de cura, mas também a linha de frente de uma batalha contra as forças ocultas invisíveis empenhadas em destruir nossa realidade. Em pouco tempo, Strange - armado com poderes mágicos recém-adquiridos - é forçado a escolher se quer retornar à sua vida de fortuna e status ou deixar tudo para trás para defender o mundo como o mais poderoso feiticeiro existente.',
        8.2
    )";

if ($bd->exec($sql)) 
    echo "\n filme Doutor Estranho inserido com secesso\n";
else
    echo "\n erro ao inserir filmes\n";

?>