<?php

// === Ejercicio 2: Patrón Adapter ===

// Clase base de archivo
class File {
    private string $content;

    public function __construct(string $content) {
        $this->content = $content;
    }

    public function getContent(): string {
        return $this->content;
    }
}

// Interfaz para Windows10
interface Windows10FileHandler {
    public function openFile(File $file): string;
}

// Adaptador para compatibilidad
class Windows7To10Adapter implements Windows10FileHandler {
    public function openFile(File $file): string {
        $content = $file->getContent();
        return "File converted for Windows 10: $content";
    }
}

// Uso
$file = new File("This is a Word document.");
$adapter = new Windows7To10Adapter();
echo $adapter->openFile($file);