<?php

namespace App\Controllers ;

use App\Models\UserModel;



class SignUpController
{

    public function SignUp($email,$password,$role){

        $adduser = new UserModel ; 
        $signup = $adduser->AddUser($email,$password,$role);
        $usermodel = new UserModel ;
        // $user = $usermodel->findUserByEmailAndPassword($email,$password) ;


        // if($user == null){
        //     echo '';
        // }else{



        // }
        
    }

}

?>