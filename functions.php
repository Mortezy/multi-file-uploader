<?php

function showError($err_array)
{
    foreach ($err_array as $error)
        echo "<p style='color:red'>" . htmlspecialchars($error) . "</p>";
}

function normalize($src_array)
{
    $normalized = [];
    $keys = array_keys($src_array);
    $mem_count = count($src_array[$keys[0]]);
    for ($i = 0; $i < $mem_count; $i++) {
        for ($j = 0; $j < count($keys); $j++) {
            $normalized[$i][$keys[$j]] = $src_array[$keys[$j]][$i];
        }
    }
    return $normalized;
}
