<?php

/**
 * Created by tania.
 * Date: 30.10.16
 * Time: 18:29
 * @corporation Maksi
 */
abstract class TestAbstract extends \PHPUnit_Extensions_Selenium2TestCase
{

    public function screenshotInFolder()
    {
        $file = __DIR__ . '/' . get_class($this) . '::' . $this->getName() . '-' . time() . rand(0, 100) . '.png';
        $this->screenshot($file);
    }

    public function screenshot($file)
    {
        $filedata = $this->currentScreenshot();
        file_put_contents($file, $filedata);
    }

}

;