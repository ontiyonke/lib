<?php
session_start();
// �������, ������� ����� �������������� � ������. 

$chars="�����������12�45�79������124�579����������12�45�79"; 

// ���������� �������� � ������. 

$max=6; 

// ���������� ���������� �������� � $chars 

$size=StrLen($chars)-1; 

// ���������� ������ ����������, � ������� � ����� ���������� �������. 

$password=null; 

// ������ ������. 

    while($max--) 
    $password.=$chars[rand(0,$size)];
    $_SESSION['password'] = $password;
    ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <title>E-da.com.ua - �������� �� ���</title>
  <link rel="SHORTCUT ICON" href="images/favicon.ico">
  <link href="css/styles.css" rel="stylesheet" type="text/css">
  <meta http-equiv="Content-Type"
 content="text/html;charset=windows-1251">
  <meta name="description" content="����������� ��������� �����������">
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
 class="menu_link"></span></small><br>
      </td>
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
      </small> <small> <br>
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
            <th style="background-color: rgb(210, 196, 60);">���
�����������, ��� ������ ����������, ��������� ������������ ���� �����:<br>
            </th>
          </tr>
        </tbody>
      </table>
      <div style="text-align: center;"><br>
      <form action="Runner_Valid.php" method="post">
        <table class="text" style="text-align: center; width: 100%;"
 border="1" cellpadding="2" cellspacing="2">
          <tbody>
            <tr>
              <td>&nbsp;���� ��� � ����� ������� (��������� ���,
������� ����� � ��� ����������, <br>
��������, ���� ��������):<br>
&nbsp;<input maxlength="15" size="15" class="inputbox"  value="
<?php
echo $_SESSION['name'];
?>
"name="name"><br>
              </td>
            </tr>
            <tr>
              <td>&nbsp;��� ��� �� ����� ����� (����� ��� �����):<br>
&nbsp;<input maxlength="10" size="10" class="inputbox"  value="
<?php
echo $_SESSION['nick'];
?>
"name="nick"><br>
              </td>
            </tr>
            <tr>
              <td>&nbsp;������ ��� ����� �� ��� ����, ��� ����������:<br>
              <big style="color: rgb(153, 51, 153);"><?php echo $password;
              ?></big><br>
              </td>
            </tr>
            <tr>
              <td>&nbsp;����������� ������:<br>
&nbsp;<input maxlength="6" size="6" class="inputbox"  value="
<?php
echo $_SESSION['password1'];
?>
"name="password1"><br>
              </td>
            </tr>
            <tr>
              <td>&nbsp;����� ������ ����������� ��������:<br>
&nbsp;
              <select name="operator" size="1"
 onchange="chan(this.selectedIndex);">
              <option value="8066">Jeans(066)</option>
              <option value="8095">Jeans(095)</option>
              <option value="8099">Jeans(099)</option>
              <option value="8068">������(068)</option>
              <option value="8067">��������(067)</option>
              <option value="8097">��������(097)</option>
              <option value="8096">��������(096)</option>
              <option value="8050">UMC(050)</option>
              </select>
              <input name="phonenum" size="7" maxlength="7" type="text"><br>
              </td>
            </tr>
            <tr>
              <td>&nbsp;�����, � ������� �� ������ ��������:<br>
&nbsp;<input maxlength="15" size="15" class="inputbox" value="
<?php
echo $_SESSION['town'];
?>
"
name="town"><br>
              </td>
            </tr>
            <tr>
              <td>&nbsp;�������, � ������� �� ������ ��������� �������
���������� �� ������:<br>
&nbsp;
              <select name="streettype" size="1"
 onchange="chan(this.selectedIndex);">
              <option value="�����">�����</option>
              <option value="��������">��������</option>
              <option value="��������">��������</option>
              <option value="�������">�������</option>
              </select>
              <input name="street" size="25" maxlength="25" value="
<?php
echo $_SESSION['street'];
?>
"
type="text"></td>
            </tr>
            <tr>
              <td>&nbsp;��� �<br>
&nbsp;<input maxlength="3" size="3" class="inputbox" value="
<?php
echo $_SESSION['buildno'];
?>
"
 name="buildno"><br>
              </td>
            </tr>
            <tr>
              <td>&nbsp;�������� ��������:<br>
&nbsp;<input maxlength="15" size="15" class="inputbox" value="
<?php
echo $_SESSION['store_name'];
?>
"
name="store_name"><br>
              </td>
            </tr>
          </tbody>
        </table>
        <input src="images/okblue.gif" alt="Send It In!"
 align="absmiddle" height="20" type="image" width="30"> </form>
      <br>
�����������������<br>
      <br>
�����<br>
      <br>
      <br>
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
