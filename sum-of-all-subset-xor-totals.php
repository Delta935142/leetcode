<?php
    /**
     * https://leetcode.com/problems/sum-of-all-subset-xor-totals/
     */

    class Solution
    {
        private $nums = [];
        private $size = 0;
        
        /**
         * @param Integer[] $nums
         * @return Integer
         */
        function subsetXORSum($nums) 
        {
            $this->nums = $nums;
            $this->size = sizeof($nums);
    
            return $this->helper(0, 0);
        }
        
        private function helper(int $i, int $val)
        { 
            if ($i === $this->size) {
                return $val;
            }
    
            return $this->helper($i + 1, $val ^ $this->nums[$i]) + $this->helper($i + 1, $val);
        }
    }