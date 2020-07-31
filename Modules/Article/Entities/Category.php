<?php

namespace Modules\Article\Entities;

use Houdunwang\Arr\Arr as Arr;
use Illuminate\Database\Eloquent\Model;

class Category extends Model {
    protected $fillable = ['pid', 'name'];

    public function getAll( $category = null ) {
        $data = $this->get()->toArray();
        $objArr = new Arr();
        if ( !is_null( $category ) ) {
            foreach ( $data as $k=>$d ) {
                $data[$k]['_selected'] = $category['pid'] == $d['id'];
                $data[$k]['_disabled'] = $category['id'] == $d['id'] || $objArr->isChild( $data, $d['id'], $category['id'], 'id', $fieldPid = 'pid' );
            }
        }

        $data = $objArr->tree( $data, 'name', 'id', $fieldPid = 'pid' );
        return $data;
    }

    public function hasChildCategory() {
        $data = $this->get()->toArray();
        $objArr = new Arr();

        return $objArr->hasChild( $data, $this->id );
    }
}
