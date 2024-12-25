<?php

// === Ejercicio 4: Patrón Strategy ===

// Estrategia de salida
interface MessageOutputStrategy {
    public function output(string $message): void;
}

// Estrategias concretas
class ConsoleOutput implements MessageOutputStrategy {
    public function output(string $message): void {
        echo "Console: $message\n";
    }
}

class JSONOutput implements MessageOutputStrategy {
    public function output(string $message): void {
        echo json_encode(["message" => $message]) . "\n";
    }
}

class FileOutput implements MessageOutputStrategy {
    public function output(string $message): void {
        file_put_contents("output.txt", $message);
        echo "Message saved to file.\n";
    }
}

// Contexto
class MessageContext {
    private MessageOutputStrategy $strategy;

    public function __construct(MessageOutputStrategy $strategy) {
        $this->strategy = $strategy;
    }

    public function setStrategy(MessageOutputStrategy $strategy): void {
        $this->strategy = $strategy;
    }

    public function execute(string $message): void {
        $this->strategy->output($message);
    }
}

// Uso
$context = new MessageContext(new ConsoleOutput());
$context->execute("Hello, Strategy Pattern!");
$context->setStrategy(new JSONOutput());
$context->execute("Hello, JSON!");