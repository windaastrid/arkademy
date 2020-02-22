<?php 
    function nilaijson()
    {    
        return json_encode([
            'name' => 'Winda Astrid Febrina',
            'Age' => 23,
            'address' => 'Bogor',
            'hobbies' => array('reading','watching'),
            'is_married' => false,
            'list_school' => array([
                'name' => 'SDN Cikereteg 02',
                'year_in' => '2003',
                'year_out' => '2009',
                'major' => NULL
				
            ],
			[
				'name' => 'SMPN 2 Ciawi',
                'year_in' => '2009',
                'year_out' => '2012',
                'major' => NULL
			],
			[
				'name' => 'SMK Terpadu 2 Yaspida',
                'year_in' => '2012',
                'year_out' => '2015',
                'major' => 'Multimedia'
			],
            [
                'name' => 'University of Ibn Khaldun Bogor',
                'year_in' => '2015',
                'year_out' => '2019',
                'major' => 'Informatics Engineering'
                            ]),
            'skills' => array([
                'skill_name' => 'PHP',
                'level'=> 'Beginner'
            ],
			[ 'skill_name' => 'HTML',
			  'level' => 'Beginner'
			],
            [
                'skill_name' => 'Javascripts',
                'level'=> 'Beginner'
                            ]),
            'interest_in_coding' => true
        ]);
    }    
    echo nilaijson(); // menampilkan hasil JSON
?>