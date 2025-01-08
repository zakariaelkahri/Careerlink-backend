<?php
 
 namespace App\Controllers ;
 



use App\Models\UserModel;

    class AuthController{

        public function login($email,$password){

            $usermodel = new UserModel ;
            $user = $usermodel->findUserByEmailAndPassword($email,$password) ;
            
        
            if($user == null){
                echo 'email or password is incorrect';
            }else{

                if($user->getRole()->getTitle()=="admin"){

                    header("location:../admin/dashboard.php");
                }
                else if($user->getRole()->getTitle()=="recruteur"){
                    header("location:../recruteur/recruteur.php");
                }
                else if($user->getRole()->getTitle()=="candidat"){
                    header("location:../candidat/candidat.php");
                }

            }

        }
    }


?>