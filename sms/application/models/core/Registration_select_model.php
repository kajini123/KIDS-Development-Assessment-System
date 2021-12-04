<?php

class Registration_select_model extends Grocery_CRUD_Model {

    function get_list() {
    
        if ($this->table_name === null)
            return false;

        $select = "id, student_first_name, student_middle_name, student_last_name, student_gender, student_dob, student_age, student_home_address, student_doe, student_father_name, student_father_job, student_father_mobile, student_father_office_number, student_father_email, student_mother_name, student_mother_job, student_mother_mobile, student_mother_office_number, student_mother_email, Emergency_No";



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


        $this->db->select($select, false);
        $results = $this->db->get($this->table_name)->result();
        

        return $results;
    }

}
