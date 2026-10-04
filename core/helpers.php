<?php

namespace Core\Helpers;

function dateFormator(string $date, string $format = "d/m/Y"): string
{
    return date($format, strtotime($date));
}