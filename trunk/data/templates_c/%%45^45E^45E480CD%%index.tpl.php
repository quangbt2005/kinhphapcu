<?php /* Smarty version 2.6.20, created on 2011-04-28 04:41:03
         compiled from index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'nl2br', 'index.tpl', 26, false),array('function', 'textpad', 'index.tpl', 27, false),)), $this); ?>
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
        <?php $_from = $this->_tpl_vars['Pham']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pham']):
?>
        <tr>
          <td><a href="index.php?id=<?php echo $this->_tpl_vars['pham']['id']; ?>
"><?php echo $this->_tpl_vars['pham']['ten_pham']; ?>
</a></td>
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
          <td valign="top" style="padding-left: 30px;padding-bottom: 10px;color: blue;font-weight: bold;font-size: 15pt" width="250"><?php echo breakline2br(array('value' => $this->_tpl_vars['cau']['text']), $this);?>
</td>
          <td style="padding-bottom: 10px;"><img src="images/DS<?php echo textpad(array('text' => $this->_tpl_vars['cau']['image'],'length' => 3), $this);?>
.jpg" width="280" height="280"></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?>
      </table>
      <?php else: ?>
      &nbsp;
      <?php endif; ?>
    </td>
  </tr>
</table>
</body>
</html>