@extends('layouts.app')

@section('content')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            <!-- Modal body -->
            <div class="p-4 md:p-5">

                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <tbody>
                            <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    BUS NAME
                                </th>
                                <td class="px-6 py-4">
                                    {{ $orderInfo->bus_name }}
                                </td>
                            </tr>

                            <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    DESTINATION
                                </th>
                                <td class="px-6 py-4">
                                    {{ $orderInfo->destination }}
                                </td>
                            </tr>

                            <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    DATE
                                </th>
                                <td class="px-6 py-4">
                                    {{ $orderInfo->date }}
                                </td>
                            </tr>

                            <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    TIME
                                </th>
                                <td class="px-6 py-4">
                                    {{ $orderInfo->time }}
                                </td>
                            </tr>

                            <tr class="bg-white dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Price
                                </th>
                                <td class="px-6 py-4">
                                    {{ $orderInfo->price }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <form class="space-y-4" action="{{ route('orderConfirm', $orderInfo->id) }}" method="POST">
                    @csrf
                    <label for="countries" class="block mb-1 text-sm font-medium text-gray-900 dark:text-white">Select your
                        seat</label>
                    <select id="countries" name="seat" required
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="2">4</option>
                    </select>

                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                            name</label>
                        <input type="text" name="name" id="name" name="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Jone Deo" required>
                    </div>

                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                            email</label>
                        <input type="email" name="email" id="email" placeholder="jonedeo@gmail.com" name="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                            required>
                    </div>



                    <button type="submit"
                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Book
                        Now</button>

                </form>
            </div>
        </div>
    </div>
@endsection
