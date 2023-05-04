<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>
    
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
        $filterByTeam = $filter($players,function($book){
            return $book['dob'] >= 2000;
        });
        $filterByTeam = array_filter($players,function($book){
            return $book['dob'] >= 2000;
        });
    ?>

    <ul>
        <?php foreach($filterByTeam as $p) : ?>
            <li><?php echo $p['name'] ?> plays for <?php echo $p['team'] ?> and born in <?php echo $p['dob'] ?></li>
        <?php endforeach ; ?>
    </ul>


</body>
</html>