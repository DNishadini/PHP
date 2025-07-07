<html>
    <body>
        <h1>The fruit program</h1>

        <?php
        //create class
            class Fruit{
                public $name;
                public $color;

                function set_name($name){
                    $this->name = $name;
                }
                function get_name(){
                    return $this->name;
                }
            }
            //create objects
            $apple = new Fruit();
            $banana = new Fruit();
 
            $apple->set_name('Apple');
            $banana->set_name('Banana');

            echo $apple->get_name();
            echo "<br>";
            echo $banana->get_name();


        ?>
    </body>
</html>