<?php

// === Ejercicio 1: Patrón Factory ===

// Interfaz Character
interface Character {
    public function attack(): string;
    public function speed(): string;
}

// Implementación de Skeleton
class Skeleton implements Character {
    public function attack(): string {
        return "Skeleton attacks with a bow!";
    }

    public function speed(): string {
        return "Skeleton moves at medium speed.";
    }
}

// Implementación de Zombie
class Zombie implements Character {
    public function attack(): string {
        return "Zombie attacks with a bite!";
    }

    public function speed(): string {
        return "Zombie moves slowly.";
    }
}

// Factory
class CharacterFactory {
    public static function createCharacter(string $level): Character {
        if ($level === "easy") {
            return new Skeleton();
        } elseif ($level === "hard") {
            return new Zombie();
        }
        throw new Exception("Invalid level");
    }
}

// Uso
$character = CharacterFactory::createCharacter("easy");
echo $character->attack();