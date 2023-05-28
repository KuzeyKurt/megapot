<?php

namespace App\Admin\Controllers;

use App\Models\Discipline;
use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;

class DisciplineController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Discipline';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Discipline());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('realise_date', __('Realise date'));
        $grid->column('ageLimit', __('AgeLimit'));
        $grid->column('image_link', __('Image link'));

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
        $show = new Show(Discipline::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('realise_date', __('Realise date'));
        $show->field('ageLimit', __('AgeLimit'));
        $show->field('image_link', __('Image link'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Discipline());

        $form->text('name', __('Name'));
        $form->date('realise_date', __('Realise date'))->default(date('Y-m-d'));
        $form->number('ageLimit', __('AgeLimit'));
        $form->text('image_link', __('Image link'));

        return $form;
    }
}
