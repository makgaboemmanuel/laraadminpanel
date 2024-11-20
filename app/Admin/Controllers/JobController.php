<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Job;

class JobController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Job';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Job());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('log', __('Log'));
        $grid->column('retrycount', __('Retrycount'));
        $grid->column('status', __('Status'));
        $grid->column('error', __('Error'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('deleted_at', __('Deleted at'));

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
        $show = new Show(Job::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('log', __('Log'));
        $show->field('retrycount', __('Retrycount'));
        $show->field('status', __('Status'));
        $show->field('error', __('Error'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('deleted_at', __('Deleted at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Job());

        $form->text('name', __('Name'));
        $form->text('log', __('Log'));
        $form->number('retrycount', __('Retrycount'));
        $form->text('status', __('Status'));
        $form->text('error', __('Error'));

        return $form;
    }
}
