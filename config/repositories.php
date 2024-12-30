<?php

use Domain\Jewelleries\Repositories\JewelleryCachedRepository;
use Domain\Jewelleries\Repositories\JewelleryRepository;
use Domain\Jewelleries\Repositories\JewelleryRepositoryInterface;

return [
    [
        'interface'      => JewelleryRepositoryInterface::class,
        'implementation' => JewelleryRepository::class,
//    'cache'          => JewelleryCachedRepository::class
    ]
];
