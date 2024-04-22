<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/admin.css">
    <link rel="stylesheet" href="Asset/ckeditor5_col/styles.css">
    <title>Add new course</title>
</head>

<body>
    <section class="admin">
        <div class="row-grid">
            <div class="admin-sidebar">
                <div class="admin-sidebar-top">
                    <img src="assets/img/logo/logo2.png">
                </div>
                <div class="admin-sidebar-content">
                    <ul>
                        <li><a href=""><i class="ri-dashboard-line"></i>Dashboard<i class="ri-add-box-line"></i></a>
                            <ul class="sub-menu">
                                <div class="sub-menu-item">
                                    <li><a href="list.php"><i class="ri-arrow-right-s-fill"></i>User List</a></li>
                                </div>
                            </ul>
                        </li>
                        <li><a href=""><i class="ri-file-list-line"></i>Manage Courses<i
                                    class="ri-add-box-line"></i></a>
                            <ul class="sub-menu">
                                <div class="sub-menu-item">
                                    <li><a href="add_courses.php"><i class="ri-arrow-right-s-fill"></i>Add new
                                            course</a></li>
                                </div>
                            </ul>
                        </li>
                        <li><a href=""><i class="ri-file-list-line"></i></i>Manage User<i
                                    class="ri-add-box-line"></i></a>
                            <ul class="sub-menu">
                                <div class="sub-menu-item">
                                    <li><a href="edit_profile.php"><i class="ri-arrow-right-s-fill"></i>Edit User
                                            Profile</a></li>
                                </div>
                            </ul>
                        </li>
                        <li><a href=""><i class="ri-file-list-line"></i>Manage Discover<i
                                    class="ri-add-box-line"></i></a>
                            <ul class="sub-menu">
                                <div class="sub-menu-item">
                                    <li><a href="add_news.php"><i class="ri-arrow-right-s-fill"></i>Update News</a></li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="admin-content">
                <div class="admin-content-main">
                    <div class="admin-content-main-title">
                        <H1>Update News</H1>
                    </div>
                    <div class="admin-content-main-content">
                        <!--  Nội dung nằm ở đây -->
                        <div class="admin-content-main-content-product-add">
                            <div class="admin-content-main-content-left">
                                <div class="admin-content-main-content-two-input">
                                    <input type="text" placeholder="Tên sản phẩm">
                                    <input type="text" placeholder="Chất liệu">
                                </div>
                                <div class="admin-content-main-content-two-input">
                                    <input type="text" placeholder="Giá bán">
                                    <input type="text" placeholder="Giá giảm">
                                </div>
                                <textarea class="editor_content" name="" id="">description</textarea>
                                <br>
                                <button class="main-btn">Add course</button>
                            </div>
                            <div class="admin-content-main-content-right">
                                <div class="admin-content-main-content-right-image">
                                    <label for="file">Illustration</label>
                                    <input type="file" id="file">
                                    <div class="image-show">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <script src="assets/ckeditor5_col/ckeditor.js">  </script>
    <script src="assets/ckeditor5_col/script.js">  </script>
    <script src="assets/js/script.js"></script>
</body>

</html>