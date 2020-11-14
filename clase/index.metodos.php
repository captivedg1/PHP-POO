<?php
    
    class Curso{
        public $publico = 'Público: POO AVANZADO I';

        private $privado = 'Privado: POO AVANZADO I';

        protected $protegido = 'Protegido: POO AVANZADO I';

        function obtenerMensajePrivado(){
            return $this->privado;
        }
    }

    $prueba = new Curso();

    echo '<p>'.$prueba->publico.'</p>';
    //echo '<p>'.$prueba->privado.'</p>';
    echo '<p>'.$prueba->obtenerMensajePrivado().'</p>';
    //echo '<p>'.$prueba->protegido.'</p>';



?>