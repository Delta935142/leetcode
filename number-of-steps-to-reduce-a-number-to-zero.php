<?php
    /**
     * https://leetcode.com/problems/number-of-steps-to-reduce-a-number-to-zero/
     */

    class Solution
    {
        private $count = 0;
        /**
         * @param Integer $num
         * @return Integer
         */
        function numberOfSteps($num) 
        {
            $this->step($num);
            
            return $this->count;
        }
        
        private function step($num) 
        {
            if ($num == 0) return true;
            
            $this->count++;
            
            if ($num % 2 != 0) {
                $this->step($num - 1);
            } else {
                $this->step($num / 2);
            }
        }
    }