<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">           
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="#">Career</a></li>
                <li class="active">Add</li>
                <?php require_once("tinymce.php"); ?>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Add New Career</h1>
            </div>
        </div><!--/.row-->
                
        
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Add New Career</div>
                    <div class="panel-body">
                        <div class="col-md-6">
                            <?php echo form_open('root/career/edit/'.$hasil->id_carrer); ?>
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>Job Title</label>
                                    <input type="text" name="jobtitle" class="form-control" value="<?= $hasil->job_title;?>">
                                </div>
                                <div class="form-group">
                                    <label>Department</label>
                                    <input type="text" name="department" class="form-control" value="<?= $hasil->department;?>">
                                </div>
								
                                <div class="form-group">
                                    <label>Location</label>
                                    <input type="text" name="location" class="form-control" value="<?= $hasil->location;?>">
                                </div>
                                
                                <!--div class="form-group">
                                    <label>Publish Date</label>
									<input type="text" name="pubdate" id="calendar" class="form-control"/>
                                </div-->
                        </div>
                        <div class="col-md-6">
								
								<div class="form-group">
                                    <label>Latest Education</label>
                                    <input type="text" name="edu" class="form-control" value="<?= $hasil->latest_education;?>">
                                </div>
								
                                <div class="form-group">
                                    <label>Years Experience</label>
                                    <input type="text" name="exp" class="form-control" value="<?= $hasil->years_experience;?>">
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option value="1">Publish</option>
                                        <option value="0">Hide</option>
                                    </select>
                                </div>
                                
                                <!--div class="form-group">
                                    <label>Expire Date</label>
									<input type="text" name="expdate" id="calendar" class="form-control"/>
                                </div-->
                        </div>
                        <div class="col-md-12">
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea name="desc" class="form-control"><?= $hasil->desc;?></textarea>
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