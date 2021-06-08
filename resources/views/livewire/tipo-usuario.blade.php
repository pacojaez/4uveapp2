<div>
    <div class="sticky top-0 z-50 p-4 space-y-4 bg-white shadow">
        {{-- <ul class="flex flex-col sm:flex-row sm:space-x-8 sm:items-center">
            <li>
                <input type="checkbox" value="travel" wire:model="types" />
                <span>Travel</span>
            </li>
            <li>
                <input type="checkbox" value="shopping" wire:model="types" />
                <span>Shopping</span>
            </li>
            <li>
                <input type="checkbox" value="food" wire:model="types" />
                <span>Food</span>
            </li>
            <li>
                <input type="checkbox" value="entertainment" wire:model="types" />
                <span>Entertainment</span>
            </li>
            <li>
                <input type="checkbox" value="other" wire:model="types" />
                <span>Other</span>
            </li>
        </ul> --}}
        <div>
            <input type="checkbox" value="other" wire:model="showDataLabels" />
            <span>Show data labels</span>
        </div>
    </div>

    <div class="container p-4 mx-auto mt-8 space-y-4 sm:p-0">
        {{-- <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4"> --}}
        <div class="flex-1 p-4 bg-white border rounded shadow" style="height: 32rem;">
            <livewire:livewire-column-chart key="{{ $columnChartModel->reactiveKey() }}"
                :column-chart-model="$columnChartModel" />
        </div>

         <div class="flex-1 p-4 bg-white border rounded shadow" style="height: 32rem;">
                    <livewire:livewire-pie-chart key="{{ $pieChartModel->reactiveKey() }}"
                    :pie-chart-model="$pieChartModel" />
        </div>
        {{--
        </div> --}}

        <div class="p-4 bg-white border rounded shadow" style="height: 32rem;">
            <livewire:livewire-line-chart key="{{ $lineChartModel->reactiveKey() }}" :line-chart-model="$lineChartModel" />
        </div>
 {{--
        <div class="p-4 bg-white border rounded shadow" style="height: 32rem;">
            <livewire:livewire-area-chart key="{{ $areaChartModel->reactiveKey() }}" :area-chart-model="$areaChartModel" />
        </div>

        <div class="p-4 bg-white border rounded shadow" style="height: 32rem;">
            <livewire:livewire-line-chart key="{{ $multiLineChartModel->reactiveKey() }}"
                :line-chart-model="$multiLineChartModel" />
        </div> --}}
        <div class="p-4 bg-white border rounded shadow" style="height: 32rem;">
            <livewire:livewire-column-chart key="{{ $multiColumnChartModel->reactiveKey() }}"
                :column-chart-model="$multiColumnChartModel" />
        </div>
    </div>

</div>
