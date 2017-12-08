<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-head">
            <div class="page-title">
                <h1>Konten Otomotif
                </h1>
            </div>
        </div>
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="index.html">Konten Web</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span class="active">Otomotif</span>
            </li>
        </ul>
        <div class="row">
            <div class="col-md-12">
                <div class="dashboard-stat2">
                    <a href="<?=base_url()?>admin/otomotif/tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
                    <br/>
                    <br/>
                    <table id="table" class="table table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Nama Menu</th>
                                <th>Kode Link</th>
                                <th style="width: 50px">Status</th>
                                <th style="width:150px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var table;
     
    $(document).ready(function() {
        table = $('#table').DataTable({ 
     
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                "url": "<?=base_url()?>admin/otomotif/ajax_list",
                "type": "POST"
            },
            "columnDefs": [
                { 
                    "targets": [ -1, -2 ],
                    "orderable": false,
                },
            ],
     
        });
     
    });

    function reload_table()
    {
        table.ajax.reload(null,false); //reload datatable ajax 
    }

    function hapus(id)
    {
        if(confirm('Yakin mau menghapus konten ini?'))
        {
            // ajax delete data to database
            $.ajax({
                url : "<?=base_url()?>admin/otomotif/hapus/"+id,
                type: "POST",
                dataType: "JSON",
                success: function(res)
                {
                    if(res.status == '1'){
                        reload_table();
                    }
                }
            });
     
        }
    }
 </script>