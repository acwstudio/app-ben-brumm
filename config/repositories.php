<?php

use Domain\Inserts\Repositories\InsertColour\InsertColourRepository;
use Domain\Inserts\Repositories\InsertColour\InsertColourRepositoryInterface;
use Domain\Inserts\Repositories\InsertShape\InsertShapeRepository;
use Domain\Inserts\Repositories\InsertShape\InsertShapeRepositoryInterface;
use Domain\Inserts\Repositories\Stone\StoneRepository;
use Domain\Inserts\Repositories\Stone\StoneRepositoryInterface;
use Domain\Inserts\Repositories\StoneType\StoneTypeRepository;
use Domain\Inserts\Repositories\StoneType\StoneTypeRepositoryInterface;
use Domain\Jewelleries\Repositories\Jewellery\JewelleryRepository;
use Domain\Jewelleries\Repositories\Jewellery\JewelleryRepositoryInterface;
use Domain\Jewelleries\Repositories\jewelleryCategory\JewelleryCategoryRepository;
use Domain\Jewelleries\Repositories\jewelleryCategory\JewelleryCategoryRepositoryInterface;

return [
    [
        'interface'      => JewelleryRepositoryInterface::class,
        'implementation' => JewelleryRepository::class,
//        'cache'          => JewelleryCachedRepository::class
    ],
    [
        'interface'      => JewelleryCategoryRepositoryInterface::class,
        'implementation' => JewelleryCategoryRepository::class,
//        'cache'          => JewelleryCategoryCachedRepository::class
    ],
    [
        'interface'      => StoneRepositoryInterface::class,
        'implementation' => StoneRepository::class,
//        'cache'          => StoneCachedRepository::class
    ],
    [
        'interface'      => StoneTypeRepositoryInterface::class,
        'implementation' => StoneTypeRepository::class,
//        'cache'          => StoneTypeCachedRepository::class
    ],
    [
        'interface'      => InsertColourRepositoryInterface::class,
        'implementation' => InsertColourRepository::class,
//        'cache'          => InsertColourCachedRepository::class
    ],
    [
        'interface'      => InsertShapeRepositoryInterface::class,
        'implementation' => InsertShapeRepository::class,
//        'cache'          => InsertShapeCachedRepository::class
    ],
];
