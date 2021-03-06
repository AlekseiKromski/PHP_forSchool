<?php ob_start(); ?>
<div class="container" style="min-height: 400px;">
    <div class="col-md-11">
        <h2>News Edit</h2>
        <?php
        if(isset($test)){
            if($test == true){
                echo '
                <div class="alert alert-info">
                    <strong>Запись изменена. </strong><a href="newsAdmin">Список новостей</a>
                </div>
                ';
            }elseif ($test == false){
                echo '
                <div class="alert alert-warning">
                    <strong>Ошибка записи!. </strong><a href="newsAdmin">Список новостей</a>
                </div>
                ';
            }
        }else{
            ?>
            <form action="newsEditResult?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                <table class="table table-bordered">
                    <tr>
                        <td>News title</td>
                        <td>
                            <input type="text" name="title" class="form-control" required value="<?php echo $detail['name'];?>">
                        </td>
                    </tr>
                    <tr>
                        <td>News text</td>
                        <td>
                            <textarea name="text" rows="5" required class="form-control"><?php echo $detail['text'];?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>Category</td>
                        <td>
                            <select name="idCategory" class="form-control">
                                <?php
                                foreach ($arr as $item){
                                    ?>
                                    <option value="<?php echo $item['id']?>"
                                        <?php
                                        if($item['id'] == $detail['category']){
                                            echo "selected";
                                        }
                                    echo">{$item['name']}";?>
                                    </option>
                                    <?php
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>old picture</td>
                        <td>
                            <div>
                                <img src="../<?php echo $detail['img']?>" width="100px">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Picture</td>
                        <td>
                            <div>
                                <input type="file" name="picture" style="color:black;">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="submit" class="btn btn-primary" name="save">
                                Edit
                            </button>
                            <a href="newsAdmin" class="btn btn-large btn-success">назад к списку</a>
                        </td>
                    </tr>
                </table>
            </form>
            <?php
        }
        ?>

    </div>
</div>
<?php
$content = ob_get_clean();
include_once "viewAdmin/layout/layout.php";
