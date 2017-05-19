<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">           
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Applicant</li>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">All Applicants</h1>
            </div>
        </div><!--/.row-->
                
        
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Applicant</div>
                    <div class="panel-body">
                        <table data-toggle="table" data-url="<?php base_url();?>assets/tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                            <thead>
                            <tr>
                                <th data-field="jobtitle"  data-sortable="true">Job Title</th>
                                <th data-field="name" data-sortable="true">Name</th>
                                <th data-field="dob" data-sortable="true">Date of Birth</th>
                                <th data-field="phone" data-sortable="true">Phone</th>
                                <th data-field="email" data-sortable="true">Email</th>
                                <th data-field="address" data-sortable="false">Address</th>
                                <th data-field="cv" data-sortable="false">CV</th>
                                <th data-field="delete" data-sortable="false">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php foreach($applicant as $applicant){ ?>
                            <tr>
                                <td><?= $applicant->job_title; ?></td>
                                <td><?= $applicant->nama; ?></td>
                                <td><?= date('d-M-Y', strtotime($applicant->dob)); ?></td>
                                <td><?= $applicant->phone; ?></td>
                                <td><?= $applicant->email; ?></td>
                                <td><?= $applicant->address; ?></td>
								<td><a href="http://www.mncplaymedia.com/uploads/<?= $applicant->file; ?>" class="btn btn-success" target="_blank">Download</a></td>
                                <td><a href="<?php base_url();?>delete/<?= $applicant->file; ?>/" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
                            </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!--/.row-->  
        
        
    </div><!--/.main-->