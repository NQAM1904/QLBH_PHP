<style>
    #content .top-content .category-box {
        min-height: 400px;
        background: #fff;
    }
</style>

<div class="category-box">
    <h4> Danh mục sản phẩm</h3>
        <div class="content-cat">
            <ul class="list-group">
                <?php foreach ($category as $item) : ?>
                    <li class="list-group-item">
                        <a href="danh-muc/<?php echo $item['id'] ?>" </a><?php echo $item['name'] ?> </li> <?php endforeach; ?> </ul> </div> </div>