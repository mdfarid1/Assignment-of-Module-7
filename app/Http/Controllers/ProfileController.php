<?php

namespace App\Http\Controllers;
class ProfileController extends Controller
{
    public function index($id){
        $name="Donal Trump";
        $age="75";
        $data =array(
            "Id"=>$id,
            "Name"=>$name,
            "Age"=>$age
        );
        $cookie_name = "access_token";
        $cookie_value = "123-XYZ";
        $cookie_expire = time() + 60;
        $cookie_path = "/";
        $cookie_domain = $_SERVER["SERVER_NAME"];
        $cookie_secure = false;
        $cookie_http_only = true;

        $response = response($data);
        $response->cookie($cookie_name,$cookie_value,$cookie_expire,$cookie_path,$cookie_domain,$cookie_secure,$cookie_http_only);
        return $response;

    }
}
