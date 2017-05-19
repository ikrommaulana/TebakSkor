<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">           
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Video Streaming</li>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Video Streaming</h1>
            </div>
        </div><!--/.row-->
                
        
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Video Streaming</div>
                    <div class="panel-body">
                        <table data-toggle="table" data-url="<?php base_url();?>assets/tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                            <a href="<?php base_url();?>add/" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah</a>
                            <thead>
                            <tr>
                                <th data-field="title"  data-sortable="true">Title</th>
                                <th data-field="link-youtube" data-sortable="true">Link Youtube</th>
                                <th data-field="deskripsi" data-sortable="true">Deskripsi</th>
                                <th data-field="date" data-sortable="true">Date Published</th>
                                <th data-field="edit" data-sortable="false">Edit</th>
                                <th data-field="delete" data-sortable="false">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php foreach($streaming as $streaming){ ?>
                            <tr>
                                <td><?= $streaming->judul; ?></td>
                                <td><?= $streaming->link_video; ?></td>
                                <td><?= word_limiter($streaming->deskripsi,25); ?></td>
                                <td><?= $streaming->date; ?></td>
                                <td><a href="<?php base_url();?>edit/<?= $streaming->id; ?>/" class="btn btn-success"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>
                                <td><a href="<?php base_url();?>delete/<?= $streaming->id; ?>/" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
                            </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!--/.row-->  
        
        
    </div><!--/.main-->