<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImportController extends Controller
{
    private $action  = null;
    private $model   = null;
    private $xml_id  = null;
    private $payload = [];

    // ("CreateUpdate", "xml_id", "product", "{title:.. }")
    // ("CreateUpdate", "xml_id", "product", "{title:.. }")

    public function __construct($action = null, $xml_id = null, $model = null, $payload = []) {
        $this->action  = $action;
        $this->model   = $model;
        $this->xml_id  = $xml_id;
        $this->payload = $payload;

        $this->run ($this->action, $this->xml_id, $this->model, $this->payload);

    }

    private function run($id, $type, $payload) {}
    private function CreateUpdate($id, $type, $payload) {}
    private function create($type, $payload) {}
    private function exist($type, $id) {}
    private function delete ($id, $type) {}
    private function hide($id, $type) {}

}
