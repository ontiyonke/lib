<?php
$nick = htmlspecialchars($_POST['pseudo']);
$pass = htmlspecialchars($_POST['parol']);

$link = mysql_connect('localhost', 'antony', 'stolen')
  or die('Could not connect: ' . mysql_error());
//echo 'Connected successfully';
mysql_select_db('store') or die('Could not select database');

// Performing SQL query
$query = "SELECT pass FROM clients WHERE nick = '$nick' ";
mysql_query ("set character_set_client='cp1251'"); 
mysql_query ("set character_set_results='cp1251'"); 
mysql_query ("set collation_connection='cp1251_general_ci'");
$result = mysql_query($query) or die ('Query failed: ' . mysql_error());

// Printing results in HTML
mysql_query ("set character_set_client='cp1251'"); 
mysql_query ("set character_set_results='cp1251'"); 
mysql_query ("set collation_connection='cp1251_general_ci'");
$num_rows = mysql_num_rows($result);
mysql_query ("set character_set_client='cp1251'"); 
mysql_query ("set character_set_results='cp1251'"); 
mysql_query ("set collation_connection='cp1251_general_ci'");
mysql_close($link);
//if ($num_rows == 0) {
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <title>E-da.com.ua - �������� �� ���</title>
  <link rel="SHORTCUT ICON" href="images/favicon.ico">
  <link href="css/styles.css" rel="stylesheet" type="text/css">
  <meta http-equiv="Content-Type"
 content="text/html;charset=windows-1251">
  <meta name="description" content="�����������">
  <meta name="keywords" content="� e-da.com.ua. �������� �� �������">
</head>
<body
 onload="if( self.parent.frames.length != 0 ) self.parent.location = document.location"
 bottommargin="0" topmargin="0" rightmargin="0" leftmargin="0"
 style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
<small> </small>
<table class="head_grad"
 style="width: 100%; height: 4%; background-color: rgb(255, 204, 153); text-align: left; margin-left: auto; margin-right: auto; font-family: Helvetica,Arial,sans-serif;"
 border="3" cellpadding="0" cellspacing="0">
  <tbody>
    <tr align="center">
      <td class="menu_razdel"
 style="width: 15%; background-color: rgb(228, 136, 37);"><small><span
 class="menu_link"><a href="apology.html">�������<br>
      </a></span></small></td>
      <td style="background-color: rgb(250, 134, 7);"><small>&nbsp;</small></td>
      <td class="menu_razdel"
 style="width: 15%; background-color: rgb(228, 136, 37);"><small><span
 class="menu_link"><a href="apology.html">�������<br>
      </a></span></small></td>
      <td style="background-color: rgb(223, 143, 56);"><small>&nbsp;</small></td>
      <td class="menu_razdel"
 style="width: 15%; background-color: rgb(214, 151, 83);"><small><span
 class="menu_link"><a href="apology.html">������</a></span></small></td>
      <td style="background-color: rgb(214, 151, 83);"><small>&nbsp;</small></td>
      <td class="menu_razdel"
 style="width: 15%; background-color: rgb(205, 155, 102);"><small><span
 class="menu_link"><a href="apology.html">������</a></span></small></td>
      <td style="background-color: rgb(205, 155, 102);"><small>&nbsp;</small></td>
      <td class="menu_razdel"
 style="width: 15%; background-color: rgb(212, 170, 128);"><small><span
 class="menu_link"><a href="AboutUs.html">� ���<br>
      </a></span></small></td>
      <td style="background-color: rgb(212, 170, 128);"><small>&nbsp;</small></td>
      <td class="menu_razdel" width="15%"><small><span class="menu_link"><a
 href="apology.html">��������������</a></span></small></td>
    </tr>
  </tbody>
</table>
<small> </small><small> </small><small> </small><small> </small><small>
</small><small> </small><small> </small>
<table
 style="width: 100%; height: 40px; font-family: Helvetica,Arial,sans-serif;"
 border="0" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td><small> <br>
      </small></td>
      <td class="small_white_text"
 style="text-align: center; background-color: rgb(226, 177, 55); color: rgb(0, 102, 0);"><big>E-da.com.ua
- ����� � ��������
��������� �� ���, � ����, �� ����</big><small><br>
      </small></td>
      <td class="text"
 style="vertical-align: bottom; text-align: center; background-color: rgb(137, 196, 69); color: rgb(153, 51, 0); width: 40%;"><small><span
 style=""><span style="color: rgb(0, 0, 0);"></span><span
 style="color: rgb(0, 0, 0);"></span> </span><br>
      <br>
      </small></td>
    </tr>
  </tbody>
</table>
<table
 style="font-family: Helvetica,Arial,sans-serif; background-color: rgb(220, 220, 122); width: 100%;"
 border="0" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td style="padding: 0px 0px 0px 22px;" valign="top" width="175"><!-- main menu table --><small><br>
      </small>
      <div style="border: 1px solid rgb(232, 219, 63);" align="center"><small><a
 href="apology.html"><b>�������� <br>
��� ������������ ��������������</b></a><br>
&nbsp;</small></div>
      <small> <br>
      <br>
      <span style="color: rgb(153, 51, 0);">����</span><br
 style="color: rgb(153, 51, 0);">
      <span style="color: rgb(153, 51, 0);">��������:<br>
      <br style="color: rgb(153, 51, 0);">
      </span>
      <table class="sectoring" style="margin: 5px 0px;">
        <tbody>
          <tr>
            <td><img
 style="border: 0px solid ; width: 39px; height: 36px;"
 src="images/Ub1small.gif" alt=""></td>
            <td style="padding-left: 5px;"><span class="mainCategory"><a><br>
            </a></span></td>
          </tr>
        </tbody>
      </table>
      <br>
      <table class="sectoring" style="margin: 5px 0px;">
        <tbody>
          <tr>
            <td><img
 style="border: 0px solid ; width: 45px; height: 36px;"
 src="images/Ub2small.gif" alt=""></td>
            <td style="padding-left: 5px;"><span class="mainCategory"><a><br>
            </a></span></td>
          </tr>
        </tbody>
      </table>
      <br>
      <table class="sectoring" style="margin: 5px 0px;">
        <tbody>
          <tr>
            <td><img
 style="border: 0px solid ; width: 36px; height: 36px;"
 src="images/Ubdark.gif" alt=""></td>
            <td style="padding-left: 5px;"><span class="mainCategory"><a><br>
            </a></span></td>
          </tr>
        </tbody>
      </table>
      <br>
      <table class="sectoring" style="margin: 5px 0px;">
        <tbody>
          <tr>
            <td><img
 style="border: 0px solid ; width: 39px; height: 36px;"
 src="images/UbTogether.gif" alt=""></td>
            <td style="padding-left: 5px;"><span class="mainCategory"><a><br>
            </a></span></td>
          </tr>
        </tbody>
      </table>
      <br>
      <table class="sectoring" style="margin: 5px 0px;">
        <tbody>
          <tr>
            <td><img
 style="border: 0px solid ; width: 37px; height: 36px;"
 src="images/UbTogether1.gif" alt=""></td>
            <td style="padding-left: 5px;"><span class="mainCategory"><a><br>
            </a></span></td>
          </tr>
        </tbody>
      </table>
      <br>
      </small></td>
      <td style="padding: 0px 22px;" class="text" valign="top"><small> </small>
      <small> </small><small> </small><small> </small><small> </small><small>
      </small> <small> </small>
      <table style="width: 100%;">
        <tbody>
          <tr>
            <th style="background-color: rgb(210, 196, 60);"><small> </small>
            <small> </small>
            <?php
            $link = mysql_connect('localhost', 'antony', 'stolen')
  or die('Could not connect: ' . mysql_error());
//echo 'Connected successfully';
mysql_select_db('store') or die('Could not select database');
             if ($num_rows!=0) {
             $query = "SELECT name FROM clients WHERE nick = '$nick' ";
             mysql_query ("set character_set_client='cp1251'"); 
mysql_query ("set character_set_results='cp1251'"); 
mysql_query ("set collation_connection='cp1251_general_ci'");
$result = mysql_query($query) or die ('Query failed: ' . mysql_error());
$name = mysql_fetch_array($result);
            echo '����������� ����, ', $name[0];}
            else echo '��������� ��� ������
������� �����������!', $nick;
?><br>
            </th>
          </tr>
        </tbody>
      </table>
      <div style="text-align: center;"><br>
      <?php
      if ($num_rows!=0){
      echo '����, ������ ��������� ������ ��������� �������.<br>';
     echo "<form action=", $PHP_SELF, 'method=\"post\"> <br>
        <br>
        <table style=\"text-align: center; width: 50%;\" border=\"0\"
 cellpadding=\"2\" cellspacing=\"2\">
          <tbody>
            <tr>
              <td style=\"text-align: center;\" bgcolor=\"#CDCD4B\"> <font
 face=\"Arial\" size=\"2\">������� �����-��� : </font></td>
              <td style=\"text-align: center;\"><input name=\"meal_global_code\"
 size=\"13\" maxlength=\"13\" type=\"text\"></td>
            </tr>
          </tbody>
        </table>
        <br>
        <br>
        <p><input value=\"���������!\" type=\"submit\"></p>
        <small> </small></form>';
        echo '
����� 13-�� ������� �����-���, ��������� �� ��������, ����� �����
������� "���������". ��� �������� ���������� �� ������������ ������������ ����� ����������
� ������� ���� �� ������ �����.<br>';}
?>
      <br>
      <br>
      <br>
����� ����� <big><span style="color: rgb(0, 153, 0);">��� ����</span></big>
� ����� ���� ������!<br>
������� �� ���������� ��������, � ����� �����-��� ������� ������.<br>
      <br>
      <br>
      <big><span style="color: rgb(51, 102, 102);">���� ����� ���������
� ���� ���� ������ �������!</span></big><br>
������� ������������ �����, ������������ �� ����������� ����� �
�������� ������� ����������.<br>
      <big>����������, ���� ����������!</big><br>
�� ��������� ����� �� ������� "���������".<br>
      <br>
      <br>
      <big><big>������� �� ���������� �������� � ������� ���������
�������������.</big></big><br>
      <small> </small></div>
      </td>
    </tr>
  </tbody>
</table>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
  <tbody>
    <tr>
      <td class="tovar_m text"><small><br>
      <br>
      </small>
      <table class="text" border="0" cellpadding="0" cellspacing="0"
 width="100%">
        <tbody>
          <tr>
            <td style="text-align: center;"><small> e-mail: <a
 href="mailto:info@e-da.com.ua">info@e-da.com.ua</a><br>
200<span style="font-weight: bold;">7</span>-2008 � e-da.com.ua �������
            </small></td>
            <td> <small> </small><br>
            </td>
          </tr>
        </tbody>
      </table>
      <small> </small></td>
    </tr>
  </tbody>
</table>
<small> <br>
<br>
</small>
</body>
</html>