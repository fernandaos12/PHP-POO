<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        include ('./classes/classecarro.classe.php');
        
        $carro = new Carro();
        
        $carro->ano = '2014';
        $carro->modelo = 'Camaro';
        $carro->fabricante = 'Chevrolet';
        $carro->cor = 'Amarelo';
        
        $carro->movimentacarro();
        ?>
    </body>
</html>
