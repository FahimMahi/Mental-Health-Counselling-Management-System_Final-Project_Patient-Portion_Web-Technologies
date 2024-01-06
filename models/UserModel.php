<?php
class UserModel
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function registerUser($username, $password, $name, $email, $phone)
    {
        $errors = array();

        if (empty($username)) {
            $errors[] = "Username is needed.";
        }

        if (empty($password)) {
            $errors[] = "Password is needed.";
        }

        if (empty($name)) {
            $errors[] = "Full Name is needed.";
        }

        if (empty($email)) {
            $errors[] = "Email is needed.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format.";
        }

        if (empty($phone)) {
            $errors[] = "Phone is needed.";
        }

        // If there are errors, return a failure status and the error messages
        if (!empty($errors)) {
            return array('status' => 'fail', 'message' => implode("<br>", $errors));
        }

        // If no errors, proceed with the registration
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO patients (username, password, name, email, phone)
                VALUES ('$username', '$passwordHash', '$name', '$email', '$phone')";

        if ($this->conn->query($sql) === TRUE) {
            return array('status' => 'success');
        } else {
            return array('status' => 'fail', 'message' => "Error: " . $sql . "<br>" . $this->conn->error);
        }
    }

    public function loginUser($username, $password)
    {
        $sql = "SELECT * FROM patients WHERE username='$username'";
        $result = $this->conn->query($sql);

        if (empty($username) && empty($password)) {
            return array('status' => 'fail', 'message' => "Username and Password are empty.");
        } elseif (empty($username)) {
            return array('status' => 'fail', 'message' => "Username is empty.");
        } elseif (empty($password)) {
            return array('status' => 'fail', 'message' => "Password is empty.");
        } elseif ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row["password"])) {
                $_SESSION["patient_id"] = $row["id"];
                return array('status' => 'success');
            } else {
                return array('status' => 'fail', 'message' => "Invalid username and password.");
            }
        } else {
            return array('status' => 'fail', 'message' => "Invalid username and password.");
        }
    }
}
?>
