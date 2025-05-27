<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>DANPAC TICKET</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/png">
</head>

<body class="bg-slate-200 flex items-center justify-center min-h-screen">
    <div class="container mx-auto max-w-md mt-8">
        <div class=" bg-white border border-gray-200 rounded-xl shadow-lg">
            <div class="p-4 sm:p-7">
                <div class="text-center">
                    <h1 class="block text-2xl font-bold text-gray-800">Reset Password</h1>
                </div>

                <div class="mt-5">
                    <div
                        class="py-3 flex items-center text-xs text-gray-400 before:flex-1 before:border-t before:border-gray-200 before:me-6 after:flex-1 after:border-t after:border-gray-200 after:ms-6">
                        Input email dan password baru
                    </div>

                    <!-- Pesan Sukses/Error -->
                    @if ($errors->any())
                        <div class="my-2 bg-red-100 text-sm text-red-800 rounded-lg p-2" role="alert" tabindex="-1"
                            aria-labelledby="hs-with-list-label">
                            <div class="flex">
                                <div class="shrink-0">
                                    <svg class="shrink-0 size-4 mt-0.5" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <path d="m15 9-6 6"></path>
                                        <path d="m9 9 6 6"></path>
                                    </svg>
                                </div>
                                <div class="ms-4">
                                    <h3 id="hs-with-list-label" class="text-sm font-semibold">
                                        A problem has been occurred while submitting your data.
                                    </h3>
                                    <div class="mt-2 text-sm text-red-700">
                                        <ul class="list-disc space-y-1 ps-5">
                                            @foreach ($errors->all() as $error)
                                                <li>
                                                    {{ $error }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if (session('status'))
                        <div class="my-2 bg-teal-100 border border-teal-200 text-sm text-teal-800 rounded-lg p-4"
                            role="alert" tabindex="-1" aria-labelledby="hs-soft-color-success-label">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!-- End of Pesan Sukses/Error -->

                    <!-- Form -->
                    <form method="POST" action="/reset-password">
                        @csrf
                        <div class="grid gap-y-4">
                            <!-- Form Group -->
                            <div>
                                <label for="email" class="block text-sm mb-2">Alamat Email</label>
                                <div class="relative">
                                    <input type="email" id="email" name="email"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                        required aria-describedby="email-error" placeholder="example@mail.com">
                                </div>
                            </div>
                            <!-- End Form Group -->

                            <!-- Form Group -->
                            <div>
                                <label for="password" class="block text-sm mb-2">Password</label>
                                <div class="relative">
                                    <input type="password" id="password" name="password"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                        required placeholder="Input Password">
                                </div>
                            </div>
                            <!-- End Form Group -->

                            <!-- Form Group -->
                            <div>
                                <label for="repassword" class="block text-sm mb-2">Konfirmasi Password</label>
                                <div class="relative">
                                    <input type="password" id="repassword" name="password_confirmation"
                                        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                        required placeholder="Input Password Lagi">
                                </div>
                            </div>
                            <!-- End Form Group -->

                            <input type="hidden" id="token" name="token" value="{{ $token }}" required>

                            <button type="submit"
                                class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">Submit</button>
                        </div>
                    </form>
                    <!-- End Form -->

                </div>
            </div>
        </div>
    </div>
</body>

</html>
