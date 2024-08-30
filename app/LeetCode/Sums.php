<?php
namespace App\LeetCode;

class NumsSolution {
    /**
     * @param Array $nums
     * @param Integer $target
     * @return Array
     */
    public function twoSum($nums, $target) {
        foreach($nums as $i => $number) {
            foreach($nums as $j => $other_num) {
                if ($i !== $j && $number + $other_num == $target) {
                    return [$i, $j];
                }
            }    
        }
    }
}
