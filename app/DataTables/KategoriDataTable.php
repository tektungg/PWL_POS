<?php

namespace App\DataTables;

use App\Models\KategoriModel;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class KategoriDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('actions', function ($kategori) {
                return '<a href="' . route('/kategori/update', ['id' => $kategori->kategori_id]) . '" class="btn btn-primary mr-2">
                    <i class="fa fa-pencil-alt" style="color: white; font-size: 12px;"></i>
                    </a>' .
                    '<a href="' . route('/kategori/delete', ['id' => $kategori->kategori_id]) . '" class="btn btn-danger" onclick="return confirm(\'Are you sure you want to delete?\')">
                    <i class="fa fa-trash" style="color: white; font-size: 12px;"></i>
                    </a>';
            })
            ->rawColumns(['actions'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(KategoriModel $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('kategori-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(0, 'desc')
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('kategori_id')->width('15%'), 
            Column::make('kategori_kode')->width('15%'), 
            Column::make('kategori_nama')->width('20%'), 
            Column::make('created_at')->width('10%'), 
            Column::make('updated_at')->width('10%'), 
            Column::computed('actions')
                ->exportable(false)
                ->printable(false)
                ->width(20) 
                ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Kategori_' . date('YmdHis');
    }
}
