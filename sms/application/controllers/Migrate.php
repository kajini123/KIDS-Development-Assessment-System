<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class Migrate extends CI_Controller {

    public function index() {
        if ($this->migration->current() === FALSE) {
            show_error($this->migration->error_string());
        }
    }

}
