<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Venue;

class VenueController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Venue';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Venue());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('image_link', __('Image URL'));
        $grid->column('brach', __('Brach'));
        $grid->column('city', __('City'));
        $grid->column('address', __('Address'));
        $grid->column('contact_phone', __('Contact phone'));
        $grid->column('contact_email', __('Contact email'));
        $grid->column('seats_number', __('Seats number'));
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
        $show = new Show(Venue::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('image_link', __('Image URL'));
        $show->field('brach', __('Brach'));
        $show->field('city', __('City'));
        $show->field('address', __('Address'));
        $show->field('contact_phone', __('Contact phone'));
        $show->field('contact_email', __('Contact email'));
        $show->field('seats_number', __('Seats number'));
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
        $form = new Form(new Venue());

        $form->text('name', __('Name'));
        $form->text('image_link', __('Image URL'));
        $form->text('brach', __('Brach'));
        $form->text('city', __('City'));
        $form->text('address', __('Address'));
        $form->text('contact_phone', __('Contact phone'));
        $form->text('contact_email', __('Contact email'));
        $form->number('seats_number', __('Seats number'));

        return $form;
    }
}
