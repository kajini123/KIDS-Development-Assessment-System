<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class Base_model extends yidas\Model {

    protected $primaryKey = 'id';
    protected $timestamps = true;

    
    protected $userAttribute = false;
    protected $companyAttribute = false;
    protected $createdUserAttribute = 'created_by';
    protected $updatedUserAttribute = 'updated_by';
    protected $deletedUserAttribute = 'deleted_by';

    protected function _attrEventBeforeInsert(&$attributes) {
        // Auto created_by
        if ($this->createdUserAttribute && !isset($attributes[$this->createdUserAttribute])) {
            $attributes[$this->createdUserAttribute] = $this->session->userdata('identity');
        }

        return parent::_attrEventBeforeInsert($attributes);
    }

    protected function _attrEventBeforeUpdate(&$attributes) {
        // Auto updated_by
        if ($this->updatedUserAttribute && !isset($attributes[$this->updatedUserAttribute])) {
            $attributes[$this->updatedUserAttribute] = $this->session->userdata('identity');
        }
        return parent::_attrEventBeforeUpdate($attributes);
    }

    protected function _attrEventBeforeDelete(&$attributes) {
        // Auto deleted_by
        if ($this->deletedUserAttribute && !isset($attributes[$this->deletedUserAttribute])) {
            $attributes[$this->deletedUserAttribute] = $this->session->userdata('identity');
        }
        return parent::_attrEventBeforeDelete($attributes);
    }

}
