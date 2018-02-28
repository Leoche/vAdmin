<?php
header('Access-Control-Allow-Origin: *');

require("Validator.php");
require("Message.php");
require("Ressource.php");
require("Auth.php");

class VueCleanServer
{
   private $configuration;

   public function __construct()
   {
      // GET CONFIG
      $this->response = new Message();
      $this->ressource = new Ressource();
      $this->configuration = $this->ressource->getJSON('config');
      $this->auth = new Auth($this->configuration);

      // PROCEED ACTION
      if (!isset($_POST) || !isset($_POST["action"])){
        $version = $this->configuration->version;
        require("homepage.php");
        exit();
      }
         try{
            switch ($_POST["action"]) {
               case "auth":-
                  $this->response->success($this->auth->user($_POST));
               break;

               case "getmodel":
                  if ($this->auth->admin()) {
                     $this->response->success($this->ressource->getJSON('model'));
                  } else throw new Exception('Invalid permissions');
               break;
               case "getcontent":
                     $this->response->success($this->ressource->getJSON('content'));
               break;

               case "getusers":
                  if ($this->auth->admin()){
                     foreach ($this->configuration->auth as $key => $value) {
                        $value->avatar = md5(strtolower(trim($value->email)));
                     }
                     $this->response->success($this->configuration->auth);
                  } else throw new Exception('Invalid permissions');
               break;
               case "edituser":
                if ($this->auth->admin()){
                    $user = Validator::useredit();
                    $i = $this->auth->getUserIndexByEmail($user->oldemail);

                    $this->configuration->auth[$i]->email = $user->email;
                    $this->configuration->auth[$i]->name = $user->name;

                    if ($user->password !== "")
                      $this->configuration->auth[$i]->password = $this->auth->hashPassword($user->password);

                    $this->response->success($this->ressource->saveJSON('config', $this->configuration));
                }
               break;
               case "adduser":
                  $user = Validator::userregister();
                  $user->avatar = md5(strtolower(trim($user->email)));
                  $user->password = $this->auth->hashPassword($user->password);
                  $user->role = "user";
                  array_push($this->configuration->auth, $user);
                  $this->response->success($this->ressource->saveJSON('config', $this->configuration));
               break;
               case "removeuser":
                  $email = Validator::useremail();
                  if ($this->auth->admin()){
                     foreach ($this->configuration->auth as $key => $user) {
                        if ($user->email === $email && $user->role === "user") {
                           array_splice($this->configuration->auth, $key, 1);
                           $this->response->success($this->ressource->saveJSON('config', $this->configuration));
                        }
                     }
                     throw new Exception("User not found");
                  } else throw new Exception('Invalid permissions');
               break;

               case "setmodel":
                  if ($this->auth->admin()) {
                        if ($this->ressource->saveJSON("model", Validator::content())) $this->response->success("Model saved");
                  } else throw new Exception('Invalid permissions');
               break;
               case "setcontent":
                  if ($this->auth->user())
                     if ($this->ressource->saveJSON("content", Validator::content())) $this->response->success("Content saved");
               break;

               case "addcontent":
                  $this->response->success("addcontent");
               break;
               case "editcontent":
                  $this->response->success("editcontent");
               break;
               case "removecontent":
                  $this->response->success("removecontent");
               break;

               case "debug":
                  echo $this->auth->hashPassword("0000");
               break;

               default:
                  throw new Exception("Action not valid");
               break;
            }
         } catch (Exception $error) {
            $this->response->error($error->getMessage());
         }
   }
}
new VueCleanServer();
