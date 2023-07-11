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

                    <center>
                        @if (session()->has('success'))

                            <span id="popup" style="padding: 5px; background: green; border-radius: 3px; color: #ffffff;">{{session('success')}}</span>
                            
                        @endif

                        @if (session()->has('error'))

                            <span id="popup" style="padding: 5px; background: red; border-radius: 3px; color: #ffffff;">{{session('error')}}</span>
                            
                        @endif


                        <script>
                            // Get a reference to the element
                            const element = document.getElementById("popup");
                        
                            // Function to hide the element
                            function hideElement() {
                                element.style.display = "none";
                            }
                        
                            // Call the function after 3 seconds
                            setTimeout(hideElement, 4000);
                        </script>

                    </center>

                    <h3 style="text-align: center;">Express verification</h3>
                    <p style="text-align: center;">Type the email address you which to verify</p>

                    <form method="POST" action="{{ route('verify_portal') }}">
                        @csrf
                        <input class="form-control" type="email" name="email" placeholder="E-mail Address" required style="border: 2px solid #000;">
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