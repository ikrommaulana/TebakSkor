<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">           
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Match</li>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Match</h1>
            </div>
        </div><!--/.row-->
                
        
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Match</div>
                    <div class="panel-body">
                        <table data-toggle="table" data-url="<?php base_url();?>assets/tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                            <a href="<?php base_url();?>add/" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah</a>
                            <thead>
                            <tr>
                                <th data-field="match_date"  data-sortable="true">Match Date</th>
                                <th data-field="home" data-sortable="true">Home Club</th>
                                <th data-field="away" data-sortable="true">Away Club</th>
                                <th data-field="home_score" data-sortable="true">Home Score</th>
                                <th data-field="away_score" data-sortable="true">Away Score</th>
                                <th data-field="update" data-sortable="false">Update</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php foreach($match as $match){ ?>
                            <tr>
                                <td><?= $match->match_date; ?></td>
                                <td><?= $match->home; ?></td>
                                <td><?= $match->away; ?></td>
                                <td><?= $match->home_score; ?></td>
                                <td><?= $match->away_score; ?></td>
                                <td><a href="<?php base_url();?>update/<?= $match->id_match; ?>/" class="btn btn-success">Update Score</a></td>
                            </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!--/.row-->  
        
        
    </div><!--/.main-->
	
	
	<!-- Modal -->
	<div class="modal fade" id="updateMatch" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel">Modal title</h4>
		  </div>
		  <div class="modal-body">
			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary">Save changes</button>
		  </div>
		</div>
	  </div>
	</div>