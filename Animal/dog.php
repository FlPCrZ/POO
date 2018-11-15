<?php 

namespace Animal;
/*
 * Dogs class representation.
 */
class Cats {
    
    private $bark;
    public $color;
    public $size;
    
    /**
     * @return mixed
     */
    public function getBark()
    {
        return $this->bark;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param mixed $bark
     */
    public function setBark($bark)
    {
        $this->bark = $bark;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @param mixed $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    public function walkAnimal(int $size) {
        if ($size > 30) {
            throw new RuntimeException('The size is too big to be able to walk him...');
        }
    }
    
    public function shutUp(string $sound) {
        if ($sound === $bark) {
            return 'Shut up!!!';
        }
    }
    
    public function clean(string $color) {
        if ($color == 'white') {
            return 'Darling, going for a walk so prepare towels please!!!';             
        }
    }
    
    
}