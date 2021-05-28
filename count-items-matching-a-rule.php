<?php
    /**
     * https://leetcode.com/problems/count-items-matching-a-rule/
     */

    class Solution 
    {
        /**
         * @param String[][] $items
         * @param String $ruleKey
         * @param String $ruleValue
         * @return Integer
         */
        function countMatches($items, $ruleKey, $ruleValue) 
        {
            $keys = [
                'type' => 0,
                'color' => 1,
                'name' => 2
            ];
            
            $ruleKey = $keys[$ruleKey];
            $count = 0;
            
            foreach ($items as $item) {
                foreach ($item as $key => $val) {
                    if ($key === $ruleKey && $val == $ruleValue)
                        $count++;
                }
            }
            
            return $count;
        }
    }