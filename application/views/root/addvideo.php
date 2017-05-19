<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">           
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="#">Video Streaming</a></li>
                <li class="active">Add</li>
                <?php require_once("tinymce.php"); ?>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Add New Streaming</h1>
            </div>
        </div><!--/.row-->
                
        
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Add New Streaming</div>
                    <div class="panel-body">
                        <div class="col-md-6">
                            <?php echo form_open_multipart('root/streaming/save'); ?>
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Title">
                                </div>
                                                                
                                <!--div class="form-group">
                                    <label>URL</label>
                                    <input type="text" name="url" class="form-control" placeholder="url">
                                </div-->
                                                                
                                <!--div class="form-group">
                                    <label>Image</label>
                                    <input type="text" name="image" class="form-control" placeholder="http://www.mncplaymedia.com/slide4/images/">
                                </div-->
                                                                
                                <div class="form-group">
                                    <label>Link Youtube</label>
                                    <input type="text" name="link_video" class="form-control" placeholder="Link Youtube">
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
                                    <label>Publish Date</label>
                                    <input type="text" name="date" id="calendar" class="form-control"/>
                                </div>
                        </div>
                        <div class="col-md-12">
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea name="deskripsi" class="form-control" rows="5"></textarea>
                                </div>
                        </div>
                        <div class="col-md-6">

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