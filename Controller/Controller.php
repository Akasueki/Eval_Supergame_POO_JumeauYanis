
<?php

class Controller
{
    protected $model;
    protected $view;

    public function __construct($model, $view)
    {
        $this->model = $model;
        $this->view = $view;
    }

    public function render()
    {
        $this->view->displayAll();
    }
}
