<?php
#Kiểm tra đăng nhập admin

$action = (isset($_GET['action'])) ? $_GET['action'] : 'list';
switch ($action) {
    case 'list':
        $open = "products";
        $products = $db->fetchAll("products");

        if (isset($_GET['page'])) {
            $p = $_GET['page'];
        } else {
            $p = 1;
        }
        $sql = "SELECT products.*,category.name as namecate FROM products
        LEFT JOIN category on category.id = product.category_id";

        if (isset($products['page'])) {
            $sotrang = $products['page'];
            unset($products['page']);
        }
        break;

    case 'insert':
        $category = $db->fetchAll("category");

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $data =
                [
                    "name"        => postInput("name"),
                    "category_id" => postInput("category_id"),
                    "price"       => postInput("price"),
                    "description" => postInput("description"),
                    "count"       => postInput("count"),

                ];

            $error = [];

            if (postInput('name') == '') {
                $error['name'] = "*Vui lòng nhập tên sản phẩm";
            }
            if (postInput('name') == '') {
                $error['category_id'] = "*Vui lòng chọn danh mục sản phẩm";
            }
            if (postInput('name') == '') {
                $error['price'] = "*Chưa nhập giá tiền";
            }
            if (postInput('name') == '') {
                $error['description'] = "*Vui lòng nhập nội dung sản phẩm ";
            }
            if (!isset($_FILES['image'])) {
                $error['image'] = "*mời bạn chọn hình ảnh";
            }
            if (postInput('count') == '') {
                $error['count'] = "*chưa nhập số lượng";
            }
            if (empty($error)) {
                if (isset($_FILES['image'])) {
                    $file_name = $_FILES['image']['name'];
                    $file_tmp  = $_FILES['image']['tmp_name'];
                    $file_type = $_FILES['image']['type'];
                    $file_erro = $_FILES['image']['error'];

                    if ($file_erro == 0) {
                        $part = ROOT . "product/";
                        $data['image'] = $file_name;
                    }
                }
                if (
                    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif"
                ) {
                    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    $uploadOk = 0;
                }
                if ($uploadOk == 0) {
                    echo "Sorry, your file was not uploaded.";
                    // if everything is ok, try to upload file
                } else {
                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                        echo "The file " . basename($_FILES["image"]["name"]) . " has been uploaded.";
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                }
                $id_insert = $db->insert("products", $data);
                if ($id_insert) {
                    move_uploaded_file($file_tmp, $part . $file_name);
                    $_SESSION['success'] = "Thêm mới thành công";
                    header("location:" . base_url() . "index.php?controller=product");
                    exit();
                } else {
                    $_SESSION["error"] = "Thêm mới thất bại";
                }
            }
        }

        break;

    case 'update':
        $id = intval(getInput('id'));

        $Editproduct = $db->fetchID("products", $id);
        if (empty($Editproduct)) {
            $_SESSION['error'] = "Dữ liệu không tồn tại";
            header("location:" . base_url() . "index.php?controller=product");
            exit();
        }
        $category = $db->fetchAll("category");
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $data =
                [
                    "name"        => postInput("name"),
                    "category_id" => postInput("category_id"),
                    "price"       => postInput("price"),
                    "description" => postInput("description"),
                    "count"       => postInput("count"),

                ];

            $error = [];

            if (postInput('name') == '') {
                $error['name'] = "*Vui lòng nhập tên sản phẩm";
            }
            if (postInput('name') == '') {
                $error['category_id'] = "*Vui lòng chọn danh mục sản phẩm";
            }
            if (postInput('name') == '') {
                $error['price'] = "*Chưa nhập giá tiền";
            }
            if (postInput('name') == '') {
                $error['description'] = "*Vui lòng nhập nội dung sản phẩm ";
            }
            if (!isset($_FILES['image'])) {
                $error['image'] = "*mời bạn chọn hình ảnh";
            }
            if (postInput('count') == '') {
                $error['count'] = "*chưa nhập số lượng";
            }
            if (empty($error)) {
                if (isset($_FILES['image'])) {
                    $file_name = $_FILES['image']['name'];
                    $file_tmp  = $_FILES['image']['tmp_name'];
                    $file_type = $_FILES['image']['type'];
                    $file_erro = $_FILES['image']['error'];

                    if ($file_erro == 0) {
                        $part = ROOT . "product/";
                        $data['image'] = $file_name;
                    }
                }
                if (
                    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif"
                ) {
                    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    $uploadOk = 0;
                }
                if ($uploadOk == 0) {
                    echo "Sorry, your file was not uploaded.";
                    // if everything is ok, try to upload file
                } else {
                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                        echo "The file " . basename($_FILES["image"]["name"]) . " has been uploaded.";
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                }
                $id_update = $db->update("products", $data, array("id" => $id));
                if ($id_update) {
                    move_uploaded_file($file_tmp, $part . $file_name);
                    $_SESSION['success'] = "cập nhập thành công";
                    header("location:" . base_url() . "index.php?controller=product");
                    exit();
                } else {
                    $_SESSION["error"] = "Cập nhập thất bại";
                }
            }
        }

        break;

    case 'delete':
        $id = intval(getInput('id'));

        $EditCategory = $db->fetchID("products", $id);
        if (empty($EditCategory)) {
            $_SESSION['error'] = "Dữ liệu không tồn tại";
            header("location:  " . base_url() . "index.php?controller=product");
            exit();
        }

        $num = $db->delete("products", $id);

        if ($num > 0) {
            $_SESSION['success'] = "Xóa thành công";
            header("location:  " . base_url() . "index.php?controller=product");
            exit();
        } else {
            $_SESSION['error'] = "Xóa thất bại";
            header("location:  " . base_url() . "index.php?controller=product");
            exit();
        }
        break;

    default:
        require_once("404.php");
        die();
        break;
}
