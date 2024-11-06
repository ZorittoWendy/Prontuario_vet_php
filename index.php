<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prontuário Veterinario</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section id="area-busca">
        <input type="text" placeholder="Informe seu animal">
        <button>Buscar</button>
    </section>
    <section id="resultados">
        <div class="caixaAnimal">
            <a href="atendimento.html">
                <img src="images/brutus.jpg" alt="cão">
                <div>
                    <h1>Brutus</h1>
                    <p>Buldog</p>
                </div>
            </a>
        </div>
        <div class="caixaAnimal">
            <a href="atendimento.html">
                <img src="images/flocos.jpg" alt="cão">
                <div>
                    <h1>Flocos</h1>
                    <p>Dalmata</p>
                </div>
            </a>
        </div>
        <div class="caixaAnimal">
            <a href="atendimento.html">
                <img src="images/luna.jpg" alt="gato">
                <div>
                    <h1>Luna</h1>
                    <p>Tabby Listrado</p>
                </div>
            </a>
        </div>
        <div class="caixaAnimal">
            <a href="atendimento.html">
                <img src="images/meg.jpg" alt="cão">
                <div>
                    <h1>Meg</h1>
                    <p>Beagle</p>
                </div>
            </a>
        </div>
        <div class="caixaAnimal">
            <a href="atendimento.html">
                <img src="images/rico.jpg" alt="colho">
                <div>
                    <h1>Rico</h1>
                    <p>Californiano</p>
                </div>
            </a>
        </div>
        <div class="caixaAnimal">
            <a href="atendimento.html">
                <img src="images/tico.jpg" alt="cão">
                <div>
                    <h1>Tico</h1>
                    <p>Fox Paulistinha</p>
                </div>
            </a>
        </div>
    </section>
</body>

</html>