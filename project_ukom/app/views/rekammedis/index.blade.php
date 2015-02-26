@extends('layout.home')

@section('content')

<br>

			<div class="span14"> 
			<div class="clearfix">
                <nav class="breadcrumbs">
					<ul>
					
					</ul>
				</nav>
               <hr>
            
<h2>Tambah Data RekamMedis</h2>
            <table class="table bordered striped hovered dataTable" id="dataTables-1">
                <thead>
                <tr >
                    <th>No Rekam Medis</th>
                    <th>Kode Tindakan</th>
                    <th>Kode Obat</th>
                    <th>Kode User</th>
                    <th>Nomor Pasien</th>
                    <th>Diagnosa</th>
                    <th>Keluhan</th>
                    <th>Tanggal_Pemeriksaan</th>
                    <th>Keterangan</th>
                    
                    <th class="text-center">Aksi</th>
                    
                </tr>
                </thead>

                <tbody>
                    @foreach($datarekammedis as $tampil)
                     <tr>
						 
                        <td>{{ $tampil->no_rm  }}</td>
						<td>{{ $tampil->kd_tindakan  }}</td>
						<td>{{ $tampil->kd_obat }}</td>
						<td>{{ $tampil->kd_user  }}</td>
                        <td>{{ $tampil->no_pasien  }}</td>
						<td>{{ $tampil->diagnosa  }}</td>
						<td>{{ $tampil->keluhan }}</td>
						<td>{{ $tampil->tgl_pemeriksaan  }}</td>
                        <td>{{ $tampil->ket }}</td>
                        
                        <td class="text-center">
                            <a href="{{ URL::to("rekammedis/" .$tampil->id. "/edit") }}"><button class="button mini primary size1" >Edit</button></a>
                            <a href="{{ URL::to("rekammedis/" .$tampil->id. "/destroy") }}"><button class="button mini warning size1" id="tombolhapus">Hapus</button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table></div><br><a href="{{ URL::to("rekammedis/tambahrekammedis")}}"><button class="button large info" style="">Tambah</button></a><br><br> <br>
                   
              
            
		</div>
		</div>
        
  
 <script src="js/jquery/jquery.dataTables.js"></script>

 <script>
    $(function(){
        $('#dataTables-1').dataTable( {
            "bProcessing": true
        } );
    });
 </script>      
  <script>
		$(function(){
			$('#tombolhapus').on('click', function(){
				$.Notify({
					shadow: true,
					position: 'bottom-right',
					content: "Berhasil Terhapus"
				});
			});
		});
                    </script>
@stop