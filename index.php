<?php


class User{

    //Properties and methods for this class
    // Those should be defined as long as we want to use them 
    // public stands for getting acces to those from everywhere
    // public $username;
    // public $email;

    // Private modifiers and can be only used within the class
    private $username;

    //With protected it tells the system that the defined data with this function or method can be accessed by any class which insheriting the data from another which has the data already defined in. Also it can be access within any internal class which needs it!
    protected $email;

    //Public can be accessed everywhere
    public $role = 'member';



    // PAssing in parameters that we use later within the class to change the values of the objects
    public function __construct($username, $email){

        $this->username = $username;
        $this->email = $email;
    }

    public function addFriend(){


        // This means this instance of the class
        
        return "$this->username added a new friend ";

    }

    // getters and setters

    // getters will get the info and output it as we want

    public function getEmail(){

        return $this->email;

    }

    public function getUser(){

        return $this->username;

    }

    public function message(){

        return "$this->email sent a message";

    }

    // setters will be able to set the private data we have created


    public function setEmail($email){


        // this function is checking if the typed in email has the symbol @ so it passes the check
        if(strrpos($email, '@') > -1){

            $this->email = $email;

        } else {
            echo 'This is not an email!';
        }

    }


}

// He we are defining a class that would inherit everything from the user class we have with the extends method and we add additional properties to the class

class AdminUser extends User{


    public $level;

    //overriding data can be done by redefinging the same data elsewhere
    public $role = 'admin';



    //overriding a method can be done like this
    public function message(){

        return "$this->email, an admin, sent a message";

    }

    // When we set a constructor, it's gonna get all data from it despite having anothert one with the other data we need to retrieve and that's why we need some additional info that points to the other construct using the inheritance method
    public function __construct($username, $email, $level){

        $this->level = $level;

        // This is the parent or inheritance method we will need to use in order to get the rest of the data we defined before
        parent::__construct($username, $email);


    }



}


// Creating a new object and storing it in the variable $userOne based on the user class
// That make it an instance or a single thing 
$userOne = new User('mario','mario@test.net');
$userTwo = new User('Yoshi','Yoshi@test.net');
$userThree = new AdminUser('Yoni','Yoni@test.net', 5);

// Here we are accessing certain data out of the class after storing the object into a variable
// echo $userOne->username . '<br>';
// echo $userOne->email . '<br>';
// echo $userOne->addFriend() . '<br>';

// $userTwo->username = 'YOshi';
// $userTwo->email = 'YOshi@yoshi.net';

// echo $userTwo->username . '<br>';
// echo $userTwo->email . '<br>';
// echo $userTwo->addFriend() . '<br>';
// This will show an array of the different properties
// print_r(get_class_vars('User'));

// This will show an array of the different methods
// print_r(get_class_methods('User'));


// echo $userOne->addFriend();


// $userOne->setEMail('yoshi@test.net') . '<br>';
// echo $userOne->getEmail() . '<br>';
// echo $userTwo->getEmail();

// This will get the outputted data of the admin function with the inheritance method 
echo $userThree->getUser() . '<br>';
echo $userThree->getEmail() . '<br>';
echo $userThree->level . '<br>';


echo $userOne->role . '<br>';
echo $userThree->role . '<br>';

echo $userOne->message() . '<br>';
echo $userThree->message() . '<br>';



?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>