<?php
require_once 'Weapon.php';
Class Player
{
    private string $player;
    private Weapon $weapon;

    public function __construct(string $player,Weapon $weapon)
    {
        $this->player=$player;
        $this->weapon=$weapon;
    }

    public function getPlayer(): string
    {
        return $this->player;
    }

    public function getWeapon(): Weapon
    {
        return $this->weapon;
    }
}