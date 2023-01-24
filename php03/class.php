    <?php

    class Fruit {
    // Properties
    public $name;
    public $color;

    // Methods
    function  set_name($v) {
        $this->name = $v;
    }
    function  get_name() {
        return $this->name;
    }

    public function set_color($v){
        $this->color = $v;
    }
    public function get_color(){
        return $this->color ;
    }


    }

    $mango = new Fruit();
    $jackfrut = new Fruit();
    $banana = new Fruit();

    $mango->set_name("fojli");
    $jackfrut-> set_name("kathal");
    $banana-> set_name("shagor kola");

    $banana-> set_color("red");
    $jackfrut-> set_color("green");
    $mango-> set_color("yellow");

    echo $mango->get_name();
    echo "<br>";

    echo $jackfrut->get_name();
    echo "<br>";

    echo $banana->get_name();
    echo "<br>";


    echo $mango->get_color();
    echo "<br>";

    echo $jackfrut->get_color();
    echo "<br>";

    echo $banana->get_color();
    echo "<br>";
    ?>