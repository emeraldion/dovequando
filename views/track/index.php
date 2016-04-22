<?php
  $this->set_title('Dovequando - Tracking');
?>
<script type="text/javascript">
/*<![CDATA[*/
  function selectAll() {
    var chks = getObj("frm").elements['id[]'],
      tocheck = (getObj("frm").elements['selectall'].value == "Seleziona tutti");
    for (var i = 0; i < chks.length; i++) {
      chks[i].checked = tocheck;
    }
    getObj("frm").elements['selectall'].value = tocheck ? "Deseleziona tutti" : "Seleziona tutti";
  }

  function submitIfPossible(sel)
  {
    if ($(sel).val())
    {
      var len = $('input[type=checkbox]').filter(function(){return this.checked;}).length;
      if (len < 1)
      {
        alert('Selezionare almeno un elemento!');
        sel.selectedIndex = 0;
        return;
      }
      else if (len > 20)
      {
        sel.form.method = 'post';
      }
      sel.form.submit();
    }
  }
/*]]>*/
</script>
<div class="header">Tracking</div>
<?php
  // $this->render(array('partial' => 'filter_form'));
?>
<form id="frm" action="<?php //echo $this->url_to(array('controller' => 'dispatcher', 'action' => 'manage')); ?>" method="get">
  <table class="search-controls" width="100%" cellpadding="0" cellspacing="0" border="0">
    <tr>
      <td class="nobreak">
        <label for="f_do">Se selezionati:</label>
      </td>
      <td>
        <?php
          echo select('do',
            array('' => 'Scegli una azione...'),
            '',
            array('id' => 'f_do',
              'onchange' => 'submitIfPossible(this)'));
        ?>
      </td>
      <td align="right" width="100%">
        <input type="button" name="selectall" onclick="selectAll()" value="Seleziona tutti" />
        <input type="submit" name="track:add" value="Aggiungi Tracking" />
      </td>
    </tr>
  </table>
<?php
  if (count($this->raccomandate) > 0)
  {
?>
  <table width="100%" class="crystal" cellpadding="0" cellspacing="0" border="0">
    <?php
        $this->render(array('partial' => 'header'));

        foreach ($this->raccomandate as $raccomandata)
        {
          $this->render(array('partial' => 'raccomandata', 'object' => $raccomandata));
        }

        $this->render(array('partial' => 'header'));
    ?>
  </table>
<?php
  }
  else
  {
?>
  <div class="notice">Nessun risultato per i parametri specificati</div>
<?php
  }
?>
</form>
