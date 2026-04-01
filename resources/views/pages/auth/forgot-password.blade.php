<x-layouts::auth>
    <div class="flex justify-center items-center p-8 lg:p-10 order-2 lg:order-1">
        <div class="kt-card max-w-[370px] w-full">
            <form action="{{ route('password.email') }}" class="kt-card-content flex flex-col gap-5 p-10"
                id="reset_password_enter_email_form" method="post">
                <div class="text-center">
                    <h3 class="text-lg font-medium text-mono">
                        Your Email
                    </h3>
                    <span class="text-sm text-secondary-foreground">
                        Enter your email to reset password
                    </span>
                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div class="kt-form-item flex flex-col gap-1">
                    <label class="kt-form-label font-normal text-mono">
                        Email
                    </label>
                    <input name="email" class="kt-input" placeholder="email@email.com" type="text" value=""
                        aria-invalid="{{ $errors->has('email') ? 'true' : '' }}" />
                    @error('email')
                        <div class="kt-form-message">{{ $message }}</div>
                    @enderror
                </div>
                <button class="kt-btn kt-btn-primary flex justify-center grow" type="submit">
                    Continue
                    <i class="ki-filled ki-black-right">
                    </i>
                </button>
            </form>
        </div>
    </div>
    <div
        class="lg:rounded-xl lg:border lg:border-border lg:m-5 order-1 lg:order-2 bg-top xxl:bg-center xl:bg-cover bg-no-repeat branded-bg">
        <div class="flex flex-col p-8 lg:p-16 gap-4">
            <a href="html/demo1.html">
                <img class="h-[28px] max-w-none" src="assets/media/app/mini-logo.svg" />
            </a>
            <div class="flex flex-col gap-3">
                <h3 class="text-2xl font-semibold text-mono">
                    Secure Access Portal
                </h3>
                <div class="text-base font-medium text-secondary-foreground">
                    A robust authentication gateway ensuring
                    <br />
                    secure
                    <span class="text-mono font-semibold">
                        efficient user access
                    </span>
                    to the Metronic
                    <br />
                    Dashboard interface.
                </div>
            </div>
        </div>
    </div>
</x-layouts::auth>
