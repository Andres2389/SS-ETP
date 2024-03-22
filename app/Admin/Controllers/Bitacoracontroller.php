<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Bitacoras;

class Bitacoracontroller extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Bitacoras';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Bitacoras());

        $grid->column('id', __('Id'));
        $grid->column('nombre', __('Nombre'));
        $grid->column('apellido', __('Apellido'));
        $grid->column('instructror_asig', __('Instructror asig'));
        $grid->column('num_biatacoras', __('Num biatacoras'));
        $grid->column('pleanacion', __('Pleanacion'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Bitacoras::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nombre', __('Nombre'));
        $show->field('apellido', __('Apellido'));
        $show->field('instructror_asig', __('Instructror asig'));
        $show->field('num_biatacoras', __('Num biatacoras'));
        $show->field('pleanacion', __('Pleanacion'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Bitacoras());

        $form->text('nombre', __('Nombre'));
        $form->text('apellido', __('Apellido'));
        $form->text('instructror_asig', __('Instructror asig'));
        $form->number('num_biatacoras', __('Num biatacoras'));
        $form->text('pleanacion', __('Pleanacion'));

        return $form;
    }
}
