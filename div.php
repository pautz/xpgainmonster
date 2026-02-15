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

// Exemplo com dano que gera 100000 XP
$resultado = calcularXP(100000);

// Mostrar cada turno
$totalXP = 0;
foreach ($resultado as $i => $xp) {
    echo "Turno " . ($i+1) . ": " . $xp . " XP\n";
    $totalXP += $xp;
}

echo "-------------------------\n";
echo "Total de turnos: " . count($resultado) . "\n";
echo "XP acumulada: " . $totalXP . "\n";
?>
