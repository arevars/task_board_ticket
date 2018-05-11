<?php

namespace controllers;

class RoadMapController {
    
    /*
     * Get ticket data in json format,
     * sort tictets with ascending keys and return sorted array
     * 
     * @param json array $jsonData
     * 
     * @return array $sortedData
     */

    public function parseTicket($jsonData) {

        $data = json_decode($jsonData, true);
        array_multisort( array_column($data, "to"), SORT_ASC, $data );

        return $data;



//        $newData = $this->formatTree($data, 1, 'from', 'to');
//
//        $arrengedKeys = $this->array_keys_multi($newData);
//        $sortedData = array_map(function($item) use ($data) {
//            return $data[$item];
//        }, $arrengedKeys);

    }
//
//    /*
//     * Get ticket data in json format,
//     * get starting key which need to start find array items, get keys id and
//     * parent_id (from and to) to find all leaves and parents. Returns multidimensional
//     * array with keys sorted
//     * sort tictets with ascending keys and return sorted array
//     *
//     * @param json array $jsonData
//     * @param string $startValue
//     * @param string $parent
//     * @param string $child
//     *
//     * @return array $data
//     */
//
//    private function formatTree($tree, $startValue, $parent, $child) {
//        $data = [];
//        $i = 0;
//        foreach ($tree as $item) {
//            if ($item[$parent] == $startValue) {
//                $data[$i] = $this->formatTree($tree, $item[$child], $parent, $child);
//            }
//            $i++;
//        }
//        return $data;
//    }
//
//    /*
//     * Get multidimensional array and returns array with all keys as values.
//     *
//     * @param array $array
//     *
//     * @return array $keys
//     */
//    private function array_keys_multi(array $array) {
//        $keys = [];
//
//        foreach ($array as $key => $value) {
//            $keys[] = $key;
//            if (is_array($value)) {
//                $keys = array_merge($keys, $this->array_keys_multi($value));
//            }
//        }
//        return $keys;
//    }

}
