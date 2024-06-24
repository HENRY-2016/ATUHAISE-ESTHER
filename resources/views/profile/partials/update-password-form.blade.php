<div>
    <header>
        <h2 >
            {{ __('Update Password') }}
        </h2>

        <p >
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div class="my-grid-container-1-columns">
            <div class="my-grid-item">
                <label  class="black-text main-label-text-1" for="name"> Current Password</label><br>
                    <input class="form-control text-input-fields-profile" id="current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
                    <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                </div>
            </div>

            <div class="my-grid-item">
                <label  class="black-text main-label-text-1" for="name"> New Password</label><br>
                <input class="form-control text-input-fields-profile" id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
            </div>

            <div class="my-grid-item">
            <label  class="black-text main-label-text-1" for="name"> Confirm Password</label><br>
                <input class="form-control text-input-fields-profile" id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="my-grid-item">
                <br><br><br>
                <button type="submit" class="btn btn-primary submit-btn">
                    Update Password
                </button>
            </div>
        </div>
    </form>
</div>
