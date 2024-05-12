
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    Auth::admin
  </title>
  @vite('resources/css/app.css')
</head>
<body>
  <div class="min-h-screen py-6 flex flex-col justify-center sm:py-12 bg-cover bg-center bg-fixed" style="background-image: url('\top-view-variety-tasty-cheese-with-milk.jpg')">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
          <div
            class="absolute inset-0 bg-gradient-to-r from-cyan-400 to-sky-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
          </div>
          <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
            <div>
              @if (Session::has('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4" role="alert">
                  <p class="font-bold">Success</p>
                  <p>{{ session::get('success') }}</p>
                </div>
              @endif
              @if (Session::has('error'))
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4" role="alert">
                  <p class="font-bold">Error</p>
                  <p>{{ session::get('error') }}</p>
                </div>
              @endif
            </div>
            <div class="max-w-md mx-auto">
              <div>
                <h1 class="text-2xl font-semibold">Login</h1>
              </div>
              <form action="{{ route('admin.authenticate') }}" method="post">
                @csrf
              <div class="divide-y divide-gray-200">
                <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                  <div class="relative">
                    <input value="{{old('email')}}" autocomplete="off" id="email" name="email" type="text" class="@error('email') is invalid: @enderror peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Email address" />
                    <label for="email" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Email Address admin</label>
                    @error('email')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="relative">
                    <input autocomplete="off" id="password" name="password" type="password" class="@error('password') is invalid: @enderror peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Password" />
                    <label for="password" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Password</label>
                    @error('email')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                  </div>
                  <div class="relative">
                    <button class="bg-cyan-500 text-white rounded-md px-2 py-1">Login</button>
                  </div>
                </div>
                </form>
              </div>
            </div>  
            <div class="w-full flex justify-center">
                <button class="flex items" >    
              </button>
            </div class="text-center">
            <a href="{{ route('account.register') }}" class="text-cyan-700">Create New Account</a>
          </div>
        </div>
      </div>
</body>
</html>