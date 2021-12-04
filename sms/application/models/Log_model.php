<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class Log_model extends CI_Model {

    public function i($entry) {
        if ($this->config->item('debug') === 'YES') {
            $this->logger->write($this->config->item('log_file'), $this->config->item('log_level_info'), $entry);
        }
    }

    public function e($entry) {
        if ($this->config->item('debug') === 'YES') {
            $this->logger->write($this->config->item('log_file'), $this->config->item('log_level_error'), $entry);
        }
    }

    public function d($entry) {
        if ($this->config->item('debug') === 'YES') {
            $this->logger->write($this->config->item('log_file'), $this->config->item('log_level_debug'), $entry);
        }
    }

}
