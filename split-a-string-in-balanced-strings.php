<?php
    /**
     * https://leetcode.com/problems/split-a-string-in-balanced-strings/
     */

    class Solution 
    {
        /**
         * @param String $s
         * @return Integer
         */
        function balancedStringSplit($s) 
        {
            $s = str_split($s);
            $count = 0;
            $lCount = 0;
            $rCount = 0;
            
            foreach ($s as $val) {
                if ($val == 'L') $lCount++;
                if ($val == 'R') $rCount++;
                
                if ($lCount == $rCount) {
                    $count++;
                    $lCount = 0;
                    $rCount = 0;
                } 
            }
            
            return $count;
        }
    }