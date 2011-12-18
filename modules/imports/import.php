<?php
/*********************************************************************************

** The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
* 
 ********************************************************************************/

require_once 'Excel/reader.php';
require_once('database/DatabaseConnection.php');

global $data;
global $options;

$data = new Spreadsheet_Excel_Reader();

$data->setOutputEncoding('CP1251');
$filename;
$uploaddir = $_SERVER['DOCUMENT_ROOT'] ."/test/upload/" ;// set this to wherever
//copy the file to some permanent location




if ($HTTP_POST_VARS['submit']) 
{
  // print_r($HTTP_POST_FILES);
  if (!is_uploaded_file($HTTP_POST_FILES['userfile']['tmp_name'])) 
  {
    $error = "Invalid file input!";
    echo $error;
    include "fetchfile.php";
    //unlink($HTTP_POST_FILES['userfile']['tmp_name']);
  }
  else
  {
    /*
    $maxfilesize=20480;
    
    if ($HTTP_POST_FILES['userfile']['size'] > $maxfilesize) 
    {
      $error = "Kindly give a smaller file";
      echo $error;
      include "fetchfile.php";
      unlink($HTTP_POST_FILES['userfile']['tmp_name']);
    }
    */
    
    if ($HTTP_POST_FILES['userfile']['type'] != "application/vnd.ms-excel")   // AND $HTTP_POST_FILES['userfile']['type'] != "image/jpeg")
        
    {
      $error = "This file type is not allowed";
      echo $error;
      include "fetchfile.php";
      unlink($HTTP_POST_FILES['userfile']['tmp_name']);
    }
    else
    {
      if(move_uploaded_file($_FILES["userfile"]["tmp_name"],$uploaddir.$_FILES["userfile"]["name"]))
      { 
        $binFile = $_FILES['userfile']['name'];
        $filename = $uploaddir.basename($binFile);
        
        $data->read($filename);
        function checkForExistingValues()
          {
            $sql3 = "select * from headers";
            $result4 = mysql_query($sql3);
            $countval = mysql_num_rows($result4);
            return $countval;
          }
        
        $testval = checkForExistingValues();
        if($testval == 0)
        {
          for ($i = 1; $i<2; $i++) 
          {
            for ($j = 1; $j <= $data->sheets[0]['numCols']; $j++) 
            {
              $value = $data->sheets[0]['cells'][$i][$j];
              $sql = "INSERT INTO headers(headernames) VALUES ('$value')";
              $result = mysql_query($sql);
            }
          }
        }

        $sql = "select * from headers";
        $result = mysql_query($sql);
        $counter=1;
        while ($row=mysql_fetch_array($result))
        {
          $counter;
          $id=$row["headernames"];
          $options.="<OPTION VALUE=\"$counter\">".$id;
          $counter++;
        }
          ?>

          <html>
             <body>

             <form method="post" action="index.php?module=imports&action=result&filename=<?=$filename?>" onsubmit="VtigerJS_DialogBox.block();">
             <table border="0" cellpadding="2" cellspacing="2">
             <tr> 
             <td nowrap>
             <div align="right">First Name:</div></td>
             <td><SELECT NAME="First_Name">>
             <?=$options?>
             </SELECT></td>
             <td nowrap>
             <div align="right">Phone:</div></td>
             <td> <SELECT NAME="Phone">
             <OPTION>None 
             <?=$options?>
             </SELECT> </td>
             </tr>
             <tr> 
             <td nowrap>
             <div align="right">Last Name:</div></td>
             <td> <SELECT NAME="Last_Name">
             <OPTION>None 
             <?=$options?>
             </SELECT> </td>
             <td nowrap>
             <div align="right">Mobile:</div></td>
             <td><SELECT NAME="Mobile">
             <OPTION>None 
             <?=$options?>
             </SELECT></td>
             </tr>
             <tr> 
             <td nowrap>
             <div align="right">Company:</div></td>
             <td><SELECT NAME="Company">
             <OPTION>None 
             <?=$options?>
             </SELECT></td>
             <td nowrap>
             <div align="right">Fax:</div></td>
             <td> <SELECT NAME="Fax">
             <OPTION>None 
             <?=$options?>
             </SELECT> </td>
             </tr>
             <tr> 
             <td nowrap>
             <div align="right">Designation:</div></td>
             <td> <SELECT NAME="Designation">
             <OPTION>None 
             <?=$options?>
             </SELECT> </td>
             <td nowrap>
             <div align="right">Email:</div></td>
             <td><SELECT NAME="Email">
             <OPTION>None 
             <?=$options?>
             </SELECT></td>
             </tr>
             <tr> 
             <td nowrap>
             <div align="right">LeadSource:</div></td>
             <td> <SELECT NAME="LeadSource">
             <OPTION>None 
             <?=$options?>
             </SELECT> </td>
             <td nowrap>
             <div align="right">Website:</div></td>
             <td><SELECT NAME="Website">
             <OPTION>None 
             <?=$options?>
             </SELECT></td>
             </tr>
             <tr> 
             <td nowrap>
             <div align="right">Industry:</div></td>
             <td><SELECT NAME="Industry">
             <OPTION>None 
             <?=$options?>
             </SELECT></td>
             <td nowrap>
             <div align="right">LeadStatus:</div></td>
             <td> <SELECT NAME="LeadStatus">
             <OPTION>None 
             <?=$options?>
             </SELECT> </td>
             </tr>
             <tr> 
             <td nowrap>
             <div align="right">Annual Revenue:</div></td>
             <td><SELECT NAME="Annual_Revenue">
             <OPTION>None 
             <?=$options?>
             </SELECT></td>
             <td nowrap>
             <div align="right">Rating:</div></td>
             <td> <SELECT NAME="Rating">
             <OPTION>None 
             <?=$options?>
             </SELECT> </td>
             </tr>
             <tr> 
             <td nowrap>
             <div align="right">License Key: </div></td>
             <td><SELECT NAME="License_Key">
             <OPTION>None 
             <?=$options?>
             </SELECT></td>
             <td nowrap>
             <div align="right">No. of Employees:</div></td>
             <td> <SELECT NAME="Number_of_Employees">
             <OPTION>None 
             <?=$options?>
             </SELECT> </td>
             </tr>
             <tr> 
             <td nowrap>
             <div align="right">Assigned To: </div></td>
             <td><SELECT NAME="Assigned_To">
             <OPTION>None 
             <?=$options?>
             </SELECT></td>
             <td nowrap>
             <div align="right">Secondary Email:</div></td>
             <td> <SELECT NAME="Secondary_Email">
             <OPTION>None 
             <?=$options?>
             </SELECT> </td>
             </tr>
             <tr> 
             <td nowrap>
             <div align="right">Street:</div></td>
             <td><SELECT NAME="Street">
             <OPTION>None 
             <?=$options?>
             </SELECT></td>
             <td nowrap>
             <div align="right">Postal Code:</div></td>
             <td> <SELECT NAME="Postal_Code">
             <OPTION>None 
             <?=$options?>
             </SELECT> </td>
             </tr>
             <tr> 
             <td nowrap>
             <div align="right">City:</div></td>
             <td><SELECT NAME="City">
             <OPTION>None 
             <?=$options?>
             </SELECT></td>
             <td nowrap>
             <div align="right">Country:</div></td>
             <td> <SELECT NAME="Country">
             <OPTION>None 
             <?=$options?>
             </SELECT> </td>
             </tr>
             <tr> 
             <td nowrap>
             <div align="right">Stage:</div></td>
             <td><SELECT NAME="Stage">
             <OPTION>None 
             <?=$options?>
             </SELECT></td>
             <td nowrap>
             <div align="right">Description:</div></td>
             <td><SELECT NAME="Description">
             <OPTION>None 
             <?=$options?>
             </SELECT> </td>
             </tr>
             <tr> 
             <td>&nbsp;</td>
                           <td>&nbsp;</td>
                                         <td>&nbsp;</td>
                                                       <td>&nbsp;</td>
                                                                     </tr>
                                                                     <tr> 
                                                                     <td colspan="4"><div align="center">
                                                                     <input type="Submit" name="submit2" value="Submit">
                                                                     </div></td>
                                                                     </tr>
                                                                     </table>
                                                                     </form>


                                                                     </body>
                                                                     </html>

                                                                     <?php

                    
                                                                     // unlink($HTTP_POST_FILES['file']['tmp_name']);
        // print "File has been successfully uploaded!";
      }
    }
    
  }
}
