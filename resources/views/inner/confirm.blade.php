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

                    <h3 style="text-align: center;">Code verification</h3>
                    <hr>
                    <p style="text-align: center;">Please enter the code sent to the email address. </p>

                    <form method="POST" action="{{route('activity.submit', $activityId)}}">
                        @csrf
                        
                        
                        <center>
                            @error('code')
                                <span class="mb-0 small alert alert-danger shadow-dm">{{$message}}</span>
                            @enderror
                        </center>
                        
                        <input class="form-control" type="text" name="code" placeholder="Enter code" required style="border: 2px solid #000;">
                        <input type="hidden" name="activityId" value="{{$activityId}}">
                        <div class="form-button">
                            <center>
                                <button id="submit" type="submit" class="ibtn">Verify!</button>
                                <hr>
                                <a href="/verify" style="color: #000;">cancel</a>
                            </center>
                        </div>
                    </form>

                    {{-- <div class="page-links">
                        <center>
                            <br>
                            <a href="/"> < back </a>
                        </center>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

</x-inner-layout>