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
        $grid->column('Nom Sociéte', __('Nom Sociéte'));
        $grid->column('Telephone', __('Telephone'));
        $grid->column('Cellulaire', __('Cellulaire'));
        $grid->column('Email', __('Email'));
        $grid->column('Compte Contribuable', __('Compte Contribuable'));
        $grid->column('RCCM', __('RCCM'));
        $grid->column('Direction 1 Nom et prenoms', __('Direction 1 Nom et prenoms'));
        $grid->column('Direction 2 Nom et prenoms', __('Direction 2 Nom et prenoms'));
        $grid->column('Direction 3 Nom et prenoms', __('Direction 3 Nom et prenoms'));
        $grid->column('Direction 1 contact', __('Direction 1 contact'));
        $grid->column('Direction 2 contact', __('Direction 2 contact'));
        $grid->column('Direction 3 contact', __('Direction 3 contact'));
        $grid->column('Adresse', __('Adresse'));
        $grid->column('Ville', __('Ville'));
        $grid->column('Commune', __('Commune'));
        $grid->column('Quartier', __('Quartier'));
        $grid->column('Rue', __('Rue'));
        $grid->column('Zone', __('Zone'));
        $grid->column('Autre(Preciser votre position geographique', __('Autre(Preciser votre position geographique'));
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
        $show = new Show(Client::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('Nom Sociéte', __('Nom Sociéte'));
        $show->field('Telephone', __('Telephone'));
        $show->field('Cellulaire', __('Cellulaire'));
        $show->field('Email', __('Email'));
        $show->field('Compte Contribuable', __('Compte Contribuable'));
        $show->field('RCCM', __('RCCM'));
        $show->field('Direction 1 Nom et prenoms', __('Direction 1 Nom et prenoms'));
        $show->field('Direction 2 Nom et prenoms', __('Direction 2 Nom et prenoms'));
        $show->field('Direction 3 Nom et prenoms', __('Direction 3 Nom et prenoms'));
        $show->field('Direction 1 contact', __('Direction 1 contact'));
        $show->field('Direction 2 contact', __('Direction 2 contact'));
        $show->field('Direction 3 contact', __('Direction 3 contact'));
        $show->field('Adresse', __('Adresse'));
        $show->field('Ville', __('Ville'));
        $show->field('Commune', __('Commune'));
        $show->field('Quartier', __('Quartier'));
        $show->field('Rue', __('Rue'));
        $show->field('Zone', __('Zone'));
        $show->field('Autre(Preciser votre position geographique', __('Autre(Preciser votre position geographique'));
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
        $form = new Form(new Client());

        $form->text('Nom Sociéte', __('Nom Sociéte'));
        $form->text('Telephone', __('Telephone'));
        $form->text('Cellulaire', __('Cellulaire'));
        $form->email('Email', __('Email'));
        $form->text('Compte Contribuable', __('Compte Contribuable'))->default('0000000-X');
        $form->text('RCCM', __('RCCM'));
        $form->text('Direction 1 Nom et prenoms', __('Direction 1 Nom et prenoms'));
        $form->text('Direction 2 Nom et prenoms', __('Direction 2 Nom et prenoms'));
        $form->text('Direction 3 Nom et prenoms', __('Direction 3 Nom et prenoms'));
        $form->text('Direction 1 contact', __('Direction 1 contact'));
        $form->text('Direction 2 contact', __('Direction 2 contact'));
        $form->text('Direction 3 contact', __('Direction 3 contact'));
        $form->text('Adresse', __('Adresse'));
        $form->text('Ville', __('Ville'));
        $form->text('Commune', __('Commune'));
        $form->text('Quartier', __('Quartier'));
        $form->text('Rue', __('Rue'));
        $form->text('Zone', __('Zone'));
        $form->textarea('Autre(Preciser votre position geographique', __('Autre(Preciser votre position geographique'));

        return $form;
    }
}
