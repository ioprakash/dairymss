@include('header')

<div class="min-h-screen py-6 flex flex-col justify-center sm:py-12 bg-cover bg-center bg-fixed" style="background-image: url('/image/cover.jpg')">
    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
      <div
        class="absolute inset-0 bg-gradient-to-r from-cyan-400 to-sky-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
      </div>
      <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-5">
        <div class="max-w-md mx-auto">
          <div>
            <h1 class="text-2xl font-semibold">Admistration Login</h1>
          </div>
              <div class="relative">
                <a href="{{ route('admin.login') }}">    
                <button class="bg-cyan-500 text-white rounded-md px-2 py-1 text-center">Login</button>
                </a>
                </div>
            </div>
         </div>
         
     </div> 
     <div class=" py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
          <div
            class="absolute inset-0 bg-gradient-to-r from-cyan-400 to-sky-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
          </div>
          <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-5">
            <div class="max-w-md mx-auto">
              <div>
                <h1 class="text-2xl font-semibold">Customer Login</h1>
              </div>
                  <div class="relative">
                    <a href="{{ route('account.login') }}">    
                        <button class="bg-cyan-500 text-white rounded-md px-2 py-1 text-center">Login</button>
                        </a>
                    </div>
                </div>
             </div>
        </div>   
 </div>
 </div>

@include('footer')



