<?php
    $result = [];
    $cities = [
        [
            'country' => 'Россия',
            'city' =>    'Москва',
        ],
        [
            'country' => 'Беларусь',
            'city' =>    'Минск',
        ],
        [
            'country' => 'Россия',
            'city' =>    'Питер',
        ],
        [
            'country' => 'Россия',
            'city' =>    'Владивосток',
        ],
        [
            'country' => 'Украина',
            'city' =>    'Львов',
        ],
        [
            'country' => 'Беларусь',
            'city' =>    'Могилев',
        ],
        [
            'country' => 'Украина',
            'city' =>    'Киев',
        ],
    ];
        foreach ($cities as $city){
            $result[$city['city']] = $city;
        }
    var_dump ($result);
?>
<br>
<?php
    $result = [];
    $dates = [
        [
            'date'  => '2019-12-29',
            'event' => 'name1'
        ],
        [
            'date'  => '2019-12-31',
            'event' => 'name2'
        ],
        [
            'date'  => '2019-12-29',
            'event' => 'name3'
        ],
        [
            'date'  => '2019-12-30',
            'event' => 'name4'
        ],
        [
            'date'  => '2019-12-29',
            'event' => 'name5'
        ],
        [
            'date'  => '2019-12-31',
            'event' => 'name6'
        ],
        [
            'date'  => '2019-12-29',
            'event' => 'name7'
        ],
        [
            'date'  => '2019-12-30',
            'event' => 'name8'
        ],
        [
            'date'  => '2019-12-30',
            'event' => 'name9'
        ],
    ];
        foreach ($dates as $date){
            $result[$date['date']] = $date;
        }
    var_dump ($result);
?>
<br>