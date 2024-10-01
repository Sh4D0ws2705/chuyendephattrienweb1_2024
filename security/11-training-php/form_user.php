<?php
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; // Add new user
$_id = NULL;
$error_message = ""; // Biến để lưu thông báo lỗi

if (!empty($_GET['id'])) {
    // Giải mã ID từ URL
    $id = $userModel->decryptID($_GET['id']);
    $_id = $id; // Gán giá trị cho $_id
    $user = $userModel->findUserById($_id); 
}

if (!empty($_POST['submit'])) {
    $name = trim($_POST['name']);
    $password = trim($_POST['password']);

    // Validate Name
    if (empty($name)) {
        $error_message .= "Tên đăng nhập là bắt buộc.<br>";
    } elseif (!preg_match("/^[A-Za-z0-9]{5,15}$/", $name)) {
        $error_message .= "Tên đăng nhập phải từ 5 đến 15 ký tự và chỉ chứa chữ cái và số.<br>";
    }

    // Validate Password
    if (empty($password)) {
        $error_message .= "Mật khẩu là bắt buộc.<br>";
    } elseif (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[~!@#$%^&*()]).{5,10}$/", $password)) {
        $error_message .= "Mật khẩu phải từ 5 đến 10 ký tự và bao gồm chữ thường, chữ HOA, số và ký tự đặc biệt.<br>";
    }

    // Nếu không có lỗi, tiến hành cập nhật hoặc chèn người dùng
    if (empty($error_message)) {
        if (!empty($_id)) {
            $userModel->updateUser($_POST);
        } else {
            $userModel->insertUser($_POST);
        }
        header('location: list_users.php');

    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User form</title>
    <?php include 'views/meta.php' ?>
</head>
<body>
    <?php include 'views/header.php'?>
    <div class="container">
        <?php if ($user || !isset($_id)) { ?>
            <div class="alert alert-warning" role="alert">
                User form
            </div>
            <form method="POST">
                <input type="hidden" name="id" value="<?php echo $_id ?>">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" name="name" placeholder="Name" value='<?php if (!empty($user[0]['name'])) echo $user[0]['name'] ?>'>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
            
            <?php if (!empty($error_message)) { ?>
                <div class="alert alert-danger mt-3" role="alert">
                    <?php echo $error_message; // Hiển thị thông báo lỗi ?>
                </div>
            <?php } ?>
        <?php } else { ?>
            <div class="alert alert-success" role="alert">
                User not found!
            </div>
        <?php } ?>
    </div>
</body>
</html>
