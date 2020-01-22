<?php ob_start(); ?>

    <div class="container" style="min-height: 400px">
        <div class="col-md-11">
            <h2>News list</h2>
            <?php
            if(isset($test)){
                if($test == true){
                    ?>
                    <div class="alert alert-info">
                        <strong>Запись удалена. </strong><a href="newsAdmin"> Список новостей </a>
                    </div>
                    <?php
                }
                elseif ($test == false){
                    ?>
                    <div class="alert alert-info">
                        <strong>Запись не удалена. </strong><a href="newsAdmin"> Список новостей </a>
                    </div>
                    <?php
                }
            }else {
                ?>
                <form action="newsDelResult?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
                    <table class="table table-bordered">
                        <tr>
                            <td>News name: </td>
                            <td>
                                <input type="text" name="name" class="form-control" required value="<?php echo $detail['name'];?>" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>News text: </td>
                            <td>
                                <textarea name="text" cols="30" class="form-control" required readonly><?php echo $detail['text'];?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>Category: </td>
                            <td>
                                <select name="category" id="" class="form-control" disabled>
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
                            <td colspan="2">
                                <button type="submit" class="btn btn-danger" name="save">
                                    delete
                                </button>
                                <a href="newsAdmin" class="btn btn-large btn-success">Назад к поиску</a>
                            </td>
                        </tr>
                    </table>
                </form>
                <?php
            }
            ?>
        </div>
    </div>

<?php $content = ob_get_clean(); ?>
<?php include_once "viewAdmin/layout/layout.php";
