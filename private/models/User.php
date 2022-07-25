<?php 

/**
 * User Model
 */
class User extends Model
{
    // protected $allowedColumns = [
    //     'firstname',
    //     'lastname',
    //     'email',
    //     'password',
    //     'rank',
    //     'gender',
    //     'date',
    // ];

    // protected $beforeInsert = [
    //     'make_user_id',
    //     'make_student_id',
    //     'hash_password',
    // ];

	public function validate($DATA)
    {
        $this->errors = array();
        // Check for first name
        if (empty($DATA['firstname']) || !preg_match('/^[a-zA-Z]+$/', $DATA['firstname'])) {
            $this->errors['firstname'] = "Only letters allowed in first name";
        }
        // Check for last name
        if (empty($DATA['lastname']) || !preg_match('/^[a-zA-Z]+$/', $DATA['lastname'])) {
            $this->errors['lastname'] = "Only letters allowed in last name";
        }
        // Check for Email
        if (empty($DATA['email']) || !filter_var($DATA['email'], FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = "Email is not valid";
        }
        // Check for Gender
        $genders = ['male', 'female'];
        if (empty($DATA['gender']) || !in_array($DATA['gender'], $genders)) {
            $this->errors['gender'] = "Gender is not valid";
        }
        // Check for Rank
        $ranks = ['student', 'lecturer', 'reception', 'admin', 'superadmin'];
        if (empty($DATA['rank']) || !in_array($DATA['rank'], $ranks)) {
            $this->errors['rank'] = "Rank is not valid";
        }
        // Check for Password
        if (empty($DATA['password']) || $DATA['password'] != $DATA['password2']) {
            $this->errors['password'] = "The password dose not match";
        }

        if (count($this->errors) == 0) {
            return true;
        }
        return false;
    }

    // public function make_user_id($data)
    // {
    //     $data['user_id'] = 60;
    //     return $data;
    // }

    // public function make_school_id($data)
    // {
    //     if(isset($_SESSION['USER']->school_id)){
    //         $data['school_id'] = $_SESSION['USER']->school_id;
    //     }
    //     return $data;
    // }

    // public function hash_password($data)
    // {
    //     $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
    //     return $data;
    // }
}
