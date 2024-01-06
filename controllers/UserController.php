<?php
include_once '../models/UserModel.php';

class UserController
{
    private $userModel;
    private $conn;

    public function __construct($conn)
    {
        $this->userModel = new UserModel($conn);
        $this->conn = $conn;
    }

    public function registerUser($userData)
    {
        return $this->userModel->registerUser(
            $userData["username"],
            $userData["password"],
            $userData["name"],
            $userData["email"],
            $userData["phone"]
        );
    }

    public function loginUser($userData)
    {
        return $this->userModel->loginUser(
            $userData["username"],
            $userData["password"]
        );
    }
}
?>
