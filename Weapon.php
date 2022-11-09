<?php
Class Weapon
{
    private string $name;
    private array $beats;

    public function __construct(string $weapon)
    {
        $this->name=$weapon;
    }

    public function getName():string
    {
        return $this->name;
    }

    public function setBeats(array $beats)
    {
        $this->beats=$beats;
    }

    public function getBeats(): array
    {
        return $this->beats;
    }

}
