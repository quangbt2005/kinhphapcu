<?php /* Smarty version 2.6.20, created on 2011-04-29 03:57:22
         compiled from index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'nl2br', 'index.tpl', 33, false),array('function', 'textpad', 'index.tpl', 34, false),)), $this); ?>
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
        <?php $_from = $this->_tpl_vars['Pham']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pham']):
?>
        <tr>
          <td style="padding: 4px 0px 4px 5px"><b><?php echo $this->_tpl_vars['pham']['id']; ?>
. </b><a href="index.php?id=<?php echo $this->_tpl_vars['pham']['id']; ?>
"><b><?php echo $this->_tpl_vars['pham']['ten_pham']; ?>
</b></a></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
      </table>
    </td>
    <td>
      <?php if ($this->_tpl_vars['Cau'] != null): ?>
      <table cellpadding="0" cellspacing="0" border="0">
        <?php $_from = $this->_tpl_vars['Cau']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cau']):
?>
        <tr>
          <td nowrap valign="top" style="padding-left: 30px;padding-bottom: 10px;color: blue;font-weight: bold;font-size: 15pt" width="290"><?php echo breakline2br(array('value' => $this->_tpl_vars['cau']['text']), $this);?>
</td>
          <td style="padding-bottom: 40px;"><img src="images/DS<?php echo textpad(array('text' => $this->_tpl_vars['cau']['image'],'length' => 3), $this);?>
.jpg" width="320" height="320"></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
        <?php if ($this->_tpl_vars['GhiChu'] != ''): ?>
        <tr>
          <td colspan="2"><b>Ghi Chú</b></td>
        </tr>
        <tr>
          <td>
            <?php $_from = $this->_tpl_vars['GhiChu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ghichu']):
?>
            [<?php echo $this->_tpl_vars['ghichu']['thutu']; ?>
]: <?php echo $this->_tpl_vars['ghichu']['noidung']; ?>
<br />
            <?php endforeach; endif; unset($_from); ?>
          </td>
        </tr>
        <?php endif; ?>
      </table>
      <?php else: ?>
      &nbsp;
      <?php endif; ?>
    </td>
  </tr>
</table>
</div>
</body>
</html>