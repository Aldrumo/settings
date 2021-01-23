<?php

namespace Aldrumo\Settings\Contracts;

interface Repository
{
    public function get(string $slug);

    public function set(string $slug, $data);
}
