<?php

    $players = [
        [
            'name' => 'bruno',
            'team' => 'manchester united',
            'dob' => 2002
        ],
        [
            'name' => 'rashford',
            'team' => 'manchester united',
            'dob' => 2001
        ],
        [
            'name' => 'messi',
            'team' => 'psg',
            'dob' => 1999
        ],
        [
            'name' => 'neymar',
            'team' => 'psg',
            'dob' => 2021
        ],
        [
            'name' => 'silva',
            'team' => 'manchester city',
            'dob' => 1950,
        ]
    ];
    $filter = function($array,$fun){
        $filterArray = [];
        foreach($array as $a){
            if($fun($a)){
                $filterArray[] = $a;
            }
        }
        return $filterArray;
    };
    $filterByTeam = $filter($players,function($p){
        return $p['dob'] >= 2000;
    });
    $filterByAge = array_filter($players,function($p){
        return $p['dob'] < 2000;
    });