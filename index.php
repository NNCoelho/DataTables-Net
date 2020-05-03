<?php

    // Criar uma coleção de Clientes
    $num_clientes = 200;
    $dominios = array('@gmail.com', '@hotmail.com', '@mail.com');
    $paises = array('Portugal', 'Brasil', 'Angola', 'Moçambique','Guiné');

    $dados = array();
    for($i=1; $i <= $num_clientes; $i++){
        $cliente = array(
            'nome'          => 'Cliente' . $i,
            'telemovel'     => rand(111111111, 999999999),
            'email'         => 'cliente_' . $i . $dominios[rand(0,count($dominios)-1)],
            'nacionalidade' => $paises[rand(0,count($paises)-1)]
        );
        array_push($dados, $cliente);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabelas - BootStrap</title>
    <link rel="stylesheet" type="text/css" href="inc/datatables.min.css"/>
</head>
<body>
    <h1 class="mt-3">Clientes</h1>
    <hr>

    <!-- Apresentação dos dados em tabelas -->
    <table id="tabela" class="table">

        <thead class="thead-dark">
            <tr>
                <th>Nome do Cliente</th>
                <th>Email</th>
                <th>Telemóvel</th>
                <th>Nacionalidade</th>
            </tr>
        </thead>

        <tbody>

            <?php foreach($dados as $cliente): ?>

                <tr>
                    <td><?php echo $cliente['nome'] ?></td>
                    <td><?php echo $cliente['email'] ?></td>
                    <td><?php echo $cliente['telemovel'] ?></td>
                    <td><?php echo $cliente['nacionalidade'] ?></td>
                </tr>

            <?php endforeach; ?>

        </tbody>

    </table>

    <script type="text/javascript" src="inc/datatables.min.js"></script>

    <!-- Datatables Net -->
    <script>
        $(document).ready( function () {
            $('#tabela').DataTable({
                "ordering": false,
                "language": {
                    "lengthMenu": "Apresentar _MENU_ registos por página",
                    "zeroRecords": "Não há registos",
                    "search": "Pesquisar:",
                    "info": "Mostrando a página _PAGE_ de _PAGES_",
                    "infoEmpty": "Não existem registos disponiveis",
                    "infoFiltered": "(Filtrando de _MAX_ registos)"
                },
                "paginate": {
                    "first":      "Primeira",
                    "last":       "Última",
                    "next":       "Seguinte",
                    "previous":   "Anterior"
                },
            });
        } );
    </script>

</body>
</html>