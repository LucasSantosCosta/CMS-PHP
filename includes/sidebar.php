<div class="col-md-4">

    <!-- Blog Search Well -->
    <div class="well">
        <h4>Blog Search</h4>
        <div class="input-group">
            <input type="text" class="form-control">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button">
                    <span class="glyphicon glyphicon-search"></span>
            </button>
            </span>
        </div>
        <!-- /.input-group -->
    </div>

    <!-- Blog Categories Well -->
    <div class="well">
        <h4>Categories</h4>
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-unstyled">

                  <?php
                  global $connection;
                  $query = "SELECT * FROM categorias";
                  $resultado = mysqli_query($connection, $query);

                  while($row = mysqli_fetch_assoc($resultado)){
                    $cat_nome = $row['cat_nome'];
                    echo "<li><a href='#'>" . $cat_nome . "</li></a>";
        }
                   ?>

                    <!-- <li><a href="#">Category Name</a>
                    </li>
                    <li><a href="#">Category Name</a>
                    </li>
                    <li><a href="#">Category Name</a>
                    </li>
                    <li><a href="#">Category Name</a>
                    </li> -->
                </ul>
            </div>
          </div>
        <!-- /.row -->
    </div>

    <!-- Side Widget Well -->
    <div class="well">
        <h4>Side Widget Well</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
    </div>

</div>
