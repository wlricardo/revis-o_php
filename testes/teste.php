<?php
echo "Hoje é dia " . date("d/m/Y") . " e a hora atual é " . date("H:i:s") . "<br>";
/* Na função acima, 'Y' exibe o ano completo (ex. 2026), enquanto 'y' exibe dois dígitos (ex. 26) */

echo date("F j, Y, g:i a") . "<br><br>";
/** F: Nome completo do mês (ex: July)
 *  j: Dia do mês sem zero à esquerda (ex: 22)
 *  Y: Ano com 4 dígitos (ex: 2026)
 *  g: Hora em formato de 12 horas, sem zero à esquerda (ex: 10)
 *  i: Minutos com zero à esquerda (ex: 03)
 *  a: Exibe am ou pm em letras minúsculas. */

echo date("l, F j, Y") . "<br><br>";
echo date("D, F j, Y") . "<br><br>";
/**
 * l (L minúsculo): Exibe o nome completo (ex: Wednesday)
 * D: Exibe o nome abreviado com três letras (ex: Wed)
 * Saída: Wednesday, July 22, 2026
 */

$today = new DateTime();
$nextSaturday = new DateTime('next saturday');

// Diferença entre as datas:
$diff = $today->diff($nextSaturday);
echo "Faltam " . $diff->days . " dias para o Sábado <br>";
/** new DateTime('next saturday'): O PHP entende expressões em inglês e encontra automaticamente a data do próximo sábado
 *  diff(): Compara as duas datas e cria um objeto com a diferença entre elas
 *  ->days: Acessa diretamente a quantidade total de dias restantes. */
?>