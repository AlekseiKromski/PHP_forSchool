<?php ob_start(); ?>

<div class="container" style="min-height: 400px">
    <div class="col-md-11">
        <h2>News list</h2>
        <?php
        if(isset($test)){
            if($test == true){
            ?>
                <div class="alert alert-info">
                    <strong>Запись добавлена. </strong><a href="newsAdmin"> Список новостей </a>
                </div>
            <?php
            }
            elseif ($test == false){
                ?>
                <div class="alert alert-info">
                    <strong>Ошибка добавления. </strong><a href="newsAdmin"> Список новостей </a>
                </div>
                <?php
            }
        }else {
            ?>
            <form action="newsAddResult" method="post" enctype="multipart/form-data">
                <table class="table table-bordered">
                    <tr>
                        <td>News name: </td>
                        <td>
                            <input type="text" name="name" class="form-control" required>
                        </td>
                    </tr>
                    <tr>
                        <td>News text: </td>
                        <td>
                            <textarea name="text" cols="30" class="form-control" required></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>Category: </td>
                        <td>
                            <select name="category" id="">
                                <?php
                                foreach ($arr as $item) {
                                    echo "<option value='{$item['id']}'>{$item['name']}</option>";
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Picture:</td>
                        <td><div><input type="file" name="picture" style="color:black;"></div></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="submit" class="btn btn-primary" name="save">
                                сохранить
                            </button><br>
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
