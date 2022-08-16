<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            
                <b class="">Request For a Teacher</b>
            
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('postForTtutor') }}">
            @csrf

            <!--Student Name -->
            <div>
                <x-label for="name" :value="__('Student Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Your Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>
             <!-- Phone -->
            <div  class="mt-4">
                <x-label for="phone" :value="__('Your Phone')" />

                <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus />
            </div>
            <!-- Address -->
            <div  class="mt-4">
                <x-label for="address" :value="__('Student Address')" />

                <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus />
            </div>
             
            <!-- School -->
            <div  class="mt-4">
                <x-label for="school" :value="__('School/College Name')" />

                <x-input id="school" class="block mt-1 w-full" type="text" name="school" :value="old('school')"   />
            </div>
            <!-- Class -->
            <div  class="mt-4">
                <x-label for="class" :value="__('Class')" />

                <select id="class"  class="block mt-1 w-full" type="select" name="class"    >
                <option value="class1">class 1</option>
                <option value="class2">class 2</option>
                <option value="class3">class 3</option>
                <option value="class4">class 4</option>
                <option value="class5">class 5</option>
                <option value="class6">class 6</option>
                <option value="class7">class 7</option>
                <option value="class8">class 8</option>
                <option value="class9">class 9</option>
                <option value="class10">class 10</option>
                <option value="class11">class 11</option>
                
                </select>
                
            </div>
             <!-- Subject -->
            <div  class="mt-4">
                <x-label for="subject" :value="__('Subject to Study')" />

                
                <select id="subject"  class="block mt-1 w-full" type="select" name="subject"    >
                <option value="All Subject">All Subject</option>
                <option value="Bangla">Bangla</option>
                <option value="English">English</option>
                <option value="General Math">General Math</option>
                <option value="Higher Math">Higher Math</option>
                <option value="Physics">Physics</option>
                <option value="Chemistry">Chemistry</option>
                <option value="Biology">Biology</option>
                <option value="Accounting">Accounting</option>
                <option value="Finance">Finance</option>
                <option value="Economics">Economics</option>
                
                
                </select>
            </div>
            <!-- Merit -->
            <div  class="mt-4">
                <x-label for="merit" :value="__('Student Merit')" />

                <x-input id="merit" class="block mt-1 w-full" type="text" name="merit" :value="old('merit')"   />
            </div>
             <!-- age -->
            <div  class="mt-4">
                <x-label for="age" :value="__('Student Age')" />

                <x-input id="age" class="block mt-1 w-full" type="text" name="age" :value="old('age')"   />
            </div>
             <!-- Gender -->
            <div  class="mt-4">
                <x-label for="gender" :value="__('Student Gender')" />

                <x-input id="gender" class="" type="radio" name="gender" :value="old('male')" value="male"  />Male
                <x-input id="gender" class=" " type="radio" name="gender" :value="old('female')" value="female"   />Female
            </div>
            <!-- Salary Range -->
            <div  class="mt-4">
                <x-label for="class" :value="__('Salary Range')" />

                <select id="salary"  class="block mt-1 w-full" type="select" name="salary"    >
                <option value="Negotiable" selected>Negotiable</option>
                <option value="1000-2000">1000-2000</option>
                <option value="2000-2500">2000-2500</option>
                <option value="2500-3000">2500-3000</option>
                <option value="3000-3500">3000-3500</option>
                <option value="3500-4000">3500-4000</option>
                <option value="4000-5000">4000-5000</option>
                <option value="5000-7000">5000-7000</option>
                <option value="7000-10000">7000-10000</option>
                <option value="Above 10000">Above 10000</option>
                
                </select>
                
            </div>
            <!-- Days per week  -->
            <div  class="mt-4">
                <x-label for="class" :value="__('Days per Week')" />

                <select id="days_per_week"  class="block mt-1 w-full" type="select" name="days_per_week"    >
                <option value="Negotiable" selected>Negotiable</option>
                <option value="1 day/week">1 day/week</option>
                <option value="2 days/week">2 days/week</option>
                <option value="3 days/week">3 days/week</option>
                <option value="4 days/week">4 days/week</option>
                <option value="5 days/week">5 days/week</option>
                <option value="6 days/week">6 days/week</option>
                
               
                
                </select>
                
            </div>
           
            <!-- Desired Tutor Gender -->
            <div  class="mt-4">
                <x-label for="gender" :value="__('Desired Tutor Gender')" />

                <x-input id="tutor_gender" class="" type="radio" name="tutor_gender" :value="old('male')" value="male"  />Male
                <x-input id="tutor_gender" class=" " type="radio" name="tutor_gender" :value="old('female')" value="female"   />Female
            </div>
            
            
{{-- 
            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div> --}}

            <div class="flex items-center justify-end mt-4">
                {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a> --}}

                <x-button class="ml-4">
                    {{ __('Submit') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
