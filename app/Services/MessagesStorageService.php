<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
class MessagesStorageService
{
    public function all()
    {
        return $this->read();
    }

    public function has(int $id)
    {
        return array_key_exists($id, $this->read());
    }

    public function get(int $id)
    {
        return $this->read()[$id];
    }

    protected function read()
    {
        if(!Storage::exists('messages.json')){
            $this->save([]);
        }

        $data = json_decode(Storage::get('messages.json', true));
        return $data;
    }

    protected function save($data)
    {
        Storage::write('messages.json', json_encode($data));
    }
}
