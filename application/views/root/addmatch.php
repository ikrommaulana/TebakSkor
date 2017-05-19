<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">           
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="#">Match</a></li>
                <li class="active">Add</li>
                <?php require_once("tinymce.php"); ?>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Add New Match</h1>
            </div>
        </div><!--/.row-->
                
        
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Add New Match</div>
                    <div class="panel-body">
                        <div class="col-md-6">
                            <?php echo form_open_multipart('root/match/save'); ?>
                            <form role="form" method="post">
                                <div class="form-group">
                                    <label>Home Club</label>
									<select class="form-control" name="home">
									<?php foreach($home as $home){ ?>
									<option value="<?= $home->club_name;?>"><?= $home->club_name; ?></option>
									<?php } ?>
									</select>
                                </div>
								<div class="form-group">
                                    <label>Away Club</label>
                                    <select class="form-control" name="away">
									<?php foreach($away as $away){ ?>
									<option value="<?= $away->club_name;?>"><?= $away->club_name; ?></option>
									<?php } ?>
									</select>
								</div>
                        </div>
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label>Match Date</label>
									<input type="text" name="match_date" id="calendar" class="form-control"/>
                                </div>
                        </div>
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label>Time</label>
									<input type="text" name="time" class="form-control"/>
                                </div>
                        </div>
                        <div class="col-md-12">
							<input type="hidden" name="created_date" value="<?php echo date('Y/m/d'); ?>"/>
                                <input type="submit" name="submit" class="btn btn-primary" value="Save"/>
                        </div>
                        </form>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->
        
    </div><!--/.main-->