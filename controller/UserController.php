<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/dao/UserDao.php';
class UserController {

    private $dao;
    private $model;

    public function __construct() {
        $this->dao = new UserDao();
    }
    
    public function listAll() {
        return $this->dao->listAll();
    }

    public function findById($id) {
        return $this->dao->findById($id);
    }
        
    public function createOrUpdate($data) {
        return $this->dao->createOrUpdate($data);
    }

    public function delete($data) {
        return $this->dao->delete($data);
    }
}