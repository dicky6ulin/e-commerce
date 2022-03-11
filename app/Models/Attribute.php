<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $fillable = [
        'code',
        'name',
        'type',
        'is_filterable',
        'is_configurable',
    ];

    public static function types()
    {
        return [
            'text' => 'Text',
            'select' => 'Select',
        ];
    }

    public static function booleanOptions()
    {
        return [
            1 => 'Yes',
            0 => 'No',
        ];
    }

    public function attributeOptions()
    {
        return $this->hasMany('App\Models\AttributeOption');
    }
}
