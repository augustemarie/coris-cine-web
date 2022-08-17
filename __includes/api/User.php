<?php

class User {

	public static function all()
    {
		return Client::get("/users");
	}

	public static function get($id)
    {
		return Client::get("/users/$id");
	}

	public static function save($data)
    {
		return Client::post("/users/register", $data);
	}

	public static function update($id, $data)
    {
		return Client::put("/users/$id", $data);
	}

    public static function auth($username, $password)
    {
        $data = [
            'username' => $username,
            'password' => $password,
        ];
        return Client::post("/users/signin", $data);
    }

}