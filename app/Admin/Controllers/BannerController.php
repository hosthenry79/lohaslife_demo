<?php

namespace App\Admin\Controllers;

use App\Models\Banner;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;

class BannerController extends AdminController
{
    protected $title = '幻燈片';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Banner());

        $grid->model()->ordered();

        $grid->id('ID')->sortable();

        $grid->title()->editable();
        $grid->lang()->editable();
        $grid->alias()->editable();
        $grid->content()->editable();
        $grid->picture()->image();

        $grid->order()->orderable();

        $grid->created_at();
        $grid->updated_at();

        return $grid;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Banner());

        $form->display('id', 'ID');

        $form->text('title')->rules('required');
        $form->text('lang')->rules('required');
        $form->text('alias')->rules('required');
        $form->textarea('content')->rules('required');
        $form->image('picture');

        $form->display('created_at', 'Created At');
        $form->display('updated_at', 'Updated At');

        return $form;
    }
}
