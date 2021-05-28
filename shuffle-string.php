<?php
    /**
     * https://leetcode.com/problems/shuffle-string/
     */

    class Solution 
    {
        /**
         * @param String $s
         * @param Integer[] $indices
         * @return String
         */
        function restoreString($s, $indices) 
        {
            $s = str_split($s);
            $arr = [];
            foreach ($indices as $key => $indice) {
                $arr[$indice] = $s[$key];
            }
            
            ksort($arr);
            
            return implode("", $arr);
        }
    }