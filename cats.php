<?php 
/*
 * Cats class representation.
 */
class Cats {
    
    private $miawl;
    public $color;
    public $size;
    
    public function walkAnimal(int $size) {
        if ($size > 5 and $size < 10) {
            echo 'Go walk your cat';
        }
    }
    
    public function shutUp(string $sound) {
        if ($sound === $miawl) {
            echo 'Shut up!!!';
        }
    }
    
    public function luck(string $color) {
        if ($color == 'black') {
            echo 'Rise and shine as you are the unlucky guy!!!';             
        }
    }
    
    
}
