<div class="wrapper container">
    <div class="header">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Brand</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Link</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-left">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Link</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>

    <div class="content">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">San pham moi nhat</a></li>
        </ol>
        <div class="row">
            <?php
            $CI =& get_instance();
            $CI->load->model('products_model');
            $products = $CI->products_model->get('*');
            if ($products!=null) {
                foreach ($products as $r) {
                    ?>
                    <div class="col-xs-12 col-md-3">
                        <img src="<?php echo $r->image!=null?base_url().$r->image:'https://via.placeholder.com/150'; ?>" style="width: 100%;min-width: 150px;min-height: 250px; height: 250px">
                        <h5><?php echo $r->name; ?></h5>
                        <p>$<?php echo $r->price;?></p>
                        <p><?php  echo htmlspecialchars_decode($r->description);?></p>
                    </div>
                    <?php
                }
            }
            ?>





        </div>


        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">San pham ban chay nhat</a></li>
        </ol>

        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">San pham HOT</a></li>
        </ol>
    </div>

    <div class="footer"></div>
</div>
