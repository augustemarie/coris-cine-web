<?php

abstract class Client {

    private static $prefix = "https://clownfish-app-zj9k9.ondigitalocean.app";

    private static $userAgent = "X-WEB-APP V 1.0";

    private static $contentType = "application/json";

	private static function init()
    {
		$headers = [
			"User-Agent:" . self::$userAgent,
			"Content-Type:" . self::$contentType,
		];

		$ch = curl_init();

		curl_setopt_array($ch, [
			CURLOPT_HTTPHEADER => $headers,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_SSL_VERIFYHOST => false,
			CURLOPT_SSL_VERIFYPEER => false,
		]);

		return $ch;
	}

    public static function get($url)
    {
        $ch = self::init();

        curl_setopt($ch, CURLOPT_URL, self::$prefix . $url);

        $response = curl_exec($ch);

        $status_code = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
        curl_close($ch);

        $data =  json_decode($response);
        $data->status_code = $status_code;
        return $data;
    }

    public static function post($url, $data)
    {
        $ch = self::init();

        curl_setopt($ch, CURLOPT_URL, self::$prefix . $url);

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data,true));

        $response = curl_exec($ch);

        $status_code = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
        curl_close($ch);

        $data =  json_decode($response);
        $data->status_code = $status_code;
        return $data;
    }

    public static function put($url, $data)
    {
        $ch = self::init();

        curl_setopt($ch, CURLOPT_URL, self::$prefix . $url);

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data,true));

        $response = curl_exec($ch);

        $status_code = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
        curl_close($ch);

        $data =  json_decode($response);
        $data->status_code = $status_code;
        return $data;
    }

    public static function delete($url)
    {
        $ch = self::init();

        curl_setopt($ch, CURLOPT_URL, self::$prefix . $url);

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");

        $response = curl_exec($ch);

        $status_code = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
        curl_close($ch);

        $data =  json_decode($response);
        $data->status_code = $status_code;
        return $data;
    }

}
