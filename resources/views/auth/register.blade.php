<x-layout>
    <section class="px-6 py-8">
        <main class="mx-auto mt-10 max-w-lg rounded-xl border border-gray-200 bg-gray-100 p-6">
            <h1 class="text-center text-xl font-bold">Register</h1>

            <form action="/register" method="post">
                @csrf

                <!-- Name -->
                <div class="mb-6">
                    <label for="name" class="mb-2 block text-xs font-bold uppercase text-gray-700">
                        Name
                    </label>

                    <input class="w-full border border-gray-400 p-2"
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
                    <label for="username" class="mb-2 block text-xs font-bold uppercase text-gray-700">
                        Username
                    </label>

                    <input class="w-full border border-gray-400 p-2"
                        type="text"
                        name="username"
                        id="username"
                        value="{{ old('username') }}"
                        required
                        >

                    @error('username')
                        <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                    @enderror

                </div>
                <!-- End Username -->

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
                <!-- End Email -->

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

                </div>
                <!-- End Password -->

                <!-- Submit Button -->
                <div class="mb-6">
                    <button type="submit"
                        class="rounded bg-gray-700 px-4 py-2 text-white hover:bg-gray-800">
                        Submit
                    </button>
                </div>
                <!-- End Submit -->
            </form>
    </section>
</x-layout>
