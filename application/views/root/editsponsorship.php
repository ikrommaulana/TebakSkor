<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">           
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="#">Sponsorship</a></li>
                <li class="active">Edit</li>
                <?php require_once("tinymce.php"); ?>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Edit Sponsorship</h1>
            </div>
        </div><!--/.row-->
                
        
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Sponsorship</div>
                    <div class="panel-body">
                        <div class="col-md-6">
                            <?php echo form_open('root/sponsorship/edit/'.$hasil->id); ?>
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control" value="<?= $hasil->title;?>">
                                </div>
                                                                
                                <div class="form-group">
                                    <label>Link</label>
                                    <input type="text" name="link" class="form-control" value="<?= $hasil->link;?>">
                                </div>
                                                                
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="text" name="image" class="form-control" value="<?= $hasil->image;?>">
                                </div>
                        </div>
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label>Target</label>
                                    <select name="target" class="form-control">
                                        <option value="blank">Blank</option>
                                        <option value="parent">Parent</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option value="1">Publish</option>
                                        <option value="0">Hide</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label>Order</label>
                                    <input type="text" name="order" class="form-control" value="<?= $hasil->order;?>">
                                </div>
                        </div>
                        <div class="col-md-6">
                                <input type="hidden" name="date" value="<?= $hasil->date;?>"/>
                                <input type="hidden" name="category" value="1"/>
                                <input type="hidden" name="user_id" value="1"/>

                                <input type="submit" name="submit" class="btn btn-primary" value="Submit"/>
                                <input type="reset" class="btn btn-default" value="Reset"/>
                            </div>
                        </form>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->
        
    </div><!--/.main-->