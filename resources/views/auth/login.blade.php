<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg p-6 mx-auto mt-10 bg-gray-100 border border-gray-200 rounded-xl">
            <h1 class="text-xl font-bold text-center">Log In</h1>

            <form method="post" action="/login" class="mt-10">
                @csrf

                <!-- Email -->
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-xs font-bold text-gray-700 uppercase">
                        Email
                    </label>

                    <input class="w-full p-2 border border-gray-400"
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
                    <label for="password" class="block mb-2 text-xs font-bold text-gray-700 uppercase">
                        Password
                    </label>

                    <input class="w-full p-2 border border-gray-400"
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
                <div class="flex items-center justify-center mb-6">
                    <button type="submit"
                        class="px-4 py-2 mr-4 text-white bg-gray-700 rounded hover:bg-gray-800">
                        Log In
                    </button>
                    <a href="/login/google" class="px-4 py-2 text-white bg-green-700 rounded hover:bg-green-800">Login Google</a>
                </div>

            </form>

        </main>
    </section>
</x-layout>
