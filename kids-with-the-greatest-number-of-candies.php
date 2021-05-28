<?php
    /**
     * https://leetcode.com/problems/kids-with-the-greatest-number-of-candies/
     */

    class Solution
    {
        /**
         * @param Integer[] $candies
         * @param Integer $extraCandies
         * @return Boolean[]
         */
        function kidsWithCandies($candies, $extraCandies) 
        {
            $max = max($candies);
            foreach ($candies as $key => $candy) {
                $candies[$key] = ($candy + $extraCandies >= $max) 
                    ? true 
                    : false;
            }
            
            return $candies;
        }
    }