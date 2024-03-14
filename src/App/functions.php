<?php

declare(strict_types=1);

function dd(mixed $var)
{
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
    die();
}

function escapeData(mixed $value): string
{
    return htmlspecialchars((string) $value);
}
