<?php

    class Curso{

        public $nombre;
        public $duracion;
        public $costo;
        public $monedas;
        public $profesor;
        public $disponible;

        public function imprimirInfo(){
            return 'El nombre del curso es '.$this->nombre.' y quien imparte el curso es '.$this->profesor;
        }

        public function validaDisponibilidad(){
            if($this->disponible == true){
                return 'El curso si esta disponible';
            } else {
                return 'El curso no esta disponible';
            }
        }
    }

    $php = new Curso();
    $php->nombre = 'PHP';
    $php->duracion = '3 sesiones';
    $php->costo = 25;
    $php->monedas = 'UDS';
    $php->profesor = 'Jairo';
    $php->disponible = true;

    echo $php->validaDisponibilidad();

    //echo $php->imprimirInfo();

    //var_dump($php);

    echo "COMMIT 2"
?>