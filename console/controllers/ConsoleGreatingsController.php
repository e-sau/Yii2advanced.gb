<?php

namespace console\controllers;

use yii\console\Controller;

/**
 * ConsoleGreatings controller
 */
class ConsoleGreatingsController extends Controller
{
    /**
     * Displays HelloWorld.
     */
    public function actionIndex()
    {
        echo "Hello, World!";
    }
}