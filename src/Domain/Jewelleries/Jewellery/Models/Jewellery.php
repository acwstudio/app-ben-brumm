<?php

declare(strict_types=1);

namespace Domain\Jewelleries\Jewellery\Models;

use Domain\Inserts\Insert\Models\Insert;
use Domain\Inserts\Stone\Models\Stone;
use Domain\Jewelleries\JewelleryCategory\Models\JewelleryCategory;
use Domain\JewelleryProperties\BraceletProp\Models\BraceletProp;
use Domain\JewelleryProperties\BroochProp\Models\BroochProp;
use Domain\JewelleryProperties\ChainProp\Models\ChainProp;
use Domain\JewelleryProperties\CharmPendantProp\Models\CharmPendantProp;
use Domain\JewelleryProperties\CufflinkProp\Models\CuffLinkProp;
use Domain\JewelleryProperties\EarringProp\Models\EarringProp;
use Domain\JewelleryProperties\NecklaceProp\Models\NecklaceProp;
use Domain\JewelleryProperties\PendantProp\Models\PendantProp;
use Domain\JewelleryProperties\PiercingProp\Models\PiercingProp;
use Domain\JewelleryProperties\RingProp\Models\RingProp;
use Domain\JewelleryProperties\TieClipProp\Models\TieClipProp;
use Domain\Shared\Models\BaseModel;
use Domain\Views\BraceletPropViews\Models\BraceletPropView;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

final class Jewellery extends BaseModel
{
    public const TYPE_RESOURCE = 'jewelleries';

    public function inserts(): HasMany
    {
        return $this->hasMany(Insert::class);
    }

    public function braceletProp(): HasOne
    {
        return $this->hasOne(BraceletProp::class);
    }

    public function broochProp(): HasOne
    {
        return $this->hasOne(BroochProp::class);
    }

    public function chainProp(): HasOne
    {
        return $this->hasOne(ChainProp::class);
    }

    public function charmPendantProp(): HasOne
    {
        return $this->hasOne(CharmPendantProp::class);
    }

    public function cuffLinkProp(): HasOne
    {
        return $this->hasOne(CuffLinkProp::class);
    }

    public function earringProp(): HasOne
    {
        return $this->hasOne(EarringProp::class);
    }

    public function ringProp(): HasOne
    {
        return $this->hasOne(RingProp::class);
    }

    public function necklaceProp(): HasOne
    {
        return $this->hasOne(NecklaceProp::class);
    }

    public function pendantProp(): HasOne
    {
        return $this->hasOne(PendantProp::class);
    }

    public function piercingProp(): HasOne
    {
        return $this->hasOne(PiercingProp::class);
    }

    public function tieClipProp(): HasOne
    {
        return $this->hasOne(TieClipProp::class);
    }

    public function jewelleryCategory(): BelongsTo
    {
        return $this->belongsTo(JewelleryCategory::class);
    }

    public function braceletPropView(): HasOne
    {
        return $this->hasOne(BraceletPropView::class, 'jewellery_id', 'id');
    }

    public function stones(): BelongsToMany
    {
        return $this->belongsToMany(Stone::class, 'inserts', 'jewellery_id', 'stone_id')->withPivot('insert_property_id');
    }
}
