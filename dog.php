<?php 
/*
 * Dogs class representation.
 */
class Cats {
    
    private $bark;
    public $color;
    public $size;
    
    public function walkAnimal(int $size) {
        if ($size > 30) {
            throw new RuntimeException('The size is too big to be able to walk him...');
        }
    }
    
    public function shutUp(string $sound) {
        if ($sound === $bark) {
            echo 'Shut up!!!';
        }
    }
    
    public function clean(string $color) {
        if ($color == 'white') {
            echo 'Darling, going for a walk so prepare towels please!!!';             
        }
    }
    
    
}