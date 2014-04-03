<div class="transports form">
<form>
<input type= "radio" name="moyen" value="velo"> Velô
<input type= "radio" name="moyen" value="bus"> Bus
<input type= "radio" name="moyen" value="metro"> Metro
<input type= "radio" name="moyen" value="peuimporte"> Peu importe
</form>

<?php echo $this->Form->create('Transports');?>
<label>Station : </label> 
<select>
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select>
<label>Destination : </label> 
<select>
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select> 
<label>Destination : </label> 
<select>
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select>

<div class="control-group">
							  <label class="control-label" for="typeahead">Auto complete </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
								<p class="help-block">Start typing to activate auto complete!</p>
							  </div>
							</div>

<button type="submit" class="ok">Chercher</button> 
</form>
</div>