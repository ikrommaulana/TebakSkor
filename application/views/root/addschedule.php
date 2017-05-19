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
                            <?php echo form_open_multipart('root/match_sch/save'); ?>
                        <form role="form" method="post">
						<?php for($a=1;$a<11;$a++){ ?>
                        <div class="col-md-3">
                                <div class="form-group">
                                    <label>Home Club</label>
									<select class="form-control" name="home[<?= $a; ?>]">
									<?php foreach($home as $home[$a]){ ?>
									<option value="<?= $home[$a]->club_name;?>"><?= $home[$a]->club_name; ?></option>
									<?php } ?>
									</select>
                                </div>
						</div>
						<div class="col-md-3">
								<div class="form-group">
                                    <label>Away Club</label>
                                    <select class="form-control" name="away[<?= $a; ?>]">
									<?php foreach($away as $away[$a]){ ?>
									<option value="<?= $away[$a]->club_name;?>"><?= $away[$a]->club_name; ?></option>
									<?php } ?>
									</select>
								</div>
                        </div>
                        <div class="col-md-3">
                                <div class="form-group">
                                    <label>Match Date</label>
									<input type="text" name="match_date[<?= $a; ?>]" id="calendar" class="form-control"/>
                                </div>
                        </div>
                        <div class="col-md-3">
                                <div class="form-group">
                                    <label>Time</label>
									<select class="form-control" name="time[<?= $a; ?>]">
									<?php for($i=0;$i<24;$i++){ ?>
										<option value='<?php echo $i; ?>:00:00'><?php echo $i; ?>:00</option>
									<?php } ?>
									</select>
                                </div>
                        </div>
						<?php } ?>
                        <div class="col-md-12">
							<input type="hidden" name="created_date" value="<?php echo date('Y/m/d'); ?>"/>
							<label>Game Week</label>
									<select class="form-control" name="time">
									<?php for($j=1;$j<39;$j++){ ?>
										<option value='<?php echo $j; ?>'>Game Week ke-<?php echo $j; ?></option>
									<?php } ?>
							</select><br/>
                            <input type="submit" name="submit" class="btn btn-primary" value="Save"/>
                        </div>
                        </form>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->
        
    </div><!--/.main-->