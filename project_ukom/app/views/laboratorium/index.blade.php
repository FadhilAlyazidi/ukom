@extends("layout.home")

@section("content")

	</header>
	<div class="container">
        <br />
        
        <h2>
            <a href="index.blade.php"><i class="icon-arrow-left-3 fg-darker smaller"></i></a>
            <small class="on-right">Data Pasien</small>
        </h2>
        
        
        <div >
        <br />
            <table class="table striped">
                        <thead>
                        <tr>
							
                            <th class="text-left">Kode Lab</th>
                            <th class="text-left">No Rekam Medis</th>                            
                            <th class="text-left">Hasil Lab</th>
                            <th class="text-left">Keterangan</th>
                            <th class="text-left">Ubah</th>
							<th class="text-left">Tambah</th>
                            <th class="text-left">Hapus</th>
                            
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>1</td>
                            <td class="right">123</td>
                            <td class="right">111</td>
                            <td class="right">positif</td>
                            <td class="right">mengalamin kelainan</td>
                           
							
                            <i class="icon-pencil on-right"></i></a></td>
                            <td class="right"><a href="{{URL::to('laboratorium/tambahlaboratorium')}}"> <i class="icon-pencil on-right"></i></a></td>
							<td class="right"><a href="#"><i class="icon-remove on-right"></i></a></td>
                        </tr>
                        
                       
                        
                        </tbody>

                        <tfoot></tfoot>
                    </table>
        </div>
		<div class="input-control text">
				<input type="text" />
				<button class="btn-search"></button>
		</div>
</body>
</html>
