<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Asantibanez\LivewireCharts\Facades\LivewireCharts;
use App\Models\Order;
use App\Models\User;

class TipoUsuario extends Component
{
    public $types = [
        'Papelería', 'Cadena de Papelerias', 'Suministrador a Oficinas con Punto de Venta', 'Suministrador a Colegios con Almacén',
        'Suministrador a Oficinas con Almacén', 'Mayorista', 'Mayorista con Punto de Venta', 'Importador',
        'Fabricante', 'Distribuidor'
    ];

    public $colors = [
        'Papelería' => '#f6ad55',
        'Cadena de Papelerías' => '#fc8181',
        'Suministrador a Oficinas con Punto de Venta' => '#90cdf4',
        'Suministrador a Colegios con Almacén' => '#66DA26',
        'Suministrador a Oficinas con Almacén' => '#cbd5e0',
        'Mayorista' => '#fbeee0',
        'Mayorista con Punto de Venta' => '#abd5e0',
        'Importador' => '#efd5e0',
        'Fabricante' => '#aaffe0',
        'Distribuidor' => '#eed5e0',
    ];
    // public $colors = [
    //     'Pendiente de confirmacion' => '#f6ad55',
    // ];

    public $firstRun = true;

    public $showDataLabels = false;

    protected $listeners = [
        'onPointClick' => 'handleOnPointClick',
        'onSliceClick' => 'handleOnSliceClick',
        'onColumnClick' => 'handleOnColumnClick',
    ];

    public function handleOnPointClick($point)
    {
        dd($point);
    }

    public function handleOnSliceClick($slice)
    {
        dd($slice);
    }

    public function handleOnColumnClick($column)
    {
        dd($column);
    }

    public function render()
    {
        // $orders = Order::all()->groupBy('user_id');
        // dd($orders);
        $users = User::all();
        // $count = $expenses->count();
        // $total = Order::groupBy('user_id')->sum('total_factura');
        // dd($total);
        // $columnChartModel = $expenses
        //     ->reduce(
        //         function ($columnChartModel, $data) {
        //             // dd($data);
        //             // $type = User::where('tipo_usuario', 'like', $this->types)->get();
        //             $type = $data->first();
        //             // $value = $data->sum('tipo');
        //             $value = Order::groupBy('user_id')->sum('total_factura');
        //             // dd($value);

        //             return $columnChartModel->addColumn('Usuario', 25, $this->colors['Papelería']);
        //         },
        //         LivewireCharts::columnChartModel()
        //             ->setTitle('Gasto Total por Usuario')
        //             ->setAnimated($this->firstRun)
        //             ->withOnColumnClickEventName('onColumnClick')
        //             ->setLegendVisibility(false)
        //             ->setDataLabelsEnabled($this->showDataLabels)
        //             //->setOpacity(0.25)
        //             ->setColors(['#b01a1b', '#d41b2c', '#ec3c3b', '#f66665'])
        //             ->setColumnWidth(90)
        //             ->withGrid()
        //     );

        $multiColumnChartModel = $users
            ->reduce(
                function ($multiColumnChartModel, $data) {
                    $type = $data->tipo_usuario;
                    // dd($type);
                    $total = Order::where('user_id', 'like', $data->id)->sum('total_factura');
                    // $total = User::where('id', 'like', $type)->orders()->sum('total_factura');
                    // $total = Order::groupBy('user_id')->sum('total_factura');
                    // dd($total);
                    return $multiColumnChartModel
                        ->addSeriesColumn($type, $type, $total);
                },
                LivewireCharts::multiColumnChartModel()
                    ->setAnimated($this->firstRun)
                    ->setDataLabelsEnabled($this->showDataLabels)
                    ->withOnColumnClickEventName('onColumnClick')
                    ->setTitle('GASTO TOTAL')
                    ->stacked()
                    ->withGrid()
            );



        $columnChartModel = $users
            ->reduce(function ($columnChartModel, $data) {
                $type = $data->name;
                // dd($type);
                $value = Order::where('user_id', 'like', $data->id)->sum('total_factura');

                return $columnChartModel->addColumn($type, $value, $this->colors[$data->tipo_usuario]);
            }, LivewireCharts::columnChartModel()
                ->setTitle('Compras por Usuario')
                ->setAnimated($this->firstRun)
                ->withOnColumnClickEventName('onColumnClick')
                ->setLegendVisibility(false)
                ->setDataLabelsEnabled($this->showDataLabels)
                //->setOpacity(0.25)
                ->setColors(['#b01a1b', '#d41b2c', '#ec3c3b', '#f66665'])
                ->setColumnWidth(90)
                ->withGrid()
            );

        $pieChartModel = $users
            ->reduce(function ($pieChartModel, $data) {
                $type = $data->tipo_usuario;
                $value = Order::where('user_id', 'like', $data->id)->sum('total_factura');

                return $pieChartModel->addSlice($type, $value, $this->colors[$type]);
            }, LivewireCharts::pieChartModel()
                //->setTitle('Expenses by Type')
                ->setAnimated($this->firstRun)
                ->withOnSliceClickEvent('onSliceClick')
                //->withoutLegend()
                ->legendPositionBottom()
                ->legendHorizontallyAlignedCenter()
                ->setDataLabelsEnabled($this->showDataLabels)
                // ->setColors(['#b01a1b', '#d41b2c', '#ec3c3b', '#f66665'])
            );

        // $lineChartModel = $expenses
        //     ->reduce(function ($lineChartModel, $data) use ($expenses) {
        //         $index = $expenses->search($data);

        //         $amountSum = $expenses->take($index + 1)->sum('amount');

        //         if ($index == 6) {
        //             $lineChartModel->addMarker(7, $amountSum);
        //         }

        //         if ($index == 11) {
        //             $lineChartModel->addMarker(12, $amountSum);
        //         }

        //         return $lineChartModel->addPoint($index, $data->amount, ['id' => $data->id]);
        //     }, LivewireCharts::lineChartModel()
        //         //->setTitle('Expenses Evolution')
        //         ->setAnimated($this->firstRun)
        //         ->withOnPointClickEvent('onPointClick')
        //         ->setSmoothCurve()
        //         ->setXAxisVisible(true)
        //         ->setDataLabelsEnabled($this->showDataLabels)
        //         ->sparklined()
        //     );

        // $areaChartModel = $expenses
        //     ->reduce(function ($areaChartModel, $data) use ($expenses) {
        //         $index = $expenses->search($data);
        //         return $areaChartModel->addPoint($index, $data->amount, ['id' => $data->id]);
        //     }, LivewireCharts::areaChartModel()
        //         //->setTitle('Expenses Peaks')
        //         ->setAnimated($this->firstRun)
        //         ->setColor('#f6ad55')
        //         ->withOnPointClickEvent('onAreaPointClick')
        //         ->setDataLabelsEnabled($this->showDataLabels)
        //         ->setXAxisVisible(true)
        //         ->sparklined()
        //     );

        // $multiLineChartModel = $expenses
        //     ->reduce(function ($multiLineChartModel, $data) use ($expenses) {
        //         $index = $expenses->search($data);

        //         return $multiLineChartModel
        //             ->addSeriesPoint($data->type, $index, $data->amount,  ['id' => $data->id]);
        //     }, LivewireCharts::multiLineChartModel()
        //         //->setTitle('Expenses by Type')
        //         ->setAnimated($this->firstRun)
        //         ->withOnPointClickEvent('onPointClick')
        //         ->setSmoothCurve()
        //         ->multiLine()
        //         ->setDataLabelsEnabled($this->showDataLabels)
        //         ->sparklined()
        //         ->setColors(['#b01a1b', '#d41b2c', '#ec3c3b', '#f66665'])
        //     );


        $this->firstRun = false;

        return view('livewire.tipo-usuario')
            ->with([
                'columnChartModel' => $columnChartModel,
                'pieChartModel' => $pieChartModel,
                // 'lineChartModel' => $lineChartModel,
                // 'areaChartModel' => $areaChartModel,
                // 'multiLineChartModel' => $multiLineChartModel,
                'multiColumnChartModel' => $multiColumnChartModel,
            ]);
    }

    // public function render()
    // {
    //     $columnChartModel = (new ColumnChartModel())
    //         ->setTitle('Expenses by Type')
    //         ->addColumn('Food', 100, '#f6ad55')
    //         ->addColumn('Shopping', 200, '#fc8181')
    //         ->addColumn('Travel', 300, '#90cdf4');

    //     return view('livewire.tipo-usuario');
    // }
}
