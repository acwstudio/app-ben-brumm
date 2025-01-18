<?php

use Domain\Inserts\Insert\Repositories\InsertCachedRepository;
use Domain\Inserts\Insert\Repositories\InsertRepository;
use Domain\Inserts\Insert\Repositories\InsertRepositoryInterface;
use Domain\Inserts\InsertColour\Repositories\InsertColourRepository;
use Domain\Inserts\InsertColour\Repositories\InsertColourRepositoryInterface;
use Domain\Inserts\InsertShape\Repositories\InsertShapeRepository;
use Domain\Inserts\InsertShape\Repositories\InsertShapeRepositoryInterface;
use Domain\Inserts\Stone\Repositories\StoneRepository;
use Domain\Inserts\Stone\Repositories\StoneRepositoryInterface;
use Domain\Inserts\StoneType\Repositories\StoneTypeRepository;
use Domain\Inserts\StoneType\Repositories\StoneTypeRepositoryInterface;
use Domain\Jewelleries\Jewellery\Repositories\JewelleryRepository;
use Domain\Jewelleries\Jewellery\Repositories\JewelleryRepositoryInterface;
use Domain\Jewelleries\JewelleryCategory\Repositories\JewelleryCategoryRepository;
use Domain\Jewelleries\JewelleryCategory\Repositories\JewelleryCategoryRepositoryInterface;

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
    [
        'interface'      => InsertRepositoryInterface::class,
        'implementation' => InsertRepository::class,
//        'cache'          => InsertCachedRepository::class
    ],
];
