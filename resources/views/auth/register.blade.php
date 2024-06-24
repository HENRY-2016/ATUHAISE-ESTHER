<x-guest-layout>

    <main>
        <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                <div class="d-flex justify-content-center py-4">
                    <span class="d-none d-lg-block">
                        {{trans_choice('general.appName',0)}} 
                        {{trans_choice('general.register',2)}} 
                        {{trans_choice('general.user',2)}}
                    </span>
                </div><!-- End Logo -->

                <div class="card mb-3">
                    <div class="card-body">

                    <div class="pt-4 pb-2">
                        <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                        <p class="text-center small">Enter your personal details to create account</p>
                    </div>
                    @if ($errors -> any())
                        <div  class="alert alert-danger" style="width: 100% !important;" role="alert">
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                    @endif
                    <form class="row g-3 needs-validation" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="col-12">
                        <label for="yourName" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="yourName" placeholder="Both Names" required>
                        </div>

                        <div class="col-12">
                        <label for="yourName" class="form-label">Role</label>
                        <select name="role" class="form-control">
                            <option value="Admin">Admin</option>
                            <option value="Supervisor">Supervisor</option>
                        </select>
                        </div>

                        <div class="col-12">
                        <label for="yourEmail" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Your Email" id="yourEmail" required>
                        </div>


                        <div class="col-12">
                        <label for="yourPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Your Password" id="yourPassword" required>
                        </div>

                        <div class="col-12">
                        <label for="yourPassword" class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" id="yourPassword" required>
                        </div>

                    
                        <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit">Create Account</button>
                        </div>
                        <div class="col-12">
                        <p class="small mb-0">Already have an account? <a href="{{ route('login') }}">Log in</a></p>
                        </div>
                    </form>

                    </div>
                </div>

                </div>
            </div>
            </div>

        </section>

        </div>
    </main><!-- End #main -->


</x-guest-layout>
