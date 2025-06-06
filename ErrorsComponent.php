<?php

namespace Apps\Fintech\Components\Errors;

use System\Base\BaseComponent;

class ErrorsComponent extends BaseComponent
{
    public function beforeExecuteRoute()
    {
        $this->view->setViewsDir($this->modules->views->getPhalconViewPath());

        parent::beforeExecuteRoute();
    }

    public function controllerNotFoundAction()
    {
        $this->view->pick('common/errors/controllernotfound');

        $this->addResponse('Component Not Found', 1);
    }

    public function controllerPackageDependencyErrorAction()
    {
        $this->view->pick('common/errors/controllerdependencyerror');

        $this->addResponse('Component Dependency Error', 1);
    }

    public function controllerViewDependencyErrorAction()
    {
        $this->view->pick('common/errors/controllerdependencyerror');

        $this->addResponse('Component Dependency Error', 1);
    }

    public function appPackagePermissionDeniedAction()
    {
        $this->view->pick('common/errors/controllerdependencyerror');

        $this->addResponse('Component Dependency Error', 1);
    }

    public function appComponentPermissionDeniedAction()
    {
        $this->view->pick('common/errors/controllerdependencyerror');

        $this->addResponse('Component Dependency Error', 1);
    }

    public function actionNotFoundAction()
    {
        $this->view->pick('common/errors/actionnotfound');

        $this->addResponse('Component Action Not Found', 1);
    }

    public function templateErrorAction()
    {
        $this->view->pick('common/errors/templateerror');

        $this->addResponse('Template For Component Not Found', 1);
    }

    public function routeNotFoundAction()
    {
        $this->view->pick('common/errors/routenotfound');

        $this->addResponse('Route Not Found', 1);
    }

    public function idNotFoundAction()
    {
        $this->view->pick('common/errors/idnotfound');

        $this->addResponse('Id Not Found', 1);
    }

    public function permissionDeniedAction()
    {
        $this->view->pick('common/errors/permissiondenied');

        $this->addResponse('Permission denied, contact administrator!', 1);
    }

    public function serverErrorAction()
    {
        $this->view->pick('common/errors/servererror');

        $this->addResponse('Server Error, contact administrator!', 1);
    }

    public function invalidDataAction(...$params)
    {
        $this->view->pick('common/errors/servererror');

        $this->addResponse('Invalid data provided. Error: ' . $params[0], 1);
    }
}