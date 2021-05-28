<?php
    /**
     * https://leetcode.com/problems/goal-parser-interpretation/
     */

    class Solution 
    {
        /**
         * @param String $command
         * @return String
         */
        function interpret($command) 
        {
            $str = str_replace('()', 'o', $command);
            $str = str_replace('(al)', 'al', $str);
            
            return $str;
        }
    }