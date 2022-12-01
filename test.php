<?php

$a = 1;
$b = 2;
$c = 0;
echo $c+=($a +=(int)14.5/5) + ($b -= 5%3);
echo (int)14.5/5;

echo "Heloo";
$a  = array(
    array(
        'name' => 'Иванов',
        'specialty' => 'хирург'),
    array (
        'name' => 'Петров',
        'specialty' => 'кардиолог'),
    array(
        'name' => 'Иванов',
        'specialty' => 'хирург'),
    array (
        'name' => 'Петров',
        'specialty' => 'кардиолог',
    ),
        array(
            'name' => 'Иванов',
            'specialty' => 'хирург'),
    array (
        'name' => 'Петров',
        'specialty' => 'кардиолог',
    )
);
function delete_doctors(array $a): array
{
    foreach ($a as $key => $item)
    {
        if ($item['name'] == 'Иванов')
        {
            unset($a[$key]);
        }
    }
    return $a;
}

$a = delete_doctors($a);


foreach ($a as $i)
{
    foreach ($i as $j)
    {
        echo $j;
    }
    echo PHP_EOL;
}


$color = array("red", "yellow", "white");
$x = in_array("black", $color);
if ($x == 0) {
    echo "good bye";
}
if ($x == 1) {
    echo "Hello";
}
function foo() {
    static $count = 0;
    $count++;
    echo $count;
}
foo();
foo();
foo();
