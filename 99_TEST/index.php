<?php // phpcs:ignore PSR1.Files.SideEffects.FoundWithSymbols
namespace ClassTest;

echo "<pre>";

/**
 * Person
 *
 * @category Tag_In_Class_Comment
 * @package  Tag_In_Class_Comment
 * @author   Display Name <username@example.com>
 * @license  http://www.opensource.org/licenses/ Test
 * @link     http://www.example.com
 */
class Person
{
    public $name;
    public $age;

    /**
     * Hello
     *
     * @return void
     */
    public function hello()
    {
        echo $this->name . " says 'Hello'!<br>";
    }
}

$tom = new Person();

$tom->name = "Tom"; // установка свойства $name
$tom->age = 36; // установка свойства $age

$personName = $tom->name;    // получение значения свойства $name

echo "Имя пользователя: " . $personName . "<br>";
$tom->hello(); // вызов метода hello()

print_r($tom);

echo "\n";

namespace ClassAbstractionTest;
// phpcs:ignore PSR1.Classes.ClassDeclaration.MultipleClasses

abstract class Cat
{
    protected $name;
    protected $breed;
    protected $color;
    protected $gender;
    protected $age;
    public function __construct($name, $breed, $color, $gender, $age)
    {
        $this->name = $name;
        $this->breed = $breed;
        $this->color = $color;
        $this->gender = $gender;
        $this->age = $age;
    }
    abstract public function printOutInfo();
    public function printOutMeow()
    {
        echo $this->name . " said meow =^^=\n\n";
    }
}

class MyCat extends Cat
{
    public function printOutInfo()
    {
        echo
        $this->name . "\n" .
        $this->breed . "\n" .
        $this->color . "\n" .
        $this->gender . "\n" .
        $this->age . "\n" ;
    }
}

$ripley = new MyCat("Ripley", "Siberian fold", "Tortoiseshell", "Female", 2);
$ripley->printOutInfo();
$ripley->printOutMeow();
print_r($ripley);

echo "\n";

$yoko = new MyCat("Yoko", "(breed unidentified)", "Redhead", "Female", 1);
$yoko->printOutInfo();
$yoko->printOutMeow();
print_r($yoko);

echo "\n";

/**
 * Base math
 *
 * @category Tag_In_Class_Comment
 * @package  Tag_In_Class_Comment
 * @author   Display Name <username@example.com>
 * @license  http://www.opensource.org/licenses/ Test
 * @link     http://www.example.com
 */
abstract class BaseMath /* phpcs:ignore
PSR1.Classes.ClassDeclaration.MultipleClasses */
{
    /**
     * Expression №1
     *
     * @return mixed Comment here
     */
    public function exp1()
    {
        return $this->a + $this->b;
    }
    /**
     * Expression №2
     *
     * @return mixed Comment here
     */
    public function exp2()
    {
        return $this->a - $this->b;
    }
    /**
     * Expression №1
     *
     * @return void Comment here
     */
    abstract protected function getValue();
}

/**
 * Function №1
 *
 * @category Tag_In_Class_Comment
 * @package  Tag_In_Class_Comment
 * @author   Display Name <username@example.com>
 * @license  http://www.opensource.org/licenses/ Test
 * @link     http://www.example.com
 */
class F1 extends BaseMath /* phpcs:ignore
PSR1.Classes.ClassDeclaration.MultipleClasses */
{
    protected $a;
    protected $b;
    /**
     * Constructor
     *
     * @param mixed $a Comment here
     * @param mixed $b Comment here
     *
     * @return mixed
     */
    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
    /**
     * Get value
     *
     * @return mixed
     */
    public function getValue()
    {
        return $this->a * $this->b . " learn math or eat shit and die";
    }
}

$nums = new F1(6, 4);
echo $nums->exp1() . "\n";
echo $nums->exp2() . "\n";
echo $nums->getValue();

// phpcs:ignore PSR2.Files.ClosingTag.NotAllowed
?>
