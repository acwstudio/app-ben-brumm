<?php

return [
    'jewellery-categories' => [
        'браслеты','броши','зажим для галстука','запонки','колье','кольца','пирсинг','подвески','подвеска-шарм',
        'серьги','цепи',
    ],
    'jewelleries' => [
        [
//            id = 1
            'prcs_metal_id' => 1,
            'prcs_metal_sample_id' => 3,
            'prcs_metal_colour_id' => 2,
            'jewellery_category_id' => 1,
            'coverage-jewellery' => [3],
            'name' => 'Браслет из белого золота с бриллиантами',
            'description' => '',
            'part_number' => '1050166-3',
            'approx_weight' => '5.4 грамма',
            'insert-jewellery' => [
                [
                    'jewellery_id' => 1,
                    'insert_id' => 1,
                    'insert_property_id' => 1,
                ],
                [
                    'jewellery_id' => 1,
                    'insert_id' => 1,
                    'insert_property_id' => 2,
                ]
            ]
        ],
        [
//            id = 2
            'prcs_metal_id' => 2,
            'prcs_metal_sample_id' => 11,
            'prcs_metal_colour_id' => 7,
            'jewellery_category_id' => 1,
            'coverage-jewellery' => [2],
            'name' => 'Браслет из серебра с миксом камней',
            'description' => '',
            'part_number' => '92050107',
            'approx_weight' => '8.41 грамм',
            'insert-jewellery' => [
                [
                    'jewellery_id' => 2,
                    'insert_id' => 11,
                    'insert_property_id' => 3,
                ],
                [
                    'jewellery_id' => 2,
                    'insert_id' => 12,
                    'insert_property_id' => 4,
                ],
                [
                    'jewellery_id' => 2,
                    'insert_id' => 1,
                    'insert_property_id' => 5,
                ]
            ]
        ],
        [
//            id = 3
            'prcs_metal_id' => 2,
            'prcs_metal_sample_id' => 11,
            'prcs_metal_colour_id' => 7,
            'jewellery_category_id' => 1,
            'coverage-jewellery' => [2],
            'name' => 'Браслет мужской из серебра, плетение Бисмарк',
            'description' => '',
            'part_number' => '965141004',
            'approx_weight' => '13.45 грамм',
            'insert-jewellery' => []
        ],
        [
//            id = 4
            'prcs_metal_id' => 1,
            'prcs_metal_sample_id' => 3,
            'prcs_metal_colour_id' => 3,
            'jewellery_category_id' => 2,
            'coverage-jewellery' => [3],
            'name' => 'Брошь из золота с гранатами',
            'description' => '',
            'part_number' => '740109',
            'approx_weight' => '1.14 грамм',
            'insert-jewellery' => [
                [
                    'jewellery_id' => 4,
                    'insert_id' => 13,
                    'insert_property_id' => 19,
                ],
                [
                    'jewellery_id' => 4,
                    'insert_id' => '10',
                    'insert_property_id' => 20,
                ],
            ]
        ],
        [
//            id = 5
            'prcs_metal_id' => 1,
            'prcs_metal_sample_id' => 3,
            'prcs_metal_colour_id' => 3,
            'jewellery_category_id' => 2,
            'coverage-jewellery' => [3],
            'name' => 'Брошь-булавка из золота',
            'description' => '',
            'part_number' => '40015',
            'approx_weight' => '0.91 грамм',
            'insert-jewellery' => []
        ],
        [
//            id = 6
            'prcs_metal_id' => 1,
            'prcs_metal_sample_id' => 3,
            'prcs_metal_colour_id' => 3,
            'jewellery_category_id' => 3,
            'coverage-jewellery' => [3],
            'name' => 'Зажим для галстука из золота с бриллиантами и изумрудом',
            'description' => '',
            'part_number' => '3090001',
            'approx_weight' => '6.45 грамм',
            'insert-jewellery' => [
                [
                    'jewellery_id' => 6,
                    'insert_id' => 14,
                    'insert_property_id' => 21,
                ],
                [
                    'jewellery_id' => 6,
                    'insert_id' => 5,
                    'insert_property_id' => 22,
                ]
            ]

        ],
        [
//            id => 7
            'prcs_metal_id' => 1,
            'prcs_metal_sample_id' => 3,
            'prcs_metal_colour_id' => 3,
            'jewellery_category_id' => 3,
            'coverage-jewellery' => [2, 5],
            'name' => 'Золотой зажим для галстука с алмазной гранью',
            'description' => '',
            'part_number' => '090035',
            'approx_weight' => '4.44 грамма',
            'insert-jewellery' => []
        ],
        [
            'prcs_metal_id' => 2,
            'prcs_metal_sample_id' => 11,
            'prcs_metal_colour_id' => 7,
            'jewellery_category_id' => 6,
            'coverage-jewellery' => [2, 4],
            'name' => 'Серебряное наборное кольцо с фианитами',
            'description' => '',
            'part_number' => '94011705',
            'approx_weight' => '3 грамма',
            'insert-jewellery' => [
                [
                    'jewellery_id' => 7,
                    'insert_id' => '1',
                    'insert_property_id' => 6,
                ],
                [
                    'jewellery_id' => 7,
                    'insert_id' => '1',
                    'insert_property_id' => 7,
                ],
            ]
        ],
        [
            'prcs_metal_id' => 1,
            'prcs_metal_sample_id' => 3,
            'prcs_metal_colour_id' => 3,
            'jewellery_category_id' => 10,
            'coverage-jewellery' => [2],
            'name' => 'Серьги из золота с топазами и фианитами',
            'description' => '',
            'part_number' => '727533',
            'approx_weight' => '1.81 грамм',
            'insert-jewellery' => [
                [
                    'jewellery_id' => 8,
                    'insert_id' => '2',
                    'insert_property_id' => 8,
                ],
                [
                    'jewellery_id' => 8,
                    'insert_id' => '1',
                    'insert_property_id' => 9,
                ],
            ]
        ],
        [
            'prcs_metal_id' => 1,
            'prcs_metal_sample_id' => 3,
            'prcs_metal_colour_id' => 3,
            'jewellery_category_id' => 10,
            'coverage-jewellery' => [2],
            'name' => 'Серьги из золота с гранатами и фианитами',
            'description' => '',
            'part_number' => '728331',
            'approx_weight' => '1.64 грамм',
            'insert-jewellery' => [
                [
                    'jewellery_id' => 9,
                    'insert_id' => '3',
                    'insert_property_id' => 10,
                ],
                [
                    'jewellery_id' => 9,
                    'insert_id' => '1',
                    'insert_property_id' => 11,
                ],
            ]
        ],
        [
            'prcs_metal_id' => 1,
            'prcs_metal_sample_id' => 3,
            'prcs_metal_colour_id' => 3,
            'jewellery_category_id' => 9,
            'coverage-jewellery' => [3],
            'name' => 'Подвеска из золота с бриллиантами и аметистом',
            'description' => '',
            'part_number' => '73-00124',
            'approx_weight' => '0.74 грамм',
            'insert-jewellery' => [
                [
                    'jewellery_id' => 10,
                    'insert_id' => '4',
                    'insert_property_id' => 12,
                ],
                [
                    'jewellery_id' => 10,
                    'insert_id' => '5',
                    'insert_property_id' => 13,
                ],
            ]
        ],
        [
            'prcs_metal_id' => 1,
            'prcs_metal_sample_id' => 3,
            'prcs_metal_colour_id' => 3,
            'jewellery_category_id' => 10,
            'coverage-jewellery' => [3],
            'name' => 'Серьги из золота с жемчугом',
            'description' => '',
            'part_number' => '792410',
            'approx_weight' => '2.31 грамм',
            'insert-jewellery' => [
                [
                    'jewellery_id' => 11,
                    'insert_id' => '6',
                    'insert_property_id' => 14,
                ]
            ]
        ],
        [
            'prcs_metal_id' => 2,
            'prcs_metal_sample_id' => 11,
            'prcs_metal_colour_id' => 1,
            'jewellery_category_id' => 10,
            'coverage-jewellery' => [1],
            'name' => 'Серьги из золочёного серебра с агатами и малахитами',
            'description' => '',
            'part_number' => '83020096',
            'approx_weight' => '7.7 грамм',
            'insert-jewellery' => [
                [
                    'jewellery_id' => 12,
                    'insert_id' => '7',
                    'insert_property_id' => 15,
                ],
                [
                    'jewellery_id' => 12,
                    'insert_id' => '8',
                    'insert_property_id' => 16,
                ],
            ]
        ],
        [
            'prcs_metal_id' => 1,
            'prcs_metal_sample_id' => 3,
            'prcs_metal_colour_id' => 3,
            'jewellery_category_id' => 10,
            'coverage-jewellery' => [2],
            'name' => 'Серьги из золота с бриллиантами и камеей',
            'description' => '',
            'part_number' => '6024257',
            'approx_weight' => '3.6 грамм',
            'insert-jewellery' => [
                [
                    'jewellery_id' => 13,
                    'insert_id' => '5',
                    'insert_property_id' => 17,
                ],
                [
                    'jewellery_id' => 13,
                    'insert_id' => '9',
                    'insert_property_id' => 18,
                ],
            ]
        ],
    ]
];
