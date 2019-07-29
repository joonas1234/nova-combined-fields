<?php

namespace Joonas1234\NovaCombinedFields\Layouts;

use Illuminate\Support\Collection as BaseCollection;

class Collection extends BaseCollection
{

    /**
     * Find a layout based on its name
     *
     * @param  string  $name
     * @return mixed
     */
    public function find($name)
    {
        return $this->first(function($layout) use ($name) {
            return $layout->name() === $name;
        });
    }

}