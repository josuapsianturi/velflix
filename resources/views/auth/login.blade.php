<x-layout>
    <section class="px-6 py-8">
        <main class="mx-auto mt-10 max-w-lg rounded-xl border border-gray-200 bg-gray-100 p-6">
            <h1 class="text-center text-xl font-bold">Log In</h1>

            <form method="post" action="/login" class="mt-10">
                @csrf

                <!-- Email -->
                <div class="mb-6">
                    <label for="email" class="mb-2 block text-xs font-bold uppercase text-gray-700">
                        Email
                    </label>

                    <input class="w-full border border-gray-400 p-2"
                        type="email"
                        name="email"
                        id="email"
                        value="{{ old('email') }}"
                        required
                        >

                    @error('email')
                        <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-6">
                    <label for="password" class="mb-2 block text-xs font-bold uppercase text-gray-700">
                        Password
                    </label>

                    <input class="w-full border border-gray-400 p-2"
                        type="password"
                        name="password"
                        id="password"
                        required
                        >

                    @error('password')
                        <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="mb-6 flex items-center justify-center">
                    <button type="submit"
                        class="mr-4 rounded bg-gray-700 px-4 py-2 text-white hover:bg-gray-800">
                        Log In
                    </button>
                    <a href="/login/google" class="rounded bg-green-700 px-4 py-2 text-white hover:bg-green-800">Login Google</a>
                </div>

            </form>

        </main>
    </section>
</x-layout>
