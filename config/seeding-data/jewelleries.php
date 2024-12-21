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
                    'stone_id' => 1,
                    'insert_colour_id' => 12,
                    'insert_shape_id' => 9,
                    'insert_property_id' => [
                        'quantity' => 31, 'weight' => 0.419, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '< 1 мм']
                    ],
                ],
                [
                    'stone_id' => 1,
                    'insert_colour_id' => 12,
                    'insert_shape_id' => 9,
                    'insert_property_id' => [
                        'quantity' => 24, 'weight' => 0.178, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '< 1 мм']
                    ],
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
                    'stone_id' => 6,
                    'insert_colour_id' => 13,
                    'insert_shape_id' => 5,
                    'insert_property_id' => [
                        'quantity' => 8, 'weight' => 4.827, 'weight_unit' => 'карат',
                        'dimensions' => ['высота' => '7 мм', 'ширина' => '5 мм']
                    ],
                ],
                [
                    'stone_id' => 3,
                    'insert_colour_id' => 5,
                    'insert_shape_id' => 5,
                    'insert_property_id' => ['quantity' => 7, 'weight' => 5.54, 'weight_unit' => 'карат',
                        'dimensions' => ['высота' => '7 мм', 'ширина' => '5 мм']
                    ],
                ],
                [
                    'stone_id' => 2,
                    'insert_colour_id' => 12,
                    'insert_shape_id' => 9,
                    'insert_property_id' => ['quantity' => 70, 'weight' => 0.595, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '1 мм']
                    ],
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
                    'stone_id' => 5,
                    'insert_colour_id' => 2,
                    'insert_shape_id' => 9,
                    'insert_property_id' => ['quantity' => 1, 'weight' => 0.146, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '3 мм']
                    ],
                ],
                [
                    'stone_id' => 5,
                    'insert_colour_id' => 2,
                    'insert_shape_id' => 12,
                    'insert_property_id' => ['quantity' => 6, 'weight' => 0.618, 'weight_unit' => 'карат',
                        'dimensions' => ['высота' => '4 мм', 'ширина' => '2 мм']
                    ],
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
                    'stone_id' => 11,
                    'insert_colour_id' => 1,
                    'insert_shape_id' => 9,
                    'insert_property_id' => ['quantity' => 1, 'weight' => 0.452, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '1.5 мм']
                    ],
                ],
                [
                    'stone_id' => 1,
                    'insert_colour_id' => 12,
                    'insert_shape_id' => 9,
                    'insert_property_id' => ['quantity' => 20, 'weight' => 0.046, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '< 1 мм']
                    ],
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
//            id => 8
            'prcs_metal_id' => 1,
            'prcs_metal_sample_id' => 3,
            'prcs_metal_colour_id' => 3,
            'jewellery_category_id' => 4,
            'coverage-jewellery' => [2],
            'name' => 'Запонки из золота с корундами и фианитами',
            'description' => '',
            'part_number' => '766001',
            'approx_weight' => '6.91 грамма',
            'insert-jewellery' => [
                [
                    'stone_id' => 12,
                    'insert_colour_id' => 3,
                    'insert_shape_id' => 13,
                    'insert_property_id' => ['quantity' => 2, 'weight' => 3.742, 'weight_unit' => 'карат',
                        'dimensions' => ['высота' => '8 мм', 'ширина' => '6 мм']
                    ],
                ],
                [
                    'stone_id' => 2,
                    'insert_colour_id' => 12,
                    'insert_shape_id' => 9,
                    'insert_property_id' => ['quantity' => 4, 'weight' => 0.114, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '1.5 мм']
                    ],
                ]
            ]
        ],
        [
//            id = 9
            'prcs_metal_id' => 2,
            'prcs_metal_sample_id' => 11,
            'prcs_metal_colour_id' => 7,
            'jewellery_category_id' => 4,
            'coverage-jewellery' => [2, 4],
            'name' => 'Запонки из серебра с эмалью с фианитами',
            'description' => '',
            'part_number' => '94160039',
            'approx_weight' => '5.57 грамма',
            'insert-jewellery' => [
                [
                    'stone_id' => 2,
                    'insert_colour_id' => 12,
                    'insert_shape_id' => 9,
                    'insert_property_id' => ['quantity' => 40, 'weight' => 0.34, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '1 мм']
                    ],
                ]
            ]
        ],
        [
//            id = 10
            'prcs_metal_id' => 1,
            'prcs_metal_sample_id' => 3,
            'prcs_metal_colour_id' => 2,
            'jewellery_category_id' => 5,
            'coverage-jewellery' => [2],
            'name' => 'Колье из белого золота с бриллиантом',
            'description' => '',
            'part_number' => '1070162',
            'approx_weight' => '1.69 грамма',
            'insert-jewellery' => [
                [
                    'stone_id' => 1,
                    'insert_colour_id' => 12,
                    'insert_shape_id' => 9,
                    'insert_property_id' => ['quantity' => 1, 'weight' => 0.21, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '2 мм']
                    ],
                ]
            ]
        ],
        [
//            id = 11
            'prcs_metal_id' => 2,
            'prcs_metal_sample_id' => 11,
            'prcs_metal_colour_id' => 7,
            'jewellery_category_id' => 5,
            'coverage-jewellery' => [2, 4],
            'name' => 'Колье из серебра с эмалью',
            'description' => '',
            'part_number' => '94070950',
            'approx_weight' => '4.56 грамма',
            'insert-jewellery' => []
        ],
        [
//            id = 12
            'prcs_metal_id' => 1,
            'prcs_metal_sample_id' => 3,
            'prcs_metal_colour_id' => 3,
            'jewellery_category_id' => 6,
            'coverage-jewellery' => [3],
            'name' => 'Кольцо из золота с бриллиантами и гидротермальным александритом',
            'description' => '',
            'part_number' => '71-00338',
            'approx_weight' => '1.85 грамма',
            'insert-jewellery' => [
                [
                    'stone_id' => 13,
                    'insert_colour_id' => 15,
                    'insert_shape_id' => 3,
                    'insert_property_id' => ['quantity' => 1, 'weight' => 1.16, 'weight_unit' => 'карат',
                        'dimensions' => ['высота' => '7 мм', 'ширина' => '5 мм']
                    ],
                ],
                [
                    'stone_id' => 1,
                    'insert_colour_id' => 12,
                    'insert_shape_id' => 9,
                    'insert_property_id' => ['quantity' => 2, 'weight' => 0.007, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '< 1 мм']
                    ],
                ],
                [
                    'stone_id' => 1,
                    'insert_colour_id' => 12,
                    'insert_shape_id' => 9,
                    'insert_property_id' => ['quantity' => 2, 'weight' => 0.011, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '< 1 мм']
                    ],
                ],
                [
                    'stone_id' => 1,
                    'insert_colour_id' => 12,
                    'insert_shape_id' => 9,
                    'insert_property_id' => ['quantity' => 8, 'weight' => 0.062, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '1 мм']
                    ],
                ]
            ]
        ],
        [
//            id = 13
            'prcs_metal_id' => 2,
            'prcs_metal_sample_id' => 11,
            'prcs_metal_colour_id' => 7,
            'jewellery_category_id' => 6,
            'coverage-jewellery' => [2],
            'name' => 'Кольцо из серебра с фианитами',
            'description' => '',
            'part_number' => '94014199',
            'approx_weight' => '2.54 грамма',
            'insert-jewellery' => [
                [
                    'stone_id' => 2,
                    'insert_colour_id' => 12,
                    'insert_shape_id' => 9,
                    'insert_property_id' => ['quantity' => 39, 'weight' => 0.332, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '1 мм']
                    ],
                ]
            ]

        ],
        [
//            id = 14
            'prcs_metal_id' => 1,
            'prcs_metal_sample_id' => 3,
            'prcs_metal_colour_id' => 3,
            'jewellery_category_id' => 6,
            'coverage-jewellery' => [5],
            'name' => 'Обручальное кольцо из золота с алмазной гранью',
            'description' => '',
            'part_number' => '110224',
            'approx_weight' => '2.15 грамма',
            'insert-jewellery' => []
        ],
        [
//            id = 15
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
                    'stone_id' => 2,
                    'insert_colour_id' => 12,
                    'insert_shape_id' => 9,
                    'insert_property_id' => ['quantity' => 11, 'weight' => 0.094, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '1 мм']
                    ],
                ],
                [
                    'stone_id' => 2,
                    'insert_colour_id' => 12,
                    'insert_shape_id' => 9,
                    'insert_property_id' => ['quantity' => 12, 'weight' => 0.342, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '1.5 мм']
                    ],
                ],
            ]
        ],
        [
//            id = 16
            'prcs_metal_id' => 1,
            'prcs_metal_sample_id' => 3,
            'prcs_metal_colour_id' => 3,
            'jewellery_category_id' => 7,
            'coverage-jewellery' => [3],
            'name' => 'Пирсинг в бровь из золота',
            'description' => '',
            'part_number' => '060054',
            'approx_weight' => '1.04 грамма',
            'insert-jewellery' => []
        ],
        [
//            id = 17
            'prcs_metal_id' => 1,
            'prcs_metal_sample_id' => 3,
            'prcs_metal_colour_id' => 3,
            'jewellery_category_id' => 7,
            'coverage-jewellery' => [3],
            'name' => 'Пирсинг в пупок из золота с фианитом',
            'description' => '',
            'part_number' => '060204',
            'approx_weight' => '1.55 грамма',
            'insert-jewellery' => [
                [
                    'stone_id' => 2,
                    'insert_colour_id' => 12,
                    'insert_shape_id' => 9,
                    'insert_property_id' => ['quantity' => 1, 'weight' => 1.455, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '6 мм']
                    ],
                ]
            ]
        ],
        [
//            id = 18
            'prcs_metal_id' => 1,
            'prcs_metal_sample_id' => 3,
            'prcs_metal_colour_id' => 3,
            'jewellery_category_id' => 8,
            'coverage-jewellery' => [3],
            'name' => 'Подвеска из золота с бриллиантами и аметистом',
            'description' => '',
            'part_number' => '73-00124',
            'approx_weight' => '0.74 грамма',
            'insert-jewellery' => [
                [
                    'stone_id' => 1,
                    'insert_colour_id' => 12,
                    'insert_shape_id' => 9,
                    'insert_property_id' => ['quantity' => 3, 'weight' => 0.011, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '< 1 мм']
                    ],
                ],
                [
                    'stone_id' => 6,
                    'insert_colour_id' => 13,
                    'insert_shape_id' => 3,
                    'insert_property_id' => ['quantity' => 1, 'weight' => 1.078, 'weight_unit' => 'карат',
                        'dimensions' => ['высота' => '8 мм', 'ширина' => '6 мм']
                    ],
                ]
            ]
        ],
        [
//            id = 19
            'prcs_metal_id' => 1,
            'prcs_metal_sample_id' => 3,
            'prcs_metal_colour_id' => 3,
            'jewellery_category_id' => 8,
            'coverage-jewellery' => [3],
            'name' => 'Подвеска из золота',
            'description' => '',
            'part_number' => '36671',
            'approx_weight' => '0.95 грамма',
            'insert-jewellery' => []
        ],
        [
//            id = 20
            'prcs_metal_id' => 2,
            'prcs_metal_sample_id' => 11,
            'prcs_metal_colour_id' => 1,
            'jewellery_category_id' => 9,
            'coverage-jewellery' => [1, 2],
            'name' => 'Подвеска-шарм из золочёного серебра с эмалью',
            'description' => '',
            'part_number' => '93030569',
            'approx_weight' => '3.17 грамма',
            'insert-jewellery' => []
        ],
        [
//            id = 21
            'prcs_metal_id' => 2,
            'prcs_metal_sample_id' => 11,
            'prcs_metal_colour_id' => 7,
            'jewellery_category_id' => 9,
            'coverage-jewellery' => [2],
            'name' => 'Подвеска - шарм из серебра с фианитами',
            'description' => '',
            'part_number' => '94032885',
            'approx_weight' => '2.55 грамма',
            'insert-jewellery' => [
                [
                    'stone_id' => 2,
                    'insert_colour_id' => 12,
                    'insert_shape_id' => 9,
                    'insert_property_id' => ['quantity' => 69, 'weight' => 0.587, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '1 мм']
                    ],
                ]
            ]
        ],
        [
//            id = 22
            'prcs_metal_id' => 1,
            'prcs_metal_sample_id' => 3,
            'prcs_metal_colour_id' => 2,
            'jewellery_category_id' => 10,
            'coverage-jewellery' => [2],
            'name' => 'Серьги из белого золота с бриллиантами',
            'description' => '',
            'part_number' => '1021708',
            'approx_weight' => '2.03 грамма',
            'insert-jewellery' => [
                [
                    'stone_id' => 1,
                    'insert_colour_id' => 12,
                    'insert_shape_id' => 9,
                    'insert_property_id' => ['quantity' => 12, 'weight' => 0.0107, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '< 1 мм']
                    ],
                ],
                [
                    'stone_id' => 1,
                    'insert_colour_id' => 12,
                    'insert_shape_id' => 9,
                    'insert_property_id' => ['quantity' => 2, 'weight' => 0.043, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '< 1 мм']
                    ],
                ]
            ]
        ],
        [
//            id = 23
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
                    'stone_id' => 1,
                    'insert_colour_id' => 12,
                    'insert_shape_id' => 9,
                    'insert_property_id' => ['quantity' => 20, 'weight' => 0.059, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '< 1 мм']
                    ],
                ],
                [
                    'stone_id' => 10,
                    'insert_colour_id' => 14,
                    'insert_shape_id' => 9,
                    'insert_property_id' => ['quantity' => 2, 'weight' => 9.9, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '16 мм']
                    ],
                ],
            ]
        ],
        [
//            id = 24
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
                    'stone_id' => 5,
                    'insert_colour_id' => 2,
                    'insert_shape_id' => 3,
                    'insert_property_id' => ['quantity' => 2, 'weight' => 0.579, 'weight_unit' => 'карат',
                        'dimensions' => ['высота' => '5 мм', 'ширина' => '3 мм']
                    ],
                ],
                [
                    'stone_id' => 2,
                    'insert_colour_id' => 12,
                    'insert_shape_id' => 9,
                    'insert_property_id' => ['quantity' => 12, 'weight' => 0.102, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '1 мм']
                    ],
                ],
            ]
        ],
        [
//            id = 25
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
                    'stone_id' => 7,
                    'insert_colour_id' => 8,
                    'insert_shape_id' => 5,
                    'insert_property_id' => ['quantity' => 1, 'weight' => 6.45, 'weight_unit' => 'карат',
                        'dimensions' => ['высота' => '7 мм', 'ширина' => '7.5 мм']
                    ],
                ]
            ]
        ],
        [
//            id = 26
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
                    'stone_id' => 3,
                    'insert_colour_id' => 5,
                    'insert_shape_id' => 9,
                    'insert_property_id' => ['quantity' => 2, 'weight' => 1.179, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '5 мм']
                    ],
                ],
                [
                    'stone_id' => 2,
                    'insert_colour_id' => 12,
                    'insert_shape_id' => 9,
                    'insert_property_id' => ['quantity' => 14, 'weight' => 0.119, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '1 мм']
                    ],
                ],
            ]
        ],
        [
//            id = 27
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
                    'stone_id' => 8,
                    'insert_colour_id' => 9,
                    'insert_shape_id' => 9,
                    'insert_property_id' => ['quantity' => 2, 'weight' => 4.074, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '8 мм']
                    ],
                ],
                [
                    'stone_id' => 9,
                    'insert_colour_id' => 1,
                    'insert_shape_id' => 9,
                    'insert_property_id' => ['quantity' => 2, 'weight' => 13.927, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '12 мм']
                    ],
                ],
            ]
        ],
        [
//            id = 28
            'prcs_metal_id' => 1,
            'prcs_metal_sample_id' => 3,
            'prcs_metal_colour_id' => 3,
            'jewellery_category_id' => 11,
            'coverage-jewellery' => [3],
            'name' => 'Цепь из золота, плетение Двойной ромб',
            'description' => '',
            'part_number' => '582011006',
            'approx_weight' => '14.04 грамм',
            'insert-jewellery' => []
        ],
        [
//            id = 29
            'prcs_metal_id' => 1,
            'prcs_metal_sample_id' => 3,
            'prcs_metal_colour_id' => 3,
            'jewellery_category_id' => 11,
            'coverage-jewellery' => [3],
            'name' => 'Цепь из золота, плетение Нонна',
            'description' => '',
            'part_number' => '581020502',
            'approx_weight' => '7.48 грамм',
            'insert-jewellery' => []
        ]
    ]
];
