<x-skeleton>
    <div class="flex flex-col justify-center items-center font-[sans-serif] bg-gradient-to-r from-blue-800 to-blue-500 text-[#333] lg:h-screen p-6">
        <div class="grid md:grid-cols-2 items-center gap-y-8 bg-white max-w-7xl w-full shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] rounded-md">
          <div class="max-md:order-1 flex flex-col justify-center sm:p-6 p-4 bg-gradient-to-r from-blue-600 to-blue-700 w-full h-full space-y-16">
            <div class="max-w-md space-y-12 mx-auto">
              <div>
                <h4 class="text-white text-lg font-semibold">Create Your Account</h4>
                <p class="text-[13px] text-white mt-2">Welcome to our registration page! Get started by creating your account.</p>
              </div>
              <div>
                <h4 class="text-white text-lg font-semibold">Simple & Secure Registration</h4>
                <p class="text-[13px] text-white mt-2">Our registration process is designed to be straightforward and secure. We prioritize your privacy and data security.</p>
              </div>
              <div>
                <h4 class="text-white text-lg font-semibold">Terms and Conditions Agreement</h4>
                <p class="text-[13px] text-white mt-2">Require users to accept the terms and conditions of your service during registration.</p>
              </div>
            </div>
          </div>
          <form method="POST" action="{{route('register')}}" class="sm:p-6 p-4 w-full">
            @csrf
            <div class="mb-12">
              <h3 class="text-blue-500 text-3xl font-extrabold max-md:text-center">Register</h3>
            </div>
            <div class="grid lg:grid-cols-2 gap-y-7 gap-x-7">
              <div>
                <label class="text-sm mb-2 block">Full Name</label>
                <input name="name" type="text" class="bg-gray-100 w-full text-sm px-4 py-3 rounded-md outline-blue-500" placeholder="Enter full name" />
                @error('name')
                            <p class="text-[#D70040]">{{$message}}</p>
                        @enderror
              </div>
              <div>
                <label class="text-sm mb-2 block">Username</label>
                <input name="username" type="text" class="bg-gray-100 w-full text-sm px-4 py-3 rounded-md outline-blue-500" placeholder="Enter username" />
                @error('username')
                            <p class="text-[#D70040]">{{$message}}</p>
                        @enderror
              </div>
              <div>
                <label class="text-sm mb-2 block">Email Id</label>
                <input name="email" type="text" class="bg-gray-100 w-full text-sm px-4 py-3 rounded-md outline-blue-500" placeholder="Enter email" />
                @error('email')
                            <p class="text-[#D70040]">{{$message}}</p>
                        @enderror
              </div>
            
              <div>
                <label class="text-sm mb-2 block">Password</label>
                <input name="password" type="password" class="bg-gray-100 w-full text-sm px-4 py-3 rounded-md outline-blue-500" placeholder="Enter password" />
                @error('password')
                            <p class="text-[#D70040]">{{$message}}</p>
                        @enderror
              </div>
              <div>
                <label class="text-sm mb-2 block">Confirm Password</label>
                <input name="password_confirmation" type="password" class="bg-gray-100 w-full text-sm px-4 py-3 rounded-md outline-blue-500" placeholder="Enter confirm password" />
              </div>
             
            </div>
            
            <div class="flex items-center mt-8">
         
              <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 shrink-0 rounded" />
              <label for="remember-me" class="ml-3 block text-sm">
                I accept the <a href="javascript:void(0);" class="text-blue-500 font-semibold hover:underline ml-1">Terms and Conditions</a>
              </label>
            </div>
            <div class="mt-10">
              <button type="submit" name="submit" class="min-w-[150px] py-3 px-4 text-sm font-semibold rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none transition-all">
                Sign up
              </button>
              <p>already have an account? <a href="{{route('login')}}">login here!</a></p>
              
            </div>
          </form>
        </div>
      </div>
</x-skeleton>