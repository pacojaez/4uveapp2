<div>
    <main class="">
        <div class="grid px-8 pb-10 mx-4 mb-4 bg-gray-100 border-4 border-green-400 rounded-3xl">
            <div class="grid grid-cols-12 gap-6">
                <div class="grid grid-cols-12 col-span-12 gap-6 xxl:col-span-9">
                    {{-- <div class="col-span-12 mt-8">
                        <div class="grid grid-cols-12 gap-6 mt-5">
                            @foreach ($productos_mas_vendidos as $producto )
                            <a class="col-span-12 transition duration-300 transform bg-white rounded-lg shadow-xl hover:scale-105 sm:col-span-6 xl:col-span-3 intro-y"
                            href="#">
                            <div class="p-5">
                                <div class="flex justify-between">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-blue-400 h-7 w-7"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                    </svg>
                                    <div
                                        class="flex h-6 px-2 text-sm font-semibold text-white bg-green-500 rounded-full justify-items-center">
                                        <span class="flex items-center">30%</span>
                                    </div>
                                </div>
                                <div class="flex-1 w-full ml-2">
                                    <div>
                                        <div class="mt-3 text-3xl font-bold leading-8">{{ $producto }}</div>

                                        <div class="mt-1 text-base text-gray-600">Item Sales</div>
                                    </div>
                                </div>
                            </div>
                            </a>
                            @endforeach
                            {{-- <a class="col-span-12 transition duration-300 transform bg-white rounded-lg shadow-xl hover:scale-105 sm:col-span-6 xl:col-span-3 intro-y"
                                href="#">
                                <div class="p-5">
                                    <div class="flex justify-between">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-blue-400 h-7 w-7"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                        </svg>
                                        <div
                                            class="flex h-6 px-2 text-sm font-semibold text-white bg-green-500 rounded-full justify-items-center">
                                            <span class="flex items-center">30%</span>
                                        </div>
                                    </div>
                                    <div class="flex-1 w-full ml-2">
                                        <div>
                                            <div class="mt-3 text-3xl font-bold leading-8">4.510</div>

                                            <div class="mt-1 text-base text-gray-600">Item Sales</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="col-span-12 transition duration-300 transform bg-white rounded-lg shadow-xl hover:scale-105 sm:col-span-6 xl:col-span-3 intro-y"
                                href="#">
                                <div class="p-5">
                                    <div class="flex justify-between">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-yellow-400 h-7 w-7"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                        </svg>
                                        <div
                                            class="flex h-6 px-2 text-sm font-semibold text-white bg-red-500 rounded-full justify-items-center">
                                            <span class="flex items-center">30%</span>
                                        </div>
                                    </div>
                                    <div class="flex-1 w-full ml-2">
                                        <div>
                                            <div class="mt-3 text-3xl font-bold leading-8">4.510</div>

                                            <div class="mt-1 text-base text-gray-600">Item Sales</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="col-span-12 transition duration-300 transform bg-white rounded-lg shadow-xl hover:scale-105 sm:col-span-6 xl:col-span-3 intro-y"
                                href="#">
                                <div class="p-5">
                                    <div class="flex justify-between">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-pink-600 h-7 w-7"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                                        </svg>
                                        <div
                                            class="flex h-6 px-2 text-sm font-semibold text-white bg-yellow-500 rounded-full justify-items-center">
                                            <span class="flex items-center">30%</span>
                                        </div>
                                    </div>
                                    <div class="flex-1 w-full ml-2">
                                        <div>
                                            <div class="mt-3 text-3xl font-bold leading-8">4.510</div>

                                            <div class="mt-1 text-base text-gray-600">Item Sales</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="col-span-12 transition duration-300 transform bg-white rounded-lg shadow-xl hover:scale-105 sm:col-span-6 xl:col-span-3 intro-y"
                                href="#">
                                <div class="p-5">
                                    <div class="flex justify-between">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-green-400 h-7 w-7"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                                        </svg>
                                        <div
                                            class="flex h-6 px-2 text-sm font-semibold text-white bg-blue-500 rounded-full justify-items-center">
                                            <span class="flex items-center">30%</span>
                                        </div>
                                    </div>
                                    <div class="flex-1 w-full ml-2">
                                        <div>
                                            <div class="mt-3 text-3xl font-bold leading-8">4.510</div>

                                            <div class="mt-1 text-base text-gray-600">Item Sales</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div> --}}
                    <div class="grid grid-cols-12 mt-5">
                        <div class="grid grid-cols-12 col-span-12 gap-6 xxl:col-span-9">
                        <div class="top-0 col-span-12 p-4 bg-white shadow">
                            <input type="checkbox" value="other" wire:model="showDataLabels" />
                            <span>Show data labels</span>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 mt-5">
                        <div class="grid grid-cols-1 gap-2 lg:grid-cols-2">
                            <div class="p-4 bg-white shadow-lg" style="height: 32rem;">
                                <livewire:livewire-column-chart key="{{ $columnChartModel->reactiveKey() }}"
                                    :column-chart-model="$columnChartModel" />
                            </div>

                            <div class="p-4 bg-white shadow-lg" style="height: 32rem;">
                                <livewire:livewire-pie-chart key="{{ $pieChartModel->reactiveKey() }}"
                                    :pie-chart-model="$pieChartModel" />
                            </div>
                            {{-- <div class="p-4 bg-white shadow-lg" id="chartline"></div>
                            <div class="bg-white shadow-lg" id="chartpie"></div> --}}
                        </div>
                    </div>
                    <div class="col-span-12 mt-5">
                        <div class="grid grid-cols-1 gap-2 lg:grid-cols-2">
                            <div class="p-4 bg-white border rounded shadow" style="height: 32rem;">
                                <livewire:livewire-line-chart key="{{ $lineChartModel->reactiveKey() }}"
                                    :line-chart-model="$lineChartModel" />
                            </div>
                            <div class="p-4 bg-white border rounded shadow" style="height: 32rem;">
                                <livewire:livewire-column-chart key="{{ $multiColumnChartModel->reactiveKey() }}"
                                    :column-chart-model="$multiColumnChartModel" />
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-span-12 mt-5">
                        <div class="grid grid-cols-1 gap-2 lg:grid-cols-1">
                            <div class="p-4 bg-white rounded-lg shadow-lg">
                                <h1 class="text-base font-bold">Table</h1>
                                <div class="mt-4">
                                    <div class="flex flex-col">
                                        <div class="-my-2 overflow-x-auto">
                                            <div class="inline-block min-w-full py-2 align-middle">
                                                <div
                                                    class="overflow-hidden bg-white border-b border-gray-200 shadow sm:rounded-lg">
                                                    <table class="min-w-full divide-y divide-gray-200">
                                                        <thead>
                                                            <tr>
                                                                <th
                                                                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase bg-gray-50">
                                                                    <div class="flex cursor-pointer">
                                                                        <span class="mr-2">PRODUCT NAME</span>
                                                                    </div>
                                                                </th>
                                                                <th
                                                                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase bg-gray-50">
                                                                    <div class="flex cursor-pointer">
                                                                        <span class="mr-2">Stock</span>
                                                                    </div>
                                                                </th>
                                                                <th
                                                                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase bg-gray-50">
                                                                    <div class="flex cursor-pointer">
                                                                        <span class="mr-2">STATUS</span>
                                                                    </div>
                                                                </th>
                                                                <th
                                                                    class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-gray-500 uppercase bg-gray-50">
                                                                    <div class="flex cursor-pointer">
                                                                        <span class="mr-2">ACTION</span>
                                                                    </div>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="bg-white divide-y divide-gray-200">
                                                            <tr>
                                                                <td
                                                                    class="px-6 py-4 text-sm leading-5 whitespace-no-wrap">
                                                                    <p>Apple MacBook Pro 13</p>
                                                                    <p class="text-xs text-gray-400">PC & Laptop
                                                                    </p>
                                                                </td>
                                                                <td
                                                                    class="px-6 py-4 text-sm leading-5 whitespace-no-wrap">
                                                                    <p>77</p>
                                                                </td>
                                                                <td
                                                                    class="px-6 py-4 text-sm leading-5 whitespace-no-wrap">
                                                                    <div class="flex text-green-500">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            class="w-5 h-5 mr-1" fill="none"
                                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                                            <path stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="2"
                                                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                                        </svg>
                                                                        <p>Active</p>
                                                                    </div>
                                                                </td>
                                                                <td
                                                                    class="px-6 py-4 text-sm leading-5 whitespace-no-wrap">
                                                                    <div class="flex space-x-4">
                                                                        <a href="#"
                                                                            class="text-blue-500 hover:text-blue-600">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                class="w-5 h-5 mr-1" fill="none"
                                                                                viewBox="0 0 24 24"
                                                                                stroke="currentColor">
                                                                                <path stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="2"
                                                                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                                            </svg>
                                                                            <p>Edit</p>
                                                                        </a>
                                                                        <a href="#"
                                                                            class="text-red-500 hover:text-red-600">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                class="w-5 h-5 ml-3 mr-1" fill="none"
                                                                                viewBox="0 0 24 24"
                                                                                stroke="currentColor">
                                                                                <path stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    stroke-width="2"
                                                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                            </svg>
                                                                            <p>Delete</p>
                                                                        </a>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </main>
    {{-- <div class="sticky top-0 z-50 p-4 space-y-4 bg-white shadow">
        <div>
            <input type="checkbox" value="other" wire:model="showDataLabels" />
            <span>Show data labels</span>
        </div>
    </div>

    <div class="container p-4 mx-auto mt-8 space-y-4 sm:p-0"> --}}
        {{-- <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4"> --}}
        {{-- <div class="flex-1 p-4 bg-white border rounded shadow" style="height: 32rem;">
            <livewire:livewire-column-chart key="{{ $columnChartModel->reactiveKey() }}"
                :column-chart-model="$columnChartModel" />
        </div>

        <div class="flex-1 p-4 bg-white border rounded shadow" style="height: 32rem;">
            <livewire:livewire-pie-chart key="{{ $pieChartModel->reactiveKey() }}" :pie-chart-model="$pieChartModel" />
        </div> --}}
        {{--
        </div> --}}

        {{-- <div class="p-4 bg-white border rounded shadow" style="height: 32rem;">
            <livewire:livewire-line-chart key="{{ $lineChartModel->reactiveKey() }}"
                :line-chart-model="$lineChartModel" />
        </div> --}}
        {{--
        <div class="p-4 bg-white border rounded shadow" style="height: 32rem;">
            <livewire:livewire-area-chart key="{{ $areaChartModel->reactiveKey() }}"
        :area-chart-model="$areaChartModel" />
    </div>

    <div class="p-4 bg-white border rounded shadow" style="height: 32rem;">
        <livewire:livewire-line-chart key="{{ $multiLineChartModel->reactiveKey() }}"
            :line-chart-model="$multiLineChartModel" />
    </div> --}}
    {{-- <div class="p-4 bg-white border rounded shadow" style="height: 32rem;">
        <livewire:livewire-column-chart key="{{ $multiColumnChartModel->reactiveKey() }}"
            :column-chart-model="$multiColumnChartModel" />
    </div> --}}
</div>

</div>
