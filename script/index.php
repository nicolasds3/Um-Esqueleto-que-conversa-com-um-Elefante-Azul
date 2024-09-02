<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Um Esqueleto que conversa com um Elefante Azul</title>
    <link rel="stylesheet" href="../visual/style.css">
    <link rel="website icon" type="png" href="../imagens/elefantedophp.png">
</head>
<body>
    <section id="sec-principal">
        <div id="div-principal">
            <form method="POST" action="">
                <label for="numero_primo">Calculo de base e altura do triângulo.</label>
                <label for="base">Base do Triângulo: </label>
                <Input type="number" id="base" name="base" required>
                <label for="altura">Altura do Triângulo: </label>
                <input type="number" id="altura" name="altura" required>
                <button type="submit" name="calcular_altura" id="calcular_altura">Calcular</button>
            </form>
        </div>
    </section>
    <?php
    
        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            if(isset($_POST['calcular_altura'])){
                $base = $_POST['base'];
                $altura = $_POST['altura'];
                $calc_tri = ($base*$altura)/2;
                if ($calc_tri > 100) {
                    echo "<br/>" . "A área do seu triângulo é " . $calc_tri . " logo, a área do seu triângulo é maior que 100";
                } else {
                    echo "<br/>" . "A área do seu triângulo é " . $calc_tri . " logo, a área do seu triângulo é menor ou igual a 100";
                }
            }
        }

    ?>

</body>
</html>