@extends('layouts.app')

@section('title', 'Update Booking')

@section('content')<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
            <div class="flex">
                <div class="flex-auto text-2xl mb-4">Update Booking</div>

                <div class="flex-auto text-right mt-2">
                    <a href="/" class="bg-yellow-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Cancel</a>
                </div>
            </div>

            <form action="/update/{{$booking->id}}" method="post">
                @csrf

                <div class="flex gap-x-6">
                    <div class="flex-1 ...">
                        <div class="form-group">
                            <label for="check_in">Check-In Date</label>
                            <input type="date" name="check_in" value="{{ $booking->check_in }}" class="@error('check_in') bg-red-100 border-red-400 @else bg-gray-100 border-gray-400 @enderror rounded border leading-normal resize-none w-full mb-2 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" />
                            @if ($errors->has('check_in'))
                            <span class="text-red-500">{{ $errors->first('check_in') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="flex-1 ...">
                        <div class="form-group">
                            <label for="full_name">Check-Out Date</label>
                            <input type="date" name="check_out" value="{{ $booking->check_out }}" class="@error('check_out') bg-red-100 border-red-400 @else bg-gray-100 border-gray-400 @enderror rounded border leading-normal resize-none w-full mb-2 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" />
                            @if ($errors->has('check_out'))
                            <span class="text-red-500">{{ $errors->first('check_out') }}</span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="full_name">Full Name</label>
                    <input type="text" name="full_name" value="{{ $booking->full_name }}" class="@error('full_name') bg-red-100 border-red-400 @else bg-gray-100 border-gray-400 @enderror rounded border leading-normal resize-none w-full mb-2 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" />
                    @if ($errors->has('full_name'))
                    <span class="text-red-500">{{ $errors->first('full_name') }}</span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" value="{{ $booking->email }}" class="@error('email') bg-red-100 border-red-400 @else bg-gray-100 border-gray-400 @enderror rounded border leading-normal resize-none w-full mb-2 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" />
                    @if ($errors->has('email'))
                    <span class="text-red-500">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea name="address" class="@error('address') bg-red-100 border-red-400 @else bg-gray-100 border-gray-400 @enderror rounded border leading-normal resize-none w-full mb-2 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white"> {{ $booking->address }}</textarea>
                    @if ($errors->has('address'))
                    <span class="text-red-500">{{ $errors->first('address') }}</span>
                    @endif
                </div>

                <div class="flex gap-x-6">
                    <div class="flex-1 ...">
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" name="city" value="{{ $booking->city }}" class="@error('city') bg-red-100 border-red-400 @else bg-gray-100 border-gray-400 @enderror rounded border leading-normal resize-none w-full mb-2 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" />
                            @if ($errors->has('description'))
                            <span class="text-red-500">{{ $errors->first('city') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="flex-1 ...">
                        <div class="form-group">
                            <label for="zip">Zip code</label>
                            <input type="text" name="zip" value="{{ $booking->zip }}" class="@error('zip') bg-red-100 border-red-400 @else bg-gray-100 border-gray-400 @enderror rounded border leading-normal resize-none w-full mb-2 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" />
                            @if ($errors->has('zip'))
                            <span class="text-red-500">{{ $errors->first('zip') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="flex-1 ...">
                        <div class="form-group">
                            <label for="country">Country</label>
                            <input type="text" name="country" value="{{ $booking->country }}" class="@error('country') bg-red-100 border-red-400 @else bg-gray-100 border-gray-400 @enderror rounded border leading-normal resize-none w-full mb-2 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" />
                            @if ($errors->has('country'))
                            <span class="text-red-500">{{ $errors->first('country') }}</span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" class="@error('status') bg-red-100 border-red-400 @else bg-gray-100 border-gray-400 @enderror rounded border leading-normal resize-none w-full mb-2 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white">
                        <option value="reserves">Reserved</option>
                        <option value="checked_in">Checked-In</option>
                        <option value="checked_out">Checked-Out</option>
                    </select>
                    @if ($errors->has('status'))
                    <span class="text-red-500">{{ $errors->first('status') }}</span>
                    @endif
                </div>


                <div class="form-group mt-10">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update Booking</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection