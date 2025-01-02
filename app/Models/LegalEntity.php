<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Staudenmeir\LaravelAdjacencyList\Eloquent\Traits\HasAdjacencyList;

class LegalEntity extends Model
{
    use HasAdjacencyList;

    // Relationships

    public function employees()
    {
        return $this->hasMany(User::class);
    }

    public function realEstates()
    {
        return $this->hasMany(RealEstate::class);
    }


    /** Relationships from HasAdjacencyList trait:
     * 
     * 
        ancestors(): The model's recursive parents.
        ancestorsAndSelf(): The model's recursive parents and itself.
        bloodline(): The model's ancestors, descendants and itself.
        children(): The model's direct children.
        childrenAndSelf(): The model's direct children and itself.
        descendants(): The model's recursive children.
        descendantsAndSelf(): The model's recursive children and itself.
        parent(): The model's direct parent.
        parentAndSelf(): The model's direct parent and itself.
        rootAncestor(): The model's topmost parent.
        rootAncestorOrSelf(): The model's topmost parent or itself.
        siblings(): The parent's other children.
        siblingsAndSelf(): All the parent's children.
     *
     * 
     */
}
