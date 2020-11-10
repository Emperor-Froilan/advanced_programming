<?php
  class User
  {
     //Properties
     public $name;
     public $username;
     public $email;

     //Methods
     function addFriend($name){
       echo $name . " added a friend <br/>";
     }

     function postStatus($name){
       echo $name . " posted a status <br/>";
     }
  }
  $example = new User();
  $example->addFriend('Froilan Fernandez');
  $example-> postStatus('Froilan Fernandez');

  /*kung ano lang po sabi niyo po Ma'am yun lang po ginawa ko create a user class di niyo naman po
  pinapadisplay yung email and username ito po pagkakaintindi ko sa pinapagawa niyo po simple and not complicated*/
?>
