<div class="TTWForm-container">


<?php $attributes = array('class' => 'TTWForm');
echo form_open('',$attributes); ?>


<div id="field1-container" class="field f_100">
<label for="field1">
username
</label>
<input name="field1" id="field1" required="required" type="text">
</div>


<div id="field2-container" class="field f_100">
<label for="field2">
password
</label>
<input name="field2" id="field2" required="required" type="text">
</div>


<div id="form-submit" class="field f_100 clearfix submit">
<input value="Submit" type="submit">
</div>
</form>
<?php echo form_close(); ?>
</div>
<div style="clear:both;"></div>
