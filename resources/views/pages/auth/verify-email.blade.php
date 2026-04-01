<x-layouts::auth>
    <div class="flex justify-center items-center p-8 lg:p-10 order-2 lg:order-1">
        <div class="kt-card max-w-[440px] w-full">
            <div action="#" class="kt-card-content p-10" id="check_email_form" method="post">
                <div class="flex justify-center py-10">
                    <img alt="image" class="dark:hidden max-h-[130px]"
                        src="{{ asset('assets/media/illustrations/30.svg') }}" />
                    <img alt="image" class="light:hidden max-h-[130px]"
                        src="assets/media/illustrations/30-dark.svg" />
                </div>
                <h3 class="text-lg font-medium text-mono text-center mb-3">
                    Check your email
                </h3>
                <div class="text-sm text-center text-secondary-foreground mb-7.5">
                    Please click the link sent to your email
                    <a class="text-sm text-mono font-medium hover:text-primary" href="#">
                        {{ auth()->user()->email }}
                    </a>
                    <br />
                    to verify your account. Thank you
                </div>
                <div class="flex justify-center mb-5">
                    <a class="kt-btn kt-btn-primary flex justify-center" href="html/demo1.html">
                        Back to Home
                    </a>
                </div>
                <div class="flex items-center justify-center gap-1 text-2sm">
                    <span class="text-secondary-foreground">
                        Didn’t receive an email?
                    </span>
                    {{-- <a class="font-medium kt-link" href="html/demo1/authentication/branded/sign-in.html">
                        Resend
                    </a> --}}
                    <form action="{{ route('verification.send') }}" method="POST">
                        @csrf
                        <button type="submit" class="font-medium kt-link"">
                            Resend Email
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div
        class="lg:rounded-xl lg:border lg:border-border lg:m-5 order-1 lg:order-2 bg-top xxl:bg-center xl:bg-cover bg-no-repeat branded-bg">
        <div class="flex flex-col p-8 lg:p-16 gap-4">
            <a href="html/demo1.html">
                <img class="h-[28px] max-w-none" src="{{ asset('assets/media/app/mini-logo.svg') }}" />
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
