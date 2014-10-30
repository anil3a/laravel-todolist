<?php

/**
 * User: Anil
 * Date: 20/10/2014
 * Time: 10:50 AM
 * Task Controller
 */

Class Task extends Eloquent {

    protected $table = "tasks";

    public function mark()
    {
        $this->done = $this->done ? false : true;

        $this->save();
    }

}

