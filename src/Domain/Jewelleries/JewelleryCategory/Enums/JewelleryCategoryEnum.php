<?php

namespace Domain\Jewelleries\JewelleryCategory\Enums;

use Illuminate\Support\Facades\DB;

enum JewelleryCategoryEnum: string
{
    case BRACELETS      = 'браслеты';
    case BROOCHES       = 'броши';
    case CHAINS         = 'цепи';
    case CHARM_PENDANTS = 'подвески-шарм';
    case CUFF_LINKS     = 'запонки';
    case EARRINGS       = 'серьги';
    case NECKLACES      = 'колье';
    case PENDANTS       = 'подвески';
    case PIERCING       = 'пирсинг';
    case RINGS          = 'кольца';
    case TIE_CLIPS      = 'зажимы для галстука';
    
    public function categoryID(): int{

        return match($this)
        {
            JewelleryCategoryEnum::BRACELETS      => $this->getID(JewelleryCategoryEnum::BRACELETS->value),
            JewelleryCategoryEnum::BROOCHES       => $this->getID(JewelleryCategoryEnum::BROOCHES->value),
            JewelleryCategoryEnum::CHAINS         => $this->getID(JewelleryCategoryEnum::CHAINS->value),
            JewelleryCategoryEnum::CHARM_PENDANTS => $this->getID(JewelleryCategoryEnum::CHARM_PENDANTS->value),
            JewelleryCategoryEnum::CUFF_LINKS     => $this->getID(JewelleryCategoryEnum::CUFF_LINKS->value),
            JewelleryCategoryEnum::EARRINGS       => $this->getID(JewelleryCategoryEnum::EARRINGS->value),
            JewelleryCategoryEnum::NECKLACES      => $this->getID(JewelleryCategoryEnum::NECKLACES->value),
            JewelleryCategoryEnum::PENDANTS       => $this->getID(JewelleryCategoryEnum::PENDANTS->value),
            JewelleryCategoryEnum::PIERCING       => $this->getID(JewelleryCategoryEnum::PIERCING->value),
            JewelleryCategoryEnum::RINGS          => $this->getID(JewelleryCategoryEnum::RINGS->value),
            JewelleryCategoryEnum::TIE_CLIPS      => $this->getID(JewelleryCategoryEnum::TIE_CLIPS->value),
        };
    }

    private function getID(string $name): int
    {
        return DB::table('jewellery_categories')->where(['name' => $name])->value('id');
    }
}
