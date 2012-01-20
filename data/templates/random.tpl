<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="robots" content="noindex" />
  <meta name="description" content="{$Cau[0].text|replace:'"':''|replace:' ;':', '}" />
  <title>Kinh Phap Cu</title>
</head>
<body>
<div style="margin: 0px auto;text-align: center;padding: auto;background-color: transparent;">
<table id="bigtable" cellpadding="0" cellspacing="0" border="0" width="1024" align="center">
  <tr>
    <td colspan="2" align="center" style="padding:24px;">
      <span style="font-size: 24pt"><b>KINH PHÁP CÚ</b></span><br />
      <i>"Treasury of Truth" (Kho-Báu của Sự-Thật)</i><br />
    </td>
  </tr>
  <tr>
    <td colspan="2" align="right">Việt dịch: Hòa Thượng Thích Minh Châu<br />
      Họa sĩ: Mr. P. Wickramanayaka (vẽ theo bản tiếng Anh mà HT Thích Minh Châu dịch)<br />
      Website này dẫn ngưồn từ <a href="http://www.adidaphat.info">www.adidaphat.info</a><br />&nbsp;
    </td>
  </tr>
  <tr>
    <td width="250" valign="top" style="background-color: rgb(181,228,254);border-top: 1px solid #cccccc;border-left: 1px solid #cccccc;border-bottom: 1px solid #cccccc">
      <table cellpadding="0" cellspacing="0" border="0" width="100%">
        {foreach from=$Pham item=pham}
        <tr>
          <td style="padding: 4px 0px 4px 5px"><b>{$pham.id}. </b><a href="index.php?id={$pham.id}"><b>{$pham.ten_pham}</b></a></td>
        </tr>
        {/foreach}
      </table>
    </td>
    <td style="padding-left: 5px;border: 1px solid #cccccc" valign="top">
      {if $Cau != null}
      <table cellpadding="0" cellspacing="0" border="0">
        {foreach from=$Cau item=cau key=key}
        {if ($smarty.request.title != '0' && $cau.pham != '')}
        <tr>
          <td colspan="2" align="center" style="padding-top: 10px;"><span style="color: red;font-weight: bold;font-size:18pt;">{$cau.pham}. {$cau.ten_pham}</span><br />&nbsp;</td>
        </tr>
        {else}
        <tr>
          <td colspan="2" align="center" style="padding-top: 10px;">&nbsp;</td>
        </tr>
        {/if}
        <tr>
          <td nowrap valign="top" style="padding-left: 30px;padding-bottom: 10px;color: blue;font-weight: bold;font-size: 15pt" width="290">{nl2br value=$cau.text}</td>
          <td style="padding-bottom: 40px;"><img src="images/DS{textpad text=$cau.image length=3}.jpg" width="320" height="320"></td>
        </tr>
        {if $GhiChu[$cau.id] != null}
        <tr>
          <td colspan="2" style="padding-left: 40px;"><b>Ghi Chú</b></td>
        </tr>
        <tr>
          <td style="padding-left: 40px;">
            {foreach from=$GhiChu[$cau.id] item=ghichu}
            [{$ghichu.thutu}]: {$ghichu.noidung}<br />
            {/foreach}
          </td>
        </tr>
        {/if}
        {/foreach}
        <tr>
          <td colspan="2" align="right" style="padding: 20px 0px"><table style="border-right: 1px solid #cccccc;border-bottom: 1px solid #cccccc" border="0" cellpadding="0" cellspacing="0">
            <tr>
              {foreach from=$Pham item=pham}
              <td align="center" style="border-left: 1px solid #cccccc;border-top: 1px solid #cccccc;padding:2px 0px;width:20px;font-size:8pt;font-family:arial;background-color:rgb(181,228,254)"><a style="text-decoration: none" href="index.php?id={$pham.id}" title="{$pham.ten_pham}"><b>{$pham.id}</b></a></td>
              {/foreach}
            </tr>
          </table></td>
        </tr>
      </table>
      {else}
      &nbsp;
      {/if}
    </td>
  </tr>
</table>
</div>
</body>
</html>