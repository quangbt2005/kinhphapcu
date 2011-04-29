<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="robots" content="noindex" />
  <title>Kinh Phap Cu</title>
</head>
<body>
<table id="bigtable" cellpadding="0" cellspacing="0" border="0" width="1024">
  <tr>
    <td width="400" valign="top">
      <table cellpadding="0" cellspacing="0" border="0" width="100%">
        {foreach from=$Pham item=pham}
        <tr>
          <td><a href="index.php?id={$pham.id}">{$pham.ten_pham}</a></td>
        </tr>
        {/foreach}
      </table>
    </td>
    <td>
      {if $Cau != null}
      <table cellpadding="0" cellspacing="0" border="0">
        {foreach from=$Cau item=cau}
        <tr>
          <td valign="top" style="padding-left: 30px;padding-bottom: 10px;color: blue;font-weight: bold;font-size: 15pt" width="250">{nl2br value=$cau.text}</td>
          <td style="padding-bottom: 10px;"><img src="images/DS{textpad text=$cau.image length=3}.jpg" width="280" height="280"></td>
        </tr>
        {/foreach}
      </table>
      {else}
      &nbsp;
      {/if}
    </td>
  </tr>
</table>
</body>
</html>