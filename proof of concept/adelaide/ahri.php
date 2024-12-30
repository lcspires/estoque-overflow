$operatorA = 5;
$operators = [
	"a += 5" => ($operatorA += 5), // $operatorA = 10
	"a -= 5" => ($operatorA -= 5), // $operatorA = 5
	"a *= 5" => ($operatorA *= 5), // $operatorA = 25
	"a /= 5" => ($operatorA /= 5), // $operatorA = 5
];

$increments = [
	"pós-incremento" => ($operatorA++),
	"res-incremento" => ($operatorA),
	"pré-incremento" => (++$operatorA),
	"pós-decremento" => ($operatorA--),
	"res-decremento" => ($operatorA),
	"pré-decremento" => (--$operatorA),
];

$relatedA = 5; $relatedB = "5";

$related = [
    "a == b" => ($relatedA == $relatedB), // true
	"a === b" => ($relatedA === $relatedB), // false
	"a != b" => ($relatedA != $relatedB), // false
	"a !== b" => ($relatedA !== $relatedB), // true
];

$var1 = false; $var4 = null; $var2 = 0; $var5 = []; $var3 = ""; $var6 = "0";

echo !$var1 || !$var2 || !$var3 || !$var4 || !$var5 || !$var6 ? "True" : "False" , "<br>"; // True