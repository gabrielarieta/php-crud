<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/dao/ColorUserDao.php';
class ColorUserController {

    private $dao;

    public function __construct() {
        $this->dao = new ColorUserDao();
    }
    
    public function listAll() {
        return $this->dao->listAll();
    }

    public function findById($userId, $colorId) {
        return $this->dao->findById($userId, $colorId);
    }
        
    public function createOrUpdate($data) {
        return $this->dao->createOrUpdate($data);
    }

    public function delete($data) {
        return $this->dao->delete($data);
    }
}