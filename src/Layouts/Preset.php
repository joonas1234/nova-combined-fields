<?php

namespace Joonas1234\NovaCombinedFields\Layouts;

use Joonas1234\NovaCombinedFields\Flexible;

abstract class Preset
{
    /**
     * Execute the preset configuration
     *
     * @return void
     */
    abstract public function handle(Flexible $field);

}
