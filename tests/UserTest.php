<?php

/**
 * Created by PhpStorm.
 * User: yds
 * Date: 2016-5-26
 * Time: 12:13
 */
class UserTest extends \Illuminate\Foundation\Testing\TestCase
{

    protected $baseUrl = 'http://localhost:80/public/index.php?';
    protected $userName = '3901120414';
    protected $userPass = '123456';

    /**
     * Creates the application.
     *
     * Needs to be implemented by subclasses.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernelInterface
     */
    public function createApplication()
    {
        $app = require $this->baseUrl.$this->userName.'&'.$this->userPass;

        $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

        return $app;
    }
}