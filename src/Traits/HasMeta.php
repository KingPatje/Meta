<?php 

namespace Kingpatje\Meta\Traits;

trait HasMeta {

    public function getMeta($key, $default = null)
    {
        $meta = $this->meta()->where('key', $key)->first();

        if ($meta) {
            return $meta->value;
        }

        return $default;
    }

    public function setMeta($key, $value)
    {
        if(is_array($key)){
            return $this->setMultiple($key);
        }

        $meta = $this->meta()->where('key', $key)->first();

        if ($meta) {
            $meta->value = $value;
            $meta->save();
        } else {
            $this->meta()->create([
                'key' => $key,
                'value' => $value,
            ]);
        }

        return $this;
    }

    public function setMultiple(array $data)
    {
        foreach ($data as $key => $value) {
            $this->setMeta($key, $value);
        }

        return $this;
    }

}