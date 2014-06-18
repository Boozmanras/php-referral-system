<?php

/**
 * Registration Class
 * 
 * @author Hardik shah 
 * @version 1.0
 * @package
 * 
 */
class Registration {
    # constructor

     public static function add($fields) {
        // Escape array for sql hijacking prevention
        $data = _escapeArray($fields);

        $map = array();
        $map['username'] = 'username';
        $map['salutation'] = 'salutation';
        $map['fname'] = 'fname';
        $map['lname'] = 'lname';
        $map['company'] = 'company';
        $map['city'] = 'city';
        $map['province'] = 'province';
        $map['postal_code'] = 'postal_code';
        $map['phone'] = 'phone';
        $map['email'] = 'email';
        $map['about_program'] = 'about_program';
        $map['like_update'] = 'like_update';
        $map['address'] = 'address';
        $ds = _bindArray($data, $map);
        return qi('registration', $ds);
    }
    

    public static function update($fields, $id) {
        // Escape array for sql hijacking prevention
        $data = _escapeArray($fields);
        $map = array();


        
        $map['username'] = 'username';
        $map['salutation'] = 'salutation';
        $map['fname'] = 'fname';
        $map['lname'] = 'lname';
        $map['company'] = 'company';
        $map['city'] = 'city';
        $map['province'] = 'province';
        $map['postal_code'] = 'postal_code';
        $map['phone'] = 'phone';
        $map['email'] = 'email';
        $map['about_program'] = 'about_program';
        $map['like_update'] = 'like_update';
        $map['address'] = 'address';
        $ds = _bindArray($data, $map);

        $condition = "id = " . $id;
        return qu('registration', $ds, $condition);
    }

    public static function delete($id) {
        $condition = "id =" . $id;
        return qd('registration', $condition);
    }

    public static function getregistrationDetail($id) {
        return qs("SELECT * FROM registration WHERE id = " . $id);
    }

    public static function getregisterList() {
        return q("SELECT * FROM registration");
    }

  
}

?>
