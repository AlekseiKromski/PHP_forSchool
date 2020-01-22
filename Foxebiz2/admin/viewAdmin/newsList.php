<?php ob_start(); ?>

<h2>News list</h2>
<div class="container" style="min-height: 400px;">
    <div style="margin: 20px;">
        <a class="btn btn-primary" href="newsAdd" role="button">Добавить новость</a>
    </div>
    <div class="col">
        <table class="table table-bordered table-responsive">
            <tr>
                <th width="">ID</th>
                <th width="">Header news</th>
                <th width="">ID</th>
            </tr>
            <?php
            foreach ($arr as $item) {
                echo "<tr>";
                    echo "<td>{$item['id']}</td>";
                    echo "<td><b>Title: </b> {$item['name']}<br>";
                    echo "<b>Категория: </b><i>{$item['category_name']}</i><br>";
                    echo "<b>Автор: </b><i>{$item['login']}</i>";
                    echo "</td>";
                    echo "<td>
                        <a href='newsEdit?id={$item['id']}'>Edit</a><br>  
                        <a href='newsDelete?id={$item['id']}'>Delete</a>    
                    </td>>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php include_once "viewAdmin/layout/layout.php";
