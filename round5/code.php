<?php
function product(string $s): int {
// Coding and coding ...
    return substr_count($s, '!') * substr_count($s, '?');
}