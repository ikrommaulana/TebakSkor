<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">           
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Magazine</li>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Magazine</h1>
            </div>
        </div><!--/.row-->
                
        
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Magazine</div>
                    <div class="panel-body">
                        <table data-toggle="table" data-url="<?php base_url();?>assets/tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                            <a href="<?php echo base_url(); ?>root/magazine/add" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah</a>
                            <thead>
                            <tr>
                                <th data-field="name"  data-sortable="true">Name</th>
                                <th data-field="image" data-sortable="true">Image</th>
                                <th data-field="download" data-sortable="true">Download</th>
                                <th data-field="date" data-sortable="true">Date</th>
                                <th data-field="edit" data-sortable="true">Edit</th>
                                <th data-field="delete" data-sortable="true">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php foreach($magz as $magz){ ?>
                            <tr>
                                <td><?= $magz->name; ?></td>
                                <td><?= $magz->image; ?></td>
                                <td><?= $magz->download; ?></td>
                                <td><?= $magz->date; ?></td>
                                <td><a href="<?php echo base_url(); ?>root/magazine/edit/<?= $magz->id; ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                                <td><a href="<?php echo base_url(); ?>root/magazine/delete/<?= $magz->id; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
                            </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!--/.row-->  
        
        
    </div><!--/.main-->