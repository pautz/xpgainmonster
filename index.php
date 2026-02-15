<?php
function calcularXP($xpTotal) {
    $limite = 37000;
    $turnos = [];

    while ($xpTotal > 0) {
        if ($xpTotal > $limite) {
            $turnos[] = $limite;
            $xpTotal -= $limite;
        } else {
            $turnos[] = $xpTotal;
            $xpTotal = 0;
        }
    }

    return $turnos;
}

// Simulação de 18 monstros com XP entre 38000 e 43000
$monstros = [];
for ($i = 1; $i <= 18; $i++) {
    $xpGerada = rand(38000, 43000); // XP aleatória
    $turnos = calcularXP($xpGerada);

    echo "Monstro $i recebeu $xpGerada XP\n";
    foreach ($turnos as $j => $xp) {
        echo "  Turno " . ($j+1) . ": $xp XP\n";
    }
    echo "  Total de turnos: " . count($turnos) . "\n";
    echo "-------------------------\n";
}
?>
