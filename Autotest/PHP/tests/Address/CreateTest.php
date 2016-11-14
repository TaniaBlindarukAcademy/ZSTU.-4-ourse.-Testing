<?php
/**
 * Created by tania.
 * Date: 19.10.16
 * Time: 11:01
 * @corporation Maksi
 */

//require_once 'src/Group/Model/Group.php';

/**
 * Class Group_Create_Test
 */
class Group_Address_Test extends \PHPUnit_Extensions_Selenium2TestCase
{
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

    protected function openGroupList()
    {
        $this->url("http://test.local/group.php");

        $this->assertEquals('Groups | Address Book',$this->title());

        $this->screenshotInFolder();
    }

    protected function goToCreateGroup()
    {
        $submitLink = $this->byCssSelector('input[type="submit"]');
        $submitLink->click();

        $this->screenshotInFolder();
    }

    protected function fieldForm(Group_Model_Group $group)
    {
        $groupName = $this->byCssSelector('#content > form:nth-child(2) > input:nth-child(2)');
        $groupName->value($group->getName());

        $groupHeader = $this->byCssSelector('#content > form:nth-child(2) > textarea:nth-child(5)');
        $groupHeader->value($group->getHeader());

        $groupFooter = $this->byCssSelector('#content > form:nth-child(2) > textarea:nth-child(8)');
        $groupFooter->value($group->getFooter());

        $this->screenshotInFolder();
    }

    protected function sendForm()
    {
        $this->byCssSelector('#content > form:nth-child(2) > input:nth-child(11)')->click();

        $this->screenshotInFolder();
    }

    public function testRandomField()
    {
        $group = new Group_Model_Group();
        $group->setName('Group Name' . rand(0, 100))
            ->setHeader('Group Header' . rand(0, 100))
            ->setFooter('Group Footer' . rand(0, 100));
        $this->scenario($group);
    }

    public function screenshotInFolder()
    {
        $file = __DIR__ . '/' . __CLASS__ . '::' . $this->getName() . '-' . time() . rand(0, 100) . '.png';
        $this->screenshot($file);
    }

    public function screenshot($file)
    {
        $filedata = $this->currentScreenshot();
        file_put_contents($file, $filedata);
    }

}