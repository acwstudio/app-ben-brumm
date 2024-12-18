<?php

return [
    'colours' => [
        'зеленый','красный','синий','розовый','голубой','пурпурный','желтый','белый','черный','радужный',
        'гранатовый','бесцветный','сиреневый','коричневый'
    ],
    'insert-properties' => [
        [
            'quantity' => 11,
            'weight' => 0.094,
            'weight_unit' => 'карат',
            'dimensions' => [
                'диаметр' => '1 мм'
            ]
        ],
        [
            'quantity' => 12,
            'weight' => 0.342,
            'weight_unit' => 'карат',
            'dimensions' => [
                'диаметр' => '1.5 мм'
            ]
        ],
        [
            'quantity' => 2,
            'weight' => 1.179,
            'weight_unit' => 'карат',
            'dimensions' => [
                'диаметр' => '5 мм'
            ]
        ],
        [
            'quantity' => 14,
            'weight' => 0.119,
            'weight_unit' => 'карат',
            'dimensions' => [
                'диаметр' => '1 мм'
            ]
        ],
        [
            'quantity' => 2,
            'weight' => 0.579,
            'weight_unit' => 'карат',
            'dimensions' => [
                'высота' => '5 мм',
                'ширина' => '3 мм'
            ]
        ],
        [
            'quantity' => 12,
            'weight' => 0.102,
            'weight_unit' => 'карат',
            'dimensions' => [
                'диаметр' => '1 мм'
            ]
        ],
        [
            'quantity' => 1,
            'weight' => 1.078,
            'weight_unit' => 'карат',
            'dimensions' => [
                'высота' => '8 мм',
                'ширина' => '6 мм'
            ]
        ],
        [
            'quantity' => 3,
            'weight' => 0.011,
            'weight_unit' => 'карат',
            'dimensions' => [
                'диаметр' => '< 1 мм'
            ]
        ],
        [
            'quantity' => 1,
            'weight' => 6.45,
            'weight_unit' => 'карат',
            'dimensions' => [
                'высота' => '7 мм',
                'ширина' => '7.5 мм'
            ]
        ],
        [
            'quantity' => 1,
            'weight' => 4.074,
            'weight_unit' => 'карат',
            'dimensions' => [
                'диаметр' => '8 мм'
            ]
        ],
        [
            'quantity' => 1,
            'weight' => 13.927,
            'weight_unit' => 'карат',
            'dimensions' => [
                'диаметр' => '12 мм'
            ]
        ],
        [
            'quantity' => 10,
            'weight' => 0.059,
            'weight_unit' => 'карат',
            'dimensions' => [
                'диаметр' => '< 1 мм'
            ]
        ],
        [
            'quantity' => 1,
            'weight' => 9.9,
            'weight_unit' => 'карат',
            'dimensions' => [
                'диаметр' => '16 мм'
            ]
        ],
        [
            'quantity' => 1,
            'weight' => 0.146,
            'weight_unit' => 'карат',
            'dimensions' => [
                'диаметр' => '3 мм'
            ]
        ],
        [
            'quantity' => 6,
            'weight' => 0.618,
            'weight_unit' => 'карат',
            'dimensions' => [
                'высота' => '4 мм',
                'ширина' => '2 мм'
            ]
        ],
    ],
    'inserts' => [
        [
            'stone_id' => 2,
            'insert_colour_id' => 12,
            'insert_shape_id' => 9,
        ],
        [
            'stone_id' => 3,
            'insert_colour_id' => 5,
            'insert_shape_id' => 9,
        ],
        [
            'stone_id' => 5,
            'insert_colour_id' => 2,
            'insert_shape_id' => 3,
        ],
        [
            'stone_id' => 6,
            'insert_colour_id' => 13,
            'insert_shape_id' => 3,
        ],
        [
            'stone_id' => 1,
            'insert_colour_id' => 12,
            'insert_shape_id' => 9,
        ],
        [
            'stone_id' => 7,
            'insert_colour_id' => 8,
            'insert_shape_id' => 5,
        ],
        [
            'stone_id' => 8,
            'insert_colour_id' => 9,
            'insert_shape_id' => 9,
        ],
        [
            'stone_id' => 9,
            'insert_colour_id' => 1,
            'insert_shape_id' => 9,
        ],
        [
            'stone_id' => 10,
            'insert_colour_id' => 14,
            'insert_shape_id' => 9,
        ],
        [
            'stone_id' => 5,
            'insert_colour_id' => 2,
            'insert_shape_id' => 12,
        ],
    ],
    'shapes' => [
        'квадратный кушон', 'кушон', 'овал', 'радиант', 'груша', 'ашер', 'сердце', 'изумрудная', 'круг', 'триллион',
        'кабашон', 'маркиз', 'октагон'
    ],
    'jewelleries' => [
        [
            'name' => 'Серебряное наборное кольцо с фианитами',
            'part_number' => '94011705',
            'prcs_metal_property_id' => 1,
            'insert-jewellery' => [
                [
                    'jewellery_id' => '1',
                    'insert_id' => '1',
                    'insert_property_id' => '1',
                ],
                [
                    'jewellery_id' => '1',
                    'insert_id' => '1',
                    'insert_property_id' => '2',
                ],
            ]
        ],
        [
            'name' => 'Серьги из золота с топазами и фианитами',
            'part_number' => '727533',
            'prcs_metal_property_id' => 2,
            'insert-jewellery' => [
                [
                    'jewellery_id' => '2',
                    'insert_id' => '2',
                    'insert_property_id' => '3',
                ],
                [
                    'jewellery_id' => '2',
                    'insert_id' => '1',
                    'insert_property_id' => '4',
                ],
            ]
        ],
        [
            'name' => 'Серьги из золота с гранатами и фианитами',
            'part_number' => '728331',
            'prcs_metal_property_id' => 2,
            'insert-jewellery' => [
                [
                    'jewellery_id' => '3',
                    'insert_id' => '3',
                    'insert_property_id' => '5',
                ],
                [
                    'jewellery_id' => '3',
                    'insert_id' => '1',
                    'insert_property_id' => '6',
                ],
            ]
        ],
        [
            'name' => 'Подвеска из золота с бриллиантами и аметистом',
            'part_number' => '73-00124',
            'prcs_metal_property_id' => 3,
            'insert-jewellery' => [
                [
                    'jewellery_id' => '4',
                    'insert_id' => '4',
                    'insert_property_id' => '7',
                ],
                [
                    'jewellery_id' => '4',
                    'insert_id' => '5',
                    'insert_property_id' => '8',
                ],
            ]
        ],
        [
            'name' => 'Серьги из золота с жемчугом',
            'part_number' => '792410',
            'prcs_metal_property_id' => 3,
            'insert-jewellery' => [
                [
                    'jewellery_id' => '5',
                    'insert_id' => '6',
                    'insert_property_id' => '9',
                ]
            ]
        ],
        [
            'name' => 'Серьги из золочёного серебра с агатами и малахитами',
            'part_number' => '83020096',
            'prcs_metal_property_id' => 4,
            'insert-jewellery' => [
                [
                    'jewellery_id' => '6',
                    'insert_id' => '7',
                    'insert_property_id' => '10',
                ],
                [
                    'jewellery_id' => '6',
                    'insert_id' => '8',
                    'insert_property_id' => '11',
                ],
            ]
        ],
        [
            'name' => 'Серьги из золота с бриллиантами и камеей',
            'part_number' => '6024257',
            'prcs_metal_property_id' => 2,
            'insert-jewellery' => [
                [
                    'jewellery_id' => '7',
                    'insert_id' => '5',
                    'insert_property_id' => '12',
                ],
                [
                    'jewellery_id' => '7',
                    'insert_id' => '9',
                    'insert_property_id' => '13',
                ],
            ]
        ],
        [
            'name' => 'Брошь из золота с гранатами',
            'part_number' => '740109',
            'prcs_metal_property_id' => 3,
            'insert-jewellery' => [
                [
                    'jewellery_id' => '8',
                    'insert_id' => '3',
                    'insert_property_id' => '14',
                ],
                [
                    'jewellery_id' => '8',
                    'insert_id' => '10',
                    'insert_property_id' => '15',
                ],
            ]
        ],
    ]
];
