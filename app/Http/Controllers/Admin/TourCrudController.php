<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TourRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class TourCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class TourCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    private function getFieldsData($show = FALSE)
    {
        return [
            [
                'name'=> 'name',
                'label' => 'Tour name',
                'type'=> 'text'
            ],
            [
                'name' => 'tour_date',
                'label' => 'Tour date and time',
                'type' => 'datetime',
                'searchLogic' => function ($query, $column, $searchTerm) {
                  $query->orWhere('tour_date', 'like', '%'.$searchTerm.'%');
    }
            ],
            [
                'name' => 'durance',
                'label' => 'Duration',
                'type' => 'text'
            ],
            [    // SelectMultiple = n-n relationship (with pivot table)
                'label'     => "Transport",
                'type'      => ($show ? "select": 'select_multiple'),
                'name'      => 'transports', // the method that defines the relationship in your Model
// optional
                'entity'    => 'transports', // the method that defines the relationship in your Model
                'model'     => "App\Models\Transport", // foreign key model
                'attribute' => 'transport', // foreign key attribute that is shown to user
                'pivot'     => true, // on create&update, do you need to add/delete pivot table entries?
                'searchLogic' => function ($query, $column, $searchTerm) {
                    $query->orWhereHas('transports', function ($q) use ($column, $searchTerm) {
                        $q->where('transport', 'like', '%'.$searchTerm.'%');
                    });
                }
            ],
            [    // SelectMultiple = n-n relationship (with pivot table)
                'label'     => "Organizers",
                'type'      => ($show ? "select": 'select_multiple'),
                'name'      => 'organizers', // the method that defines the relationship in your Model
// optional
                'entity'    => 'organizers', // the method that defines the relationship in your Model
                'model'     => "App\Models\Organizer", // foreign key model
                'attribute' => 'name', // foreign key attribute that is shown to user
                'pivot'     => true, // on create&update, do you need to add/delete pivot table entries?
                'searchLogic' => function ($query, $column, $searchTerm) {
                    $query->orWhereHas('organizers', function ($q) use ($column, $searchTerm) {
                        $q->where('name', 'like', '%'.$searchTerm.'%');
                    });
                }
            ],
            [
                'label' => "Tour Image",
                'name' => "image",
                'type' => ($show ? 'view' : 'upload'),
                'view' => 'partials/image',
                'upload' => true,
            ]
        ];
    }

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Tour::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/tour');
        CRUD::setEntityNameStrings('tour', 'tours');
        $this->crud->addFields($this->getFieldsData());
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->set('show.setFromDb', false);
        $this->crud->addColumns($this->getFieldsData(TRUE));

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(TourRequest::class);



        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    protected function setupShowOperation()
    {
        // by default the Show operation will try to show all columns in the db table,
        // but we can easily take over, and have full control of what columns are shown,
        // by changing this config for the Show operation
        $this->crud->set('show.setFromDb', false);
        $this->crud->addColumns($this->getFieldsData(TRUE));
    }


}
