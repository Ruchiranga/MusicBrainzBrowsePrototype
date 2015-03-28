<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Welcome to OpenShift</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	
	<link rel="stylesheet" type="text/css" href="css/mb.css">
	<link href="css/select2.css" rel="stylesheet"/>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
	<script src="js/select2.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/ko.js"></script>
	<style type="text/css">
	#filter li {
		cursor: pointer;
	}

	#filter ul {
		xwidth: 80%;
		margin-bottom: 0px;
	}

	.selected {
		background-color: plum;
	}

	.disabled {
		display: none;
	}

	#morecountries {
		width: 100%;
	}

/*	#textfilter {
		width: 65%;
		border: 1px solid #aaa;
		padding: 2px;
		margin-top: 5px;
		margin-bottom: 5px;
	}*/
	.select2-choices {
		min-height: 16px !important;
	}
	.select2-input {
		padding: 2px !important;
	}
	#imaginary_container{
	    padding-top: 10px;
  		padding-bottom: 10px;
	}

	.input-group-addon {
	  padding: 0px 0px; 
	  font-size: 10px;
	  font-weight: normal;
	  /* line-height: 1; */
	  text-align: center;
	  background-color: #eeeeee;
	  border: 1px solid #cccccc;
	  border-radius: 0px;
	}

	.stylish-input-group .input-group-addon{
	    background: white !important; 
	}
	.stylish-input-group .form-control{
		border-right:0; 
		box-shadow:0 0 0; 
		border-color:#ccc;
	}
	.stylish-input-group button{
	    border:0;
	    background:transparent;
	}
	.form-control {
		border-radius: 0px;
	}

	</style>
</head>
<body>

	<section class='container'>
		<hgroup>
			<div id="header">
				<div id="header-logo">
					<a href="/" class="logo" title="MusicBrainz"><strong>MusicBrainz</strong></a>
					<div>
						<form action="https://musicbrainz.org/search" method="get">
							<input class="" id="headerid-query" name="query" placeholder="search" required="required" type="text" value="">
							<select id="headerid-type" name="type"><option value="artist">Artist</option><option value="release_group">Release Group</option><option value="release">Release</option><option value="recording">Recording</option><option value="work">Work</option><option value="label">Label</option><option value="area">Area</option><option value="place">Place</option><option value="annotation">Annotation</option><option value="cdstub">CD Stub</option><option value="editor">Editor</option><option value="freedb">FreeDB</option><option value="tag">Tag</option><option value="instrument">Instrument</option><option value="series">Series</option><option value="event">Event</option><option value="doc">Documentation</option></select>
							<input class="" id="headerid-method" name="method" type="hidden" value="indexed">
							<span class="buttons inline"><button type="submit">Search</button></span>
						</form>
					</div>
				</div>
				<div id="header-menu">
					<div><ul class="r">
						<li class="account">
							<a href="https://musicbrainz.org/user/Ruchiranga"><img src="//gravatar.com/avatar/placeholder?d=mm&amp;s=24" height="12" width="12" class="gravatar" alt=""><bdi>Ruchiranga</bdi></a>
							<ul>
								<li>
									<a href="https://musicbrainz.org/account/edit">Edit Profile</a>
								</li>
								<li>
									<a href="https://musicbrainz.org/account/change-password">Change Password</a>
								</li>
								<li>
									<a href="https://musicbrainz.org/account/preferences">Preferences</a>
								</li>
								<li>
									<a href="https://musicbrainz.org/account/applications">Applications</a>
								</li>
								<li>
									<a href="https://musicbrainz.org/user/Ruchiranga/subscriptions/artist">Subscriptions</a>
								</li>
								<li>
									<a href="https://musicbrainz.org/logout">Log Out</a>
								</li>
							</ul>
						</li>
						<li class="data">
							<a href="https://musicbrainz.org/user/Ruchiranga">My Data</a>
							<ul>
								<li>
									<a href="https://musicbrainz.org/user/Ruchiranga/collections">My Collections</a>
								</li>
								<li>
									<a href="https://musicbrainz.org/user/Ruchiranga/ratings">My Ratings</a>
								</li>
								<li>
									<a href="https://musicbrainz.org/user/Ruchiranga/tags">My Tags</a>
								</li>
								<li class="separator">
									<a href="https://musicbrainz.org/user/Ruchiranga/edits/open">My Open Edits</a>
								</li>
								<li>
									<a href="https://musicbrainz.org/user/Ruchiranga/edits">All My Edits</a>
								</li>
								<li>
									<a href="https://musicbrainz.org/edit/subscribed">Edits for Subscribed Entities</a>
								</li>
								<li>
									<a href="https://musicbrainz.org/edit/subscribed_editors">Edits by Subscribed Editors</a>
								</li>
							</ul>
						</li>
					</ul>

					<ul>
						<li class="about">
							<a href="https://musicbrainz.org/doc/About">About</a>
							<ul>
								<li>
									<a href="http://metabrainz.org/doc/Sponsors">Sponsors</a>
								</li>
								<li>
									<a href="https://musicbrainz.org/doc/About/Team">Team</a>
								</li>
								<li class="separator">
									<a href="https://musicbrainz.org/doc/About/Data_License">Data Licenses</a>
								</li>
								<li>
									<a href="https://musicbrainz.org/doc/Social_Contract">Social Contract</a>
								</li>
								<li>
									<a href="https://musicbrainz.org/doc/Code_of_Conduct">Code of Conduct</a>
								</li>
								<li>
									<a href="https://musicbrainz.org/doc/About/Privacy_Policy">Privacy Policy</a>
								</li>
								<li class="separator">
									<a href="https://musicbrainz.org/elections">Auto-editor Elections</a>
								</li>
								<li>
									<a href="https://musicbrainz.org/privileged">Privileged User Accounts</a>
								</li>
								<li>
									<a href="https://musicbrainz.org/statistics">Statistics</a>
								</li>
								<li>
									<a href="https://musicbrainz.org/statistics/timeline">Timeline Graph</a>
								</li>
							</ul>
						</li>
						<li class="blog">
							<a href="http://blog.musicbrainz.org" class="internal">
								Blog
							</a>
						</li>

						<li class="products">
							<a href="https://musicbrainz.org/doc/Products">Products</a>
							<ul>
								<li>
									<a href="//picard.musicbrainz.org">MusicBrainz Picard</a>
								</li>
								<li>
									<a href="https://musicbrainz.org/doc/Magic_MP3_Tagger">Magic MP3 Tagger</a>
								</li>
								<li>
									<a href="https://musicbrainz.org/doc/Yate_Music_Tagger">Yate Music Tagger</a>
								</li>
								<li class="separator">
									<a href="https://musicbrainz.org/doc/MusicBrainz_for_Android">MusicBrainz for Android</a>
								</li>
								<li class="separator">
									<a href="https://musicbrainz.org/doc/MusicBrainz_Server">MusicBrainz Server</a>
								</li>
								<li>
									<a href="https://musicbrainz.org/doc/MusicBrainz_Database">MusicBrainz Database</a>
								</li>
								<li class="separator">
									<a href="https://musicbrainz.org/doc/Developer_Resources">Developer Resources</a>
								</li>
								<li>
									<a href="https://musicbrainz.org/doc/XML_Web_Service">XML Web Service</a>
								</li>
								<li>
									<a href="https://musicbrainz.org/doc/Live_Data_Feed">Live Data Feed</a>
								</li>
								<li class="separator">
									<a href="https://musicbrainz.org/doc/FreeDB_Gateway">FreeDB Gateway</a>
								</li>
							</ul>
						</li>
						<li class="search">
							<a href="https://musicbrainz.org/search">Search</a>
							<ul>                <li>
								<a href="https://musicbrainz.org/search/edits">Search Edits</a>
							</li>

							<li>
								<a href="https://musicbrainz.org/tags">Tags</a>
							</li>
							<li>
								<a href="https://musicbrainz.org/cdstub/browse">Top CD Stubs</a>
							</li>
						</ul>
					</li> 
					<li class="editing">
						<a href="https://musicbrainz.org/doc/How_Editing_Works">Editing</a>
						<ul>
							<li>
								<a href="https://musicbrainz.org/artist/create">Add Artist</a>
							</li>
							<li>
								<a href="https://musicbrainz.org/label/create">Add Label</a>
							</li>
							<li>
								<a href="https://musicbrainz.org/release-group/create">Add Release Group</a>
							</li>
							<li>
								<a href="https://musicbrainz.org/release/add">Add Release</a>
							</li>
							<li>
								<a href="https://musicbrainz.org/release/add?artist=89ad4ac3-39f7-470e-963a-56509c546377">Add Various Artists Release</a>
							</li>
							<li>
								<a href="https://musicbrainz.org/recording/create">Add Standalone Recording</a>
							</li>
							<li>
								<a href="https://musicbrainz.org/work/create">Add Work</a>
							</li>
							<li>
								<a href="https://musicbrainz.org/place/create">Add Place</a>
							</li>
							<li>
								<a href="https://musicbrainz.org/series/create">Add Series</a>
							</li>
							<li>
								<a href="https://musicbrainz.org/event/create">Add Event</a>
							</li>
							<li class="separator">
								<a href="https://musicbrainz.org/edit/open">Vote on Edits</a>
							</li>
							<li>
								<a href="https://musicbrainz.org/reports">Reports</a>
							</li>
						</ul>
					</li>    <li class="documentation">
					<a href="https://musicbrainz.org/doc/MusicBrainz_Documentation">Documentation</a>
					<ul>
						<li>
							<a href="https://musicbrainz.org/doc/Beginners_Guide">Beginners Guide</a>
						</li>
						<li>
							<a href="https://musicbrainz.org/doc/Style">Style Guidelines</a>
						</li>
						<li>
							<a href="https://musicbrainz.org/doc/How_To">How Tos</a>
						</li>
						<li>
							<a href="https://musicbrainz.org/doc/Frequently_Asked_Questions">FAQs</a>
						</li>
						<li class="separator">
							<a href="https://musicbrainz.org/doc/Edit_Types">Edit Types</a>
						</li>
						<li>
							<a href="https://musicbrainz.org/relationships">Relationship Types</a>
						</li>
						<li>
							<a href="https://musicbrainz.org/instruments">Instrument List</a>
						</li>
						<li class="separator">
							<a href="https://musicbrainz.org/doc/Development">Development</a>
						</li>
					</ul>
				</li>
				<li class="contact">
					<a href="https://musicbrainz.org/doc/Contact_Us">Contact Us</a>
					<ul>
						<li>
							<a href="https://musicbrainz.org/doc/Communication/Mailing_Lists">Mailing Lists</a>
						</li>
						<li>
							<a href="http://forums.musicbrainz.org" class="internal">
								Forums
							</a>
						</li>
						<li class="separator">
							<a href="http://tickets.musicbrainz.org" class="internal">
								Report a Bug
							</a>
						</li>
						<li>
							<a href="https://musicbrainz.org/doc/Copyright_Violation_Notice">Report a Copyright Violation</a>
						</li>
						<li>
							<a href="https://musicbrainz.org/doc/Data_Removal_Policy">Data Removal Policy</a>
						</li>
					</ul>
				</li>
				<li class="explore">
					<a href="http://mbrianzexplore-ruchiranga.rhcloud.com/index.php">Explore</a>

				</li>
			</ul>
		</div>
	</div>
</div>
</hgroup>


<div id="page" class="homepage">
	<div id="maincontent">

		<div class="sidebar">
			<div id="blog-feed" class="feature-column">
				<h2><strong>Search/Browse</strong></h2>
				<div style="float:left;" id="filter">
					<form style="width:200px">

						<div id="imaginary_container"> 
							<div class="input-group stylish-input-group">
								<input type="text" class="form-control"  id="textfilter" placeholder="Search" >
								<span class="input-group-addon">

									<button disabled>
										<span class="glyphicon glyphicon-search"></span>
									</button>  
								</span>
							</div>
						</div>

						<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingOne">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											Artists
										</a>
									</h4>
								</div>
								<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
									<div id = 'artist'>
										<div class="panel-body">

											<h3>Type</h3>
											<ul id="type">
												<li name="person">Person</li>
												<li name="group">Group</li>
												<li name="other">Other</li>
											</ul>

											<h3>Gender</h3>
											<ul id="gender">
												<li name="male">Male</li>
												<li name="female">Female</li>
												<li name="other">Other</li>
											</ul>

											<h3>Country</h3>
											<ul id="country">
												<li name="AF" class="disabled">Afghanistan</li>
												<li name="AL" class="disabled">Albania</li>
												<li name="DZ" class="disabled">Algeria</li>
												<li name="AS" class="disabled">American Samoa</li>
												<li name="AD" class="disabled">Andorra</li>
												<li name="AO" class="disabled">Angola</li>
												<li name="AI" class="disabled">Anguilla</li>
												<li name="AQ" class="disabled">Antarctica</li>
												<li name="AG" class="disabled">Antigua and Barbuda</li>
												<li name="AR" class="disabled">Argentina</li>
												<li name="AM" class="disabled">Armenia</li>
												<li name="AW" class="disabled">Aruba</li>
												<li name="AU" class="disabled">Australia</li>
												<li name="AT" class="disabled">Austria</li>
												<li name="AZ" class="disabled">Azerbaijan</li>
												<li name="BS" class="disabled">Bahamas</li>
												<li name="BH" class="disabled">Bahrain</li>
												<li name="BD" class="disabled">Bangladesh</li>
												<li name="BB" class="disabled">Barbados</li>
												<li name="BY" class="disabled">Belarus</li>
												<li name="BE" class="disabled">Belgium</li>
												<li name="BZ" class="disabled">Belize</li>
												<li name="BJ" class="disabled">Benin</li>
												<li name="BM" class="disabled">Bermuda</li>
												<li name="BT" class="disabled">Bhutan</li>
												<li name="BO" class="disabled">Bolivia, Plurinational State of</li>
												<li name="BQ" class="disabled">Bonaire, Sint Eustatius and Saba</li>
												<li name="BA" class="disabled">Bosnia and Herzegovina</li>
												<li name="BW" class="disabled">Botswana</li>
												<li name="BV" class="disabled">Bouvet Island</li>
												<li name="BR" class="disabled">Brazil</li>
												<li name="IO" class="disabled">British Indian Ocean Territory</li>
												<li name="BN" class="disabled">Brunei Darussalam</li>
												<li name="BG" class="disabled">Bulgaria</li>
												<li name="BF" class="disabled">Burkina Faso</li>
												<li name="BI" class="disabled">Burundi</li>
												<li name="KH" class="disabled">Cambodia</li>
												<li name="CM" class="disabled">Cameroon</li>
												<li name="CA" class="disabled">Canada</li>
												<li name="CV" class="disabled">Cape Verde</li>
												<li name="KY" class="disabled">Cayman Islands</li>
												<li name="CF" class="disabled">Central African Republic</li>
												<li name="TD" class="disabled">Chad</li>
												<li name="CL" class="disabled">Chile</li>
												<li name="CN" class="disabled">China</li>
												<li name="CX" class="disabled">Christmas Island</li>
												<li name="CC" class="disabled">Cocos (Keeling) Islands</li>
												<li name="CO" class="disabled">Colombia</li>
												<li name="KM" class="disabled">Comoros</li>
												<li name="CG" class="disabled">Congo</li>
												<li name="CD" class="disabled">Congo, The Democratic Republic of the</li>
												<li name="CK" class="disabled">Cook Islands</li>
												<li name="CR" class="disabled">Costa Rica</li>
												<li name="HR" class="disabled">Croatia</li>
												<li name="CU" class="disabled">Cuba</li>
												<li name="CW" class="disabled">Curaçao</li>
												<li name="CY" class="disabled">Cyprus</li>
												<li name="CZ" class="disabled">Czech Republic</li>
												<li name="XC" class="disabled">Czechoslovakia (historical, 1918-1992)</li>
												<li name="CI" class="disabled">Côte d'Ivoire</li>
												<li name="DK" class="disabled">Denmark</li>
												<li name="DJ" class="disabled">Djibouti</li>
												<li name="DM" class="disabled">Dominica</li>
												<li name="DO" class="disabled">Dominican Republic</li>
												<li name="XG" class="disabled">East Germany (historical, 1949-1990)</li>
												<li name="EC" class="disabled">Ecuador</li>
												<li name="EG" class="disabled">Egypt</li>
												<li name="SV" class="disabled">El Salvador</li>
												<li name="GQ" class="disabled">Equatorial Guinea</li>
												<li name="ER" class="disabled">Eritrea</li>
												<li name="ET" class="disabled">Ethiopia</li>
												<li name="EE">Estonia</li>
												<li name="XE" class="disabled">Europe</li>
												<li name="FK" class="disabled">Falkland Islands (Malvinas)</li>
												<li name="FO" class="disabled">Faroe Islands</li>
												<li name="FJ" class="disabled">Fiji</li>
												<li name="FI" class="disabled">Finland</li>
												<li name="FR" class="disabled">France</li>
												<li name="GF" class="disabled">French Guiana</li>
												<li name="PF" class="disabled">French Polynesia</li>
												<li name="TF" class="disabled">French Southern Territories</li>
												<li name="GA" class="disabled">Gabon</li>
												<li name="GM" class="disabled">Gambia</li>
												<li name="GE" class="disabled">Georgia</li>
												<li name="DE">Germany</li>
												<li name="GH" class="disabled">Ghana</li>
												<li name="GI" class="disabled">Gibraltar</li>
												<li name="GR" class="disabled">Greece</li>
												<li name="GL" class="disabled">Greenland</li>
												<li name="GD" class="disabled">Grenada</li>
												<li name="GP" class="disabled">Guadeloupe</li>
												<li name="GU" class="disabled">Guam</li>
												<li name="GT" class="disabled">Guatemala</li>
												<li name="GG" class="disabled">Guernsey</li>
												<li name="GN" class="disabled">Guinea</li>
												<li name="GW" class="disabled">Guinea-Bissau</li>
												<li name="GY" class="disabled">Guyana</li>
												<li name="HT" class="disabled">Haiti</li>
												<li name="HM" class="disabled">Heard Island and McDonald Islands</li>
												<li name="HN" class="disabled">Honduras</li>
												<li name="HK" class="disabled">Hong Kong</li>
												<li name="HU" class="disabled">Hungary</li>
												<li name="IS" class="disabled">Iceland</li>
												<li name="IN" class="disabled">India</li>
												<li name="ID" class="disabled">Indonesia</li>
												<li name="IR" class="disabled">Iran, Islamic Republic of</li>
												<li name="IQ" class="disabled">Iraq</li>
												<li name="IE" class="disabled">Ireland</li>
												<li name="IM" class="disabled">Isle of Man</li>
												<li name="IL" class="disabled">Israel</li>
												<li name="IT" class="disabled">Italy</li>
												<li name="JM" class="disabled">Jamaica</li>
												<li name="JP">Japan</li>
												<li name="JE" class="disabled">Jersey</li>
												<li name="JO" class="disabled">Jordan</li>
												<li name="KZ" class="disabled">Kazakhstan</li>
												<li name="KE" class="disabled">Kenya</li>
												<li name="KI" class="disabled">Kiribati</li>
												<li name="KP" class="disabled">Korea (North), Democratic People's Republic of</li>
												<li name="KR" class="disabled">Korea (South), Republic of</li>
												<li name="KW" class="disabled">Kuwait</li>
												<li name="KG" class="disabled">Kyrgyzstan</li>
												<li name="LA" class="disabled">Lao People's Democratic Republic</li>
												<li name="LV" class="disabled">Latvia</li>
												<li name="LB" class="disabled">Lebanon</li>
												<li name="LS" class="disabled">Lesotho</li>
												<li name="LR" class="disabled">Liberia</li>
												<li name="LY" class="disabled">Libya</li>
												<li name="LI" class="disabled">Liechtenstein</li>
												<li name="LT" class="disabled">Lithuania</li>
												<li name="LU" class="disabled">Luxembourg</li>
												<li name="MO" class="disabled">Macao</li>
												<li name="MK" class="disabled">Macedonia, The Former Yugoslav Republic of</li>
												<li name="MG" class="disabled">Madagascar</li>
												<li name="MW" class="disabled">Malawi</li>
												<li name="MY" class="disabled">Malaysia</li>
												<li name="MV" class="disabled">Maldives</li>
												<li name="ML" class="disabled">Mali</li>
												<li name="MT" class="disabled">Malta</li>
												<li name="MH" class="disabled">Marshall Islands</li>
												<li name="MQ" class="disabled">Martinique</li>
												<li name="MR" class="disabled">Mauritania</li>
												<li name="MU" class="disabled">Mauritius</li>
												<li name="YT" class="disabled">Mayotte</li>
												<li name="MX" class="disabled">Mexico</li>
												<li name="FM" class="disabled">Micronesia, Federated States of</li>
												<li name="MD" class="disabled">Moldova, Republic of</li>
												<li name="MC" class="disabled">Monaco</li>
												<li name="MN" class="disabled">Mongolia</li>
												<li name="ME" class="disabled">Montenegro</li>
												<li name="MS" class="disabled">Montserrat</li>
												<li name="MA" class="disabled">Morocco</li>
												<li name="MZ" class="disabled">Mozambique</li>
												<li name="MM" class="disabled">Myanmar</li>
												<li name="NA" class="disabled">Namibia</li>
												<li name="NR" class="disabled">Nauru</li>
												<li name="NP" class="disabled">Nepal</li>
												<li name="NL" class="disabled">Netherlands</li>
												<li name="AN" class="disabled">Netherlands Antilles (historical, 1954-2010)</li>
												<li name="NC" class="disabled">New Caledonia</li>
												<li name="NZ" class="disabled">New Zealand</li>
												<li name="NI" class="disabled">Nicaragua</li>
												<li name="NE" class="disabled">Niger</li>
												<li name="NG" class="disabled">Nigeria</li>
												<li name="NU" class="disabled">Niue</li>
												<li name="NF" class="disabled">Norfolk Island</li>
												<li name="MP" class="disabled">Northern Mariana Islands</li>
												<li name="NO" class="disabled">Norway</li>
												<li name="OM" class="disabled">Oman</li>
												<li name="PK" class="disabled">Pakistan</li>
												<li name="PW" class="disabled">Palau</li>
												<li name="PS" class="disabled">Palestinian Territory</li>
												<li name="PA" class="disabled">Panama</li>
												<li name="PG" class="disabled">Papua New Guinea</li>
												<li name="PY" class="disabled">Paraguay</li>
												<li name="PE" class="disabled">Peru</li>
												<li name="PH" class="disabled">Philippines</li>
												<li name="PN" class="disabled">Pitcairn</li>
												<li name="PL" class="disabled">Poland</li>
												<li name="PT" class="disabled">Portugal</li>
												<li name="PR" class="disabled">Puerto Rico</li>
												<li name="QA" class="disabled">Qatar</li>
												<li name="RO" class="disabled">Romania</li>
												<li name="RU" class="disabled">Russian Federation</li>
												<li name="RW" class="disabled">Rwanda</li>
												<li name="RE" class="disabled">Réunion</li>
												<li name="BL" class="disabled">Saint Barthélemy</li>
												<li name="SH" class="disabled">Saint Helena, Ascension and Tristan da Cunha</li>
												<li name="KN" class="disabled">Saint Kitts and Nevis</li>
												<li name="LC" class="disabled">Saint Lucia</li>
												<li name="MF" class="disabled">Saint Martin (French part)</li>
												<li name="PM" class="disabled">Saint Pierre and Miquelon</li>
												<li name="VC" class="disabled">Saint Vincent and The Grenadines</li>
												<li name="WS" class="disabled">Samoa</li>
												<li name="SM" class="disabled">San Marino</li>
												<li name="ST" class="disabled">Sao Tome and Principe</li>
												<li name="SA" class="disabled">Saudi Arabia</li>
												<li name="SN" class="disabled">Senegal</li>
												<li name="RS" class="disabled">Serbia</li>
												<li name="CS" class="disabled">Serbia and Montenegro (historical, 2003-2006)</li>
												<li name="SC" class="disabled">Seychelles</li>
												<li name="SL" class="disabled">Sierra Leone</li>
												<li name="SG" class="disabled">Singapore</li>
												<li name="SX" class="disabled">Sint Maarten (Dutch part)</li>
												<li name="SK" class="disabled">Slovakia</li>
												<li name="SI" class="disabled">Slovenia</li>
												<li name="SB" class="disabled">Solomon Islands</li>
												<li name="SO" class="disabled">Somalia</li>
												<li name="ZA" class="disabled">South Africa</li>
												<li name="GS" class="disabled">South Georgia and the South Sandwich Islands</li>
												<li name="SS" class="disabled">South Sudan</li>
												<li name="SU" class="disabled">Soviet Union (historical, 1922-1991)</li>
												<li name="ES" class="disabled">Spain</li>
												<li name="LK" class="disabled">Sri Lanka</li>
												<li name="SD" class="disabled">Sudan</li>
												<li name="SR" class="disabled">Suriname</li>
												<li name="SJ" class="disabled">Svalbard and Jan Mayen</li>
												<li name="SZ" class="disabled">Swaziland</li>
												<li name="SE" class="disabled">Sweden</li>
												<li name="CH" class="disabled">Switzerland</li>
												<li name="SY" class="disabled">Syrian Arab Republic</li>
												<li name="TW" class="disabled">Taiwan</li>
												<li name="TJ" class="disabled">Tajikistan</li>
												<li name="TZ" class="disabled">Tanzania, United Republic of</li>
												<li name="TH" class="disabled">Thailand</li>
												<li name="TL" class="disabled">Timor-Leste</li>
												<li name="TG" class="disabled">Togo</li>
												<li name="TK" class="disabled">Tokelau</li>
												<li name="TO" class="disabled">Tonga</li>
												<li name="TT" class="disabled">Trinidad and Tobago</li>
												<li name="TN" class="disabled">Tunisia</li>
												<li name="TR" class="disabled">Turkey</li>
												<li name="TM" class="disabled">Turkmenistan</li>
												<li name="TC" class="disabled">Turks and Caicos Islands</li>
												<li name="TV" class="disabled">Tuvalu</li>
												<li name="UG" class="disabled">Uganda</li>
												<li name="UA" class="disabled">Ukraine</li>
												<li name="AE" class="disabled">United Arab Emirates</li>
												<li name="GB" class="disabled">United Kingdom</li>
												<li name="US" class="disabled">United States</li>
												<li name="UM" class="disabled">United States Minor Outlying Islands</li>
												<li name="UY" class="disabled">Uruguay</li>
												<li name="UZ" class="disabled">Uzbekistan</li>
												<li name="VU" class="disabled">Vanuatu</li>
												<li name="VA" class="disabled">Vatican City State (Holy See)</li>
												<li name="VE" class="disabled">Venezuela, Bolivarian Republic of</li>
												<li name="VN" class="disabled">Viet Nam</li>
												<li name="VG" class="disabled">Virgin Islands, British</li>
												<li name="VI" class="disabled">Virgin Islands, U.S.</li>
												<li name="WF" class="disabled">Wallis and Futuna</li>
												<li name="EH" class="disabled">Western Sahara</li>
												<li name="YE" class="disabled">Yemen</li>
												<li name="YU" class="disabled">Yugoslavia (historical, 1918-2003)</li>
												<li name="ZM" class="disabled">Zambia</li>
												<li name="ZW" class="disabled">Zimbabwe</li>
												<li name="XW" class="disabled">[Worldwide]</li>
												<li name="AX" class="disabled">Åland Islands</li>
											</ul>

											<div id="morecountries">
												<input type="hidden" id="e5" style="width:300px" />
											</div>

											<h3>Born/Founded</h3>
											<h3>From</h3>
											<span class="partial-date">
												<input maxlength="4" placeholder="YYYY" size="4" class="partial-date-year" data-bind="value:fromyear, valueUpdate:'keyup'" id="event-date-0">
												-
												<input maxlength="2" placeholder="MM" size="2" class="partial-date-month" data-bind="value:frommonth, valueUpdate:'keyup'">
												-
												<input maxlength="2" placeholder="DD" size="2" class="partial-date-day" data-bind="value:fromday, valueUpdate:'keyup'">
											</span>
											<h3>To</h3>
											<span class="partial-date">
												<input maxlength="4" placeholder="YYYY" size="4" class="partial-date-year" data-bind="value: toyear, valueUpdate:'keyup'">
												-
												<input maxlength="2" placeholder="MM" size="2" class="partial-date-month" data-bind="value: tomonth, valueUpdate:'keyup'">
												-
												<input maxlength="2" placeholder="DD" size="2" class="partial-date-day" data-bind="value: today, valueUpdate:'keyup'">
											</span>
											<ul id="begin" data-bind="html:displayli">
												<li name="[0 TO 1799-12-31]">Before 1800</li>
											</ul>

											<h3>Tags</h3>
											<ul id="tag">
												<li name="classical">Classical</li>
												<li name="electronic">Electronic</li>
												<li name="jazz">Jazz</li>
												<li name="pop">Pop</li>
												<li name="punk">Punk</li>
												<li name="rock">Rock</li>
												<li name="techno">Techno</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTwo">
									<h4 class="panel-title">
										<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											Release Groups
										</a>
									</h4>
								</div>
								<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									<div id = 'release-group'>
										<div class="panel-body">
											<h3>Primary Type</h3>
											<ul id="primarytype">
												<li name="album">Album</li>
												<li name="single">Single</li>
												<li name="ep">Ep</li>
												<li name="other">Other</li>
											</ul>

											<h3>Secondary Type</h3>
											<ul id="secondarytype">
												<li name="audiobook">Audiobook</li>
												<li name="compilation">Compilation</li>
												<li name="interview">Interview</li>
												<li name="live">Live</li>
												<li name="remix">Remix</li>
												<li name="spokenword">Spoken Word</li>
												<li name="soundtrack">Soundtrack</li>
											</ul>

											<h3>Number of Releases</h3>
											<ul id="releases">
												<li name="[0 TO 9]">Less than 10</li>
												<li name="[10 TO 20]">10-19</li>
												<li name="[20 TO 30]">20-29</li>
												<li name="[30 TO 40]">30-39</li>
												<li name="[40 TO 59]">40-50</li>
												<li name="[50 TO 5000]">50 upwards</li>
												
											</ul>

											<h3>Tags</h3>
											<ul id="tag">
												<li name="classical">Classical</li>
												<li name="electronic">Electronic</li>
												<li name="jazz">Jazz</li>
												<li name="pop">Pop</li>
												<li name="punk">Punk</li>
												<li name="rock">Rock</li>
												<li name="techno">Techno</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingThree">
									<h4 class="panel-title">
										<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											Releases
										</a>
									</h4>
								</div>
								<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
									
									<div id = 'release'>
										<div class="panel-body">
											Not done yet!
										</div>
									</div>
								</div>
							</div>

						</div>
						


					</form>
				</div>

			</div>




		</div>


		<div style="float:left; width: 75%; padding-left:50px" id="results">
		</div>

		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">


		</div>




	</div>
</div>
<div style="clear: both"></div>
</div>

</section>



<script type="text/javascript">
// http://stackoverflow.com/questions/2219924/idiomatic-jquery-delayed-event-only-after-a-short-pause-in-typing-e-g-timew
var typewatch = (function() {
	var timer = 0;
	return function(callback, ms) {
		clearTimeout (timer);
		timer = setTimeout(callback, ms);
	}
})();

var prevchoice = ""; //artist, release-group, release
var choice = ""; //artist, release-group, release
var base_url_artist = "https://musicbrainz.org/ws/2/artist?fmt=json&query=";
var base_url_release_group = "https://musicbrainz.org/ws/2/release-group?fmt=json&query=";
var base_url_release = "https://musicbrainz.org/ws/2/release?fmt=json&query=";

var base_url;

$("#results").html("<br><h1>Type a search term and click on the category you need to browse through. Leaving the search field empty and browsing through categories would mean *Show all results under the selected filter(s)* </h1>");

$("#filter li").click(clicked);
$("#textfilter").keyup(function() { typewatch(clicked, 500); });


function clicked() {

	$(this).toggleClass("selected");

		
	var str = $.map( $("#filter ul") , function(a){
		var n = $(a).attr("id");
		var varr = $.map( $(a).find("li.selected") , function(b){ return $(b).attr("name"); } );
		if (varr.length > 0)
			return n + ":(" + varr.join(" OR ") + ")";
	});
	var textfilter = $("#textfilter").val();
	if (textfilter) {
		var textstrs = Array(textfilter);
		if (textfilter && textfilter.match('[0-9a-f-]{36}'))
			textstrs.push("arid:(" + textfilter + ")");
		if (textfilter && textfilter.match('[0-9]{9}'))
			textstrs.push("ipi:(" + textfilter + ")");
		if (textfilter && textfilter.match('[0-9]{16}'))
			textstrs.push("isni:(" + textfilter + ")");

		str.push("(" + textstrs.join(" OR ") + ")");
	}
	var url = base_url  + str.join(" AND ");

	

	if(!base_url){
		$("#results").html("<br><h1>Please choose a category to search for...</h1>");
	}else{
		$("#results").html("Query: <a href=\"" + url + "\">" + url + "</a><br/>");
	}
	if(choice == "artist" && str.length > 0){
		$.getJSON(url, function(data) {
			var items = [];
			console.log(data);
			$('#results').append(data.count + " results found");

			$(data.artists).each(function(k, v) {
				var name = v.name;

				var disamb2 = "";
				var type = v.type;
				var disamb = Array();
				if (v.disambiguation) disamb2 = " <span style='color:grey'>("+v.disambiguation+")</span>";

				var gender = v.gender ? v.gender == "male" ? "\u2642" : v.gender == "female" ? "\u2640" : " (other)" : "";
				var type = v.type ? v.type : "";
				var country = v.area ? " from " + v.area.name : "";
				var begin = v["life-span"].begin ? v["life-span"].begin : "";
				begin = begin.replace(/-.*/, '');
				var end = v["life-span"].end ? v["life-span"].end : v["life-span"].ended ? "????" : "";
				end = end.replace(/-.*/, '');

				if (gender || type || country) disamb.push(type + gender + country);
				if (begin || end) disamb.push(begin + "-" + end);
				if (v.aliases) {
					for (i = 0; i < v.aliases.length; i++) {
						if (v.aliases[i].locale == "en" && v.aliases[i].primary) {
							name = v.aliases[i].name;
							disamb.push(v.name);
							break;
						}
					}
				}
				var str = "<li style='border-top:1px solid grey; padding: 3px;'><a style='text-decoration:none' href=\"https://musicbrainz.org/artist/" + v.id + "\">" + name + "</a>"+disamb2;
				if (disamb.length > 0) 
					str = str + "<br/><span style='padding-left:20px;color:#111'>" + disamb.join("; ") + "</span>";
				str = str + "</li>";
				items.push(str);
			});

			$('<ul/>', {
				'class': 'my-new-list',
				'style': 'padding-left:0; list-style-type:none;',
				html: items.join('')
			}).appendTo('#results');
			});

	}else if (choice == "release-group" && str.length > 0) {
		$.getJSON(url, function(data) {
				var items = [];
				console.log(data);

				$('#results').append(data.count + " results found");

				$(data["release-groups"]).each(function(k, v) {
					var count = " <span style='color:grey'>(Contains "+v.count+(v.count>1?" releases":" release")+")</span>";
					var primary_type = v["primary-type"]?v["primary-type"]:"";
					var title = v.title;

					
					var artistarr= Array();
					artistarr = v["artist-credit"];

					artistnames = Array();
					for (i = 0; i < artistarr.length; i++) {
						artistnames.push(artistarr[i].artist.name);
						// if(i != (artistarr.length-1)){
						// 	artists+=",";
						// }
					}

					var artists = artistnames.length>0?((primary_type!=""?" by ":"By ")+artistnames.join(", ")):"";

					// for (i = 0; i < artistarr.length; i++) {
					// 	artists += artistarr[i].artist.name;
					// 	if(i != (artistarr.length-1)){
					// 		artists+=",";
					// 	}
					// }

					
					var releasesarr= Array();
					releasesarr = v.releases;

					releasenames = Array();
					for (i = 0; i < releasesarr.length; i++) {
						releasenames.push(releasesarr[i].title);
						// if(i != (releasesarr.length-1)){
						// 	releases+=",";
						// }
					}

					var releases = releasenames.length>0 ? (((primary_type == "" && artists == "")? "Containing releases : ":" containing releases : ")+releasenames.join(", ")):"";

					// for (i = 0; i < releasesarr.length; i++) {
					// 	releases += releasesarr[i].title;
					// 	if(i != (releasesarr.length-1)){
					// 		releases+=",";
					// 	}
					// }

					disamb = Array();
					disamb.push(primary_type+artists+releases);

					var str = "<li style='border-top:1px solid grey; padding: 3px;'><a style='text-decoration:none' href=\"https://musicbrainz.org/release-group/" + v.id + "\">" + title + "</a>"+count;
					if (disamb.length > 0) 
						str = str + "<br/><span style='padding-left:20px;color:#111'>" + disamb.join("; ") + "</span>";
					str = str + "</li>";



					// var name = v.name;

					// var disamb2 = "";
					// var type = v.type;
					// var disamb = Array();
					// if (v.disambiguation) disamb2 = " <span style='color:grey'>("+v.disambiguation+")</span>";

					// var gender = v.gender ? v.gender == "male" ? "\u2642" : v.gender == "female" ? "\u2640" : " (other)" : "";
					// var type = v.type ? v.type : "";
					// var country = v.area ? " from " + v.area.name : "";
					// var begin = v["life-span"].begin ? v["life-span"].begin : "";
					// begin = begin.replace(/-.*/, '');
					// var end = v["life-span"].end ? v["life-span"].end : v["life-span"].ended ? "????" : "";
					// end = end.replace(/-.*/, '');

					// if (gender || type || country) disamb.push(type + gender + country);
					// if (begin || end) disamb.push(begin + "-" + end);
					// if (v.aliases) {
					// 	for (i = 0; i < v.aliases.length; i++) {
					// 		if (v.aliases[i].locale == "en" && v.aliases[i].primary) {
					// 			name = v.aliases[i].name;
					// 			disamb.push(v.name);
					// 			break;
					// 		}
					// 	}
					// }
					// var str = "<li style='border-top:1px solid grey; padding: 3px;'><a style='text-decoration:none' href=\"https://musicbrainz.org/artist/" + v.id + "\">" + name + "</a>"+disamb2;
					// if (disamb.length > 0) 
					// 	str = str + "<br/><span style='padding-left:20px;color:#111'>" + disamb.join("; ") + "</span>";
					// str = str + "</li>";
					items.push(str);
				});

				$('<ul/>', {
					'class': 'my-new-list',
					'style': 'padding-left:0; list-style-type:none;',
					html: items.join('')
				}).appendTo('#results');
				});


	}else if (choice == "release" && str.length > 0) {

}



};

$("#e5").select2({
	width: '80%',
	multiple: true,
	query: function (query) {
		var data = {results: []};
		$("#country li.disabled").each(function(){
			var name = $(this).text();
			if (name.toLowerCase().match(query.term.toLowerCase()))
				data.results.push({ id: $(this).attr("name"), text: $(this).text() });
		});
		query.callback(data);
	}
});

$("#e5").on("change", function(e) {
	var li = $("li[name=" + $(this).val() + "]");
	li.toggleClass("disabled");
	li.click();
	$("#e5").select2("val", "");
});


function FromToDateModel() {
	this.fromyear = ko.observable("");
	this.frommonth = ko.observable("");
	this.fromday= ko.observable("");
	this.toyear= ko.observable("");
	this.tomonth= ko.observable("");
	this.today= ko.observable("");
    
 
    this.fromdate = ko.computed(function() {

        if(this.fromyear().toString() == ""){
        	return "";
        }else if(this.frommonth().toString() == ""){
        	return this.fromyear();
        }else if(this.fromday().toString() == ""){
        	return this.fromyear()+"-"+this.frommonth();
        }else{
        	return this.fromyear()+"-"+this.frommonth()+"-"+this.fromday();
        }
    }, this);
    this.todate = ko.computed(function() {
        if(this.toyear().toString() == ""){
        	return "";
        }else if(this.tomonth().toString() == ""){
        	return this.toyear();
        }else if(this.today().toString() == ""){
        	return this.toyear()+"-"+this.tomonth();
        }else{
        	return this.toyear()+"-"+this.tomonth()+"-"+this.today();
        }
    }, this);

    this.displayli = ko.computed(function() {
    	if(this.fromdate() == "" || this.todate() == "" ){
    		return "Please enter valid date range.";
    	}else{
    		return "<li id = 'range' onclick = 'rebind()' name='["+this.fromdate()+" TO "+this.todate()+"]'>"+"From "+this.fromdate()+" TO "+this.todate()+"</li>";
		}
    },this);

};
 
ko.applyBindings(new FromToDateModel()); 


function rebind(){
	if(document.getElementById('range').className.match(/\bselected\b/)){
		document.getElementById('range').className= '';
	}else{
		document.getElementById('range').className= 'selected';
	}
    clicked();
}

</script>

</body>
</html>



