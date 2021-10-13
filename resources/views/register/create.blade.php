<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg p-6 mx-auto mt-10 bg-gray-100 border border-gray-200 rounded-xl">
            <h1 class="text-xl font-bold text-center">Register</h1>

            <form action="/register" method="post">
                @csrf

                <!-- Name -->
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-xs font-bold text-gray-700 uppercase">
                        Name
                    </label>

                    <input class="w-full p-2 border border-gray-400"
                        type="text"
                        name="name"
                        id="name"
                        value="{{ old('name') }}"
                        required
                        >

                    @error('name')
                        <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                    @enderror

                </div>
                <!-- End Name -->

                <!-- Username -->
                <div class="mb-6">
                    <label for="username" class="block mb-2 text-xs font-bold text-gray-700 uppercase">
                        Username
                    </label>

                    <input class="w-full p-2 border border-gray-400"
                        type="text"
                        name="username"
                        id="username"
                        value="{{ old('username') }}"
                        required
                        >

                </div>

                @error('username')
                    <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                @enderror

                <!-- End Username -->

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
                <!-- End Email -->

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

                </div>
                <!-- End Password -->

                <!-- Submit Button -->
                <div class="mb-6">
                    <button type="submit"
                        class="px-4 py-2 text-white bg-gray-700 rounded hover:bg-gray-800">
                        Submit
                    </button>
                </div>
                <!-- End Submit -->
            </form>
    </section>
</x-layout>
