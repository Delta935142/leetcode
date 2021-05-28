<?php
    /**
     * https://leetcode.com/problems/design-parking-system/
     */

    class Solution
    {
        private $space = [];
    
        /**
         * @param Integer $big
         * @param Integer $medium
         * @param Integer $small
         */
        function __construct($big, $medium, $small) 
        {
            $this->space = [$big, $medium, $small];
        }
      
        /**
         * @param Integer $carType
         * @return Boolean
         */
        function addCar($carType) 
        {
            if ($carType == 1 && $this->space[0]) {
                $this->space[0]--;
                return true;
            }
            
            if ($carType == 2 && $this->space[1]) {
                $this->space[1]--;
                return true;
            }
            
            if ($carType == 3 && $this->space[2]) {
                $this->space[2]--;
                return true;
            }
            
            return false;
        }
    }
    
    /**
     * Your ParkingSystem object will be instantiated and called as such:
     * $obj = ParkingSystem($big, $medium, $small);
     * $ret_1 = $obj->addCar($carType);
     */