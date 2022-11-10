<?php
require_once 'Weapon.php';
require_once 'Player.php';

$rock=new Weapon('ROCK');
$paper=new Weapon('PAPER');
$scissors=new Weapon('SCISSORS');
$spock=new Weapon('SPOCK');
$lizard=new Weapon('LIZARD');

$rock->setBeats([$scissors,$lizard]);
$paper->setBeats([$rock,$spock]);
$scissors->setBeats([$paper,$lizard]);
$spock->setBeats([$scissors,$rock]);
$lizard->setBeats([$spock,$paper]);

$weapons=[$rock,$paper,$scissors,$lizard,$spock];

while (true) {
$selectedWeapon=$weapons[array_rand($weapons)];
$player1=new Player('COMPUTER',$selectedWeapon);

    while (true) {
        foreach ($weapons as $key => $weapon) {
            echo "[$key] - {$weapon->getName()}" . PHP_EOL;
        }
        $selectedNumber =(int) readline('select number: ');
        if (in_array($selectedNumber,range(0,4))) {
            break;
        }
        echo PHP_EOL . 'invalid input!' . PHP_EOL;
    }
    $selectedWeapon = $weapons[$selectedNumber];
    $player2 = new Player('OJARS', $selectedWeapon);

    echo "{$player1->getPlayer()} with {$player1->getWeapon()->getName()} VS {$player2->getPlayer()} with {$player2->getWeapon()->getName()}" . PHP_EOL;

    if ($player1->getWeapon()->getName() == $player2->getWeapon()->getName()) {
        echo 'TIE!' . PHP_EOL;
    } else {
        for ($i = 0; $i < 2; $i++) {
            if ($player1->getWeapon()->getName() == $player2->getWeapon()->getBeats()[$i]->getName()) {
                echo "{$player2->getPlayer()} WON!" . PHP_EOL;
                goto END;
            }
        }
        echo "{$player1->getPlayer()} WON!" . PHP_EOL;
    }
    END:
    $choice = readline("enter 'n' to end or nothing to Play again: ");
    if ($choice == 'n') exit('BYE!'.PHP_EOL);
}