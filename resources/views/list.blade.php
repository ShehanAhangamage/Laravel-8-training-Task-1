@extends('layouts.app')

@section('title', 'Booking List')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
            <div class="flex">
                <div class="flex-auto text-2xl mb-4">Booking List</div>

                <div class="flex-auto text-right mt-2">
                    <a href="/add" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add new Booking</a>
                </div>
            </div>
            <table class="w-full text-md rounded mb-4">
                <thead>
                    <tr class="border-b">
                        <th class="text-left p-3 px-5">Id</th>
                        <th class="text-left p-3 px-5">Check In</th>
                        <th class="text-left p-3 px-5">Check Out</th>
                        <th class="text-left p-3 px-5">Full Name</th>
                        <th class="text-left p-3 px-5">Email</th>
                        <th class="text-left p-3 px-5">Address</th>
                        <th class="text-left p-3 px-5">City</th>
                        <th class="text-left p-3 px-5">Zip</th>
                        <th class="text-left p-3 px-5">Country</th>
                        <th class="text-left p-3 px-5">Status</th>
                        <th class="text-left p-3 px-5">Actions</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bookings as $booking)
                    <tr class="border-b hover:bg-orange-100">
                        <td class="p-3 px-5">{{$booking->id}}</td>
                        <td class="p-3 px-5">{{$booking->check_in}}</td>
                        <td class="p-3 px-5">{{$booking->check_out}}</td>
                        <td class="p-3 px-5">{{$booking->full_name}}</td>
                        <td class="p-3 px-5">{{$booking->email}}</td>
                        <td class="p-3 px-5">{{$booking->address}}</td>
                        <td class="p-3 px-5">{{$booking->city}}</td>
                        <td class="p-3 px-5">{{$booking->zip}}</td>
                        <td class="p-3 px-5">{{$booking->country}} </td>
                        <td class="p-3 px-5">{{$booking->status}}</td>
                        <td class="p-3 px-5">
                            <div class="flex flex-col gap-y-4">
                                <a href="/edit/{{$booking->id}}" name="edit" class="w-full mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Edit</a>
                                <form action="/delete/{{$booking->id}}" class="w-full inline-block">
                                    @csrf
                                    <button type="submit" name="delete" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection