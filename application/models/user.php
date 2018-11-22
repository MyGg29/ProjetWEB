<?php 
class User {

    public function __construct(Array $properties=array()){
      foreach($properties as $key => $value){
        $this->{$key} = $value;
      }
    }

    public $nom;
    public $prenom;
    public $pseudo;
    public $passwordSha256;
    public $password;
    public $confirmPassword;
    public $mail;
    public $sex;
    public $datenaissance;

    public function insert($dbh){
      if($this->hasValidData()){
        $this->passwordSha256 = hash('sha256', $this->password);
        $dbh->prepare("insert into users (nom) values ('nop')");
        $dbh->prepare("insert into users (nom) values (:nom)", array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY))->execute(['nom'=> 'plop']);
        /*
        $statement = $dbh->prepare("INSERT INTO users (nom,prenom,pseudo,passwordSha256,mail,sex,datenaissance) 
                                  VALUES (:nom, :prenom, :pseudo, :passwordSha256, :mail, :sex, :datenaissance)");
        var_dump($statement);
        $statement->execute(['nom' => $this->nom, 'prenom' => $this->prenom,
                                'pseudo' => $this->pseudo, 'passwordSha256' => $this->passwordSha256,
                                'mail' => $this->mail, 'sex' => $this->sex, 
                                'datenaissance' => $this->datenaissance]);
        var_dump($statement);
        echo "yep";
        */
      }
      else{
        echo "nop";
      }
    }


    private function hasValidData(){
      return isset($this->nom) && isset($this->prenom) && isset($this->pseudo) 
          && ($this->password == $this->confirmPassword) && $this->isMail($this->mail);
    }

    private function isMail($mail){
      return filter_var($mail, FILTER_VALIDATE_EMAIL);
    }

}