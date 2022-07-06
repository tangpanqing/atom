<?php

namespace controller;

use atom\core\Db;
use atom\core\Request;
use model\User;

class IndexController
{
    public static function city(Request $req): string
    {
        $name = $req->param('name');
        return "the city name is " . $name;
    }

    public static function userAdd(Request $req): array
    {
        $user = new User();
        $user->user_id = time() . rand(1000, 9999);
        $user->user_nickname = "tom";
        $user->user_mobile = '159' . rand(1000, 9999) . rand(1000, 9999);
        $user->create_time = time();
        $user->delete_time = 0;

        //please make sure your database connect is ok
        Db::tableInsert($user);

        //same as this
        //Db::table($user)->insert($user);

        return $user->toArray();
    }

    public static function userQuery(Request $req): array
    {
        $user = new User();
        $user->user_nickname = "tom";

        //please make sure your database connect is ok
        $list = Db::whereFindAll($user);

        //same as this
        //$list = Db::table($user)->where($user)->findAll();

        foreach ($list as $item) {
            //convert $item from Array to User
            $item = User::fromArray($item);

            var_dump($item->user_id);
            var_dump($item->user_mobile);
            var_dump($item->user_nickname);
        }

        return $list;
    }
}