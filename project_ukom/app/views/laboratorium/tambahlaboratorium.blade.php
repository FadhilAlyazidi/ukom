@extends("layout.home")

@section("content")
<div class="margin20">
        <div class="celarfix">
            <div class="palce-left">
                <h1>Laboratorium    </h1>
            </div>
        </div>
        <hr />
        <form action="{{ URL::to('laboratoirum/post') }}" method="post">
            <div class="grid">
            <div class="row">
                
                     <label>Kode Lab</label>
                        <div class="input-control text" data-role="input-control">
                            <input type="text" placeholder="kode lab" name="kd_lab"/>
                        </div>
                        <label>Nomor Rekam Medis</label>
                        <div class="input-control text" date-role="input-control">
                            <input type="text" placeholder="nomor rekam medis" name="no_rm"/>
                        </div>
                        <label>Hasil Lab</label>
                        <div class="input-control text" date-role="input-control">
                            <input type="text" placeholder="hasil lab" name="hasil_lab"/>
                    
                        
                        <label>Keterangan</label>
                        <div class="input-control text" data-role="input-control">
                              <input type="text" placeholder="keterangan" name="ket"/>
                        </div>
                        
                    <a href="{{ URL::to("laboratorium/post")}}"><button class="button large info" style="">Tambah</button></a>
                    <button class="button large">Batal</button>
                </div>
            </div>
        
        </form>
        </div>
@stop
