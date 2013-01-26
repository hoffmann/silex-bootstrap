<?php
namespace App\View;

class TestView extends \SilexView\TemplateView
{
    function __construct($name)
    {
        $this->name = $name;
    }

    function getContextData($request, $app){
        return array("name" => $this->name);
    }
}