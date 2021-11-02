@extends('layouts.app')

@section('title', 'Login')

@section('content')<div class="py-12">
    <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
            <div class="flex">
                <div class="flex-auto text-2xl mb-4">Login</div>
            </div>

            <form action="/login" method="post">
                @csrf

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="@error('email') bg-red-100 border-red-400 @else bg-gray-100 border-gray-400 @enderror rounded border leading-normal resize-none w-full mb-2 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" />
                    @if ($errors->has('email'))
                    <span class="text-red-500">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" value="{{ old('password') }}" class="@error('password') bg-red-100 border-red-400 @else bg-gray-100 border-gray-400 @enderror rounded border leading-normal resize-none w-full mb-2 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" />
                    @if ($errors->has('password'))
                    <span class="text-red-500">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <div class="my-4">
                    @if ($errors->has('credentials'))
                    <span class="text-red-500">{{ $errors->first('credentials') }}</span>
                    @endif
                </div>

                <div class="form-group mt-10">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Log In</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection