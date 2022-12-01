<?php

class  Bar
{
    private array $props = ['p1' => '23', 'p2' => '12'];

    public function __construct($p1, $p2)
    {
        $this->p1 = $p1;
        $this->p2 = $p2;
    }

    public function __set($_name, $_value)
    {
        $this->props[$_name] = $_value;
    }

    public function __get($_name)
    {
        return $this->props[$_name];
    }
}

$a = new Bar(1,2);
$a->p1 += 12;
$a->p2--;
//echo $a->p1,' ', $a->p2;

$a = [1,0,6,9,4,5,2,3,8,7];
for ($i=0; $i < count($a); $i++){
    for ($j=$i; $j<count($a); $j++){
        if ($a[$i]>$a[$j]){
            [$a[$i], $a[$j]] = [$a[$j], $a[$i]];
            }
    }
}
//for ($i=0; $i < count($a); $i++){
//print($a[$i]);}
print((string)$a);
