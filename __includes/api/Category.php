<?php

class Category {

    public static function all()
    {
        return Client::get("/post/category");
    }

    public static function get($id)
    {
        return Client::get("/post/category/$id" . $id);
    }

    public static function save($data)
    {
        return Client::post("/post/category/create", $data);
    }

    public static function update($id, $data)
    {
        return Client::put("/post/category/update/$id" , $data);
    }

}