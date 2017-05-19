<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">           
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li><a href="#">Match</a></li>
                <li class="active">Update Score</li>
                <?php require_once("tinymce.php"); ?>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Update Match</h1>
            </div>
        </div><!--/.row-->
                
        
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Update Match</div>
                    <div class="panel-body">
                        <div class="col-md-6">
                            <?php echo form_open('root/match/update/'.$hasil->id_match); ?>
                            <form role="form" method="post">
                                <div class="form-group" align="center">
                                    <div><img src="<?= $hasil->home_logo;?>" width="200px"/></div>
                                    <label><?= $hasil->home;?></label>
									<input type="text" name="home_score" class="form-control" style="width:100px;height:70px;font-size:60px;"/>
                                </div>
                        </div>
                        <div class="col-md-6">
                                <div class="form-group" align="center">
                                    <div><img src="<?= $hasil->away_logo;?>" width="200px"/></div>
                                    <label><?= $hasil->away;?></label>
									<input type="text" name="away_score" class="form-control" style="width:100px;height:70px;font-size:60px;"/>
                                </div>
                        </div>
                        <div class="col-md-12" align="center">
								<input type="hidden" name="created_date" value="<?php echo date('Y/m/d'); ?>"/>
                                <input type="submit" name="submit" class="btn btn-primary" value="Update Score"/>
                            </div>
                        </form>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div><!-- /.col-->
        </div><!-- /.row -->
        
    </div><!--/.main-->