<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Coursier;

class CoursierController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Coursier';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Coursier());

        $grid->column('id', __('Id'));
        $grid->column('Zone', __('Zone'));
        $grid->column('Code', __('Code'));
        $grid->column('Nom et prenoms', __('Nom et prenoms'));
        $grid->column('Contact', __('Contact'));
        $grid->column('Date de naissance', __('Date de naissance'));
        $grid->column('Date de debut', __('Date de debut'));
        $grid->column('Date de fin', __('Date de fin'));
        $grid->column('Numero de CNI', __('Numero de CNI'));
        $grid->column('Date de peremption CNI', __('Date de peremption CNI'));
        $grid->column('Numero permis', __('Numero permis'));
        $grid->column('Date de peremption CMU', __('Date de peremption CMU'));
        $grid->column('Categorie', __('Categorie'));
        $grid->column('Numero CMU', __('Numero CMU'));
        $grid->column('Date de peremption', __('Date de peremption'));
        $grid->column('Groupe sanguin', __('Groupe sanguin'));
        $grid->column('Habitat', __('Habitat'));
        $grid->column('Nom cas urgence', __('Nom cas urgence'));
        $grid->column('Contact Urgence', __('Contact Urgence'));
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
        $show = new Show(Coursier::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('Zone', __('Zone'));
        $show->field('Code', __('Code'));
        $show->field('Nom et prenoms', __('Nom et prenoms'));
        $show->field('Contact', __('Contact'));
        $show->field('Date de naissance', __('Date de naissance'));
        $show->field('Date de debut', __('Date de debut'));
        $show->field('Date de fin', __('Date de fin'));
        $show->field('Numero de CNI', __('Numero de CNI'));
        $show->field('Date de peremption CNI', __('Date de peremption CNI'));
        $show->field('Numero permis', __('Numero permis'));
        $show->field('Date de peremption CMU', __('Date de peremption CMU'));
        $show->field('Categorie', __('Categorie'));
        $show->field('Numero CMU', __('Numero CMU'));
        $show->field('Date de peremption', __('Date de peremption'));
        $show->field('Groupe sanguin', __('Groupe sanguin'));
        $show->field('Habitat', __('Habitat'));
        $show->field('Nom cas urgence', __('Nom cas urgence'));
        $show->field('Contact Urgence', __('Contact Urgence'));
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
        $form = new Form(new Coursier());

        $form->text('Zone', __('Zone'));
        $form->text('Code', __('Code'));
        $form->text('Nom et prenoms', __('Nom et prenoms'));
        $form->text('Contact', __('Contact'));
        $form->date('Date de naissance', __('Date de naissance'))->default(date('Y-m-d'));
        $form->date('Date de debut', __('Date de debut'))->default(date('Y-m-d'));
        $form->date('Date de fin', __('Date de fin'))->default(date('Y-m-d'));
        $form->text('Numero de CNI', __('Numero de CNI'));
        $form->date('Date de peremption CNI', __('Date de peremption CNI'))->default(date('Y-m-d'));
        $form->text('Numero permis', __('Numero permis'));
        $form->date('Date de peremption CMU', __('Date de peremption CMU'))->default(date('Y-m-d'));
        $form->text('Categorie', __('Categorie'));
        $form->text('Numero CMU', __('Numero CMU'));
        $form->date('Date de peremption', __('Date de peremption'))->default(date('Y-m-d'));
        $form->text('Groupe sanguin', __('Groupe sanguin'));
        $form->text('Habitat', __('Habitat'));
        $form->text('Nom cas urgence', __('Nom cas urgence'));
        $form->text('Contact Urgence', __('Contact Urgence'));

        return $form;
    }
}
