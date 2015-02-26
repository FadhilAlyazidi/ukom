@extends("layout.layout")

@section("content")
    <br/>
            <header>
                <div class="clearfix">
                    <div class="place-left">
                        <div class="span2">
                            <img src="{{asset("images/1.png")}}"/>
                        </div>
                    </div>
                </div>
            </header>
                <hr /><br />
                <div class="grid">
                    <div class="row">
                            <div class="span4 offset2">
                                <img src="{{asset("images/signin.jpg")}}"/>
                           
                           <center>
                           <div class="span3">
                           <label>username</label>
                           <div class="input-control text" data-role="input-control">
                           <input type="text" placeholder="username" name="username"/>
          
                           </div>
                           <label>password</label>
                           <div class="input-control text" data-role="input-control">
                           <input type="password" placeholder="password" name="password"/>
          
                           </div>
                           
                           <a href="{{ URL::to('home') }}">Masuk</a>                            
                           </center>
                           </div>
                    </div>
                </div>
@stop
