<?php

namespace App\Policies;

use App\Enums\UserType;
use App\Models\Employee;
use App\Models\LegalEntity;
use App\Models\RealEstate;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class RealEstatePolicy
{

    public function view(User $user, RealEstate $realEstate): bool
    {
        // User is the direct owner of the real estate
        if ($user->id === $realEstate->owner_id) {
            return true;
        }

        // User is the owner of the real estate through a household member
        if ($realEstate->owner->household->members->contains($user)) {
            return true;
        }

        // User is the owner of the real estate through a legal entity
        if (
            $user->type === UserType::EMPLOYEE
            && RealEstate::whereOwnerType(LegalEntity::class)->whereIn('id', $user->legalEntities)->contains($realEstate)
        ) {
            return true;
        }

        // User is the owner or employee of the legal entity that owns the real estate or a subsidiary (descendant) of the legal entity
        if (
            $realEstate->owner_type === LegalEntity::class
            && $realEstate->owner->descendantsAndSelf->contains($user->legalEntities)
        ) {
            return true;
        }

        return false;
    }
}
