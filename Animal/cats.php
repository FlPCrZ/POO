<?php
namespace Animal;

/*
 * Cats class representation.
 */
class Cats {
    
    private $miawl;
    public $color;
    public $size;
    
    /**
     * @return mixed
     */
    public function getMiawl()
    {
        return $this->miawl;
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
     * @param mixed $miawl
     */
    public function setMiawl($miawl)
    {
        $this->miawl = $miawl;
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
        if ($size > 5 and $size < 10) {
            return 'Go walk your cat';
        }
    }
    
    
    public function shutUp(string $sound) {
        if ($sound === $miawl) {
            echo 'Shut up!!!';
        }
    }
    
    public function luck(string $color) {
        if ($color == 'black') {
            return 'Rise and shine as you are the unlucky guy!!!';             
        }
    }
    
    
    
    
}
