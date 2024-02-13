<!-- resources/views/components/footer.blade.php -->

<footer class="p-4 my-auto text-center text-white bg-blue-800">

    <div class="grid grid-cols-4">
        <div>
            <h2 class="mb-4 text-lg font-bold text-yellow-500">Categories</h2>
            <ul class="list-outside">
                <li><a href="#">Account & Audit</a></li>
                <li><a href="#">IT Services</a></li>
                <li><a href="#">Networking</a></li>
                <li><a href="#">Plumbing</a></li>
                <li><a href="#">Learning & Driver5</a></li>
                <li><a href="#">Law & Finance</a></li>
                <li><a href="#">Medical</a></li>
                <li><a href="#">Handyman Services</a></li>
                <li><a href="#">Print & Publishing</a></li>
                <li><a href="#">House Cleaning</a></li>
            </ul>
          
        </div>
        
        <div class="grid grid-rows-2">
          <div>
            <h2 class="mb-4 text-lg font-bold text-yellow-500">About</h2>
            <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Terms & conditions</a></li>
                <li><a href="#">Privacy policy</a></li>
            </ul>
          </div>
          <div>
            <h2 class="mb-4 text-lg font-bold text-yellow-500">Help and Support</h2>
            <ul>
                 <li><a href="#">FAQ</a></li>
                 <li><a href="#">Stay safe</a></li>
                 <li><a href="#">Contact Us</a></li>
            </ul>
          </div>
        </div>
        <div class="grid grid-rows-2">
          <div>
           
            <h2 class="mb-4 text-lg font-bold text-yellow-500">Quick Links</h2>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Vendors</a></li>
                <li><a href="#">Service Providers</a></li>
                <li><a href="#">Contact Us</a></li>

            </ul>
          </div>
          <div>
            <h2 class="mb-4 text-lg font-bold text-yellow-500">Follow</h2>
            <ul>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Youtube</a></li>
            </ul>
                
          </div>
        </div>

        {{-- <div class="grid grid-cols-3">
           
                <img src="{{ asset('images/footer.png') }}" alt="Footer Image" class="w-full h-auto">
            
        </div> --}}
        <div class="grid grid-cols-3">
            <div class="flex items-center justify-center col-span-3">
                <img src="{{ asset('images/footer.png') }}" alt="Footer Image" class="max-w-md mx-auto w-[500px] h-[350px]">
            </div>
        </div>
        
      </div>
      
      

    <p>&copy; {{ date('Y') }} Service Provider</p>
    
</footer>



