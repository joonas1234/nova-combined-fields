<?php

namespace Joonas1234\NovaCombinedFields\Value;

interface ResolverInterface
{
    public function set($model, $attribute, $value);
    public function get($model, $attribute, $layouts);
}