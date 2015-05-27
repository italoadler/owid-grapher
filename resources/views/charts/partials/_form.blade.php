<div id="form-view" class="col-sm-12 col-md-6 form-wrapper">
	<div class="form-wrapper-inner">
		{!! Form::open( array( 'method' => $method ) ) !!}
			<div class="nav-tabs-custom">
				<ul class="nav nav-tabs no-bullets">
					<li class="active">
						<a href="#basic-tab" data-toggle="tab" aria-expanded="false">Basic</a>
					</li>
					<li>
						<a href="#axis-tab" data-toggle="tab" aria-expanded="false">Axis</a>
					</li>
					<li>
						<a href="#description-tab" data-toggle="tab" aria-expanded="false">Description</a>
					</li>
					<li>
						<a href="#styling-tab" data-toggle="tab" aria-expanded="false">Styling</a>
					</li>
					<li>
						<a href="#export-tab" data-toggle="tab" aria-expanded="false">Export</a>
					</li>
				</ul>
			</div>
			<div class="tab-content">
				<div id="basic-tab" class="tab-pane active">
				<section class="form-section">
					<div class="form-section-header">
						<h2><span class="form-section-digit">1</span>Name your chart</h2>
					</div>
					<div class="form-section-content">
						<input class="form-control input-lg .col-xs-12" placeholder="Chart name" type="text" name="chart-name" value=""/>
					</div>
				</section>
				<section class="form-section chart-type-section">
					<div class="form-section-header">
						<h2><span class="form-section-digit">2</span>What type of chart</h2>
					</div>
					<div class="form-section-content">
						<select name="chart-type" class="form-control chart-type-select">
							<option value="" disabled selected>Select type</option>
							@foreach( $data->chartTypes as $chartTypeId=>$chartTypeName )
								<option value="{{ $chartTypeId }}">{{ $chartTypeName }}</option>
							@endforeach
						</select>
					</div>
				</section>
				<section class="form-section add-data-section">
					<div class="form-section-header">
						<h2><span class="form-section-digit">3</span>Add your data</h2>
						<a href="#" class="add-data-btn"><i class="fa fa-plus"></i>Add variable</a>
					</div>
					<div class="form-section-content">
						<div class="dd">
							<ol class="dd-list no-bullets">

							</ol>
						</div>
					</div>
					<!--<div class="form-section-content">
						<p class="form-section-desc">Or choose CSV file from your computer with data to chart. Each country data should be in their own colum,time should it be first column, otherwise it's not gonna work.</p>
						<div class="file-picker-wrapper">
							<input type="file" />
							<a href="#" title="Remove uploaded file" class="remove-uploaded-file-btn"><span class="visuallyhidden">Remove uploaded file</span><i class="fa fa-remove"></i></a>
						</div>
					</div>-->
				</section>
				<section class="form-section dimensions-section">
					<div class="form-section-header">
						<h2><span class="form-section-digit">3</span>Map your dimensions</h2>
					</div>
					<div class="form-section-content">
						
					</div>
					<input type="hidden" name="chart-dimensions" value="" />
				</section>
				<section class="form-section">
					<div class="form-section-header">
						<h2><span class="form-section-digit">3</span>Pick your countries</h2>
					</div>
					<div class="form-section-content">
						<p class="form-section-desc">Select countries from drop down below. You can set countries colors by clicking on the country label itself.</p>
						<ul class="selected-countries-box no-bullets">

						</ul>
						<select class="form-control chosen-select countries-select" data-placeholder="Choose a Country...">
							<option value=""></option>
							<option value="World">World</option>
							<option value="United States">United States</option>
							<option value="United Kingdom">United Kingdom</option>
							<option value="Afghanistan">Afghanistan</option>
							<option value="Aland Islands">Aland Islands</option>
							<option value="Albania">Albania</option>
							<option value="Algeria">Algeria</option>
							<option value="American Samoa">American Samoa</option>
							<option value="Andorra">Andorra</option>
							<option value="Angola">Angola</option>
							<option value="Anguilla">Anguilla</option>
							<option value="Antarctica">Antarctica</option>
							<option value="Antigua and Barbuda">Antigua and Barbuda</option>
							<option value="Argentina">Argentina</option>
							<option value="Armenia">Armenia</option>
							<option value="Aruba">Aruba</option>
							<option value="Australia">Australia</option>
							<option value="Austria">Austria</option>
							<option value="Azerbaijan">Azerbaijan</option>
							<option value="Bahamas">Bahamas</option>
							<option value="Bahrain">Bahrain</option>
							<option value="Bangladesh">Bangladesh</option>
							<option value="Barbados">Barbados</option>
							<option value="Belarus">Belarus</option>
							<option value="Belgium">Belgium</option>
							<option value="Belize">Belize</option>
							<option value="Benin">Benin</option>
							<option value="Bermuda">Bermuda</option>
							<option value="Bhutan">Bhutan</option>
							<option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
							<option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
							<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
							<option value="Botswana">Botswana</option>
							<option value="Bouvet Island">Bouvet Island</option>
							<option value="Brazil">Brazil</option>
							<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
							<option value="Brunei Darussalam">Brunei Darussalam</option>
							<option value="Bulgaria">Bulgaria</option>
							<option value="Burkina Faso">Burkina Faso</option>
							<option value="Burundi">Burundi</option>
							<option value="Cambodia">Cambodia</option>
							<option value="Cameroon">Cameroon</option>
							<option value="Canada">Canada</option>
							<option value="Cape Verde">Cape Verde</option>
							<option value="Cayman Islands">Cayman Islands</option>
							<option value="Central African Republic">Central African Republic</option>
							<option value="Chad">Chad</option>
							<option value="Chile">Chile</option>
							<option value="China">China</option>
							<option value="Christmas Island">Christmas Island</option>
							<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
							<option value="Colombia">Colombia</option>
							<option value="Comoros">Comoros</option>
							<option value="Congo">Congo</option>
							<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
							<option value="Cook Islands">Cook Islands</option>
							<option value="Costa Rica">Costa Rica</option>
							<option value="Cote D'ivoire">Cote D'ivoire</option>
							<option value="Croatia">Croatia</option>
							<option value="Cuba">Cuba</option>
							<option value="Curacao">Curacao</option>
							<option value="Cyprus">Cyprus</option>
							<option value="Czech Republic">Czech Republic</option>
							<option value="Denmark">Denmark</option>
							<option value="Djibouti">Djibouti</option>
							<option value="Dominica">Dominica</option>
							<option value="Dominican Republic">Dominican Republic</option>
							<option value="Ecuador">Ecuador</option>
							<option value="Egypt">Egypt</option>
							<option value="El Salvador">El Salvador</option>
							<option value="Equatorial Guinea">Equatorial Guinea</option>
							<option value="Eritrea">Eritrea</option>
							<option value="Estonia">Estonia</option>
							<option value="Ethiopia">Ethiopia</option>
							<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
							<option value="Faroe Islands">Faroe Islands</option>
							<option value="Fiji">Fiji</option>
							<option value="Finland">Finland</option>
							<option value="France">France</option>
							<option value="French Guiana">French Guiana</option>
							<option value="French Polynesia">French Polynesia</option>
							<option value="French Southern Territories">French Southern Territories</option>
							<option value="Gabon">Gabon</option>
							<option value="Gambia">Gambia</option>
							<option value="Georgia">Georgia</option>
							<option value="Germany">Germany</option>
							<option value="Ghana">Ghana</option>
							<option value="Gibraltar">Gibraltar</option>
							<option value="Greece">Greece</option>
							<option value="Greenland">Greenland</option>
							<option value="Grenada">Grenada</option>
							<option value="Guadeloupe">Guadeloupe</option>
							<option value="Guam">Guam</option>
							<option value="Guatemala">Guatemala</option>
							<option value="Guernsey">Guernsey</option>
							<option value="Guinea">Guinea</option>
							<option value="Guinea-bissau">Guinea-bissau</option>
							<option value="Guyana">Guyana</option>
							<option value="Haiti">Haiti</option>
							<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
							<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
							<option value="Honduras">Honduras</option>
							<option value="Hong Kong">Hong Kong</option>
							<option value="Hungary">Hungary</option>
							<option value="Iceland">Iceland</option>
							<option value="India">India</option>
							<option value="Indonesia">Indonesia</option>
							<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
							<option value="Iraq">Iraq</option>
							<option value="Ireland">Ireland</option>
							<option value="Isle of Man">Isle of Man</option>
							<option value="Israel">Israel</option>
							<option value="Italy">Italy</option>
							<option value="Jamaica">Jamaica</option>
							<option value="Japan">Japan</option>
							<option value="Jersey">Jersey</option>
							<option value="Jordan">Jordan</option>
							<option value="Kazakhstan">Kazakhstan</option>
							<option value="Kenya">Kenya</option>
							<option value="Kiribati">Kiribati</option>
							<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
							<option value="Korea, Republic of">Korea, Republic of</option>
							<option value="Kuwait">Kuwait</option>
							<option value="Kyrgyzstan">Kyrgyzstan</option>
							<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
							<option value="Latvia">Latvia</option>
							<option value="Lebanon">Lebanon</option>
							<option value="Lesotho">Lesotho</option>
							<option value="Liberia">Liberia</option>
							<option value="Libya">Libya</option>
							<option value="Liechtenstein">Liechtenstein</option>
							<option value="Lithuania">Lithuania</option>
							<option value="Luxembourg">Luxembourg</option>
							<option value="Macao">Macao</option>
							<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
							<option value="Madagascar">Madagascar</option>
							<option value="Malawi">Malawi</option>
							<option value="Malaysia">Malaysia</option>
							<option value="Maldives">Maldives</option>
							<option value="Mali">Mali</option>
							<option value="Malta">Malta</option>
							<option value="Marshall Islands">Marshall Islands</option>
							<option value="Martinique">Martinique</option>
							<option value="Mauritania">Mauritania</option>
							<option value="Mauritius">Mauritius</option>
							<option value="Mayotte">Mayotte</option>
							<option value="Mexico">Mexico</option>
							<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
							<option value="Moldova, Republic of">Moldova, Republic of</option>
							<option value="Monaco">Monaco</option>
							<option value="Mongolia">Mongolia</option>
							<option value="Montenegro">Montenegro</option>
							<option value="Montserrat">Montserrat</option>
							<option value="Morocco">Morocco</option>
							<option value="Mozambique">Mozambique</option>
							<option value="Myanmar">Myanmar</option>
							<option value="Namibia">Namibia</option>
							<option value="Nauru">Nauru</option>
							<option value="Nepal">Nepal</option>
							<option value="Netherlands">Netherlands</option>
							<option value="New Caledonia">New Caledonia</option>
							<option value="New Zealand">New Zealand</option>
							<option value="Nicaragua">Nicaragua</option>
							<option value="Niger">Niger</option>
							<option value="Nigeria">Nigeria</option>
							<option value="Niue">Niue</option>
							<option value="Norfolk Island">Norfolk Island</option>
							<option value="Northern Mariana Islands">Northern Mariana Islands</option>
							<option value="Norway">Norway</option>
							<option value="Oman">Oman</option>
							<option value="Pakistan">Pakistan</option>
							<option value="Palau">Palau</option>
							<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
							<option value="Panama">Panama</option>
							<option value="Papua New Guinea">Papua New Guinea</option>
							<option value="Paraguay">Paraguay</option>
							<option value="Peru">Peru</option>
							<option value="Philippines">Philippines</option>
							<option value="Pitcairn">Pitcairn</option>
							<option value="Poland">Poland</option>
							<option value="Portugal">Portugal</option>
							<option value="Puerto Rico">Puerto Rico</option>
							<option value="Qatar">Qatar</option>
							<option value="Reunion">Reunion</option>
							<option value="Romania">Romania</option>
							<option value="Russian Federation">Russian Federation</option>
							<option value="Rwanda">Rwanda</option>
							<option value="Saint Barthelemy">Saint Barthelemy</option>
							<option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
							<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
							<option value="Saint Lucia">Saint Lucia</option>
							<option value="Saint Martin (French part)">Saint Martin (French part)</option>
							<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
							<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
							<option value="Samoa">Samoa</option>
							<option value="San Marino">San Marino</option>
							<option value="Sao Tome and Principe">Sao Tome and Principe</option>
							<option value="Saudi Arabia">Saudi Arabia</option>
							<option value="Senegal">Senegal</option>
							<option value="Serbia">Serbia</option>
							<option value="Seychelles">Seychelles</option>
							<option value="Sierra Leone">Sierra Leone</option>
							<option value="Singapore">Singapore</option>
							<option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
							<option value="Slovakia">Slovakia</option>
							<option value="Slovenia">Slovenia</option>
							<option value="Solomon Islands">Solomon Islands</option>
							<option value="Somalia">Somalia</option>
							<option value="South Africa">South Africa</option>
							<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
							<option value="South Sudan">South Sudan</option>
							<option value="Spain">Spain</option>
							<option value="Sri Lanka">Sri Lanka</option>
							<option value="Sudan">Sudan</option>
							<option value="Suriname">Suriname</option>
							<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
							<option value="Swaziland">Swaziland</option>
							<option value="Sweden">Sweden</option>
							<option value="Switzerland">Switzerland</option>
							<option value="Syrian Arab Republic">Syrian Arab Republic</option>
							<option value="Taiwan, Province of China">Taiwan, Province of China</option>
							<option value="Tajikistan">Tajikistan</option>
							<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
							<option value="Thailand">Thailand</option>
							<option value="Timor-leste">Timor-leste</option>
							<option value="Togo">Togo</option>
							<option value="Tokelau">Tokelau</option>
							<option value="Tonga">Tonga</option>
							<option value="Trinidad and Tobago">Trinidad and Tobago</option>
							<option value="Tunisia">Tunisia</option>
							<option value="Turkey">Turkey</option>
							<option value="Turkmenistan">Turkmenistan</option>
							<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
							<option value="Tuvalu">Tuvalu</option>
							<option value="Uganda">Uganda</option>
							<option value="Ukraine">Ukraine</option>
							<option value="United Arab Emirates">United Arab Emirates</option>
							<option value="United Kingdom">United Kingdom</option>
							<option value="United States">United States</option>
							<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
							<option value="Uruguay">Uruguay</option>
							<option value="Uzbekistan">Uzbekistan</option>
							<option value="Vanuatu">Vanuatu</option>
							<option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
							<option value="Viet Nam">Viet Nam</option>
							<option value="Virgin Islands, British">Virgin Islands, British</option>
							<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
							<option value="Wallis and Futuna">Wallis and Futuna</option>
							<option value="Western Sahara">Western Sahara</option>
							<option value="Yemen">Yemen</option>
							<option value="Zambia">Zambia</option>
							<option value="Zimbabwe">Zimbabwe</option>
						</select>
					</div>
				</section>
				<section class="form-section">
					<div class="form-section-header">
						<h2><span class="form-section-digit">4</span>Define your time</h2>
					</div>
					<div class="form-section-content">
						<p class="form-section-desc">Using <a href="http://ionden.com/a/plugins/ion.rangeSlider/demo.html" target="_blank">Ion range slider</a> for now, not sure it's the best solution.</p>
						<input type="text" name="chart-time" value="" />
					</div>
				</section>
			</div>
			<div id="axis-tab" class="tab-pane">
				<section class="form-section">
					<div class="form-section-header">
						<h2><span class="form-section-digit">5</span>Refine your axis</h2>
					</div>
					<div class="form-section-content">
						<div class="y-section">
							<h3>Y Axis</h3>
							<div class="input-wrapper">
								<label for="chart-y-axis-label">Y-Axis Label</label>
								<input class="form-control" type="text" name="chart-y-axis-label" />
							</div>
							<div class="input-wrapper">
								<label for="chart-y-label-distance">Y-Axis Label Distance</label>
								<input class="form-control" type="text" name="chart-y-axis-label-distance" />
							</div>
							<div class="input-wrapper">
								<label for="chart-y-axis-max">Y-Axis Max</label>
								<input class="form-control" type="text" name="chart-y-axis-max" />
							</div>
							<div class="input-wrapper">
								<label for="chart-y-axis-min">Y-Axis Min (0 is default)</label>
								<input class="form-control" type="text" name="chart-y-axis-min" />
							</div>
							<div class="input-wrapper">
								<label for="chart-y-axis-prefix">Y-Axis Prefix</label>
								<input class="form-control" type="text" name="chart-y-axis-prefix" />
							</div>
							<div class="input-wrapper">
								<label for="chart-y-axis-suffix">Y-Axis Suffix</label>
								<input class="form-control" type="text" name="chart-y-axis-suffix" />
							</div>
						</div>
						<div class="x-section">
							<h3>X Axis</h3>
							<div class="input-wrapper">
								<label for="chart-x-axis-label">X-Axis Label</label>
								<input class="form-control" type="text" name="chart-x-axis-label" />
							</div>
							<div class="input-wrapper">
								<label for="chart-x-label-distance">X-Axis Label Distance</label>
								<input class="form-control" type="text" name="chart-x-axis-label-distance" />
							</div>
							<div class="input-wrapper">
								<label for="chart-x-axis-max">X-Axis Max</label>
								<input class="form-control" type="text" name="chart-x-axis-max" />
							</div>
							<div class="input-wrapper">
								<label for="chart-x-axis-min">X-Axis Min</label>
								<input class="form-control" type="text" name="chart-x-axis-min" />
							</div>
							<div class="input-wrapper">
								<label for="chart-x-axis-prefix">X-Axis Prefix</label>
								<input class="form-control" type="text" name="chart-x-axis-prefix" />
							</div>
							<div class="input-wrapper">
								<label for="chart-x-axis-suffix">X-Axis Suffix</label>
								<input class="form-control" type="text" name="chart-x-axis-suffix" />
							</div>
						</div>
					</div>
				</section>
			</div>
			<div id="description-tab" class="tab-pane">
				<section class="form-section">
					<div class="form-section-header">
						<h2><span class="form-section-digit">6</span>Describe your sources</h2>
					</div>
					<div class="form-section-content">
						<textarea name="description" placeholder="Enter all the sources information"></textarea>
					</div>
				</section>
			</div>
			<div id="styling-tab" class="tab-pane">
				<section class="form-section">
					<div class="form-section-header">
						<h2><span class="form-section-digit">7</span>Make it pretty</h2>
					</div>
					<div class="form-section-content">
						<p class="form-section-desc">Here will be options to choose display of lines, lines and dots etc. </p>
					</div>
				</section>
			</div>
			<div id="export-tab" class="tab-pane">
				<section class="form-section">
					<div class="form-section-header">
						<h2><span class="form-section-digit">8</span>Embed your chart</h2>
					</div>
					<div class="form-section-content">
						<p class="form-section-desc">Copy and paste code below to use the chart on your page.</p>
						<textarea rows="4" cols="50" name="iframe" placeholder="No chart created, yet. Click 'Create chart' button at the bottom to get code for embedding." readonly></textarea>
					</div>
				</section>
			</div>
			<section class="form-section form-section-submit">
				<button type="submit" class="btn btn-lg btn-success btn-primary">Create Chart</button>
			</section>
		{!! Form::close() !!}
	</div>
</div>