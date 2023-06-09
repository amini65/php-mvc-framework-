<?php

namespace app\core;

abstract class Model extends DbModel
{
    public function loadData($data)
    {
        foreach ($data as $key=>$value){
            if(property_exists($this,$key)){
                $this->{$key}=$value;
            }
        }
    }

    abstract public function rules(): array;



}