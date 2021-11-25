<?php

    class Animal {
        public function Andar()
        {
            echo "O animal andou";
        }

        public function Correr()
        {
            echo "correu";
        }
    }

    class Cavalo extends Animal {

        // polimorfismo consiste em reescrever os método da claase pai
        public function Andar()
        {
            echo "O cavalo "; 
            $this->Correr();
        }
    }

    // $animal = new Animal();
    // $animal->Andar();

    echo "<br>";

    $animal1 = new Cavalo();
    $animal1->Andar();