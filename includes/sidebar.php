
<div class="panel panel-default sidebar-menu">

    <div class="panel-heading">

        <h3 class="panel-title">Categories 


        </h3>

    </div>
    
    <div class="panel-body">

        <ul class="nav nav-pills nav-stacked category-menu">
            
            <?php 
                    global $db;

                    $get_cats = 'select * from categories';

                    $run_cats = mysqli_query($db,$get_cats);

                    while($row_cats = mysqli_fetch_array($run_cats)){

                        $cat_id = $row_cats ['cat_id'];

                        $cat_title = $row_cats ['cat_title'];

                        echo "

                            <li>

                                <a href='shop.php?cat=$cat_id'> $cat_title </a>

                            </li>

                        ";

                    }

             ?>

            
        </ul>

    </div>
    
</div>

