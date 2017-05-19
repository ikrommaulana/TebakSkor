<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">           
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Customer</li>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Customer</h1>
            </div>
        </div><!--/.row-->
                
        
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Customer</div>
                    <div class="panel-body">
                        <table data-toggle="table" data-url="<?php base_url();?>assets/tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                            <a href="<?php base_url();?>add/" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah</a>
                            <thead>
                            <tr>
                                <th data-field="title"  data-sortable="true">Nama</th>
                                <th data-field="link" data-sortable="true">Email</th>
                                <th data-field="category" data-sortable="true">Mobile</th>
                                <th data-field="date" data-sortable="true">Phone</th>
                                <th data-field="address" data-sortable="true">Address</th>
                                <th data-field="status" data-sortable="true">Status</th>
                                <th data-field="propinsi" data-sortable="true">Provinsi</th>
                                <th data-field="kota" data-sortable="true">Kota</th>
                                <th data-field="kecamatan" data-sortable="true">Kecamatan</th>
                                <th data-field="kelurahan" data-sortable="true">Kelurahan</th>
                                <th data-field="rw" data-sortable="true">RW</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php foreach($cust as $cust){ ?>
                            <tr>
                                <td><?= $cust->nama; ?></td>
                                <td><?= $cust->email; ?></td>
                                <td><?= $cust->mobile; ?></td>
                                <td><?= $cust->phone; ?></td>
                                <td><?= $cust->address; ?></td>
                                <td><?= $cust->status; ?></td>
                                <td><?= $cust->propinsi; ?></td>
                                <td><?= $cust->kota; ?></td>
                                <td><?= $cust->kecamatan; ?></td>
                                <td><?= $cust->kelurahan; ?></td>
                                <td><?= $cust->rw; ?></td>
                            </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!--/.row-->  
        
        
    </div><!--/.main-->