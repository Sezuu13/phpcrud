<?php 

class database{
    function opencon(){
        return new PDO('mysql:host=localhost; dname=phpcrud', 'root','');
    }
}