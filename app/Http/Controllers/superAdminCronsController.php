<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class superAdminCronsController extends Controller {
    public function index() {
        $module = 'crons';
        $keys = array('View', 'Edit', 'Delete', 'Id');
        $items = array();
        foreach ($this->menu[$module] as $key => $item) {
            array_push($items, array(
                    '<a href="/admin/super/'.$module.'/'.$item->id.'">'.$this->vedIcon['View'].'</a>',
                    '<a href="/admin/super/'.$module.'/'.$item->id.'/edit">'.$this->vedIcon['Edit'].'</a>',
                    '<a href="/admin/super/'.$module.'/'.$item->id.'/destroy">'.$this->vedIcon['Delete'].'</a>',
                    $item->id
                ));
        }

        $table = $this->tableBuilder($keys,$items);
        return $this->launchView('views', array('table' => $table));
    }

    public function create() {
        $objects = array('' => '');
        foreach ($this->menu['objects'] as $key => $object) {
            $objects[$object->id] = ucfirst($object->name);
        }
        return $this->launchView('create', array('objects' => $objects));
    }

    public function store(Request $request) {
        parent::save('create',$request);
    }

    public function show($id) {
        return $this->launchView('view');
    }

    public function edit($id) {
        $data = $this->module['sessions']->where('id', $id)->first();
        return $this->launchView('edit', array('data' => $data));
    }

    public function update($id, request $request) {
        parent::save('update',$request, array('id' => $id));
    }

    public function destroy($id) {
        //
    }

    public function run() {

    }
}
