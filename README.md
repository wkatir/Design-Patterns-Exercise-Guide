# Design Patterns in PHP

This repository contains solutions for a set of exercises focused on implementing common design patterns in PHP. Each exercise demonstrates a specific pattern with real-world use cases.

## Table of Contents

1. [Introduction](#introduction)
2. [Setup](#setup)
3. [Exercises](#exercises)
   - [Exercise 1: Factory Pattern](#exercise-1-factory-pattern)
   - [Exercise 2: Adapter Pattern](#exercise-2-adapter-pattern)
   - [Exercise 3: Decorator Pattern](#exercise-3-decorator-pattern)
   - [Exercise 4: Strategy Pattern](#exercise-4-strategy-pattern)
4. [How to Run](#how-to-run)
5. [Contributing](#contributing)
6. [License](#license)

---

## Introduction

This project implements four different design patterns in PHP to address specific programming problems:

- **Factory Pattern:** Simplifies object creation based on conditions.
- **Adapter Pattern:** Ensures compatibility between different interfaces.
- **Decorator Pattern:** Extends the functionality of objects dynamically.
- **Strategy Pattern:** Allows switching between different behaviors at runtime.

Each implementation is designed with best practices in mind, ensuring modularity and ease of understanding.

---

## Setup

1. Clone the repository:
   ```bash
   git clone <repository_url>
   ```
2. Navigate to the project directory:
   ```bash
   cd design_patterns_php
   ```
3. Ensure you have PHP installed on your system. You can check by running:
   ```bash
   php -v
   ```

---

## Exercises

### Exercise 1: Factory Pattern

- **Description:** Creates characters (`Skeleton` or `Zombie`) based on the game's difficulty level.
- **Usage Example:**
  ```php
  $character = CharacterFactory::createCharacter("easy");
  echo $character->attack();
  ```

### Exercise 2: Adapter Pattern

- **Description:** Ensures that files created in Windows 7 can be opened in Windows 10 using an adapter.
- **Usage Example:**
  ```php
  $file = new File("Sample content");
  $adapter = new Windows7To10Adapter();
  echo $adapter->openFile($file);
  ```

### Exercise 3: Decorator Pattern

- **Description:** Adds weapons (`Sword`, `Bow`) to game characters dynamically, enhancing their attributes.
- **Usage Example:**
  ```php
  $knight = new Knight();
  $armedKnight = new Sword($knight);
  echo $armedKnight->getDescription();
  ```

### Exercise 4: Strategy Pattern

- **Description:** Outputs messages in different formats (`Console`, `JSON`, `File`) by switching strategies.
- **Usage Example:**
  ```php
  $context = new MessageContext(new ConsoleOutput());
  $context->execute("Hello, Strategy Pattern!");
  ```

---

## How to Run

1. Navigate to the respective folder for the exercise.
2. Run the PHP file using the command:
   ```bash
   php <file_name>.php
   ```
3. For example, to test the Factory Pattern:
   ```bash
   php src/factory/character_factory.php
   ```

---

## Contributing

Contributions are welcome! Feel free to open an issue or submit a pull request.

---

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
