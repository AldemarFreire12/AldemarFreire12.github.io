<?php 
    class Menus extends CI_Controller
    {
        //Constructor
        function __construct()
        {
           parent::__construct(); 
        }
        //Renderizacion de la vista que 
        //muestra los desayunos
        public function desayunos(){
            $this->load->view('menus/desayunos');

        }
        
        public function almuerzos(){
            $this->load->view('menus/almuerzos');

        }
    } //No borar no sea pendejo 
?>