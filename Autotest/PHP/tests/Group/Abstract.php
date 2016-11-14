<?php
/**
 * Created by tania.
 * Date: 30.10.16
 * Time: 18:33
 * @corporation Maksi
 */

require_once 'tests/TestAbstract.php';

class Group_Abstract_Test extends  TestAbstract{

    protected function openGroupList()
    {
        $this->url("http://test.local/group.php");

        $this->assertEquals('Groups | Address Book', $this->title());

        $this->screenshotInFolder();
    }
}