<?php

namespace Joonas1234\NovaCombinedFields\Layouts;

use Joonas1234\NovaCombinedFields\Http\ScopedRequest;

interface LayoutInterface
{
    public function name();
    public function title();
    public function fields();
    public function key();
    public function getResolved();
    public function resolve(array $attributes = []);
    public function fill(ScopedRequest $request);
    public function duplicate($key);
    public function duplicateAndHydrate($key, array $attributes = []);
}