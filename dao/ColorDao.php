<?php

require_once 'BaseDao.php';

class ColorDao extends BaseDao {

    public function __construct() {
        parent::__construct('colors');
    }

    public function createOrUpdate($data) {
        if($data['id']) {
            $this->update($data);
        } else {
            $this->insert($data);
        }
    }

}