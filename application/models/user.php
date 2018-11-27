<?php 
class User {

    public function __construct(Array $properties=array()){
      foreach($properties as $key => $value){
        $this->{$key} = $value;
      }
    }

    private $id;
    private $nom;
    private $prenom;
    private $pseudo;
    private $passwordSha256;
    private $password;
    private $confirmPassword;
    private $mail;    private $sex;
    private $datenaissance;
    private $avatar;
    private $missingfields = array();

    public function delete($dbh, $id){
      $statement = $dbh->prepare("DELETE users 
                                  WHERE id==:id");
      $ok = $statement->execute(['id' => $id]);
      return $ok;
    }
    //** Insert the object in the given database */
    public function insert($dbh){
      if($this->hasValidData()){
        //If the date is not set, we say it's null
        $this->datenaissance = ($this->datenaissance == "") ? null : $this->datenaissance;
        //we hash
        $this->passwordSha256 = hash('sha256', $this->password);
        $statement = $dbh->prepare("INSERT INTO users (nom,prenom,pseudo,passwordSha256,mail,sex,datenaissance) 
                                    VALUES (:nom, :prenom, :pseudo, :passwordSha256, :mail, :sex, :datenaissance)");
        $ok = $statement->execute(['nom' => $this->nom, 'prenom' => $this->prenom,
                                'pseudo' => $this->pseudo, 'passwordSha256' => $this->passwordSha256,
                                'mail' => $this->mail, 'sex' => $this->sex, 
                                'datenaissance' => $this->datenaissance]);
        if(!$ok){
          throw new Exception("something went wrong in the query");
        }
      }
      else{
        throw new Exception("wrong data");
      }
    }

    //**check the database if the mail exists in a entry */
    public static function mailExists($dbh, $mail){
       $statement = $dbh->prepare("SELECT COUNT(*) FROM users WHERE mail = :mail"); 
       $ok = $statement->execute(["mail" => $mail]);
       if($ok){
         $red = $statement->fetchAll();
         return $red[0] > 0;
       }
    }

    public function modify($dbh, $id){
      $statement = $dbh->prepare("UPDATE users SET nom=:nom, prenom=:prenom, pseudo=:pseudo, mail=:mail, pseudo=:pseudo, passwordSha256=:passwordSha256 WHERE id=:id");
      if(!empty($this->password)){
        $this->passwordSha256 = hash("sha256",$this->password);
      }
      $ok = $statement->execute(['nom' => $this->nom, 'prenom' => $this->prenom,
                                'pseudo' => $this->pseudo, 'passwordSha256' => $this->passwordSha256,
                                'mail' => $this->mail, 'id' => $id]);
      if($ok){
        $_SESSION["nom"] = $this->nom;
        $_SESSION["prenom"] = $this->prenom;
        $_SESSION["pseudo"] = $this->pseudo;
        $_SESSION["mail"] = $this->mail;
      }
      return $ok;
    }

    public function hasValidData(){
      if(empty($this->nom)){
        $this->missingfields["nom"] = "Nom Manquant";
      }
      if(empty($this->prenom)){
        $this->missingfields["prenom"] = "Prenom Manquant";
      }
      if(empty($this->pseudo)){
        $this->missingfields["pseudo"] = "Pseudo Manquant";
      }
      if(empty($this->mail) || !$this->isMail($this->mail)){
        $this->missingfields["mail"] = "Mail Manquant";
      }
      if($this->password != $this->confirmPassword){
        $this->missingfields["password"] = "Mot de Passe Manquant";
      }
      $ok = empty($this->missingfields);
      return $ok;     
    }

    private function isMail($mail){
      return filter_var($mail, FILTER_VALIDATE_EMAIL);
    }

    public function __get($property) {
      if (property_exists($this, $property)) {
        return $this->$property;
      }
    }

    public function __set($property, $value) {
      if (property_exists($this, $property)) {
        $this->$property = $value;
      }
      return $this;
    }
}