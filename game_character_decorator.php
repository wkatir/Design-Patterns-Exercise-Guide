<?php

// === Ejercicio 3: Patrón Decorator ===

// Clase base Character
abstract class GameCharacter {
    abstract public function getDescription(): string;
    abstract public function getPower(): int;
}

// Clases concretas
class Knight extends GameCharacter {
    public function getDescription(): string {
        return "Knight";
    }

    public function getPower(): int {
        return 10;
    }
}

class Mage extends GameCharacter {
    public function getDescription(): string {
        return "Mage";
    }

    public function getPower(): int {
        return 15;
    }
}

// Decorador abstracto
abstract class WeaponDecorator extends GameCharacter {
    protected GameCharacter $character;

    public function __construct(GameCharacter $character) {
        $this->character = $character;
    }
}

// Decoradores concretos
class Sword extends WeaponDecorator {
    public function getDescription(): string {
        return $this->character->getDescription() . " with a Sword";
    }

    public function getPower(): int {
        return $this->character->getPower() + 5;
    }
}

class Bow extends WeaponDecorator {
    public function getDescription(): string {
        return $this->character->getDescription() . " with a Bow";
    }

    public function getPower(): int {
        return $this->character->getPower() + 3;
    }
}

// Uso
$knight = new Knight();
$armedKnight = new Sword($knight);
echo $armedKnight->getDescription() . " with power " . $armedKnight->getPower();