<?php

require 'BaseDao.php';

class ColorUserDao extends BaseDao {

    public function __construct() {
        parent::__construct('user_colors');
    }

    public function listAll() {
        $sql = "SELECT user_colors.id as id, user_id as userId, users.name as user, color_id as colorId, colors.name as color, colors.colorhex as colorHex ";
        $sql .= "FROM user_colors, colors, users WHERE colors.id = color_id AND users.id = user_id";
        return $this->customSelect($sql);
    }

    public function findById($userId, $colorId) {
        $sql = "SELECT * FROM user_colors WHERE userId = {$userId} AND color_id = {$colorId}";
        return $this->customSelect($sql);
    }
    public function createOrUpdate($data) {
        if($data['id']) {
            $this->update($data);
        } else {
            $this->insert($data);
        }
    }
}