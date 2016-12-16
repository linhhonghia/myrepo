<?php
/*
Template Name: Contast Us
*/

?>

<?php get_header(); ?>

<div class="c-wrapper">
	<div id="page" class="hfeed site">

		<section id="content" class="site-content">

			<section class="c-page-header">
				<div class="c-page-header__inner">
					<div class="container-fluid">
						<div class="row">
							<div class="block">
								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2214.7179963681006!2d105.81814835540696!3d21.004785722325106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1480056888215" width="1920" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="c-page-content">
				<div id="primary" class="content-area">
					<main id="main" class="site-main main-content">

						<div class="c-entry-main">

							<article>

								<div class="entry-content">
									<section class="section c-welcome">
										<div class="c-welcome__inner">
											<div class="container">
												<div class="row">
													<div class="col-xs-12 c-column">
														<div class="block" data-aos="fade-up" data-aos-delay="100">
															<h2><span class="special">Get started today!</span></h2>
														</div>
													</div>
												</div>
											</div>
										</div>
									</section>
									<!--!welcome-->

									<section class="section">
										<div class="container">
											<div class="row">
												<div class="col-xs-12 col-sm-6 col-md-5 c-column">
													<div class="block" data-aos="fade-up" data-aos-delay="300">
														<p> I had limited potential to grow. It might be fun, or interesting, or exciting to be on your own, but a one-person business can only grow so much. </p>
														<h4>Our Address</h4>

														<p>168 Lang Street, Dong Da, Ha Noi</p>
														<h4>Our Phone</h4>

														<p>(+84) 4 8587 7801</p>
														<h4>Our Email</h4>

														<p>hi@hhtv.vn</p>
													</div>
												</div>
												<div class="col-xs-12 col-sm-6 col-md-7 c-column">
													<div class="block" data-aos="fade-up" data-aos-delay="500">
														<script type="text/javascript">
															// <![CDATA[
															var formrules = new Array(0);
															// ]]></script>
														<script type="text/javascript">// <![CDATA[
														var cfJsHost = (("https:" == document.location.protocol) ? "https://" : "http://");
														document.write(unescape("%3Cscript src='" + cfJsHost + "www.123contactform.com/includes/interactive123cf.js' type='text/javascript'%3E%3C/script%3E"));
														// ]]></script>
														<!--[if lte IE 8]>
														<style type="text/css">
															.class123-likert_style_li2 {
																height: 56px;
															}
														</style>
														<![endif]-->
														<script type="text/javascript">
															// <![CDATA[
															var selectedfield = '';
															var multiPageCurent = 1;
															var multiPageTotal = 1;
															function InputActions(field, id) {
																var textcolor = '#000000';
																var hltextcolor = '#000000';

																if (id == selectedfield) { /* alert('do nothing'); */
																}
																else {
																	// first we unhighlight the previous field, if any
																	if (selectedfield != '') {
																		lid = selectedfield;
																		lidsec = lid.replace('row', 'rowsec');

																		// reparam culoare textlabels
																		var tr = document.getElementById(lid);

																		if (document.getElementsByClassName) {
																			var textlabels = tr.getElementsByClassName('class123-label');
																			for (j = 0; j < textlabels.length; j++)
																				textlabels[j].style.color = textcolor;
																		}
																		else {
																			var textlabels = tr.getElementsByTagName('label');
																			for (j = 0; j < textlabels.length; j++)
																				if (textlabels[j].className.indexOf('class123-label') > -1) textlabels[j].style.color = textcolor;
																		}
																		var oldbg = '';
																		if (document.getElementById('errorflag' + lid) != null)
																			oldbg = document.getElementById('errorflag' + lid).value;

																		// reparam culoare bg td
																		var tds = tr.getElementsByTagName('td');
																		for (j = 0; j < tds.length; j++)
																			tds[j].style.background = oldbg;

																		// reparam culoare bg td sec
																		if (document.getElementById(lidsec) != null) {
																			var trsec = document.getElementById(lidsec);
																			tds = trsec.getElementsByTagName('td');
																			for (j = 0; j < tds.length; j++)
																				tds[j].style.background = oldbg;
																		}
																	}
																	// then we highlight the new one
																	selectedfield = id;

																	lid = id;
																	lidsec = lid.replace('row', 'rowsec');

																	// modificam culoare textlabels
																	var tr = document.getElementById(lid);
																	if (document.getElementsByClassName) {
																		var textlabels = tr.getElementsByClassName('class123-label');
																		for (j = 0; j < textlabels.length; j++)
																			textlabels[j].style.color = hltextcolor;
																	}
																	else {
																		var textlabels = tr.getElementsByTagName('label');
																		for (j = 0; j < textlabels.length; j++)
																			if (textlabels[j].className.indexOf('class123-label') > -1) textlabels[j].style.color = hltextcolor;
																	}
																}

																// now the field rules

																InputRules();
															}
															function IsFullDateEntered(c_id) {
																if ((document.getElementById('id123-control' + c_id + '-1').value != '') && (document.getElementById('id123-control' + c_id + '-2').value != '') && (document.getElementById('id123-control' + c_id + '-3').value != ''))
																	document.getElementById('id123-control' + c_id).value = document.getElementById('id123-control' + c_id + '-1').value + '/' + document.getElementById('id123-control' + c_id + '-2').value + '/' + document.getElementById('id123-control' + c_id + '-3').value;
															}

															function checkDefaultValue() {
																if (jQuery("#id123-control2120246").val() == 'Full Name') jQuery("#id123-control2120246").val('');
																if (jQuery("#id123-control2120251").val() == '0912345678') jQuery("#id123-control2120251").val('');
																if (jQuery("#id123-control2120247").val() == "address" + "@" + "email.com") jQuery("#id123-control2120247").val('');
															}
															// ]]></script>
														<form id="mainform123" class="form" action="http://www.123contactform.com/form-336189/HHTV-Media" method="post" enctype="multipart/form-data" onsubmit="jQuery('.form-message').hide();checkDefaultValue();if(HHTV.validate()){RefreshFrameHeight(1); return true;} else {jQuery('.form-message').show();return false;}"><input type="hidden" name="action" value="verify"/><input id="special_autoresponder" type="hidden" name="special_autoresponder" value=""/><input type="hidden" name="language" value="en"/><input type="hidden" name="languageChanged" value="no"/>

															<div class="form-message">Please check your information and try again</div>

															<table class="class123_maintable contact-form" border="0" cellspacing="0" cellpadding="6">

																<tbody>

																<tr id="row1" class="currentPage1 currentPageActive">
																	<td valign="middle" width="140px">
																		<label id="id123-title2120246" class="class123-label class123-fieldname fontbold  requiredfield " for="id123-control2120246">* Your Name</label>
																		<!--[if lte IE 7]><span class="requiredspan">*</span><![endif]-->
																	</td>
																	<td align="left">
																		<input id="errorflagrow1" type="hidden" value=""/>
																		<input id="id123-control2120246" class="required" onclick="InputActions(this,'row1');" onkeyup="InputActions(this,'row1'); " onfocus="if(this.value == 'Full Name') {this.value = ''}; jQuery(this).addClass('focus')" onblur="if(this.value == '') {this.value = 'Tên đầy đủ'; jQuery(this).removeClass('focus');}" type="text" name="control2120246" value="Full Name" onchange="InputRules(2120246); ;  "/>
																	</td>
																</tr>

																<tr id="row2" class="currentPage1 currentPageActive">
																	<td valign="middle">
																		<label id="id123-title2120251" class="class123-label class123-fieldname fontbold requiredfield" for="id123-control2120251">* Your Mobile</label>
																	</td>
																	<td align="left">
																		<input id="errorflagrow2" type="hidden" value=""/>
																		<input id="id123-control2120251" class="required isNumber" onclick="InputActions(this,'row2');" onkeyup="InputActions(this,'row2'); " onfocus="if(this.value == '0912345678') {this.value = ''}; jQuery(this).addClass('focus')" onblur="if(this.value == '') {this.value = '0912345678'; jQuery(this).removeClass('focus');}" type="text" name="control2120251" value="0912345678" onchange="InputRules(2120251); ;  "/>
																	</td>
																</tr>

																<tr id="row3" class="currentPage1 currentPageActive">
																	<td valign="middle">
																		<label id="id123-title2120247" class="class123-label class123-fieldname fontbold  requiredfield " for="id123-control2120247">* Your Email</label>
																		<!--[if lte IE 7]><span class="requiredspan">*</span><![endif]--></td>
																	<td align="left">
																		<input id="errorflagrow3" type="hidden" value=""/>
																		<input id="id123-control2120247" class="required isEmail" onfocus="if(this.value == 'thudientu'+'@'+'email.com') {this.value = ''}; jQuery(this).addClass('focus')" onblur="if(this.value == '') {this.value = 'thudientu'+'@'+'email.com'; jQuery(this).removeClass('focus');}" type="text" name="control2120247" value=""/>
																	</td>
																</tr>

																<tr id="row4" class="currentPage1 currentPageActive">
																	<td valign="middle">
																		<label id="id123-title2120252" class="class123-label class123-fieldname fontbold " for="id123-control2120252">Your Company</label>
																	</td>
																	<td align="left">
																		<input id="errorflagrow4" type="hidden" value=""/>
																		<input id="id123-control2120252" onclick="InputActions(this,'row4');" onkeyup="InputActions(this,'row4'); " type="text" name="control2120252" value="" onchange="InputRules(2120252); ;  "/>
																	</td>
																</tr>

																<tr id="row5" class="currentPage1 currentPageActive">
																	<td align="middle">
																		<label id="id123-title2120248" class="class123-label class123-fieldname fontbold  requiredfield " for="id123-control2120248">* Your Message</label>
																		<!--[if lte IE 7]><span class="requiredspan">*</span><![endif]--> <input id="errorflagrow5" type="hidden" value=""/>
																	</td>
																	<td align="left">
																		<textarea id="id123-control2120248" class="required" onclick="InputActions(this,'row5');" onkeyup="InputActions(this,'row5'); " name="control2120248" rows="8" onchange="InputRules(2120248); ;  "></textarea>
																	</td>
																</tr>

																<!-- Buttons begin here -->
																<tr class="currentPage1 currentPageActive">
																	<td align="middle"></td>
																	<td align="left">
																		<p><span class="requiredfield">* Required Informations</span></p>
																		<input id="id123-button-send" type="submit" value="Send" class="btn btn-default btn-custom"/><br/>
																	</td>
																</tr>
																<!-- Buttons end here --></tbody>
															</table>

															<input id="hiddenfields" type="hidden" name="hiddenfields" value=""/>
															<input id="hiddenfields_pages" type="hidden" name="hiddenfields_pages" value=""/>
															<input id="activepage" type="hidden" name="activepage" value="1"/>
															<input id="totalpages" type="hidden" name="totalpages" value="1"/>
															<input id="nextpagenr" type="hidden" name="nextpagenr" value="2"/>
															<input id="prevpagenr" type="hidden" name="prevpagenr" value="0"/>

															<script type="text/javascript">// <![CDATA[
															InputRules();
															// ]]></script>

															<input type="hidden" name="usage" value="e"/>
														</form>

														<script type="text/javascript">// <![CDATA[
														multiPageTotal = 1;
														// ]]></script>
														<!-- 123ContactForm.com script ends here -->

													</div>
												</div>
											</div>
										</div>
									</section>
								</div>

							</article>
						</div>
					</main>
				</div>
			</section>
			<!--!c-page-content-->

		</section>
		<!--!site-content-->

		

	</div>
</div>


<?php get_footer(); ?>
