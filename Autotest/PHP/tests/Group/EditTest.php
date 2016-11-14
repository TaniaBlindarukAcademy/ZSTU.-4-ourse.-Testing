<?php
/**
 * Created by tania.
 * Date: 29.10.16
 * Time: 22:04
 * @corporation Maksi
 */

class EditTest extends \PHPUnit_Extensions_Selenium2TestCase{
    protected function setUp()
    {
        $this->setBrowser("firefox");
        $this->setBrowserUrl("http://test.local/group.php");
    }

    protected function scenario(Group_Model_Group $group)
    {
        $this->openGroupList();
        $this->goToCreateGroup();
        $this->fieldForm($group);
        $this->sendForm();

        $this->assertRegExp('/A new group has been entered into the address book./',
            $this->byCssSelector('#content .msgbox')->text());
    }

    protected function openGroupList(){

    }

    public function screenshot($file)
    {
        $filedata = $this->currentScreenshot();
        file_put_contents($file, $filedata);
    }
}