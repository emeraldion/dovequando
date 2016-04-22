<tr class="">
	<td class="cell10"><input type="checkbox" name="id[]" value="<?php echo h($raccomandata->id); ?>" /></td>
	<td class="cell10">
    <?php print $raccomandata->codice; ?>
	</td>
	<td class="cell10">
    <?php print $raccomandata->pretty_date(); ?>
	</td>
</tr>
