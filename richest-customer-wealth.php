<?php
    /**
     * https://leetcode.com/problems/richest-customer-wealth/
     */

    class Solution
    {
        /**
         * @param Integer[][] $accounts
         * @return Integer
         */
        function maximumWealth($accounts) 
        {
            $arr = [];
            foreach ($accounts as $account) {
                $arr[] = array_sum($account);
            }
            
            return max($arr);
        }
    }