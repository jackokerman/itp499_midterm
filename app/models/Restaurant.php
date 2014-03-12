<?php
/**
 * Created by PhpStorm.
 * User: Jack
 * Date: 3/11/14
 * Time: 6:09 PM
 */

class Restaurant extends Eloquent {

    public function reviews() {
        return $this->hasMany("Review");
    }

} 