<?php

require_once 'vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$html = '<h1>Relatorio de produtos</h1>';
$mpdf->writeHTML($html);
$mpdf->output();

$produtos=[

    [
        'nome' => 'Camiseta',

        'categoria' => 'Roupa',

        'preco' => 49.00,

        'descricao' => "Camiseta lisa cor preta."
    ],

    [
        'nome' => 'Moletom',

        'categoria' => 'Roupa',

        'preco' => 90.00,

        'descricao' => "Moletom preto."
    ],

    [
        'nome' => 'Jaqueta',

        'categoria' => 'Roupa',

        'preco' => 49.00,

        'descricao' => "Jaqueta jeans azul."
    ]
    ];

    foreach ($produtos as $produtos){
        echo $produto['nome']."<br>";
        echo $produto['Categoria']."<br>";
        echo $produto['preco']."<br>";
        echo $produto['descricao']."<br>";
    }