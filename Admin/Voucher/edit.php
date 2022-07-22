<div class="container box">
    <a href="<?= $ADMIN_URL ?>/Voucher" class="btn btn-primary fas fa-long-arrow-alt-left"></a>
    <h2 class="heading text-center text_color text-primary p-3">Thêm voucher</h2>
    <?php
    function rand_string($length)
    {
        $str = '';
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $size = strlen($chars);
        for ($i = 0; $i < $length; $i++) {
            $str .= $chars[rand(0, $size - 1)];
        }
        return $str;
    }

    if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
    ?>
    <div class="row ">
        <form method="post" action="?btn_update" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Tiêu đề</label>
                <input type="text" name="title" value="<?= $item['title'] ?>" class="form-control">
                <input type="hidden" name="id" value="<?= $item['id_voucher'] ?>" class="form-control">
            </div>
            <div style="width: 200px;">
                <img src="<?= $CONTENT_URL ?>/Images/<?= $item['img'] ?>" alt="">
            </div>
            <div class="form-group">
                <label for="">Ảnh</label>
                <input type="file" name="img" class="form-control">
                <input type="hidden" name="img_base" value="<?= $item['img'] ?>">
            </div>
            <div class="form-group">
                <label for="">Mã giảm giá</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="discount" value="<?= $item['discount'] ?>">
                    <div class="input-group-append">
                        <a href="<?= $ADMIN_URL ?>/Voucher/index.php?btn_add" class="btn btn-outline-secondary" type="button">Mã mới</a>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="">Giá muốn giảm</label>
                <input type="number" name="price" value="<?= $item['sales'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Nội dung</label>
                <textarea name="content" value="" class="form-control" id="basic-example" cols="30" rows="10"><?= $item['description'] ?></textarea>
            </div>
            <div class=" mt-3 d-flex justify-content-between">
                <button type="submit" name="submit" class="btn btn-primary">Cập nhật</button>
            </div>
        </form>

    </div>
</div>