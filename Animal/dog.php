<?php 

namespace Animal;
/*
 * Dogs class representation.
 */
class Cats {
    
    public const ALLOWED_COLORS = ['grey', 'black', 'white'];
    public const SOUNDS = ['sound1', 'sound2'];
    private const MAX_SIZE = 30;
    
    public $color;
    public $size;
    private $bark;
    
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
        if (!in_array(self::SOUNDS, $bark)){
            $this->bark = $bark;
        }
    }

    /**
     * @param mixed $color
     */
    private function setColor($color)
    {
        if (in_array(self::ALLOWED_COLORS, $color)){
            $this->color = $color;
        }
    }

    /**
     * @param mixed $size
     */
    private function setSize($size)
    {
        if (size < self::MAX_SIZE){
            $this->size = $size;        
        }
    }

    
    
    public function walkAnimal(int $size) {
        if ($size > self::MAX_SIZE) {
            throw new RuntimeException('The size is too big to be able to walk him...');
        }
    }
    
    public function shutUp(string $sound) {
        if ($sound === $bark) {
            return 'Shut up!!!';
        }
    }
    
    public function clean(string $color) {
        if (!in_array(self::ALLOWED_COLORS, $color)) {
            return 'Darling, going for a walk so prepare towels please!!!';             
        }
    }
    
    
}