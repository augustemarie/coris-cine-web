<?php

class Post {

    public static function all()
    {
        return Client::get("/post");
    }

    public static function get($id)
    {
        return Client::get("/post/$id" . $id);
    }

    public static function save($data)
    {
        return Client::post("/post/create", $data);
    }

    public static function update($id, $data)
    {
        return Client::put("/post/update/$id" , $data);
    }

    public static function status($id, $status)
    {
        $data = [
            'status' => $status,
        ];
        return Client::put("/post/update/$id/status" , $data);
    }

}