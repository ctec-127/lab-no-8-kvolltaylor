	<!-- headings -->
    <div class="row">
		<div class="col-12">
			<h1 class="text-center font-weight-bold text-uppercase my-4 py-4 border-5">Temperature Converter</h1>
		</div>
	</div>
		<div class="row">
			<div class="d-none d-lg-block mx-auto">
				<div class="mx-auto mb-4">
					<div class="border-3 px-5">
						<div class="border-3 px-4">
							<div class="border-3 px-4">
								<div class="border-3 px-3">
									<div class="border-3 px-2">
										<div class="border-3 px-1">
											<h3 class="text-center font-weight-light mt-1 border-3 px-3">CTEC 127 - PHP with SQL 1</h3>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- row with jumbotron and conversion form -->
		<div class="row">
			<!-- jumbotron -->
			<div class="col-xl-6 col-lg-5 col-md-6 d-none d-md-block">
				<div class="jumbotron pt-4 pb-4 border-5">
					<h4>This form will convert any temperture!</h4>
					<div class="row">
						<div class="col-6">
							<img src="img/thumbsup.jpg" class="img-fluid border-5b" alt="Hand giving a thumb's up">
						</div>
						<div class="col-6 pt-3">
							<p>Whether it's Fahrenheit, Celsius, or Kelvin you need, this form has you covered!</p>
							<p>Just enter the temperature you need converted & choose your scales!</p>
						</div>
					</div>
				</div> <!-- end div for jumbotron -->
			</div> <!-- end div for columns -->

			<!-- form for conversions -->
			<div class="col-xl-6 col-lg-7 col-md-12 col-sm-12 border-5b px-4 pt-4 pb-0 mb-4">
					<!-- CHECK IF SET -->
					<?php require "inc/check.inc.php" ?>
				<form method="POST" class="" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
				<div class="row group p-2 float-right pt-4 pb-4">
					<div class="col-3">
						<label class="pr-2 lead" for="originaltemp">Temperature:</label>
					</div>
					<div class="col-3">
						<!-- CHECK TO SEE IF VALUE HAS BEEN SET
						IF VALUE HAS BEEN SET ECHO BACK THAT VALUE -->
						<input class="form-control" value="<?php if (isset($_POST['originaltemp'])) {echo $_POST['originaltemp'];}?>" name="originaltemp" size="14" maxlength="7" id="originaltemp">
					</div>
					<div class="col-5 form-group">
					<select name="originalunit" class="form-control">
					<!-- CHECK TO SEE IF VALUE HAS BEEN SET -->
					<?php if (isset($_POST['originalunit'])) {$originalUnit = $_POST['originalunit'];} else {$originalUnit = '';} ?>
						<!-- IF VALUE HAS BEEN SET ECHO BACK THAT VALUE -->
						<option value="--Select--" <?php if($originalUnit == "--Select--") echo 'selected="selected"';?>>--Select--</option>
						<option value="celsius" <?php if($originalUnit == "celsius") echo 'selected="selected"';?>>Celsius</option>
						<option value="fahrenheit" <?php if($originalUnit == "fahrenheit") echo 'selected="selected"';?>>Farenheit</option>
						<option value="kelvin" <?php if($originalUnit == "kelvin") echo 'selected="selected"';?>>Kelvin</option>
					</select>
					</div>
				</div>
				<br /><br />
				<div class="row group p-2 float-right pt-4 pb-2">
					<div class="col-3 col-xs-3">
						<label class="pr-2 lead" for="convertedtemp">Converted:&nbsp;&nbsp;&nbsp;&nbsp;</label>
					</div>
					<div class="col-3 col-xs-2">
						<input class="form-control" value="<?php if (isset($convertedTemp)) {echo $convertedTemp;} else {echo " ";}?>" name="convertedtemp" size="14" maxlength="7" id="convertedtemp" readonly>
					</div>
					<div class="col-5 col-xs-2 form-group">
						<select name="conversionunit" class="form-control">
							<!-- CHECK TO SEE IF VALUE HAS BEEN SET -->
							<?php if (isset($_POST['conversionunit'])) {$conversionUnit = $_POST['conversionunit'];} else {$conversionUnit = '';} ?>
							<!-- IF VALUE HAS BEEN SET ECHO BACK THAT VALUE -->
							<option value="--Select--" <?php if($conversionUnit == "--Select--") echo 'selected="selected"';?>>--Select--</option>
							<option value="celsius" <?php if($conversionUnit == "celsius") echo 'selected="selected"';?>>Celsius</option>
							<option value="fahrenheit" <?php if($conversionUnit == "fahrenheit") echo 'selected="selected"';?>>Farenheit</option>
							<option value="kelvin" <?php if($conversionUnit == "kelvin") echo 'selected="selected"';?>>Kelvin</option>
						</select>
					</div>
				</div>
				<br /><br /><br /><br />
				<div class="row pulldownright">
						<div class="group col-xs-4 mt-4 pt-2">
							<button class="btn btn-outline-success my-2 my-sm-0 my-md-0 my-lg-0" type="submit">Convert!</button>
						</div>
				</div>
				</form>
			</div> <!-- end div for form columns-->

		</div> <!-- end div for row with jumbotron and conversion form -->
        
        <!-- row with formulas and scale info -->
		<div class="row">
			<!-- begin div with formula table -->
			<div class="col-lg-6 col-md-12">
                <div class="table">
                    <table class="table table-striped table-sm p-5 border-5">
                        <thead class="table-success">
                            <tr>
                            <th scope="col">Scales</th>
                            <th scope="col">Formula</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Celsius to Fahrenheit</td>
                                <td>T(°C) × 9/5 + 32</td>
                            </tr>
                            <tr>
                                <td>Celsius to Kelvin</td>
                                <td>T(°C) + 273.15</td>
                            </tr>
                            <tr>
                                <td>Fahrenheit to Celsius</td>
                                <td>(T(°F) - 32) × 5/9</td>
                            </tr>
                            <tr>
                                <td>Fahrenheit to Kelvin</td>
                                <td>(T(°F) + 459.67)× 5/9</td>
                            </tr>
                            <tr>
                                <td>Kelvin to Fahrenheit</td>
                                <td>T(K) × 9/5 - 459.67</td>
                            </tr>
                            <tr>
                                <td>Kelvin to Celsius</td>
                                <td>T(K) - 273.15</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
			</div> <!-- end div with formula table -->
			<!-- div with scale info -->
			<div class="col-lg-6 col-md-12 border-5 p-4 d-none d-sm-block">
				<h4>A Wee Bit About the People Behind the Scales</h4>
				<div class="row alert-info py-2 mb-2">
						<div class="col-3">
							<img src="img/celsius.jpg" class="rounded-circle" alt="Anders Celsius">
						</div>
						<div class="col-9">
						<p>The Celsius scale was created by Anders Celsius a Swedish astronomer, physicist and mathematician, who was born in Uppsala‎, Sweden in 1701.</p>
						</div>
				</div>
				<div class="row alert-success py-2 mb-2">
					<div class="col-3">
						<img src="img/fahrenheit.jpg" class="rounded-circle" alt="Daniel Fahrenheit">
					</div>
					<div class="col-9">
						<p>The Fahrenheit scale was created by Daniel Gabriel Fahrenheit FRS, a Dutch-German-Polish physicist, inventor, and scientific instrument maker, who was born in Danzig/Gdańsk in 1686.</p>
					</div>
				</div>
				<div class="row alert-info py-2">
					<div class="col-3">
						<img src="img/kelvin.jpg" class="rounded-circle" alt="William Thomson">
					</div>
					<div class="col-9">
					<p>The Kelvin scale was created by William Thomson, 1st Baron Kelvin, a Scots-Irish mathematical physicist and engineer who was born in Belfast in 1824.</p>
					</div>
				</div>
			</div> <!-- end div with scale info -->
		</div> <!--end div for row with formulas and scale info-->