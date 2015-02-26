@extends("layout.home")

@section("content")
<div class="margin20">
        <div class="celarfix">
            <div class="palce-left">
                <h1>Tambah Data Pasein</h1>
            </div>
        </div>
        <hr />
        <form action="{{ URL::to('pasien/post') }}" method="post">
            <div class="grid">
            <div class="row">
                
                     <label>No pasien</label>
                        <div class="input-control text" data-role="input-control">
                            <input type="text" placeholder="No pasien" name="no_pasien"/>
                        </div>
                        <label>Nama Pasien</label>
                        <div class="input-control text" date-role="input-control">
                            <input type="text" placeholder="Nama Pasien" name="nm_pasien"/>
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
                            <input type="text" placeholder="Alamat" name="alamat"/>
                        </div>
                        
                        <label>Tanggal Lahir</label>
				        <div class="input-control text size" data-role="datepicker" data-format="dddd, mmmm/d/yyyy" data-effect="fade">
                        <input type="text" name="tgl_lahir"/>
                        <button class="btn-date" type="button"></button>
                        </div>
                        
                        <label>No Telpon</label>
                        <div class="input-control text" data-role="input-control">
                              <input type="text" placeholder="No Telpon" name="no_tlp"/>
                        </div>
                        <label>No Kartu Keluarga</label>
                        <div class="input-control text" data-role="input-control">
                              <input type="text" placeholder="No Kartu Keluarga" name="nm_kk"/>
                        </div>
                        <label>Hubungan Keluarga</label>
                        <div class="input-control text" data-role="input-control">
                              <input type="text" placeholder="Hubungan Keluarga" name="hub_kel"/>
                        </div> 
                    <a href="{{ URL::to("pasien/post")}}"><button class="button large info" style="">Tambah</button></a>
                    <button class="button large">Batal</button>
                </div>
            </div>
        
        </form>
        </div>
@stop
