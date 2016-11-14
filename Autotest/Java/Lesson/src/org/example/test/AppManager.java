package org.example.test;

import org.openqa.*;
import com.thoughtworks.selenium.*;

import junit.framework.Assert;

import java.util.Random;
import java.util.regex.Pattern;

import java.util.regex.Pattern;
import java.util.concurrent.TimeUnit;
import org.junit.*;
import static org.junit.Assert.*;
//import static org.hamcrest.CoreMatchers.*;
import org.openqa.selenium.*;
import org.openqa.selenium.firefox.FirefoxDriver;
import org.openqa.selenium.support.ui.Select;

@SuppressWarnings("deprecation")
public class AppManager extends SeleneseTestCase {

    public void setUp() throws Exception {
        setUp("http://test.local", "*firefox");
    }

    public void openMainPage(){
        selenium.open("/index.php");
        selenium.waitForPageToLoad("300000");
        
    }

    public void openGroupPage(){
        selenium.click("link=groups");
        selenium.waitForPageToLoad("3000000");
    }

    private void clickDeleteGroupBtn() {
        selenium.click("name=delete");
    }

    private void selectAllCheckboxes(int count) {
        for (int i=1; i<count + 1;i++){
            selenium.click("xpath=(//input[@name='selected[]'])[" + i + "]");
        }
    }

    private int getAllCheckboxes() {
        return  selenium.getXpathCount("//input[@type='checkbox']").intValue();
    }

    public void initGroupCreation(){
        selenium.click("name=new");
        selenium.waitForPageToLoad("3000000");
    }

    private void returnToGroupList() {
        selenium.click("link=groups");
        selenium.waitForPageToLoad("3000000");
    }

    private void submitCreation() {
        selenium.click("name=submit");
        selenium.waitForPageToLoad("3000000");
    }

    private void fillForm(GroupData group) {
        selenium.type("name=group_name", group.groupName);
        selenium.type("name=group_header", group.groupHeader);
        selenium.type("name=group_footer", group.groupFooter);
    }

    private void clickUpdateBtn() {
        selenium.click("name=update");
        selenium.waitForPageToLoad("3000000");
    }

    private void clickEditGroupBtn() {
        selenium.click("name=edit");
        selenium.waitForPageToLoad("3000000");
    }

    private void selectGroupById(String groupId) {
        selenium.click("xpath=(//input[@name='selected[]'])[" + groupId +  "]");
    }

    private void clickAddNewUserBtn() {
        selenium.click("link=add new");
        selenium.waitForPageToLoad("3000000");
    }

    private void clickEditUserBtn() {
        selenium.click("css=img[alt=\"Edit\"]");
        selenium.waitForPageToLoad("3000000");
    }

    private void getUserById(String userId) {
        selenium.click("id=" + userId);
    }

    private void clickDeleteUserBtn() {
        selenium.click("xpath=(//input[@name='update'])[2]");
        selenium.waitForPageToLoad("3000000");
    }

    private void fillForm(UserData user) {
        selenium.type("name=firstname", user.firstName);
        selenium.type("name=lastname", user.lastName);
        selenium.type("name=address",user.address);
        selenium.type("name=home", user.homePhone);
        selenium.type("name=mobile", user.mobilePhone);
        selenium.type("name=work", user.workPhone);
        selenium.type("name=email",user. email);
        selenium.type("name=email2", user.email2);
        selenium.select("name=bmonth", "label=" + user.bmonth);
        selenium.select("name=bday", "label=" + user.bday);
        selenium.type("name=byear", user.byear);
        if(user.new_group != null)
            selenium.select("name=new_group", "label=" + user.new_group);
        selenium.type("name=address2",user.address2);
        selenium.type("name=phone2", user.phone2);
    }

    /*
    public void testDeleteAllUser(){
        openMainPage();
        int count = getAllCheckboxes();
        count--;
        while (count!=0){
            openMainPage();
            clickEditUserBtn();
            clickDeleteUserBtn();
            count = getAllCheckboxes();
        }
        openMainPage();
        count = getAllCheckboxes();
        count--;
        try{
            Assert.assertEquals(0,count);
        }
        catch (AssertionError err){
            System.out.println(err);
        }
    }
    */
    
    
    /*
    public void testDeleteAllGroups(){
        openMainPage();
        openGroupPage();
        int count = getAllCheckboxes();
        selectAllCheckboxes(count);
        clickDeleteGroupBtn();
        openMainPage();
        openGroupPage();
        count = getAllCheckboxes();
        try{
            Assert.assertEquals(0,count);
        }
        catch (AssertionError err){
            System.out.println(err);
        }
    }

*/
    /*
    public void testAddGroup() throws Exception {
        Random rnd = new Random();
        //Prepare test data
        GroupData group = new GroupData();
        group.groupName="a"+rnd.nextInt();
        group.groupHeader="header"+rnd.nextInt();
        group.groupFooter ="footer"+rnd.nextInt();
        //prepare state
        openMainPage();
        openGroupPage();
        //test action
        initGroupCreation();
        fillForm(group);
        submitCreation();
        returnToGroupList();
        try{
            Assert.assertEquals(true,selenium.isTextPresent(group.groupName));
        }
        catch (AssertionError err){
            System.out.println(err);
        }
    }
    */
    
    /*
    public void testUpdateGroupId()  throws Exception {
    	updateGroup("1");
    }
    
    public void updateGroup(String groupId) throws Exception {
        Random rnd = new Random();
        //Prepare test data
        GroupData group = new GroupData();
        group.groupName="a"+rnd.nextInt();
        group.groupHeader="header"+rnd.nextInt();
        group.groupFooter ="footer"+rnd.nextInt();
        //prepare state
        openMainPage();
        openGroupPage();
        selectGroupById(groupId);
        clickEditGroupBtn();
        fillForm(group);
        clickUpdateBtn();
    }
    */
    
    
    
    /*
    public void testDeleteGroup() throws Exception{
    	deleteGroup("1");
    }

    public void deleteGroup(String groupId) throws Exception {
        openMainPage();
        openGroupPage();
	 int count1 = getAllCheckboxes();
        selectGroupById(groupId);
        clickDeleteGroupBtn();
        openMainPage();
        openGroupPage();
	int count2 = getAllCheckboxes();
	try{
            Assert.assertEquals(count2,count1-1);
        }
        catch (AssertionError err){
            System.out.println(err);
        }
    }
*/
    
    
   /*
    public void testAddUser() throws Exception {
        Random rnd = new Random();
        UserData user = new UserData(
                "firstname" + rnd.nextInt(),"Dux" + rnd.nextInt() ,"gdfhfh" + rnd.nextInt(),"543454" + rnd.nextInt(),"453454345" + rnd.nextInt(),"45343453" + rnd.nextInt(),"sf@dsf" + rnd.nextInt(),"sf@dsf","August","12","2000",null,"dgdrg rgdr rd rg r","547474"
        );
        openMainPage();
        clickAddNewUserBtn();
        fillForm(user);
        submitCreation();
        try{
            Assert.assertEquals(true,selenium.isTextPresent(user.firstName));
        }
        catch (AssertionError err){
            System.out.println(err);
        }
    }
    
    */
    
    /*
    public void testUpdateUserWithId28() throws Exception{
    	updateUser("id6");
    }
    public void updateUser(String userId) throws Exception {
        Random rnd = new Random();
        UserData user = new UserData(
                "firstname" + rnd.nextInt(),"Dux" + rnd.nextInt() ,"gdfhfh" + rnd.nextInt(),"543454" + rnd.nextInt(),"453454345" + rnd.nextInt(),"45343453" + rnd.nextInt(),"sf@dsf" + rnd.nextInt(),"sf@dsf","August","12","2000",null,"dgdrg rgdr rd rg r","547474"
        );
        openMainPage();
        getUserById(userId);
        clickEditUserBtn();
        fillForm(user);
        clickUpdateBtn();
    }
    */
   
    
    
    public void testDeleteIdWithId28() throws Exception{
    	deleteUser("id6");
    }
    public void deleteUser(String userId) throws Exception {
	
        openMainPage();
	 int count1 = getAllCheckboxes();
        getUserById(userId);
        clickEditUserBtn();
        clickDeleteUserBtn();
        openMainPage();
	int count2 = getAllCheckboxes();

	try{
            Assert.assertEquals(count2,count1-1);
        }
        catch (AssertionError err){
            System.out.println(err);
        }

    }
    
}

