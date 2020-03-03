<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    public function setName($name,$value){
        $type = DataType::where('model_name',"App\Product")->first();
        $row = DataRows::where('data_type_id',$type->id)->where('field',$name)->first();
        return $row->display_name.': '.$value;
    }
}
