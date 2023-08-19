class Animal {
public function makeSound() {
return "Some generic sound";
}
}

class Dog extends Animal {
public function makeSound() {
return "Woof!";
}
}

class Cat extends Animal {
public function makeSound() {
return "Meow!";
}
}

class Cow extends Animal {
public function makeSound() {
return "Moo!";
}
}

$dog = new Dog();
$cat = new Cat();
$cow = new Cow();

$animals = [$dog, $cat, $cow];

foreach ($animals as $animal) {
echo "Animal sound: " . $animal->makeSound() . "<br>";
}