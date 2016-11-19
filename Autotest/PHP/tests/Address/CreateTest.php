<?php
/**
 * Created by tania.
 * Date: 19.10.16
 * Time: 11:01
 * @corporation Maksi
 */

require_once 'src/Address/Model/Address.php';
require_once 'src/Address/Model/Singleton.php';

/**
 * Class Group_Create_Test
 */
class Address_Create_Test extends \PHPUnit_Extensions_Selenium2TestCase
{
    protected function setUp()
    {
        $this->setBrowser("firefox");
        $this->setBrowserUrl("http://test.local/index.php");
    }

    protected function scenario($address)
    {
        $this->openAddressList();
        $this->goToCreateAddress();
        $this->fieldForm($address);
        $this->sendForm();

    }

    protected function openAddressList()
    {
        $this->url("http://test.local/index.php");
        $this->screenshotInFolder();
    }

    protected function goToCreateAddress()
    {
        $submitLink = $this->byCssSelector('#nav > ul:nth-child(1) > li:nth-child(2) > a:nth-child(1)');
        $submitLink->click();

        $this->screenshotInFolder();
    }

    protected function fieldForm($address)
    {
        $firstName = $this->byCssSelector('#content > form:nth-child(2) > input:nth-child(3)');
        $firstName->value($address->getFirstName());

        $lastName = $this->byCssSelector('#content > form:nth-child(2) > input:nth-child(6)');
        $lastName->value($address->getLastName());

        $email = $this->byCssSelector('#content > form:nth-child(2) > input:nth-child(27)');
        $email->value($address->getEmail());

        $mobile = $this->byCssSelector('#content > form:nth-child(2) > input:nth-child(18)');
        $mobile->value($address->getMobile());

        $this->screenshotInFolder();


    }

    protected function sendForm()
    {
        $this->byCssSelector('#content > form:nth-child(2) > input:nth-child(52)')->click();

        $this->screenshotInFolder();
    }

    public function testRandomField()
    {
        /**var $address Address_Model_Address*/
        $address = Address_Model_Singleton::getModel();
        $address->setFirstName('First Name' . rand(0, 100))
            ->setLastName('Last Name' . rand(0, 100))
            ->setAddress('Address' . rand(0, 100))
            ->setHome('Home' . rand(0, 100))
            ->setMobile(rand(10000000000, 9999999999))
            ->setWork('Work' . rand(0, 100))
            ->setEmail('email' . rand(0, 100) . '@gmail.com')
            ->setEmail2('email2' . rand(0, 100) . '@gmail.com');

        var_dump($address);
        $this->scenario($address);
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