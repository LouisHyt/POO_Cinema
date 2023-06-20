<?php

class SortArray{


    static function sort(array $array): array{
        $sorted = $array;
        usort($sorted, function($a, $b){
                $t1 = $a->getReleaseDate();
                $t2 = $b->getReleaseDate();
                return ($t1 < $t2) ? 1 : -1;
        });
        return $sorted;
    }


}


?>