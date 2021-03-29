<?php

class Fighter
{
    private  $name;
    private  $strength;
    private  $dexterity;
    private  $life;

    private const MAX_LIFE = 100;

    public function __construct(string $name, int $str, int $dex)
    {
        $this->name = $name;
        $this->strength = $str;
        $this->dexterity = $dex;

        $this->life = self::MAX_LIFE;
    }
    
    public function fight(Fighter $opponent) 
    {

        $damage = rand(0, $this->strength);
        $defense = rand(0, $opponent->getDexterity());

        $damage -= $defense;

        if($damage < 0)
            $damage = 0;

        
        $opponent->wounded($damage);

    }

    public function getName() : string 
    {
        return $this->name;
    }

    public function getLife() : int 
    {
        return $this->life;
    }

    public function getDexterity() : int
    {
        return $this->dexterity;
    }

    public function wounded(int $damage) : void 
    {
        $this->life -= $damage;
    }

    public function isAlive() : bool
    {
        return $this->life > 0;
    }

}
