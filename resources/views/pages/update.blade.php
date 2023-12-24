@extends('layouts.app')

@section('content')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">

            <form class="max-w-sm " action="{{ route('update', $busInfo->id) }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="bus_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bus
                        Name</label>
                    <input type="text" id="bus_name" name="bus_name"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        placeholder="Bus Name" value="{{ old('bus_name', $busInfo->bus_name) }}" required>
                </div>
                <div class="mb-5">
                    <label for="seat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seat</label>
                    <input type="text" id="seat" name="seat" value="{{ old('seat', $busInfo->seat) }}"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        required>
                </div>

                <div class="mb-5">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                    <input type="text" id="price" name="price" value="{{ old('price', $busInfo->price) }}"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        required>
                </div>

                <label for="default" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Default
                    select</label>
                <select id="default" name="destination"
                    class="bg-gray-50 border border-gray-300 text-gray-900 mb-6 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="Dhaka" @if (old('destination', $busInfo->destination) == 'Dhaka') selected @endif>Dhaka</option>
                    <option value="Comilla" @if (old('destination', $busInfo->destination) == 'Comilla') selected @endif>Comilla</option>
                    <option value="Chittagong" @if (old('destination', $busInfo->destination) == 'Chittagong') selected @endif>Chittagong</option>
                    <option value="Cox's Bazaar" @if (old('destination', $busInfo->destination) == "Cox's Bazaar") selected @endif>Cox's Bazaar</option>
                </select>

                <div class="mb-5">
                    <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
                    <input type="date" id="date" name="date" value="{{ old('date', $busInfo->date) }}"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        required>
                </div>

                <div class="mb-5">
                    <label for="time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Time</label>
                    <input type="time" id="time" name="time" value="{{ old('time', $busInfo->time) }}"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        required>
                </div>

                <button type="submit"
                    class="text-white w-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update
                    Now</button>
            </form>

        </div>
    </div>
@endsection
