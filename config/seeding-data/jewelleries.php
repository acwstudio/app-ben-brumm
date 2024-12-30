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
    'clasps' => ['пусет', 'английский', 'продевка'],
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
    'necklace_sizes' => [
        ['value' => 38, 'unit' => 'см'],
        ['value' => 42, 'unit' => 'см'],
        ['value' => 40, 'unit' => 'см'],
        ['value' => 45, 'unit' => 'см'],
        ['value' => 50, 'unit' => 'см'],
        ['value' => 55, 'unit' => 'см'],
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
            'is_active' => true,
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
            'prcs_metal' => 'золото',
            'prcs_metal_sample' => 585,
            'prcs_metal_colour' => 'красный',
            'jewellery_category' => 'браслеты',
            'coverage-jewellery' => ['без покрытия'],
            'name' => 'Браслет из золота, плетение нонна, 585 проба',
            'description' => '',
            'part_number' => '552020702',
            'approx_weight' => '2.93 грамм',
            'is_active' => true,
            'props' => [
                'name-function' => 'getBraceletProps',
                'parameters' => [
                    'weaving' => ['weaving' => 'нонна', 'fullness' => 'полнотелая', 'wire_diameter' => '0.7 мм'],
                    'body_part' => 'на руку',
                    'bracelet_sizes' => [16, 17, 18, 19, 20, 21],
                    'quantity' => 5,
                    'price' => 129990
                ]
            ],
            'insert-jewellery' => []
        ],
        //            id = 3
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
            'is_active' => true,
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
        //            id = 4
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
            'is_active' => true,
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
        //            id = 5
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
            'is_active' => true,
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
        //            id = 6
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
            'is_active' => true,
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
        //            id = 7
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
            'is_active' => true,
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
        //            id => 8
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
            'is_active' => true,
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
        //            id => 9
        [
            'prcs_metal' => 'золото',
            'prcs_metal_sample' => 585,
            'prcs_metal_colour' => 'красный',
            'jewellery_category' => 'запонки',
            'coverage-jewellery' => ['родирование'],
            'name' => 'Запонки из золота с корундами и фианитами',
            'description' => '',
            'part_number' => '766001',
            'approx_weight' => '6.91 грамма',
            'is_active' => true,
            'props' => [
                'name-function' => 'getCuffLinkProps',
                'parameters' =>
                    [
                        'quantity' => 5,
                        'price' => 244990
                    ]
            ],
            'insert-jewellery' => [
                [
                    'stone' => 'корунд',
                    'insert_colour' => 'синий',
                    'insert_shape' => 'октагон',
                    'insert_property' => ['quantity' => 2, 'weight' => 3.742, 'weight_unit' => 'карат',
                        'dimensions' => ['высота' => '8 мм', 'ширина' => '6 мм']
                    ],
                ],
                [
                    'stone' => 'фианит',
                    'insert_colour' => 'бесцветный',
                    'insert_shape' => 'круг',
                    'insert_property' => ['quantity' => 4, 'weight' => 0.114, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '1.5 мм']
                    ],
                ]
            ]
        ],
        //            id = 10
        [
            'prcs_metal' => 'серебро',
            'prcs_metal_sample' => 925,
            'prcs_metal_colour' => 'платиновый оттенок',
            'jewellery_category' => 'запонки',
            'coverage-jewellery' => ['родирование', 'эмаль'],
            'name' => 'Запонки из серебра с эмалью с фианитами',
            'description' => '',
            'part_number' => '94160039',
            'approx_weight' => '5.57 грамма',
            'is_active' => true,
            'props' => [
                'name-function' => 'getCuffLinkProps',
                'parameters' =>
                    [
                        'quantity' => 5,
                        'price' => 21990
                    ]
            ],
            'insert-jewellery' => [
                [
                    'stone' => 'фианит',
                    'insert_colour' => 'бесцветный',
                    'insert_shape' => 'круг',
                    'insert_property' => ['quantity' => 40, 'weight' => 0.34, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '1 мм']
                    ],
                ]
            ]
        ],
        //            id = 11
        [
            'prcs_metal' => 'золото',
            'prcs_metal_sample' => 585,
            'prcs_metal_colour' => 'белый',
            'jewellery_category' => 'колье',
            'coverage-jewellery' => ['родирование'],
            'name' => 'Колье из белого золота с бриллиантом',
            'description' => '',
            'part_number' => '1070162',
            'approx_weight' => '1.69 грамма',
            'is_active' => true,
            'props' => [
                'name-function' => 'getNecklaceProps',
                'parameters' =>
                    [
                        'necklace_sizes' => [38, 42],
                        'quantity' => 5,
                        'price' => 319990,
                    ]
            ],
            'insert-jewellery' => [
                [
                    'stone' => 'бриллиант',
                    'insert_colour' => 'бесцветный',
                    'insert_shape' => 'круг',
                    'insert_property' => ['quantity' => 1, 'weight' => 0.21, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '2 мм']
                    ],
                ]
            ]
        ],
        //            id = 12
        [
            'prcs_metal' => 'серебро',
            'prcs_metal_sample' => 925,
            'prcs_metal_colour' => 'платиновый оттенок',
            'jewellery_category' => 'колье',
            'coverage-jewellery' => ['родирование', 'эмаль'],
            'name' => 'Колье из серебра с эмалью',
            'description' => '',
            'part_number' => '94070950',
            'approx_weight' => '4.56 грамма',
            'is_active' => true,
            'props' => [
                'name-function' => 'getNecklaceProps',
                'parameters' =>
                    [
                        'necklace_sizes' => [40, 45, 50, 55],
                        'quantity' => 5,
                        'price' => 17990,
                    ]
            ],
            'insert-jewellery' => []
        ],
        //            id = 13
        [
            'prcs_metal' => 'золото',
            'prcs_metal_sample' => 585,
            'prcs_metal_colour' => 'красный',
            'jewellery_category' => 'кольца',
            'coverage-jewellery' => ['без покрытия'],
            'name' => 'Кольцо из золота с бриллиантами и гидротермальным александритом',
            'description' => '',
            'part_number' => '71-00338',
            'approx_weight' => '1.85 грамма',
            'is_active' => true,
            'props' => [
                'name-function' => 'getRingProps',
                'parameters' =>
                    [
                        'ring_sizes' => [16.5, 17, 17.5, 18, 18.5],
                        'quantity' => 5,
                        'price' => 114990,
                        'dimensions' => ['ширина' => '1 мм']
                    ]
            ],
            'insert-jewellery' => [
                [
                    'stone' => 'александрит гидротермальный',
                    'insert_colour' => 'зеленовато-синий, фиолетовый',
                    'insert_shape' => 'овал',
                    'insert_property' => ['quantity' => 1, 'weight' => 1.16, 'weight_unit' => 'карат',
                        'dimensions' => ['высота' => '7 мм', 'ширина' => '5 мм']
                    ],
                ],
                [
                    'stone' => 'бриллиант',
                    'insert_colour' => 'бесцветный',
                    'insert_shape' => 'круг',
                    'insert_property' => ['quantity' => 2, 'weight' => 0.007, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '< 1 мм']
                    ],
                ],
                [
                    'stone' => 'бриллиант',
                    'insert_colour' => 'бесцветный',
                    'insert_shape' => 'круг',
                    'insert_property' => ['quantity' => 2, 'weight' => 0.011, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '< 1 мм']
                    ],
                ],
                [
                    'stone' => 'бриллиант',
                    'insert_colour' => 'бесцветный',
                    'insert_shape' => 'круг',
                    'insert_property' => ['quantity' => 8, 'weight' => 0.062, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '1 мм']
                    ],
                ]
            ]
        ],
        //            id = 14
        [
            'prcs_metal' => 'серебро',
            'prcs_metal_sample' => 925,
            'prcs_metal_colour' => 'платиновый оттенок',
            'jewellery_category' => 'кольца',
            'coverage-jewellery' => ['родирование'],
            'name' => 'Кольцо из серебра с фианитами',
            'description' => '',
            'part_number' => '94014199',
            'approx_weight' => '2.54 грамма',
            'is_active' => true,
            'props' => [
                'name-function' => 'getRingProps',
                'parameters' =>
                    [
                        'ring_sizes' => [16.5, 17, 17.5, 18, 18.5, 19, 19.5],
                        'quantity' => 5,
                        'price' => 11990,
                        'dimensions' => ['ширина' => '2 мм']
                    ]
            ],
            'insert-jewellery' => [
                [
                    'stone' => 'фианит',
                    'insert_colour' => 'бесцветный',
                    'insert_shape' => 'круг',
                    'insert_property' => ['quantity' => 39, 'weight' => 0.332, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '1 мм']
                    ],
                ]
            ]

        ],
        //            id = 15
        [
            'prcs_metal' => 'золото',
            'prcs_metal_sample' => 585,
            'prcs_metal_colour' => 'красный',
            'jewellery_category' => 'кольца',
            'coverage-jewellery' => ['алмазная грань'],
            'name' => 'Обручальное кольцо из золота с алмазной гранью',
            'description' => '',
            'part_number' => '110224',
            'approx_weight' => '2.15 грамма',
            'is_active' => true,
            'props' => [
                'name-function' => 'getRingProps',
                'parameters' =>
                    [
                        'ring_sizes' => [16, 16.5, 17, 17.5, 18, 18.5, 19, 19.5, 20, 21.5, 22, 22.5],
                        'quantity' => 5,
                        'price' => 79990,
                        'dimensions' => ['ширина' => '4 мм']
                    ]
            ],
            'insert-jewellery' => []
        ],
        //            id = 16
        [
            'prcs_metal' => 'серебро',
            'prcs_metal_sample' => 925,
            'prcs_metal_colour' => 'платиновый оттенок',
            'jewellery_category' => 'кольца',
            'coverage-jewellery' => ['родирование', 'эмаль'],
            'name' => 'Серебряное наборное кольцо с фианитами',
            'description' => '',
            'part_number' => '94011705',
            'approx_weight' => '3 грамма',
            'is_active' => true,
            'price' => 13490,
            'props' => [
                'name-function' => 'getRingProps',
                'parameters' =>
                    [
                        'ring_sizes' => [15.5, 16, 16.5, 17, 17.5, 18, 18.5, 19, 19.5],
                        'quantity' => 5,
                        'price' => 13490,
                        'dimensions' => ['ширина' => '6 мм']
                    ]
            ],
            'insert-jewellery' => [
                [
                    'stone' => 'фианит',
                    'insert_colour' => 'бесцветный',
                    'insert_shape' => 'круг',
                    'insert_property' => ['quantity' => 11, 'weight' => 0.094, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '1 мм']
                    ],
                ],
                [
                    'stone' => 'фианит',
                    'insert_colour' => 'бесцветный',
                    'insert_shape' => 'круг',
                    'insert_property' => ['quantity' => 12, 'weight' => 0.342, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '1.5 мм']
                    ],
                ],
            ]
        ],
        //            id = 17
        [
            'prcs_metal' => 'золото',
            'prcs_metal_sample' => 585,
            'prcs_metal_colour' => 'красный',
            'jewellery_category' => 'пирсинг',
            'coverage-jewellery' => ['без покрытия'],
            'name' => 'Пирсинг в бровь из золота',
            'description' => '',
            'part_number' => '060054',
            'approx_weight' => '1.04 грамма',
            'is_active' => true,
            'price' => 55990,
            'props' => [
                'name-function' => 'getPiercingProps',
                'parameters' =>
                    [
                        'quantity' => 5,
                        'price' => 55990
                    ]
            ],
            'insert-jewellery' => []
        ],
        //            id = 18
        [
            'prcs_metal' => 'золото',
            'prcs_metal_sample' => 585,
            'prcs_metal_colour' => 'красный',
            'jewellery_category' => 'пирсинг',
            'coverage-jewellery' => ['без покрытия'],
            'name' => 'Пирсинг в пупок из золота с фианитом',
            'description' => '',
            'part_number' => '060204',
            'approx_weight' => '1.55 грамма',
            'is_active' => true,
            'props' => [
                'name-function' => 'getPiercingProps',
                'parameters' =>
                    [
                        'quantity' => 5,
                        'price' => 67990
                    ]
            ],
            'insert-jewellery' => [
                [
                    'stone' => 'фианит',
                    'insert_colour' => 'бесцветный',
                    'insert_shape' => 'круг',
                    'insert_property' => ['quantity' => 1, 'weight' => 1.455, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '6 мм']
                    ],
                ]
            ]
        ],
        //            id = 19
        [
            'prcs_metal' => 'золото',
            'prcs_metal_sample' => 585,
            'prcs_metal_colour' => 'красный',
            'jewellery_category' => 'подвески',
            'coverage-jewellery' => ['без покрытия'],
            'name' => 'Подвеска из золота с бриллиантами и аметистом',
            'description' => '',
            'part_number' => '73-00124',
            'approx_weight' => '0.74 грамма',
            'is_active' => true,
            'props' => [
                'name-function' => 'getPendantProps',
                'parameters' =>
                    [
                        'quantity' => 5,
                        'price' => 32990,
                        'dimensions' => ['ширина' => '6 мм', 'толщина' => '4 мм', 'высота' => '13 мм']
                    ]
            ],
            'insert-jewellery' => [
                [
                    'stone' => 'бриллиант',
                    'insert_colour' => 'бесцветный',
                    'insert_shape' => 'круг',
                    'insert_property' => ['quantity' => 3, 'weight' => 0.011, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '< 1 мм']
                    ],
                ],
                [
                    'stone' => 'аметист',
                    'insert_colour' => 'сиреневый',
                    'insert_shape' => 'овал',
                    'insert_property' => ['quantity' => 1, 'weight' => 1.078, 'weight_unit' => 'карат',
                        'dimensions' => ['высота' => '8 мм', 'ширина' => '6 мм']
                    ],
                ]
            ]
        ],
        //            id = 20
        [
            'prcs_metal' => 'золото',
            'prcs_metal_sample' => 585,
            'prcs_metal_colour' => 'красный',
            'jewellery_category' => 'подвески',
            'coverage-jewellery' => ['без покрытия'],
            'name' => 'Подвеска из золота',
            'description' => '',
            'part_number' => '36671',
            'approx_weight' => '0.95 грамма',
            'is_active' => true,
            'price' => 46990,
            'props' => [
                'name-function' => 'getPendantProps',
                'parameters' =>
                    [
                        'quantity' => 5,
                        'price' => 46990,
                        'dimensions' => ['ширина' => '23 мм', 'толщина' => '1 мм', 'высота' => '31 мм']
                    ]
            ],
            'insert-jewellery' => []
        ],
        //            id = 21
        [
            'prcs_metal' => 'серебро',
            'prcs_metal_sample' => 925,
            'prcs_metal_colour' => 'желтый',
            'jewellery_category' => 'подвеска-шарм',
            'coverage-jewellery' => ['золочение', 'родирование'],
            'name' => 'Подвеска-шарм из золочёного серебра с эмалью',
            'description' => '',
            'part_number' => '93030569',
            'approx_weight' => '3.17 грамма',
            'is_active' => true,
            'props' => [
                'name-function' => 'getCharmPendantProps',
                'parameters' =>
                    [
                        'quantity' => 5,
                        'price' => 5990,
                        'dimensions' => ['ширина' => '8 мм', 'толщина' => '11 мм', 'высота' => '14 мм']
                    ]
            ],
            'insert-jewellery' => []
        ],
        //            id = 22
        [
            'prcs_metal' => 'серебро',
            'prcs_metal_sample' => 925,
            'prcs_metal_colour' => 'платиновый оттенок',
            'jewellery_category' => 'подвеска-шарм',
            'coverage-jewellery' => ['родирование'],
            'name' => 'Подвеска - шарм из серебра с фианитами',
            'description' => '',
            'part_number' => '94032885',
            'approx_weight' => '2.55 грамма',
            'is_active' => true,
            'props' => [
                'name-function' => 'getCharmPendantProps',
                'parameters' =>
                    [
                        'quantity' => 5,
                        'price' => 10490,
                        'dimensions' => ['ширина' => '- мм', 'толщина' => '- мм', 'высота' => '- мм']
                    ]
            ],
            'insert-jewellery' => [
                [
                    'stone' => 'фианит',
                    'insert_colour' => 'бесцветный',
                    'insert_shape' => 'круг',
                    'insert_property' => ['quantity' => 69, 'weight' => 0.587, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '1 мм']
                    ],
                ]
            ]
        ],
        //            id = 23
        [
            'prcs_metal' => 'золото',
            'prcs_metal_sample' => 585,
            'prcs_metal_colour' => 'белый',
            'jewellery_category' => 'серьги',
            'coverage-jewellery' => ['родирование'],
            'name' => 'Серьги из белого золота с бриллиантами',
            'description' => '',
            'part_number' => '1021708',
            'approx_weight' => '2.03 грамма',
            'is_active' => true,
            'price' => 154990,
            'props' => [
                'name-function' => 'getEarringProps',
                'parameters' =>
                    [
                        'quantity' => 5,
                        'price' => 154990,
                        'dimensions' => ['ширина' => '7 мм', 'толщина' => '4 мм', 'высота' => '7 мм'],
                        'clasp' => 'пусет'
                    ]
            ],
            'insert-jewellery' => [
                [
                    'stone' => 'бриллиант',
                    'insert_colour' => 'бесцветный',
                    'insert_shape' => 'круг',
                    'insert_property' => ['quantity' => 12, 'weight' => 0.0107, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '< 1 мм']
                    ],
                ],
                [
                    'stone' => 'бриллиант',
                    'insert_colour' => 'бесцветный',
                    'insert_shape' => 'круг',
                    'insert_property' => ['quantity' => 2, 'weight' => 0.043, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '< 1 мм']
                    ],
                ]
            ]
        ],
        //            id = 24
        [
            'prcs_metal' => 'золото',
            'prcs_metal_sample' => 585,
            'prcs_metal_colour' => 'красный',
            'jewellery_category' => 'серьги',
            'coverage-jewellery' => ['родирование'],
            'name' => 'Серьги из золота с бриллиантами и камеей',
            'description' => '',
            'part_number' => '6024257',
            'approx_weight' => '3.6 грамм',
            'is_active' => true,
            'props' => [
                'name-function' => 'getEarringProps',
                'parameters' =>
                    [
                        'quantity' => 5,
                        'price' => 159990,
                        'dimensions' => ['ширина' => '16 мм', 'толщина' => '4 мм', 'высота' => '30 мм'],
                        'clasp' => 'английский'
                    ]
            ],
            'insert-jewellery' => [
                [
                    'stone' => 'бриллиант',
                    'insert_colour' => 'бесцветный',
                    'insert_shape' => 'круг',
                    'insert_property' => ['quantity' => 20, 'weight' => 0.059, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '< 1 мм']
                    ],
                ],
                [
                    'stone' => 'камея',
                    'insert_colour' => 'коричневый',
                    'insert_shape' => 'круг',
                    'insert_property' => ['quantity' => 2, 'weight' => 9.9, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '16 мм']
                    ],
                ],
            ]
        ],
        //            id = 25
        [
            'prcs_metal' => 'золото',
            'prcs_metal_sample' => 585,
            'prcs_metal_colour' => 'красный',
            'jewellery_category' => 'серьги',
            'coverage-jewellery' => ['родирование'],
            'name' => 'Серьги из золота с гранатами и фианитами',
            'description' => '',
            'part_number' => '728331',
            'approx_weight' => '1.64 грамм',
            'is_active' => true,
            'props' => [
                'name-function' => 'getEarringProps',
                'parameters' =>
                    [
                        'quantity' => 5,
                        'price' => 16990,
                        'dimensions' => ['ширина' => '6 мм', 'толщина' => '2 мм', 'высота' => '15 мм'],
                        'clasp' => 'английский'
                    ]
            ],
            'insert-jewellery' => [
                [
                    'stone' => 'гранат',
                    'insert_colour' => 'красный',
                    'insert_shape' => 'овал',
                    'insert_property' => ['quantity' => 2, 'weight' => 0.579, 'weight_unit' => 'карат',
                        'dimensions' => ['высота' => '5 мм', 'ширина' => '3 мм']
                    ],
                ],
                [
                    'stone' => 'фианит',
                    'insert_colour' => 'бесцветный',
                    'insert_shape' => 'круг',
                    'insert_property' => ['quantity' => 12, 'weight' => 0.102, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '1 мм']
                    ],
                ],
            ]
        ],
        //            id = 26
        [
            'prcs_metal' => 'золото',
            'prcs_metal_sample' => 585,
            'prcs_metal_colour' => 'красный',
            'jewellery_category' => 'серьги',
            'coverage-jewellery' => ['без покрытия'],
            'name' => 'Серьги из золота с жемчугом',
            'description' => '',
            'part_number' => '792410',
            'approx_weight' => '2.31 грамм',
            'is_active' => true,
            'props' => [
                'name-function' => 'getEarringProps',
                'parameters' =>
                    [
                        'quantity' => 5,
                        'price' => 14490,
                        'dimensions' => ['ширина' => '7 мм', 'толщина' => '7 мм', 'высота' => '50 мм'],
                        'clasp' => 'продевка'
                    ]
            ],
            'insert-jewellery' => [
                [
                    'stone' => 'жемчуг',
                    'insert_colour' => 'белый',
                    'insert_shape' => 'груша',
                    'insert_property' => ['quantity' => 1, 'weight' => 6.45, 'weight_unit' => 'карат',
                        'dimensions' => ['высота' => '7 мм', 'ширина' => '7.5 мм']
                    ],
                ]
            ]
        ],
        //            id = 27
        [
            'prcs_metal' => 'золото',
            'prcs_metal_sample' => 585,
            'prcs_metal_colour' => 'красный',
            'jewellery_category' => 'серьги',
            'coverage-jewellery' => ['родирование'],
            'name' => 'Серьги из золота с топазами и фианитами',
            'description' => '',
            'part_number' => '727533',
            'approx_weight' => '1.81 грамм',
            'is_active' => true,
            'props' => [
                'name-function' => 'getEarringProps',
                'parameters' =>
                    [
                        'quantity' => 5,
                        'price' => 16990,
                        'dimensions' => ['ширина' => '5 мм', 'толщина' => '4 мм', 'высота' => '15 мм'],
                        'clasp' => 'английский'
                    ]
            ],
            'insert-jewellery' => [
                [
                    'stone' => 'топаз',
                    'insert_colour' => 'голубой',
                    'insert_shape' => 'круг',
                    'insert_property' => ['quantity' => 2, 'weight' => 1.179, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '5 мм']
                    ],
                ],
                [
                    'stone' => 'фианит',
                    'insert_colour' => 'бесцветный',
                    'insert_shape' => 'круг',
                    'insert_property' => ['quantity' => 14, 'weight' => 0.119, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '1 мм']
                    ],
                ],
            ]
        ],
        //            id = 28
        [
            'prcs_metal' => 'серебро',
            'prcs_metal_sample' => 925,
            'prcs_metal_colour' => 'желтый',
            'jewellery_category' => 'серьги',
            'coverage-jewellery' => ['золочение'],
            'name' => 'Серьги из золочёного серебра с агатами и малахитами',
            'description' => '',
            'part_number' => '83020096',
            'approx_weight' => '7.7 грамм',
            'is_active' => true,
            'price' => 18990,
            'props' => [
                'name-function' => 'getEarringProps',
                'parameters' =>
                    [
                        'quantity' => 5,
                        'price' => 18990,
                        'dimensions' => ['ширина' => '12 мм', 'толщина' => '6 мм', 'высота' => '21 мм'],
                        'clasp' => 'английский'
                    ]
            ],
            'insert-jewellery' => [
                [
                    'stone' => 'агат',
                    'insert_colour' => 'черный',
                    'insert_shape' => 'круг',
                    'insert_property' => ['quantity' => 2, 'weight' => 4.074, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '8 мм']
                    ],
                ],
                [
                    'stone' => 'малахит',
                    'insert_colour' => 'зеленый',
                    'insert_shape' => 'круг',
                    'insert_property' => ['quantity' => 2, 'weight' => 13.927, 'weight_unit' => 'карат',
                        'dimensions' => ['диаметр' => '12 мм']
                    ],
                ],
            ]
        ],
        //            id = 29
        [
            'prcs_metal' => 'золото',
            'prcs_metal_sample' => 585,
            'prcs_metal_colour' => 'красный',
            'jewellery_category' => 'цепи',
            'coverage-jewellery' => ['без покрытия'],
            'name' => 'Цепь из золота, плетение Двойной ромб',
            'description' => '',
            'part_number' => '582011006',
            'approx_weight' => '14.04 грамм',
            'is_active' => true,
            'props' => [
                'name-function' => 'getChainProps',
                'parameters' =>
                    [
                        'weaving' => ['weaving' => 'ромб двойной', 'fullness' => 'пустотелая', 'wire_diameter' => '1 мм'],
                        'chain_sizes' => [40, 45, 50, 55, 60, 65],
                        'quantity' => 5,
                        'price' => 114990
                    ]
            ],
            'insert-jewellery' => []
        ],
        [
//            id = 30
            'prcs_metal' => 'золото',
            'prcs_metal_sample' => 585,
            'prcs_metal_colour' => 'красный',
            'jewellery_category' => 'цепи',
            'coverage-jewellery' => ['без покрытия'],
            'name' => 'Цепь из золота, плетение Нонна',
            'description' => '',
            'part_number' => '581020502',
            'approx_weight' => '7.48 грамм',
            'is_active' => true,
            'price' => 204990,
            'props' => [
                'name-function' => 'getChainProps',
                'parameters' =>
                    [
                        'weaving' => ['weaving' => 'нонна', 'fullness' => 'полнотелая', 'wire_diameter' => '0,5 мм'],
                        'chain_sizes' => [35, 40, 45, 50, 55, 70],
                        'quantity' => 5,
                        'price' => 204990
                    ]
            ],
            'insert-jewellery' => []
        ]
    ]
];
