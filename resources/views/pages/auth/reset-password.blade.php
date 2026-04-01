<x-layouts::auth>
    <div class="flex justify-center items-center p-8 lg:p-10 order-2 lg:order-1">
        <div class="kt-card max-w-[370px] w-full">
            <form action="{{ route('password.update') }}" class="kt-card-content flex flex-col gap-5 p-10"
                id="reset_password_change_password_form" method="post">
                @csrf
                <!-- Token -->
                <input type="hidden" name="token" value="{{ request()->route('token') }}">
                <div class="text-center">
                    <h3 class="text-lg font-medium text-mono">
                        Reset Password
                    </h3>
                    <span class="text-sm text-secondary-foreground">
                        Enter your new password
                    </span>
                </div>
                <div class="kt-form-item flex flex-col gap-1">
                    <label class="kt-form-label text-mono">
                        Email
                    </label>
                    <input class="kt-input" name="email" placeholder="email@email.com" type="text"
                        aria-invalid="{{ $errors->has('email') ? 'true' : '' }}" value="{{ request('email') }}" />
                    @error('email')
                        <div class="kt-form-message">{{ $message }}</div>
                    @enderror
                </div>
                <div class="kt-form-item flex flex-col gap-1">
                    <label class="kt-form-label text-mono">
                        New Password
                    </label>
                    <label class="kt-input" data-kt-toggle-password="true"
                        aria-invalid="{{ $errors->has('password') ? 'true' : '' }}">
                        <input name="password" placeholder="Enter a new password" type="password" value="" />
                        <div class="kt-btn kt-btn-sm kt-btn-ghost kt-btn-icon bg-transparent! -me-1.5"
                            data-kt-toggle-password-trigger="true">
                            <span class="kt-toggle-password-active:hidden">
                                <i class="ki-filled ki-eye text-muted-foreground">
                                </i>
                            </span>
                            <span class="hidden kt-toggle-password-active:block">
                                <i class="ki-filled ki-eye-slash text-muted-foreground">
                                </i>
                            </span>
                        </div>
                    </label>
                    @error('password')
                        <div class="kt-form-message">{{ $message }}</div>
                    @enderror
                </div>
                <div class="kt-form-item flex flex-col gap-1">
                    <label class="kt-form-label font-normal text-mono">
                        Confirm New Password
                    </label>
                    <label class="kt-input" data-kt-toggle-password="true"
                        aria-invalid="{{ $errors->has('password_confirmation') ? 'true' : '' }}">
                        <input name="password_confirmation" placeholder="Re-enter a new Password" type="password"
                            value="" />
                        <div class="kt-btn kt-btn-sm kt-btn-ghost kt-btn-icon bg-transparent! -me-1.5"
                            data-kt-toggle-password-trigger="true">
                            <span class="kt-toggle-password-active:hidden">
                                <i class="ki-filled ki-eye text-muted-foreground">
                                </i>
                            </span>
                            <span class="hidden kt-toggle-password-active:block">
                                <i class="ki-filled ki-eye-slash text-muted-foreground">
                                </i>
                            </span>
                        </div>
                    </label>
                    @error('password_confirmation')
                        <div class="kt-form-message">{{ $message }}</div>
                    @enderror
                </div>
                <button class="kt-btn kt-btn-primary flex justify-center grow">
                    Submit
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
