<div id="xoopssecure_codingstandards" style="display:none;">
	<{if count($resCS) gt 0}>
	<{foreach item=arr from=$resCS}>
	<div class="xoopssecureIssueContainer">
		<fieldset class="border border-dark rounded" id="<{$arr.filename}>" style="">
			<legend>
				<p>
				<h3 class="xoopssecure_shadow_legend">
					<{$arr.shortname}>
				</h3>
				</p>
			</legend>
			<div class="container mt-5 px-2">
				<div id="Scanfileinfo" class="xoopssecure_fileinfobox">
					<p>
						<font size="+0"><{$smarty.const._LOG_XOOPSSECURE_FULLFILEPATH}></font>
						<font size="-5">
							<{$arr.filename}>
						</font>
					</p>
					<p>
						<font size="+0"><{$smarty.const._LOG_XOOPSSECURE_FILEPERMISSIONS}></font>
						<font size="-5">
							<{$arr.filepermissions}>
						</font>
					</p>
					<p>
						<font size="+0"><{$smarty.const._LOG_XOOPSSECURE_LASTCHANGED}></font>
						<font size="-5">
							<{$arr.lastmod}>
						</font>
					</p>
				</div>
				<div id="<{$arr.filename}>" class="Scanfileactionbox">
					<p>
						<font size="+0"><{$smarty.const._LOG_XOOPSSECURE_DELETEALLFORFILE}></font><button data-conftext="<{$lang_log_CONFDELISSUE_TEXT}>"
							data-confyes="<{$lang_log_CONFYES}>" data-confno="<{$lang_log_CONFNO}>" data-toggle="tooltip"
							title="If this file is safe remove 'All' issues regarding this file." class="xoopssecuredeleteIssueByFN" id="<{$arr.filename}>"><i
								class="fa fa-trash-o"></i></button>
					</p>
					<p>
						<font size="+0"><{$smarty.const._LOG_XOOPSSECURE_IGNORDIR}></font><button data-conftext="<{$lang_log_CONFOMITDIRS_TEXT}>"
							data-confyes="<{$lang_log_CONFYES}>" data-confno="<{$lang_log_CONFNO}>" data-toggle="tooltip"
							title="Delete issues & ignore folder" class="xoopssecureaddToOmitByDirN" id="<{$arr.dirname}>"><i
								class="fa fa-unlink"></i></button>
					</p>
					<p>
						<font size="+0"><{$smarty.const._LOG_XOOPSSECURE_DELANDIGNORFILE}></font><button data-conftext="<{$lang_log_CONFOMITFILE_TEXT}>"
							data-confyes="<{$lang_log_CONFYES}>" data-confno="<{$lang_log_CONFNO}>" data-toggle="tooltip"
							title="Don't scan this file again." class="xoopssecureaddToOmitByFN" id="<{$arr.filename}>"><i class="fa fa-ban"></i></button>
					</p>
				</div>
			</div>
			<!--<h5 class="mb-2"><a href="single.html"><p class="text-left"><{$arr.filename}></p></a></h5>	-->
			<table id="xoopssecureScanDetails" class="table table-sm" cellspacing="0" width="80%">
				<thead class="thead-dark">
					<tr>
						<th scope="col" class="text-center"><{$smarty.const._LOG_XOOPSSECURE_ISSUE_DATE}></th>
						<th scope="col" class="text-center"><{$smarty.const._LOG_XOOPSSECURE_ISSUE_TITLE Title}></th>
						<th scope="col" class="text-center"><{$smarty.const._LOG_XOOPSSECURE_ISSUE_LINENUMBER}></th>
						<th scope="col" class="text-center"><{$smarty.const._LOG_XOOPSSECURE_ISSUE_DESC}></th>
						<th scope="col" class="text-center"><{$smarty.const._LOG_XOOPSSECURE_ISSUE_ACTION}></th>
					</tr>
				</thead>
				<tbody>
					<{foreach item=iss from=$arr.issues}>
						<tr>
							<td style="text-align: center;">
								<{$iss.time}>
							</td>
							<td style="text-align: center;">
								<{$iss.title}>
							</td>
							<{if $iss.linenumber !='0' }>
								<td style="text-align: center;">
									<{$iss.linenumber}>
								</td>
								<{else}>
									<td style="text-align: center;"></td>
									<{ /if}>

										<td style="word-wrap: break-word;min-width: 150px;max-width: 250px;text-align:center;">
											<{$iss.desc}>
										</td>
										<td style="text-align: center;">
											<button data-toggle="tooltip" data-issueid="<{$iss.id}>" title="<{$smarty.const._LOG_XOOPSSECURE_TOOLTIP_DELISSUE}>" class="btn" id="xoopssecureLogDeleteIssueByID"><i
													class="fa fa-trash-o"></i></button>
											<button data-id="<{$arr.id}>" data-filename="<{$arr.filename}>" data-linenumber="<{$iss.linenumber}>"
												data-toggle="tooltip" title="<{$smarty.const._LOG_XOOPSSECURE_TOOLTIP_SHOWSOURCE}>" class="btn" id="xoopssecureLogshowSourceCode"><i
													class="fa fa-file-code-o"></i></button>
										</td>
						</tr>
						<{ /foreach}>
				</tbody>
			</table>

			<p class="mb-2">
			<div data-id="<{$arr.id}>" id="<{$arr.id}>" class="xoopssecureDisPlaySourceCode"></div>
			</p>

		</fieldset>
	</div>
	<{ /foreach}>
	<{else}>
		<div class="container">
		   <div class="row">
			  <div class="col-md-6 mx-auto mt-5">
				 <div class="xoopssecureContentResultCheckDiv">
					<div class="xoopssecureContentResultCheckDiv_header">
					   <div class="xoopssecureContentResultCheck"><i class="fa fa-check" aria-hidden="true"></i></div>
					</div>
					<div class="xoopssecureContentResultSuccess">
					   <h1><{$smarty.const._LOG_XOOPSSECURE_SCANNER_RESULTCHECKSUCCESS}></h1>
					   <p><{$smarty.const._LOG_XOOPSSECURE_SCANNER_RESULTCHECKSUCCESSH}></p>
					</div>
					
				 </div>
			  </div>
		   </div>
		</div>
	<{/if}>
</div>