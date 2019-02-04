<?php
namespace Models;
//modelo para classe de usuarios
use \Core\Model;

class Users extends Model {
    
    private $uid;
    private $userName;
    private $userEmail;
    //verificando se o usuario está logado corretamente
    public function isLogged() {
        if(!empty($_SESSION['token'])) {
            $token = $_SESSION['token'];
            
            $sql = "SELECT id, name, email, admin FROM users WHERE token = :token";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':token', $token);
            $sql->execute();            
            if($sql->rowCount() > 0) {
                $data = $sql->fetch();                
                $this->uid = $data['id'];
                $this->userName = $data['name'];
                $this->userEmail = $data['email']; 

                return true;
            }
        }        
        return false;
    }
    //pegando o nome do usuario logado
    public function getName() {
        return $this->userName;
    }
    //verificando se é admin
    public function isAdmin() {
        if($this->isAdmin == '1') {
            return true;
        } else {
            return false;
        }
    }
    //adicionando usuario
    public function insertUser($name, $email, $password, $admin) {
        $sql = "INSERT INTO users (name, email, password, admin) VALUES (:name, :email, :password, :admin)";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':name', $name);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':password', $password);
        $sql->bindValue(":admin", $admin);
        $sql->execute();
    }
    //validando login
    public function validationLogin($email, $password) {

        $sql = "SELECT id FROM users WHERE email = :email AND password = :password AND admin = 1 ";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':password', md5($password));
        $sql->execute();

        if($sql->rowCount() > 0) {
            $data = $sql->fetch();
            $token = md5(time().rand(0,999).$data['id'].time());

            $sql = "UPDATE users SET token = :token WHERE id = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':token', $token);
            $sql->bindValue(':id', $data['id']);
            $sql->execute();

            $_SESSION['token'] = $token;

            return true;
        }
        return false;
    }

    //retorna o usuario logado
    public function getId() {
        return $this->uid;
    }

}

