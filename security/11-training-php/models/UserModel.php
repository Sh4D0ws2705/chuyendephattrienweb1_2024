<?php

require_once 'BaseModel.php';

class UserModel extends BaseModel
{
    //khóa bảo mật cho mã hóa AES
    private $secret_key = "0937930655_Nghia_Key";

    //hàm mã hóa ID
    public function encryptID($id)
    {
        return openssl_encrypt($id, 'AES-128-ECB', $this->secret_key);
    }
    //hàm giải mã id 
    public function decryptID($id)
    {
        return openssl_decrypt($id, 'AES-128-ECB', $this->secret_key);
    }

    public function findUserById($id)
    {
        $sql = 'SELECT * FROM users WHERE id = ' . intval($id); // Sử dụng intval để tránh SQL injection
        $user = $this->select($sql);

        return $user;
    }

    public function findUser($keyword)
    {
        $sql = 'SELECT * FROM users WHERE user_name LIKE %' . $keyword . '%' . ' OR user_email LIKE %' . $keyword . '%';
        $user = $this->select($sql);

        return $user;
    }

    /**
     * Authentication user
     * @param $userName
     * @param $password
     * @return array
     */
    public function auth($userName, $password)
    {
        // Lấy người dùng từ cơ sở dữ liệu
        $sql = 'SELECT * FROM users WHERE name = "' . $userName . '"';
        $user = $this->select($sql);

        // Kiểm tra xem người dùng có tồn tại không
        if (!empty($user)) {
            // So sánh mật khẩu đã nhập với mật khẩu đã băm trong cơ sở dữ liệu
            if (password_verify($password, $user[0]['password'])) {
                return $user[0];  // Trả về thông tin người dùng nếu xác thực thành công
            }
        }

        return null;  // Nếu không xác thực thành công, trả về null
    }

    /**
     * Delete user by id
     * @param $id
     * @return mixed
     */
    public function deleteUserById($id)
    {
        $sql = 'DELETE FROM users WHERE id = ' . $id;
        return $this->delete($sql);
    }

    /**
     * Update user
     * @param $input
     * @return mixed
     */
    public function updateUser($input)
    {
        $sql = 'UPDATE users SET 
        name = "' . mysqli_real_escape_string(self::$_connection, $input['name']) . '", 
        password="' . md5($input['password']) . '"
       WHERE id = ' . $input['id'];

        $user = $this->update($sql);

        return $user;
    }

    /**
     * Insert user
     * @param $input
     * @return mixed
     */
    public function insertUser($input)
    {
        $sql = "INSERT INTO `app_web1`.`users` (`name`, `password`) VALUES (" .
            "'" . $input['name'] . "', '" . md5($input['password']) . "')";

        $user = $this->insert($sql);

        return $user;
    }

    /**
     * Search users
     * @param array $params
     * @return array
     */
    public function getUsers($params = [])
    {
        //Keyword
        if (!empty($params['keyword'])) {
            $sql = 'SELECT * FROM users WHERE name LIKE "%' . $params['keyword'] . '%"';

            //Keep this line to use Sql Injection
            //Don't change
            //Example keyword: abcef%";TRUNCATE banks;##
            $users = self::$_connection->multi_query($sql);

            //Get data
            $users = $this->query($sql);
        } else {
            $sql = 'SELECT * FROM users';
            $users = $this->select($sql);
        }

        return $users;
    }
}
