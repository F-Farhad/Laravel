@php

$coll = collect([1,2,3]);

$arr = $coll->all();
dump($arr);

$avg = $coll->avg();
dump($avg);

$b = $coll->contains(1);
dump($b);

$collUser = collect([
        [
            'name' => 'Farhad',
            'age' => 30,    
        ],
        [
            'name' => 'Ser',
            'age' => 40,    
        ]
    ]);

$collFilter = $collUser-> filter(function($value, $key){
    if($value['name'] == 'Farhad'){
        return true;
    }
});

dump($collFilter->all());


@endphp