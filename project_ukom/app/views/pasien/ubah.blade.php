@extends("layout.home")

@section("content")
	<div class="margin20">
		<div class="clearfix">
			<div class="place-left">
			<h2>Edit Data Pasien</h2>            
			</div>
		</div>
		<hr />
		{{ Form::model($data, array('route' => array('ganti', $data->id), 'method' =>'PUT')) }}
		<div class="grid">
			<div class="row">
				<div>
					<label>No Pasien</label>
					<div class="input-control text" data-role="input-control">
						<input type="text"name="no_pasien" placeholder="no pasien" value="{{ $data->no_pasien}}"/>
					</div>
                    <label>Nama Pasien</label>
                        <div class="input-control text" date-role="input-control">
                            <input type="text" value="{{ $data->nm_pasien}}" placeholder="Nama Pasien" name="nm_pasien"/>
                        </div>
					<label>Nama Pasien</label>
					<div class="input-control text" data-role="input-control">
						<input type="text" value="{{ $data->nm_pasien}}" placeholder="Nama pasien" name="nm_pasien"/>
					</div>
					<label>Jenis Kelamin</label>
                        <div class="input-control text" data-role="input-control"> 
                             <select name="j_kel">
                                <option>Laki - Laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                    <label>Agama</label>
                        <div class="input-control text" data-role="input-control">
                             <select name="agama">
                                <option>Islam</option>
                                <option>Kristen</option>
                                <option>Protestan</option>
                                <option>Hindu</option>
                                <option>Buddha</option>
                            </select>
                        </div> 
                    <label>Alamat</label>
                        <div class="input-control text" data-role="input-control">
                            <input type="text" value="{{ $data->alamt}}" placeholder="Alamat" name="alamat"/>
                        </div>
                        
                        <label>Tanggal Lahir</label>
				        <div class="input-control text size" data-role="datepicker" data-format="dddd, mmmm/d/yyyy" data-effect="fade">
                        <input type="text" name="tgl_lahir"/>
                        <button class="btn-date" type="button"></button>
                        </div>
                        
                        <label>No Telpon</label>
                        <div class="input-control text" data-role="input-control">
                              <input type="text" value="{{ $data->no_tlp}}" placeholder="No Telpon" name="no_tlp"/>
                        </div>
                        <label>No Kartu Keluarga</label>
                        <div class="input-control text" data-role="input-control">
                              <input type="text" value="{{ $data->no_kk}}" placeholder="No Kartu Keluarga" name="nm_kk"/>
                        </div>
                        <label>Hubungan Keluarga</label>
                        <div class="input-control text" data-role="input-control">
                              <input type="text" value="{{ $data->hub_kel}}" placeholder="Hubungan Keluarga" name="hub_kel"/>
                        </div>        
				
				</div>
			</div>
			<div class="">
			<a href="{{ URL::to("pasien/ubah")}}"><button class="button large info" style="">Ubah</button></a>
			<button class="button large">Batal</button>
			</div>
		</div>
	</div>
</form>

@stop