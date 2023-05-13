$bedrag_in_centen = convert_5cent($bedrag_in_centen);

define('MONEY_UNITS', [50, 20, 10, 5, 2, 1, 0.50, 0.20, 0.10, 0.05]);

function geef_terug($x)
{
foreach (MONEY_UNITS as $geldeenheid) {
if ((100 * $geldeenheid) <= $x) { $aantalKeerGeldhoeveelheidInBedrag=floor($x / (100 * $geldeenheid)); $x=$x % (100 * $geldeenheid); if ($geldeenheid < 1) { echo ($aantalKeerGeldhoeveelheidInBedrag . " x " . (100 * $geldeenheid) . " cent" . PHP_EOL); } else { echo ($aantalKeerGeldhoeveelheidInBedrag . " x " . $geldeenheid . " euro" . PHP_EOL); } } } } geef_terug($bedrag_in_centen);