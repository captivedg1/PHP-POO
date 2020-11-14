<?php

    //INTERFACE

    interface Requerimiento {
        public function asignarRequerimiento($listado);

        public function obtenerRequerimiento();
    }

    interface Conocimiento {
        public function asignarConocimiento($listado);

        public function obtenerConocimiento();
    }
    
    class Curso implements Requerimiento, Conocimiento{
        private $titulo;
        private $profesor;
        private $duracion;
        private $costo;
        private $disponible;
        private $listado;

        //Atributo estático
        public static $moneda = 'USD';
        public static $bienvenida = 'Hola a mi Curso de POO';

        //Creando nuestro constructor
        public function __construct($titulo, $profesor, $duracion, $costo, $disponible){

            //Asignamos
            $this->titulo = $titulo;
            $this->profesor = $profesor;
            $this->duracion = $duracion;
            $this->costo = $costo;
            $this->disponible = $disponible;

        }

        //DESTRUCTOR
        /*public function __destruct(){
            echo "Destruyendo".$this->titulo.'<br/>';
        }*/

        //ENCAPSULACIÓN
        
        //GETTER (obtener)
        public function obtenerTitulo(){
            return $this->titulo;
        }

        public function obtenerProfesor(){
            return $this->profesor;
        }

        //SETTER (asignar)
        public function asignarTitulo($titulo){
            $this->titulo = $titulo;
        }

        //IMPLEMENTAR LAS FUNCIONES DE LAS INTERFACES

        public function asignarRequerimiento($listado){
            $this->listado = $listado;
        }

        public function obtenerRequerimiento(){
            if(!empty($this->listado)){
                foreach ($this->listado as $lista){
                    echo '<p>'.$lista.'</p>';
                }
            }
        }

        public function asignarConocimiento($listado){}

        public function obtenerConocimiento(){}

        static function obtenerDenominacion(){
            return self::$moneda;
        }

        static function obtenerBienvenida(){
            return self::$bienvenida;
        }


    }
    

?>