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
            
<h2>Tambah Data Pasien</h2>
            <table class="table bordered striped hovered dataTable" id="dataTables-1">
                <thead>
                <tr >
                    
                    <th>No Pasien</th>
                    <th>Nama Pasien</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                     <th>Tanggal Lahir</th>
                     <th>No Telpon</th>
                     <th>Nomor Kartu Keluarga</th>
                     <th>Hubungan Keluarga</th>
                    <th class="text-center">Aksi</th>
                    
                </tr>
                </thead>

                <tbody>
                    @foreach($datapasien as $tampil)
                     <tr>
						<td>{{ $tampil->no_pasien  }}</td>
						<td>{{ $tampil->nm_pasien  }}</td>
						<td>{{ $tampil->j_kel }}</td>
						<td>{{ $tampil->agama  }}</td>
                        <td>{{ $tampil->tgl_lahir  }}</td>
						<td>{{ $tampil->no_tlp  }}</td>
						<td>{{ $tampil->nm_kk }}</td>
						<td>{{ $tampil->hub_kel  }}</td>
                        
                        <td class="text-center">
                            <a href="{{ URL::to("pasien/" .$tampil->id. "/edit") }}"><button class="button mini primary size1" >Edit</button></a>
                            <a href="{{ URL::to("pasien/" .$tampil->id. "/destroy") }}"><button class="button mini warning size1" id="tombolhapus">Hapus</button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table></div><br><a href="{{ URL::to("pasien/tambahpasien")}}"><button class="button large info" style="">Tambah</button></a><br><br> <br>
                   
              
            
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