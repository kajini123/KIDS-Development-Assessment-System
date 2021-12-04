<?php

class Admin_model extends Grocery_CRUD_Model {

    function get_list() {
        $user_name = 'post user';

        if ($this->table_name === null)
            return false;

        $select = "`{$this->table_name}`.*,users_groups.group_id";



        if (!empty($this->relation))
            foreach ($this->relation as $relation) {
                list($field_name, $related_table, $related_field_title) = $relation;
                $unique_join_name = $this->_unique_join_name($field_name);
                $unique_field_name = $this->_unique_field_name($field_name);

                if (strstr($related_field_title, '{'))
                    $select .= ", CONCAT('" . str_replace(array('{', '}'), array("',COALESCE({$unique_join_name}.", ", ''),'"), str_replace("'", "\\'", $related_field_title)) . "') as $unique_field_name";
                else
                    $select .= ", $unique_join_name.$related_field_title as $unique_field_name";

                if ($this->field_exists($related_field_title))
                    $select .= ", {$this->table_name}.$related_field_title as '{$this->table_name}.$related_field_title'";
            }



        if ($this->session->userdata('identity') === 'admin') {

            $this->db->select($select, false);
            $this->db->join('users_groups', 'users_groups.user_id = ' . $this->table_name . '.id');
            $results = $this->db->get($this->table_name)->result();
        } else {

            $this->db->select($select, false);
            $this->db->join('users_groups', 'users_groups.user_id = ' . $this->table_name . '.id');
            $this->db->where($this->table_name . '.username!=', 'admin');
            $results = $this->db->get($this->table_name)->result();
        }




        return $results;
    }

}
