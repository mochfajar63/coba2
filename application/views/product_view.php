<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List Obat</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.dataTables.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/dataTables.bootstrap4.css'?>">
</head>
<body>
	<br><br>
	<div class="container">
	    <!-- Page Heading -->
	    <div class="row">
	        <div class="col-12">
	            <div class="col-md-12">
	                <h1>Produk Obat
	                    <small>List</small>
	                    <div class="float-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Tambah Obat</a></div>
	                </h1>
	            </div>
	             
	            <table class="table table-striped" id="mydata">
	                <thead class="thead-dark">
	                    <tr>
	                        <th>Produk Obat</th>
	                        <th>Nama Obat</th>
	                        <th>Jenis</th>
	                        <th style="text-align: right;">Aksi</th>
	                    </tr>
	                </thead>
	                <tbody id="show_data">
	                     
	                </tbody>
	            </table>
	        </div>
	    </div>
	         
	</div>

	<!-- modal tambah obat -->
	<form>
	    <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	      <div class="modal-dialog modal-lg" role="document">
	        <div class="modal-content">
	          <div class="modal-header">
	            <h5 class="modal-title" id="exampleModalLabel">Tambah Produk Obat</h5>
	            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	              <span aria-hidden="true">&times;</span>
	            </button>
	          </div>
	          <div class="modal-body">
	                <div class="form-group row">
	                    <label class="col-md-2 col-form-label">Kode Obat</label>
	                    <div class="col-md-10">
	                      <input type="text" name="kode_obat" id="kode_obat" class="form-control" placeholder="Kode Obat">
	                    </div>
	                </div>
	                <div class="form-group row">
	                    <label class="col-md-2 col-form-label">Nama Obat</label>
	                    <div class="col-md-10">
	                      <input type="text" name="nama_obat" id="nama_obat" class="form-control" placeholder="Nama Obat">
	                    </div>
	                </div>
	                <div class="form-group row">
	                    <label class="col-md-2 col-form-label">Jenis</label>
	                    <div class="col-md-10">
	                      <input type="text" name="jenis" id="jenis" class="form-control" placeholder="Jenis">
	                    </div>
	                </div>
	          </div>
	          <div class="modal-footer">
	            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	            <button type="button" type="submit" id="btn_save" class="btn btn-primary">Save</button>
	          </div>
	        </div>
	      </div>
	    </div>
    </form>
    <!-- modal tambah obat -->

	<!-- modal hapus -->
    <form>
	    <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	      <div class="modal-dialog" role="document">
	        <div class="modal-content">
	          <div class="modal-header">
	            <h5 class="modal-title" id="exampleModalLabel">Hapus Obat</h5>
	            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	              <span aria-hidden="true">&times;</span>
	            </button>
	          </div>
	          <div class="modal-body">
	               <strong>Anda yakin ingin menghapus obat ini ?</strong>
	          </div>
	          <div class="modal-footer">
	            <input type="hidden" name="id_kode_obat" id="id_kode_obat" class="form-control">
	            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
	            <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
	          </div>
	        </div>
	      </div>
	    </div>
    </form>
    <!-- modal hapus -->

	<!-- modal edit -->
    <form>
		<div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Edit Obat</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		            <div class="form-group row">
		                <label class="col-md-2 col-form-label">Kode Obat</label>
		                <div class="col-md-10">
		                  <input type="text" name="kode_obat_edit" id="kode_obat_edit" class="form-control" placeholder="Kode Obat" readonly>
		                </div>
		            </div>
		            <div class="form-group row">
		                <label class="col-md-2 col-form-label">Nama Obat</label>
		                <div class="col-md-10">
		                  <input type="text" name="nama_obat_edit" id="nama_obat_edit" class="form-control" placeholder="Nama Obat">
		                </div>
		            </div>
		            <div class="form-group row">
		                <label class="col-md-2 col-form-label">Jenis</label>
		                <div class="col-md-10">
		                  <input type="text" name="jenis_edit" id="jenis_edit" class="form-control" placeholder="Jenis">
		                </div>
		            </div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="button" type="submit" id="btn_update" class="btn btn-primary">Update</button>
		      </div>
		    </div>
		  </div>
		</div>
    </form>
    <!-- modal edit -->


<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/dataTables.bootstrap4.js'?>"></script>

<script type="text/javascript">
	$(document).ready(function(){
        show_product(); //call function show all product
         
        $('#mydata').dataTable();
          
        //function show all product
        function show_product(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo site_url('product/product_data')?>',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].kode_obat+'</td>'+
                                '<td>'+data[i].nama_obat+'</td>'+
                                '<td>'+data[i].jenis+'</td>'+
                                '<td style="text-align:right;">'+
                                    '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-kode_obat="'+data[i].kode_obat+'" data-nama_obat="'+data[i].nama_obat+'" data-jenis="'+data[i].jenis+'">Ubah</a>'+' '+
                                    '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-kode_obat="'+data[i].kode_obat+'">Hapus</a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }


        //Save product
        $('#btn_save').on('click',function(){
            var kode_obat = $('#kode_obat').val();
            var nama_obat = $('#nama_obat').val();
            var jenis     = $('#jenis').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('product/save')?>",
                dataType : "JSON",
                data : {kode_obat:kode_obat , nama_obat:nama_obat, jenis:jenis},
                success: function(data){
                    $('[name="kode_obat"]').val("");
                    $('[name="nama_obat"]').val("");
                    $('[name="jenis"]').val("");
                    $('#Modal_Add').modal('hide');
                    show_product();
                }
            });
            return false;
        });


        //get data for delete record
        $('#show_data').on('click','.item_delete',function(){
            var kode_obat = $(this).data('kode_obat');
             
            $('#Modal_Delete').modal('show');
            $('[name="id_kode_obat"]').val(kode_obat);
        });
 
        //delete record to database
         $('#btn_delete').on('click',function(){
            var kode_obat = $('#id_kode_obat').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('product/delete')?>",
                dataType : "JSON",
                data : {kode_obat:kode_obat},
                success: function(data){
                    $('[name="id_kode_obat"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_product();
                }
            });
            return false;
        });


        //get data for update record
        $('#show_data').on('click','.item_edit',function(){
            var kode_obat = $(this).data('kode_obat');
            var nama_obat = $(this).data('nama_obat');
            var jenis     = $(this).data('jenis');
             
            $('#Modal_Edit').modal('show');
            $('[name="kode_obat_edit"]').val(kode_obat);
            $('[name="nama_obat_edit"]').val(nama_obat);
            $('[name="jenis_edit"]').val(jenis);
        });
 
        //update record to database
         $('#btn_update').on('click',function(){
            var kode_obat = $('#kode_obat_edit').val();
            var nama_obat = $('#nama_obat_edit').val();
            var jenis     = $('#jenis_edit').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('product/update')?>",
                dataType : "JSON",
                data : {kode_obat:kode_obat , nama_obat:nama_obat, jenis:jenis},
                success: function(data){
                    $('[name="kode_obat_edit"]').val("");
                    $('[name="nama_obat_edit"]').val("");
                    $('[name="jenis_edit"]').val("");
                    $('#Modal_Edit').modal('hide');
                    show_product();
                }
            });
         });
            
 
    });
</script>
</body>
</html>