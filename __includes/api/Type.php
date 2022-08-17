<?php

class Type {

    public static function all()
    {
        return Client::get("/post/type");
    }

    public static function get($id)
    {
        return Client::get("/post/type/$id" . $id);
    }

    public static function save($data)
    {
        return Client::post("/post/type/create", $data);
    }

    public static function update($id, $data)
    {
        return Client::put("/post/type/update/$id" , $data);
    }

}