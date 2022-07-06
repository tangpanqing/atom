<?php

namespace model;
use atom\traits\ModelTrait;

/**
 * @comment 商品表
 */
class User
{
    /**
     * @comment ID
     * @type int
     * @auto_increment
     */
    public $id;

    /**
     * @comment 用户ID
     * @type varchar
     * @key unique
     * @length 40
     */
    public $user_id;

    /**
     * @comment 用户手机号
     * @type varchar
     * @key index
     * @length 11
     */
    public $user_mobile;

    /**
     * @comment 用户昵称
     * @type varchar
     * @key index
     * @length 40
     */
    public $user_nickname;

    /**
     * @comment 创建时间
     * @type bigint
     */
    public $create_time;

    /**
     * @comment 删除时间
     * @type bigint
     */
    public $delete_time;

    use ModelTrait;
}