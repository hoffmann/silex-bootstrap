<?php
namespace App\View;

class HelloView extends \SilexView\TemplateView
{
    function __construct($name)
    {
        $this->name = $name;
    }

    function getContextData($request, $app){
        return array("greet" => $this->name, "name" => $request->get("name"));
    }
}