<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">           
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Career</li>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Career</h1>
            </div>
        </div><!--/.row-->
                
        
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Career</div>
                    <div class="panel-body">
                        <table data-toggle="table" data-url="<?php base_url();?>assets/tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                            <a href="<?php base_url();?>add/" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah</a>
                            <thead>
                            <tr>
                                <th data-field="jobtitle"  data-sortable="true">Job Title</th>
                                <th data-field="department" data-sortable="true">Department</th>
                                <th data-field="location" data-sortable="true">Location</th>
                                <th data-field="edu" data-sortable="true">Latest Education</th>
                                <th data-field="exp" data-sortable="true">Experience</th>
                                <th data-field="edit" data-sortable="false">Edit</th>
                                <th data-field="delete" data-sortable="false">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php foreach($career as $career){ ?>
                            <tr>
                                <td><?= $career->job_title; ?></td>
                                <td><?= $career->department; ?></td>
                                <td><?= $career->location; ?></td>
                                <td><?= $career->latest_education; ?></td>
                                <td><?= $career->years_experience; ?></td>
                                <td><a href="<?php base_url();?>edit/<?= $career->id_carrer; ?>/" class="btn btn-default"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                                <td><a href="<?php base_url();?>delete/<?= $career->id_carrer; ?>/" class="btn btn-default"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
                            </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!--/.row-->  
        
        
    </div><!--/.main-->