<?php
    /**
     * https://leetcode.com/problems/check-if-the-sentence-is-pangram/
     */

    class Solution 
    {
        /**
         * @param String $sentence
         * @return Boolean
         */
        function checkIfPangram($sentence) 
        {
            $result = true;
    
            for ($i = 97; $i <= 122; $i++) {
                if (!substr_count($sentence, chr($i))) {
                    $result = false;
                    break;
                }
            }
        
            return $result;
        }
    }