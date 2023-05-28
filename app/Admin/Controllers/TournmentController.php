<?php

namespace App\Admin\Controllers;

use App\Models\Tournment;
use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;

class TournmentController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Tournment';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Tournment());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('start_date', __('Start date'));
        $grid->column('final_date', __('Final date'));
        $grid->column('prize_found', __('Prize found'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
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
        $show = new Show(Tournment::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('start_date', __('Start date'));
        $show->field('final_date', __('Final date'));
        $show->field('prize_found', __('Prize found'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
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
        $form = new Form(new Tournment());

        $form->text('name', __('Name'));
        $form->date('start_date', __('Start date'))->default(date('Y-m-d'));
        $form->date('final_date', __('Final date'))->default(date('Y-m-d'));
        $form->number('prize_found', __('Prize found'));
        $form->text('image_link', __('Image link'))->default('images/default-tournment.jpg');

        return $form;
    }
}
