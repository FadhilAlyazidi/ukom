@extends("layout.home")

@section("content")
<div class="margin20">
        <div class="celarfix">
            <div class="palce-left">
                <h1>Rekam Medis</h1>
            </div>
        </div>
        <hr />
        <form action="{{ URL::to('rekammedis/post') }}" method="post">
            <div class="grid">
            <div class="row">
                
                     <label>No Rekam Medis</label>
                        <div class="input-control text" data-role="input-control">
                            <input type="text" placeholder="No rekam medis" name="no_rm"/>
                        </div>
                        <label>Kode Tindakan</label>
                        <div class="input-control text" date-role="input-control">
                            <input type="text" placeholder="kode tindakan" name="kd_tindakan"/>
                        </div>
                        <label>Kode Obat</label>
                        <div class="input-control text" date-role="input-control">
                            <input type="text" placeholder="kode obat" name="kd_obat"/>
                        </div>
                        <label>Kode User</label>
                        <div class="input-control text" date-role="input-control">
                            <input type="text" placeholder="kode user" name="kd_user"/>
                        </div>
                        <label>Nomor Pasien</label>
                        <div class="input-control text" date-role="input-control">
                            <input type="text" placeholder="Nomor Pasien" name="no_pasien"/>
                        </div>
                        <label>Diagnosa</label>
                        <div class="input-control text" date-role="input-control">
                            <input type="text" placeholder="diagnosa" name="diagnosa"/>
                        </div>
                        <label>Keluhan</label>
                        <div class="input-control text" date-role="input-control">
                            <input type="text" placeholder="keluhan" name="keluhan"/>
                        </div>
                      
                        
                        <label>Tanggal Pemeriksaan</label>
				        <div class="input-control text size" data-role="datepicker" data-format="dddd, mmmm/d/yyyy" data-effect="fade">
                        <input type="text" name="tgl_pemeriksaan"/>
                        <button class="btn-date" type="button"></button>
                        </div>
                        
                        <label>Keterangan</label>
                        <div class="input-control text" data-role="input-control">
                              <input type="text" placeholder="keterangan" name="ket"/>
                        </div>
                        
                    <a href="{{ URL::to("rekammedis/post")}}"><button class="button large info" style="">Tambah</button></a>
                    <button class="button large">Batal</button>
                </div>
            </div>
        
        </form>
        </div>
@stop
