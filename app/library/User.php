<?php

namespace App\Library;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author nitin
 */
class User {

    public function getUser(): array
    {
        return array(
            array("name" => "Nitin Wagh", "city" => "Pune"),
            array("name" => "Ajay Kothalkar", "city" => "Aurangabad")
        );
    }

}
