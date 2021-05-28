<?php
    /**
     * https://leetcode.com/problems/decompress-run-length-encoded-list/
     */

    class Solution 
    {
        /**
         * @param Integer[] $nums
         * @return Integer[]
         */
        function decompressRLElist($nums) 
        {
            $arr = [];
            $freq = 0;
    
            foreach ($nums as $key => $num) {
                if (($key + 1) % 2 == 0) {
                    for ($j = 1; $j <= $freq; $j++) {
                        $arr[] = $num;
                    }
                } else {
                    $freq = $num;
                }
            }
            
            return $arr;
        }
    }