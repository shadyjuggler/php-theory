<?php

class Person {

    public function __construct(
        public string $name,
        public int $age
    ) {}

    public function introduce(): string {
        return "Hi, I'm $this->name and I'am $this->age years old.";
    }
}

$perosn = new Person("alex", 21);
echo $perosn->introduce() . "\n";

class Employee extends Person {
    
    public function __construct (
        public string $name,
        public int $age,
        public string $position
    ) {}

    public function introduce(): string {
        return parent::introduce() . " I work as $this->position."; // <= using 'parent' keyword, i can call 'Person' 'introduce' method
    }
}

$people = [
    new Employee('Jerry', 45, 'Manager'),
    new Person("Alex", 21)
];

function introduce(Person $person) {
    echo $person->introduce() . "\n";
}

foreach($people as $person) {
    introduce($person);
}