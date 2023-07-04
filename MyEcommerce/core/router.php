<?php
namespace core;
class router
{
    public $routes=
        [
            "get"=>[],
            "post"=>[]
        ];
    public static function load($file)
    {
        $rout=new static();
        require $file;
        return $rout;
    }
    public function get($uri,$controller)
    {
        $this->routes['get'][$uri]=$controller;
    }
    public function post($uri,$controller)
    {
        $this->routes['post'][$uri]=$controller;
    }
    public function direct($uri,$RequestMethod)
    {
        if (array_key_exists($uri,$this->routes[$RequestMethod]))
        {
            //var_dump(...explode("@",$this->rout[$RequestMethod][$uri]));
            return $this->call_action(...explode("@",$this->routes[$RequestMethod][$uri]));

        }
    }
    public function call_action($controller,$action)
    {
        $controller="app\\controllers\\".$controller;
        $controller=new $controller();
        if (!method_exists($controller,$action))
        {
            throw new \Exception("Action Not Found");
        }
        else
        {
            return $controller->$action();
        }
    }
}