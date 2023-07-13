<x-inner-layout>


    <div class="row">
        <div class="img-holder">
            <div class="bg"></div>
            <div class="info-holder">
                <img src="{{asset('inner/images/graphic3.svg')}}" alt="">
            </div>
        </div>
        <div class="form-holder">
            <div class="form-content" style="background: #000;">
                <div class="form-items">

                    

                    <h3 style="text-align: center;">Time Limit</h3>
                    
                    <p style="text-align: center;">{{session('error')}}</p>

                    <div class="page-links">
                        <center>
                            <br>
                            <a href="/verify"> < back </a>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-inner-layout>