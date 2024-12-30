<?php

use Domain\Jewelleries\Repositories\Jewellery\JewelleryRepository;
use Domain\Jewelleries\Repositories\Jewellery\JewelleryRepositoryInterface;
use Domain\Jewelleries\Repositories\jewelleryCategory\JewelleryCategoryCachedRepository;
use Domain\Jewelleries\Repositories\jewelleryCategory\JewelleryCategoryRepository;
use Domain\Jewelleries\Repositories\jewelleryCategory\JewelleryCategoryRepositoryInterface;

return [
    [
        'interface'      => JewelleryRepositoryInterface::class,
        'implementation' => JewelleryRepository::class,
//    'cache'          => JewelleryCachedRepository::class
    ],
    [
        'interface'      => JewelleryCategoryRepositoryInterface::class,
        'implementation' => JewelleryCategoryRepository::class,
//        'cache'          => JewelleryCategoryCachedRepository::class
    ]
];
