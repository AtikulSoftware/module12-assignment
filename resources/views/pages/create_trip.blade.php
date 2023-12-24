@extends('layouts.app')

@section('content')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">

            <form class="max-w-sm " action="{{ route('post') }}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="bus_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bus
                        Name</label>
                    <input type="text" id="bus_name" name="bus_name"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        placeholder="Bus Name" required>
                </div>
                <div class="mb-5">
                    <label for="seat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seat</label>
                    <input type="number" id="seat" name="seat"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        placeholder="how many seat in the buse ?" required>
                </div>

                <label for="default" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Default
                    select</label>
                <select id="default" name="destination"
                    class="bg-gray-50 border border-gray-300 text-gray-900 mb-6 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a destination</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Comilla">Comilla</option>
                    <option value="Chittagong">Chittagong</option>
                    <option value="Cox's Bazaar">Cox's Bazaar</option>
                </select>

                <div class="mb-5">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                    <input type="number" id="price" name="price"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        placeholder="price par seat ?" required>
                </div>

                <div class="mb-5">
                    <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
                    <input type="date" id="date" name="date"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        required>
                </div>

                <div class="mb-5">
                    <label for="time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Time</label>
                    <input type="time" id="time" name="time"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                        required>
                </div>

                <button type="submit"
                    class="text-white w-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </form>

        </div>
    </div>
@endsection
