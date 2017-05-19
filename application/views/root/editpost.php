<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">           
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="#">Post</a></li>
                <li class="active">Edit</li>
                <?php require_once("tinymce.php"); ?>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Edit Post</h1>
            </div>
        </div><!--/.row-->
                
        
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Add New Post</div>
                    <div class="panel-body">
                        <div class="col-md-6">
                            <?php echo form_open('root/post/edit/'.$hasil->id); ?>
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control" value="<?= $hasil->title;?>">
                                </div>
                                                                
                                <div class="form-group">
                                    <label>URL</label>
                                    <input type="text" name="url" class="form-control" value="<?= $hasil->url;?>">
                                </div>
                                                                
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="text" name="image" class="form-control" value="<?= $hasil->image;?>">
                                </div>
                        </div>
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select name="category" class="form-control">
                                        <option value="1">News</option>
                                        <option value="2">Blog</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option value="1">Publish</option>
                                        <option value="0">Hide</option>
                                    </select>
                                </div>
                        </div>
                        <div class="col-md-12">
                                <div class="form-group">
                                    <label>Isi Berita</label>
                                    <textarea name="content" class="form-control" rows="15"><?= $hasil->content;?></textarea>
                                </div>
                        </div>
                        <div class="col-md-6">
                                <input type="hidden" name="date" value="<?= $hasil->date;?>"/>
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