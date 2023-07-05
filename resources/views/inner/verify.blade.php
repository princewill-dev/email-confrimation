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
                    <h3 style="text-align: center;">Express verification</h3>
                    <p style="text-align: center;">Type the email address you which to verify</p>
                    <form>
                        <input class="form-control" type="text" name="email" placeholder="E-mail Address" required>
                        <div class="form-button">
                            <center>
                                <button id="submit" type="submit" class="ibtn">Verify!</button>
                            </center>
                        </div>
                    </form>
                    <div class="page-links">
                        <center>
                            <br>
                            <a href="/"> < back </a>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-inner-layout>