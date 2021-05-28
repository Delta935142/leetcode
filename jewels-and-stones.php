<?php
    /**
     * https://leetcode.com/problems/jewels-and-stones/
     */

    class Solution
    {
        /**
         * @param String $jewels
         * @param String $stones
         * @return Integer
         */
        function numJewelsInStones($jewels, $stones) 
        {
            $count = 0;
            foreach (str_split($stones) as $stone) {
                foreach (str_split($jewels) as $jewel) {
                    if ($stone === $jewel) $count++;
                }
            }
            
            return $count++;
        }
    }