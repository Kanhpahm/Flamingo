<p class="h6 mt-3"><a href="<?= $ADMIN_URL ?>/index.php">Trang chủ</a><span class="h6 mt-3">/Logo</span></p>
<h2 class="text-center p-3">Danh sách logo</h2>
<div class="d-flex justify-content-end">
    <button data-toggle="modal" data-target="#add_logo" class="btn " style="background-color: #019d94; color: white">Thêm</button>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Ảnh</th>
            <th scope="col">Trạng thái</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i = 1;
        foreach ($data as $item) {

        ?> <tr>
                <th scope="row"><?= $i++ ?></th>
                <td>
                    <div style="width: 250px; height: 150px">
                        <img width="100%" src="<?= $CONTENT_URL ?>/Images/<?= $item['logo'] ?>" alt="">
                    </div>
                </td>
                <td><?php echo $item['status'] == 1 ? "<p class='text-success'>Hoạt động</p>" : "<p class='text-danger'>Không hoạt động</p>" ?></td>
                <td><a href="?btn_edit=<?= $item['id'] ?>" class="fas fa-undo"></a><a onclick="return  <?php echo $item['status'] == 1 ? 'false' : 'alter_delete()' ?>" href="index.php?btn_delete=<?= $item['id'] ?>" style="cursor: pointer;" class="fas fa-trash-alt text-danger"></a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<div class="modal fade" id="add_logo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="post" action="?btn_insert" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thêm logo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <strong><label for="">Ảnh</label></strong>
                        <input type="file" name="img" class="form-control form-control-lg">
                    </div>

                    <div class="form-group">
                        <input type="hidden" name="status" value="0">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Thêm</button>
                </div>
            </form>
        </div>
    </div>
</div>