<?php

use Domain\Inserts\Repositories\Stone\StoneCachedRepository;
use Domain\Inserts\Repositories\Stone\StoneRepository;
use Domain\Inserts\Repositories\Stone\StoneRepositoryInterface;
use Domain\Jewelleries\Repositories\Jewellery\JewelleryCachedRepository;
use Domain\Jewelleries\Repositories\Jewellery\JewelleryRepository;
use Domain\Jewelleries\Repositories\Jewellery\JewelleryRepositoryInterface;
use Domain\Jewelleries\Repositories\jewelleryCategory\JewelleryCategoryCachedRepository;
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
//        'interface'      => StoneTypeRepositoryInterface::class,
//        'implementation' => StoneTypeRepository::class,
//        'cache'          => StoneTypeCachedRepository::class
    ],
];
