<?php

return [
    'jewellery-categories' => [
        ['name' => 'браслеты', 'category-code' => 'bracelet'],
        ['name' => 'броши', 'category-code' => 'brooch'],
        ['name' => 'зажим для галстука', 'category-code' => 'tie clip'],
        ['name' => 'запонки', 'category-code' => 'cuff link'],
        ['name' => 'колье', 'category-code' => 'necklace'],
        ['name' => 'кольца', 'category-code' => 'ring'],
        ['name' => 'пирсинг', 'category-code' => 'piercing'],
        ['name' => 'подвески', 'category-code' => 'pendant'],
        ['name' => 'подвеска-шарм', 'category-code' => 'charm pendant'],
        ['name' => 'серьги', 'category-code' => 'earring'],
        ['name' => 'цепи', 'category-code' => 'chain'],
    ],
    'weavings' => [
        'бисмарк', 'бисмарк двойной', 'гарибальди', 'колос', 'лав', 'нонна', 'панцирное', 'панцирное двойное', 'питон', 'ролло',
        'ромб двойной', 'ромб тройной', 'сингапур', 'скорпион', 'снейк', 'улитка', 'фантазийное', 'фигаро', 'якорное',
        'якорь бриллиантовый', 'без плетения'
    ],
    'bracelet_sizes' => [
        ['value' => 16, 'unit' => 'см'],
        ['value' => 17, 'unit' => 'см'],
        ['value' => 17.5, 'unit' => 'см'],
        ['value' => 18, 'unit' => 'см'],
        ['value' => 18.5, 'unit' => 'см'],
        ['value' => 19, 'unit' => 'см'],
        ['value' => 19.5, 'unit' => 'см'],
        ['value' => 20, 'unit' => 'см'],
        ['value' => 21, 'unit' => 'см'],
        ['value' => 22, 'unit' => 'см'],
        ['value' => 23, 'unit' => 'см'],
        ['value' => 24, 'unit' => 'см'],
        ['value' => 25, 'unit' => 'см'],
    ],
    'ring_sizes' => [
        ['value' => 15.5, 'unit' => 'мм'],
        ['value' => 16, 'unit' => 'мм'],
        ['value' => 16.5, 'unit' => 'мм'],
        ['value' => 17, 'unit' => 'мм'],
        ['value' => 17.5, 'unit' => 'мм'],
        ['value' => 18, 'unit' => 'мм'],
        ['value' => 18.5, 'unit' => 'мм'],
        ['value' => 19, 'unit' => 'мм'],
        ['value' => 19.5, 'unit' => 'мм'],
        ['value' => 20, 'unit' => 'мм'],
        ['value' => 21.5, 'unit' => 'мм'],
        ['value' => 22, 'unit' => 'мм'],
        ['value' => 22.5, 'unit' => 'мм'],
    ],
    'chain_sizes' => [
        ['value' => 35, 'unit' => 'см'],
        ['value' => 40, 'unit' => 'см'],
        ['value' => 45, 'unit' => 'см'],
        ['value' => 50, 'unit' => 'см'],
        ['value' => 55, 'unit' => 'см'],
        ['value' => 60, 'unit' => 'см'],
        ['value' => 65, 'unit' => 'см'],
        ['value' => 70, 'unit' => 'см'],
    ],
    'jewelleries' => [
        //            id = 1
        [
            'prcs_metal' => 'золото',
            'prcs_metal_sample' => 585,
            'prcs_metal_colour' => 'белый',
            'jewellery_category' => 'браслеты',
            'coverage-jewellery' => ['без покрытия'],
            'name' => 'Браслет из белого золота с бриллиантами',
            'description' => '',
            'part_number' => '1050166-3',
            'approx_weight' => '5.4 грамма',
            'props' => [
                'name-function' => 'getBraceletProps',
                'parameters' =>
                    [
                        'weaving' => [],
                        'body_part' => 'на руку',
                        'bracelet_sizes' => [17, 18, 19],
                        'quantity' => 5,
                        'price' => 499990
                    ]
            ],
            'insert-jewellery' => [
                [
                    'stone' => 'бриллиант',
                    'insert_colour' => 'бесцветный',
                    'insert_shape' => 'круг',
                    'insert_property' => [
                        'quantity' => 31, 'weight' => 0.419, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '< 1 мм']
                    ],
                ],
                [
                    'stone' => 'бриллиант',
                    'insert_colour' => 'бесцветный',
                    'insert_shape' => 'круг',
                    'insert_property' => [
                        'quantity' => 24, 'weight' => 0.178, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '< 1 мм']
                    ],
                ]
            ]
        ],
        //            id = 2
        [
            'prcs_metal' => 'серебро',
            'prcs_metal_sample' => 925,
            'prcs_metal_colour' => 'платиновый оттенок',
            'jewellery_category' => 'браслеты',
            'coverage-jewellery' => ['родирование'],
            'name' => 'Браслет из серебра с миксом камней',
            'description' => '',
            'part_number' => '92050107',
            'approx_weight' => '8.41 грамм',
            'props' => [
                'name-function' => 'getBraceletProps',
                'parameters' =>
                    [
                        'weaving' => [],
                        'body_part' => 'на руку',
                        'bracelet_sizes' => [16, 17, 17.5, 18, 18.5, 19, 20],
                        'quantity' => 5,
                        'price' => 28990
                    ]
            ],
            'insert-jewellery' => [
                [
                    'stone' => 'аметист',
                    'insert_colour' => 'сиреневый',
                    'insert_shape' => 'груша',
                    'insert_property' => [
                        'quantity' => 8, 'weight' => 4.827, 'weight_unit' => 'карат',
                        'dimensions' => ['высота' => '7 мм', 'ширина' => '5 мм']
                    ],
                ],
                [
                    'stone' => 'топаз',
                    'insert_colour' => 'голубой',
                    'insert_shape' => 'груша',
                    'insert_property' => ['quantity' => 7, 'weight' => 5.54, 'weight_unit' => 'карат',
                        'dimensions' => ['высота' => '7 мм', 'ширина' => '5 мм']
                    ],
                ],
                [
                    'stone' => 'фианит',
                    'insert_colour' => 'бесцветный',
                    'insert_shape' => 'круг',
                    'insert_property' => ['quantity' => 70, 'weight' => 0.595, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '1 мм']
                    ],
                ]
            ]
        ],
        //            id = 3
        [
            'prcs_metal' => 'серебро',
            'prcs_metal_sample' => 925,
            'prcs_metal_colour' => 'платиновый оттенок',
            'jewellery_category' => 'браслеты',
            'coverage-jewellery' => ['родирование'],
            'name' => 'Браслет мужской из серебра, плетение Бисмарк',
            'description' => '',
            'part_number' => '965141004',
            'approx_weight' => '13.45 грамм',
            'props' => [
                'name-function' => 'getBraceletProps',
                'parameters' =>
                    [
                        'weaving' => ['weaving' => 'бисмарк', 'fullness' => 'полнотелая', 'wire_diameter' => '1 мм'],
                        'body_part' => 'на руку',
                        'bracelet_sizes' => [18, 19, 20, 21, 22, 23, 24, 25],
                        'quantity' => 5,
                        'price' => 21990
                    ]
            ],
            'insert-jewellery' => []
        ],
        //            id = 4
        [
            'prcs_metal' => 'золото',
            'prcs_metal_sample' => 585,
            'prcs_metal_colour' => 'красный',
            'jewellery_category' => 'броши',
            'coverage-jewellery' => ['без покрытия',],
            'name' => 'Брошь из золота с гранатами',
            'description' => '',
            'part_number' => '740109',
            'approx_weight' => '1.14 грамм',
            'props' => [
                'name-function' => 'getBroochProps',
                'parameters' =>
                [
                    'quantity' => 5,
                    'price' => 42990
                ]
            ],
            'insert-jewellery' => [
                [
                    'stone' => 'гранат',
                    'insert_colour' => 'красный',
                    'insert_shape' => 'круг',
                    'insert_property' => ['quantity' => 1, 'weight' => 0.146, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '3 мм']
                    ],
                ],
                [
                    'stone' => 'гранат',
                    'insert_colour' => 'красный',
                    'insert_shape' => 'маркиз',
                    'insert_property' => ['quantity' => 6, 'weight' => 0.618, 'weight_unit' => 'карат',
                        'dimensions' => ['высота' => '4 мм', 'ширина' => '2 мм']
                    ],
                ],
            ]
        ],
        //            id = 5
        [
            'prcs_metal' => 'золото',
            'prcs_metal_sample' => 585,
            'prcs_metal_colour' => 'красный',
            'jewellery_category' => 'броши',
            'coverage-jewellery' => ['без покрытия'],
            'name' => 'Брошь-булавка из золота',
            'description' => '',
            'part_number' => '40015',
            'approx_weight' => '0.91 грамм',
            'props' => [
                'name-function' => 'getBroochProps',
                'parameters' =>
                    [
                        'quantity' => 5,
                        'price' => 55090
                    ]
            ],
            'insert-jewellery' => []
        ],
        //            id = 6
        [
            'prcs_metal' => 'золото',
            'prcs_metal_sample' => 585,
            'prcs_metal_colour' => 'красный',
            'jewellery_category' => 'зажим для галстука',
            'coverage-jewellery' => ['без покрытия'],
            'name' => 'Зажим для галстука из золота с бриллиантами и изумрудом',
            'description' => '',
            'part_number' => '3090001',
            'approx_weight' => '6.45 грамм',
            'props' => [
                'name-function' => 'getTieClipProps',
                'parameters' =>
                    [
                        'quantity' => 5,
                        'price' => 269990
                    ]
            ],
            'insert-jewellery' => [
                [
                    'stone' => 'изумруд',
                    'insert_colour' => 'зеленый',
                    'insert_shape' => 'круг',
                    'insert_property' => ['quantity' => 1, 'weight' => 0.452, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '1.5 мм']
                    ],
                ],
                [
                    'stone' => 'бриллиант',
                    'insert_colour' => 'бесцветный',
                    'insert_shape' => 'круг',
                    'insert_property' => ['quantity' => 20, 'weight' => 0.046, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '< 1 мм']
                    ],
                ]
            ]

        ],
        //            id => 7
        [
            'prcs_metal' => 'золото',
            'prcs_metal_sample' => 585,
            'prcs_metal_colour' => 'красный',
            'jewellery_category' => 'зажим для галстука',
            'coverage-jewellery' => ['родирование', 'эмаль'],
            'name' => 'Золотой зажим для галстука с алмазной гранью',
            'description' => '',
            'part_number' => '090035',
            'approx_weight' => '4.44 грамма',
            'props' => [
                'name-function' => 'getTieClipProps',
                'parameters' =>
                    [
                        'quantity' => 5,
                        'price' => 121990
                    ]
            ],
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
            'price' => 244990,
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
            'price' => 21990,
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
            'price' => 319990,
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
            'price' => 17990,
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
            'price' => 114990,
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
            'price' => 11990,
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
            'price' => 79990,
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
            'price' => 13490,
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
            'price' => 55990,
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
            'price' => 67990,
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
            'price' => 32990,
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
            'price' => 46990,
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
            'price' => 5990,
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
            'price' => 10490,
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
            'price' => 154990,
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
            'price' => 159990,
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
            'price' => 16990,
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
            'price' => 14490,
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
            'price' => 16990,
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
            'price' => 18990,
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
            'price' => 114990,
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
            'price' => 204990,
            'insert-jewellery' => []
        ]
    ]
];
