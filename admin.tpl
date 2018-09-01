<div class="titrePage">
  <h2>{'pfi_h2'|@translate}</h2>
</div>
{if isset ($pfi)}
  {if isset ($ICO)}
	<div style="text-align:left; padding:20px;">
		{'pfi_actu'|@translate} <img class="thumbnail" src="{$ICO}"><br><br>
		{'pfi_actu2'|@translate}
	</div>
  {/if}	
		<form method="post" enctype="multipart/form-data" onsubmit="return(confirm('{'pfi_validdef'|@translate}'));">
			<fieldset>
				<legend>{'pfi_select'|@translate}</legend>
					<input class="file" name="pfi" type="file" value="">
		<br>	
		<br>
			<div>
				<input class="submit" name="submitpfi" type="submit" value="{'pfi_envoie'|@translate}" {$TAG_INPUT_ENABLED} />
			</div>
			</fieldset>
		</form>
{/if}
{if isset ($help)}
  <fieldset>
    <legend>{'pfi_aide1T'|@translate}</legend>
    <div style="text-align:left;padding:10px;">{'pfi_aide1'|@translate}</div>
  </fieldset>
  {if $ENABLE_SYNCHRONIZATION}
	<fieldset>
	  <legend>FTP</legend>
	  <div style="text-align:left;padding:10px;">{'pfi_aide2'|@translate}</div>
	</fieldset>
  {/if}
{/if}
