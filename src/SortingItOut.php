<?php

namespace JM\PHPKata;

class SortingItOut
{
    
    
    /**
     * Make bbaa FROM AABB
     *
     * @param $string
     * @return string
     */
    public function sortOnAlphaBethGrouped($string)
    {
        $string = strtolower($string);
        $peaces = str_split($string);
        $range = range(97, 122);
        $result = [];
        $ret = '';
        
        foreach ($range as $ascii) {
            $result[] = array_filter($peaces, function ($char) use ($ascii) {
                return (ord($char) == $ascii);
            });
        }
        
       foreach($result as $set) {
           if (count($set)) {
               $ret .= implode('', $set);
           }
       }
       
       return $ret;
    }
    
    
}
