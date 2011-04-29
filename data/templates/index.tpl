<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="robots" content="noindex" />
  <title>Kinh Phap Cu</title>
</head>
<body>
<div style="margin: 0px auto;text-align: center;padding: auto;background-color: transparent;">
<table id="bigtable" cellpadding="0" cellspacing="0" border="0" width="1024" align="center">
  <tr>
    <td colspan="2" align="center" style="padding:24px;">
      <span style="font-size: 24pt"><b>KINH PHÁP CÚ</b></span><br />
      Việt dịch: Hòa Thượng Thích Minh Châu<br />
      Họa sĩ: Mr. P. Wickramanayaka (vẽ theo bản tiếng Anh mà HT Thích Minh Châu dịch)
    </td>
  </tr>
  <tr>
    <td width="250" valign="top" style="background-color: rgb(181,228,254)">
      <table cellpadding="0" cellspacing="0" border="0" width="100%">
        {foreach from=$Pham item=pham}
        <tr>
          <td style="padding: 4px 0px 4px 5px"><b>{$pham.id}. </b><a href="index.php?id={$pham.id}"><b>{$pham.ten_pham}</b></a></td>
        </tr>
        {/foreach}
      </table>
    </td>
    <td>
      {if $Cau != null}
      <table cellpadding="0" cellspacing="0" border="0">
        {foreach from=$Cau item=cau}
        <tr>
          <td nowrap valign="top" style="padding-left: 30px;padding-bottom: 10px;color: blue;font-weight: bold;font-size: 15pt" width="290">{nl2br value=$cau.text}</td>
          <td style="padding-bottom: 40px;"><img src="images/DS{textpad text=$cau.image length=3}.jpg" width="320" height="320"></td>
        </tr>
        {/foreach}
        {if $GhiChu != ''}
        <tr>
          <td colspan="2"><b>Ghi Chú</b></td>
        </tr>
        <tr>
          <td>
            {foreach from=$GhiChu item=ghichu}
            [{$ghichu.thutu}]: {$ghichu.noidung}<br />
            {/foreach}
          </td>
        </tr>
        {/if}
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