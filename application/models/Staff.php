<?php
/**
 * Created by PhpStorm.
 * User: Bizy Tech
 * Date: 11/24/2018
 * Time: 6:07 PM
 */
class Staff extends MY_Model{

    const DB_TABLE = 'staffs';
    const DB_TABLE_PK = 'id';

    public $first_name;
    public $middle_name;
    public $last_name;
    public $email;
    public $phone;
    public $alternative_phone;
    public $gender;
    public $created_by;

    public function full_name(){
        return ucfirst($this->first_name).' '.( ucfirst($this->middle_name) != '' ? ucfirst($this->middle_name).' ' : '').ucfirst($this->last_name);
    }

    public function avatar_path(){
        $avatar_directory = 'avatars/staff_avatars/';

         switch ($this->gender){
            case $this->gender == 'MALE':
               return $avatar_directory.'default-male.jpg';
                break;

            case $this->gender == 'FEMALE':
              return $avatar_directory.'default-female.png';
                break;
        }
    }



}