<?php


class Product
{
	public $id;
	public $name;
	public $price;
	public $info;
	public $category;
	function __construct($id, $name, $price, $info, $category){
		$this->id = $id;
		$this->name = $name;
		$this->price = $price;
		$this->info = $info;
		$this->category = $category;
	}
	public function view() {
		echo "<h1>$this->category</h1><hr><h2>$this->name</h2><h2>$this->price</h2><p>$this->info</p>";
	}
	
}
			
class Cart extends Product
{
    public $count;
    public $cost;

    public function getCost($id)
    {
        /** вычислить стоимость по одному товару
         * из БД взять товар по id, его стоимость и умножить на количество
         **/
    }
	
    public function addToCart($id, $count = 1)
    {
        //добавить в корзину товар
    }
	
    public function delFromCart($id, $count = 1)
    {
        //удалить из корзины товар
    }
	
    public function clearCart()
    {
        //очистить всю корзину
    }
}	
	
$product1 = new Product(1, 'Keyboard', '30$', 'Keyboard for PC', 'Accessoire');
$product1->view();


//Задание5
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
$a1 = new A(); 
$a2 = new A(); 
$a1->foo(); //1, т.к. ++х
$a2->foo(); //2, два экземпляра одного класса
$a1->foo(); //3
$a2->foo(); //4


//Задание5 п.2
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A();
$b1 = new B();
$a1->foo(); //1, т.к. ++х
$b1->foo(); //1, новый экземпляр др.класса с наследование класса А и его методов
$a1->foo(); //2
$b1->foo(); //2