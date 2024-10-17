<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Client;

class ClientController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Client';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Client());

        $grid->column('id', __('Id'));
        $grid->column('Nom', __('Nom'));
        $grid->column('Telephone', __('Telephone'));
        $grid->column('Contact', __('Contact'));
        $grid->column('Email', __('Email'));
        $grid->column('Compte C', __('Compte C'));
        $grid->column('RCCM', __('RCCM'));
        $grid->column('Direction 1 nom et prenoms', __('Direction 1 nom et prenoms'));
        $grid->column('Direction 2 nom et prenoms', __('Direction 2 nom et prenoms'));
        $grid->column('Direction 3 nom et prenoms', __('Direction 3 nom et prenoms'));
        $grid->column('Direction 1 Contact', __('Direction 1 Contact'));
        $grid->column('Direction 2 Contact', __('Direction 2 Contact'));
        $grid->column('Direction 3 Contact', __('Direction 3 Contact'));
        $grid->column('Adresse', __('Adresse'));
        $grid->column('Ville', __('Ville'));
        $grid->column('Commune', __('Commune'));
        $grid->column('Quartier', __('Quartier'));
        $grid->column('Rue', __('Rue'));
        $grid->column('Zone', __('Zone'));
        $grid->column('Autre', __('Autre'));
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
        $show = new Show(Client::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('Nom', __('Nom'));
        $show->field('Telephone', __('Telephone'));
        $show->field('Contact', __('Contact'));
        $show->field('Email', __('Email'));
        $show->field('Compte C', __('Compte C'));
        $show->field('RCCM', __('RCCM'));
        $show->field('Direction 1 nom et prenoms', __('Direction 1 nom et prenoms'));
        $show->field('Direction 2 nom et prenoms', __('Direction 2 nom et prenoms'));
        $show->field('Direction 3 nom et prenoms', __('Direction 3 nom et prenoms'));
        $show->field('Direction 1 Contact', __('Direction 1 Contact'));
        $show->field('Direction 2 Contact', __('Direction 2 Contact'));
        $show->field('Direction 3 Contact', __('Direction 3 Contact'));
        $show->field('Adresse', __('Adresse'));
        $show->field('Ville', __('Ville'));
        $show->field('Commune', __('Commune'));
        $show->field('Quartier', __('Quartier'));
        $show->field('Rue', __('Rue'));
        $show->field('Zone', __('Zone'));
        $show->field('Autre', __('Autre'));
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
        $form = new Form(new Client());

        $form->text('Nom', __('Nom'));
        $form->text('Telephone', __('Telephone'));
        $form->text('Contact', __('Contact'));
        $form->email('Email', __('Email'));
        $form->text('Compte C', __('Compte C'));
        $form->text('RCCM', __('RCCM'));
        $form->text('Direction 1 nom et prenoms', __('Direction 1 nom et prenoms'));
        $form->text('Direction 2 nom et prenoms', __('Direction 2 nom et prenoms'));
        $form->text('Direction 3 nom et prenoms', __('Direction 3 nom et prenoms'));
        $form->text('Direction 1 Contact', __('Direction 1 Contact'));
        $form->text('Direction 2 Contact', __('Direction 2 Contact'));
        $form->text('Direction 3 Contact', __('Direction 3 Contact'));
        $form->text('Adresse', __('Adresse'));
        $form->text('Ville', __('Ville'));
        $form->text('Commune', __('Commune'));
        $form->text('Quartier', __('Quartier'));
        $form->text('Rue', __('Rue'));
        $form->text('Zone', __('Zone'));
        $form->textarea('Autre', __('Autre'));

        return $form;
    }
}
