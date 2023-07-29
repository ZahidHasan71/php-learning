<?php   

$person = array(
    array(
        'person_name' => 'zahid',
        'person_age'  => 25,
        'person_height' => 5.5,
        'family_members' => array(
            array(
                'name' => 'Kutub Uddin',
                'relation' => 'father',
                'age' => 50
            ),
            array(
                'name' => 'Yesmin',
                'relation' => 'mother',
                'age' => 50
            ),        
            array(
                'name' => 'Nahid',
                'relation' => 'brother',
                'age' => 15
            ),        
        )
    ),
    array(
        'person_name' => 'fahad',
        'person_age'  => 25,
        'person_height' => 5.5,
        'family_members' => array(
            array(
                'name' => 'Hasan Mia',
                'relation' => 'father',
                'age' => 50
            ),
            array(
                'name' => 'Amina',
                'relation' => 'mother',
                'age' => 50
            )      
        )
    )    
);

echo '<pre>';
var_dump($person[1]['family_members'][1]['name']);

?>  