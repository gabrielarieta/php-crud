<?php

require 'BaseDao.php';

class UserDao extends BaseDao {

    public function __construct() {
        parent::__construct('users');
    }

    public function createOrUpdate($data) {
        if($data['id']) {
            $this->update($data);
        } else {
            $this->insert($data);
        }
    }
}