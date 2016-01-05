<?php

/**
 * Performs a shallow toArray to a Collection.
 *
 * @param Illuminate\Support\Collection $collection An instance of collection be transformed
 * @return array
 */
function collection_shallow_to_array($collection)
{
    $array = [];

    $collection->each(function($data) use (&$array) {
        $array[] = $data;
    });

    return $array;
}