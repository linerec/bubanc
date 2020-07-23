<div class="box">
	<div class="box-header">
		<ul class="nav nav-tabs">
			<li role="presentation"><a href="<?php echo admin_url($this->pagedir . '/cash_to_contents'); ?>" onclick="return check_form_changed();">카드/이체 등으로 컨텐츠 구매시</a></li>
			<li role="presentation"><a href="<?php echo admin_url($this->pagedir . '/bank_to_contents'); ?>" onclick="return check_form_changed();">무통장입금으로 컨텐츠구매요청시</a></li>
			<li role="presentation"><a href="<?php echo admin_url($this->pagedir . '/approve_bank_to_contents'); ?>" onclick="return check_form_changed();">무통장입금 완료처리시</a></li>
			<li role="presentation"><a href="<?php echo admin_url($this->pagedir . '/write_product_review'); ?>" onclick="return check_form_changed();">상품후기 작성시</a></li>
			<li role="presentation"><a href="<?php echo admin_url($this->pagedir . '/write_product_qna'); ?>" onclick="return check_form_changed();">상품문의 작성시</a></li>
			<li role="presentation" class="active"><a href="<?php echo admin_url($this->pagedir . '/write_product_qna_reply'); ?>" onclick="return check_form_changed();">상품문의 답변시</a></li>
		</ul>
	</div>
	<div class="box-table">
		<?php
		echo validation_errors('<div class="alert alert-warning" role="alert">', '</div>');
		echo show_alert_message(element('alert_message', $view), '<div class="alert alert-auto-close alert-dismissible alert-info"><button type="button" class="close alertclose" >&times;</button>', '</div>');
		$attributes = array('class' => 'form-horizontal', 'name' => 'fadminwrite', 'id' => 'fadminwrite');
		echo form_open(current_full_url(), $attributes);
		?>
			<input type="hidden" name="is_submit" value="1" />
			<div class="alert alert-success">
				<p><strong>메일발송</strong> : 메일이 보내지지 않는다면 메일발송 환경설정 부분을 확인하여주세요</p>
				<p><strong>쪽지발송</strong> : 쪽지 기능을 사용하는 사이트에서만 쪽지가 발송됩니다.</p>
				<p><strong>문자발송</strong> : 문자 기능을 사용하는 사이트에서만 문자가 발송됩니다.</p>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">상품문의 답변시</label>
				<div class="col-sm-10">
					<div class="checkbox">
						<label for="cmall_email_admin_write_product_qna_reply">
							<input type="checkbox" name="cmall_email_admin_write_product_qna_reply" id="cmall_email_admin_write_product_qna_reply" value="1" <?php echo set_checkbox('cmall_email_admin_write_product_qna_reply', '1', (element('cmall_email_admin_write_product_qna_reply', element('data', $view)) ? true : false)); ?> /> <strong>최고관리자</strong>에게 <strong>메일</strong>을 발송합니다 (이메일 수신동의 여부와 상관없이 <strong>무조건 발송</strong>합니다)
						</label>
					</div>
					<div class="checkbox">
						<label for="cmall_email_user_write_product_qna_reply">
							<input type="checkbox" name="cmall_email_user_write_product_qna_reply" id="cmall_email_user_write_product_qna_reply" value="1" <?php echo set_checkbox('cmall_email_user_write_product_qna_reply', '1', (element('cmall_email_user_write_product_qna_reply', element('data', $view)) ? true : false)); ?> /> <strong>회원</strong>에게 <strong>메일</strong>을 발송합니다 (상품문의작성시 <strong>동의한 회원</strong>에게만 발송합니다)
						</label>
					</div>
					<div class="checkbox">
						<label for="cmall_note_admin_write_product_qna_reply">
							<input type="checkbox" name="cmall_note_admin_write_product_qna_reply" id="cmall_note_admin_write_product_qna_reply" value="1" <?php echo set_checkbox('cmall_note_admin_write_product_qna_reply', '1', (element('cmall_note_admin_write_product_qna_reply', element('data', $view)) ? true : false)); ?> /> <strong>최고관리자</strong>에게 <strong>쪽지</strong>를 발송합니다 (쪽지사용에 <strong>동의한 관리자</strong>에게만 발송합니다)
						</label>
					</div>
					<div class="checkbox">
						<label for="cmall_note_user_write_product_qna_reply">
							<input type="checkbox" name="cmall_note_user_write_product_qna_reply" id="cmall_note_user_write_product_qna_reply" value="1" <?php echo set_checkbox('cmall_note_user_write_product_qna_reply', '1', (element('cmall_note_user_write_product_qna_reply', element('data', $view)) ? true : false)); ?> /> <strong>회원</strong>에게 <strong>쪽지</strong>를 발송합니다 (쪽지사용에 <strong>동의한 회원</strong>에게만 발송합니다)
						</label>
					</div>
					<div class="checkbox">
						<label for="cmall_sms_admin_write_product_qna_reply">
							<input type="checkbox" name="cmall_sms_admin_write_product_qna_reply" id="cmall_sms_admin_write_product_qna_reply" value="1" <?php echo set_checkbox('cmall_sms_admin_write_product_qna_reply', '1', (element('cmall_sms_admin_write_product_qna_reply', element('data', $view)) ? true : false)); ?> /> <strong>최고관리자</strong>에게 <strong>문자</strong>를 발송합니다 (문자수신동의 여부와 상관없이 <strong>무조건 발송</strong>합니다)
						</label>
					</div>
					<div class="checkbox">
						<label for="cmall_sms_user_write_product_qna_reply">
							<input type="checkbox" name="cmall_sms_user_write_product_qna_reply" id="cmall_sms_user_write_product_qna_reply" value="1" <?php echo set_checkbox('cmall_sms_user_write_product_qna_reply', '1', (element('cmall_sms_user_write_product_qna_reply', element('data', $view)) ? true : false)); ?> /> <strong>회원</strong>에게 <strong>문자</strong>를 발송합니다 (상품문의작성시 <strong>동의한 회원</strong>에게만 발송합니다)
						</label>
					</div>
				</div>
			</div>
			<div class="alert alert-success">
				<p>치환가능변수 : <strong>{홈페이지명}</strong>, <strong>{회사명}</strong>, <strong>{홈페이지주소}</strong>, <strong>{회원아이디}</strong>, <strong>{회원닉네임}</strong>, <strong>{회원실명}</strong>, <strong>{회원이메일}</strong>, <strong>{메일수신여부}</strong>, <strong>{쪽지수신여부}</strong>, <strong>{문자수신여부}</strong>, <strong>{회원아이피}</strong>, <strong>{상품명}</strong>, <strong>{상품주소}</strong>, <strong>{문의제목}</strong>, <strong>{문의내용}</strong>, <strong>{답변내용}</strong></p>
				<p><strong>{메일수신여부}</strong>, <strong>{쪽지수신여부}</strong>, <strong>{문자수신여부}</strong> 는 <strong>동의</strong>, <strong>거부</strong> - 이 2개 중 하나로 치환됩니다</p>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label">
					최고관리자에게 보낼 메일<br />
					<button type="button" class="btn btn-xs btn-default reset_email_to_admin">내용초기화하기</button>
				</label>
				<div class="col-sm-10">
					<div class="form-group col-sm-12">
						<input type="text" class="form-control" name="cmall_email_admin_write_product_qna_reply_title" id="cmall_email_admin_write_product_qna_reply_title" value="<?php echo set_value('cmall_email_admin_write_product_qna_reply_title', element('cmall_email_admin_write_product_qna_reply_title', element('data', $view))); ?>" />
					</div>
					<div class="form-group col-sm-12">
						<?php echo display_dhtml_editor('cmall_email_admin_write_product_qna_reply_content', set_value('cmall_email_admin_write_product_qna_reply_content', element('cmall_email_admin_write_product_qna_reply_content', element('data', $view))), $classname = 'form-control dhtmleditor', $is_dhtml_editor = true, $editor_type = "smarteditor"); ?>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">
					회원에게 보낼 메일<br />
					<button type="button" class="btn btn-xs btn-default reset_email_to_user">내용초기화하기</button>
				</label>
				<div class="col-sm-10">
					<div class="form-group col-sm-12">
						<input type="text" class="form-control" name="cmall_email_user_write_product_qna_reply_title" id="cmall_email_user_write_product_qna_reply_title" value="<?php echo set_value('cmall_email_user_write_product_qna_reply_title', element('cmall_email_user_write_product_qna_reply_title', element('data', $view))); ?>" />
					</div>
					<div class="form-group col-sm-12">
						<?php echo display_dhtml_editor('cmall_email_user_write_product_qna_reply_content', set_value('cmall_email_user_write_product_qna_reply_content', element('cmall_email_user_write_product_qna_reply_content', element('data', $view))), $classname = 'form-control dhtmleditor', $is_dhtml_editor = true, $editor_type = "smarteditor"); ?>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">
					최고관리자에게 보낼 쪽지<br />
					<button type="button" class="btn btn-xs btn-default reset_note_to_admin">내용초기화하기</button>
				</label>
				<div class="col-sm-10">
					<div class="form-group col-sm-12">
						<input type="text" class="form-control" name="cmall_note_admin_write_product_qna_reply_title" id="cmall_note_admin_write_product_qna_reply_title" value="<?php echo set_value('cmall_note_admin_write_product_qna_reply_title', element('cmall_note_admin_write_product_qna_reply_title', element('data', $view))); ?>" />
					</div>
					<div class="form-group col-sm-12">
						<?php echo display_dhtml_editor('cmall_note_admin_write_product_qna_reply_content', set_value('cmall_note_admin_write_product_qna_reply_content', element('cmall_note_admin_write_product_qna_reply_content', element('data', $view))), $classname = 'form-control dhtmleditor', $is_dhtml_editor = true, $editor_type = "smarteditor"); ?>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">
					회원에게 보낼 쪽지<br />
					<button type="button" class="btn btn-xs btn-default reset_note_to_user">내용초기화하기</button>
				</label>
				<div class="col-sm-10">
					<div class="form-group col-sm-12">
						<input type="text" class="form-control" name="cmall_note_user_write_product_qna_reply_title" id="cmall_note_user_write_product_qna_reply_title" value="<?php echo set_value('cmall_note_user_write_product_qna_reply_title', element('cmall_note_user_write_product_qna_reply_title', element('data', $view))); ?>" />
					</div>
					<div class="form-group col-sm-12">
						<?php echo display_dhtml_editor('cmall_note_user_write_product_qna_reply_content', set_value('cmall_note_user_write_product_qna_reply_content', element('cmall_note_user_write_product_qna_reply_content', element('data', $view))), $classname = 'form-control dhtmleditor', $is_dhtml_editor = true, $editor_type = "smarteditor"); ?>
					</div>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">
					최고관리자에게 보낼 문자<br />
					<button type="button" class="btn btn-xs btn-default reset_sms_to_admin">내용초기화하기</button>
				</label>
				<div class="col-sm-10 form-inline has-success ">
					<textarea class="form-control" style="width:140px;background-color:#d9edf7" rows="5" name="cmall_sms_admin_write_product_qna_reply_content" id="cmall_sms_admin_write_product_qna_reply_content"><?php echo set_value('cmall_sms_admin_write_product_qna_reply_content', element('cmall_sms_admin_write_product_qna_reply_content', element('data', $view))); ?></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">
					회원에게 보낼 문자<br />
					<button type="button" class="btn btn-xs btn-default reset_sms_to_user">내용초기화하기</button>
				</label>
				<div class="col-sm-10 form-inline has-success ">
					<textarea class="form-control" style="width:140px;background-color:#d9edf7" rows="5" name="cmall_sms_user_write_product_qna_reply_content" id="cmall_sms_user_write_product_qna_reply_content"><?php echo set_value('cmall_sms_user_write_product_qna_reply_content', element('cmall_sms_user_write_product_qna_reply_content', element('data', $view))); ?></textarea>
				</div>
			</div>
			<div class="btn-group pull-right" role="group" aria-label="...">
				<button type="submit" class="btn btn-success btn-sm">저장하기</button>
			</div>
		<?php echo form_close(); ?>
	</div>
</div>

<script type="text/javascript">
//<![CDATA[
$(function() {
	$('#fadminwrite').validate({
		rules: {
			cmall_email_admin_write_product_qna_reply_content : {'required_smarteditor' : true },
			cmall_email_user_write_product_qna_reply_content : {'required_smarteditor' : true },
			cmall_note_admin_write_product_qna_reply_content : {'required_smarteditor' : true },
			cmall_note_user_write_product_qna_reply_content : {'required_smarteditor' : true }
		}
	});
});

var form_original_data = $('#fadminwrite').serialize();
function check_form_changed() {
	if ($('#fadminwrite').serialize() !== form_original_data) {
		if (confirm('저장하지 않은 정보가 있습니다. 저장하지 않은 상태로 이동하시겠습니까?')) {
			return true;
		} else {
			return false;
		}
	}
	return true;
}

$(document).on('click', '.reset_email_to_admin', function() {
	$('#cmall_email_admin_write_product_qna_reply_title').val('[상품문의] {상품명} 상품 문의에 대한 답변이 등록되었습니다');
	var sHTML = '<table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-left: 1px solid rgb(226,226,225);border-right: 1px solid rgb(226,226,225);background-color: rgb(255,255,255);border-top:10px solid #348fe2; border-bottom:5px solid #348fe2;border-collapse: collapse;"><tr><td style="font-size:12px;padding:20px 30px;font-family: Arial,sans-serif;color: rgb(0,0,0);font-size: 14px;line-height: 20px;"><span style="font-size:14px;font-weight:bold;color:rgb(0,0,0)">안녕하세요 관리자님,</span><br />상품문의 답변이 등록되었습니다</td></tr><tr style="border-top:1px solid #e2e2e2; border-bottom:1px solid #e2e2e2;"><td style="padding:20px 30px;font-family: Arial,sans-serif;color: rgb(0,0,0);font-size: 14px;line-height: 20px;"><div><strong>[문의제목]</strong></div><div>{문의제목}</div><div>&nbsp;</div><div><strong>[답변내용]</strong></div><div>{답변내용}</div><div>&nbsp;</div><div><a href="{상품주소}" target="_blank"><strong>[상품페이지 보기]</strong></a></div><p>&nbsp;</p></td></tr><tr><td style="padding:10px;font-family: Arial,sans-serif;color: rgb(0,0,0);font-size: 14px;line-height: 20px;text-align:center;">{홈페이지명}</td></tr></table>';
	oEditors.getById["cmall_email_admin_write_product_qna_reply_content"].exec("SET_CONTENTS", [sHTML]);
});
$(document).on('click', '.reset_email_to_user', function() {
	$('#cmall_email_user_write_product_qna_reply_title').val('[홈페이지명] {상품명} 상품 문의에 대한 답변입니다');
	var sHTML = '<table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-left: 1px solid rgb(226,226,225);border-right: 1px solid rgb(226,226,225);background-color: rgb(255,255,255);border-top:10px solid #348fe2; border-bottom:5px solid #348fe2;border-collapse: collapse;"><tr><td style="font-size:12px;padding:20px 30px;font-family: Arial,sans-serif;color: rgb(0,0,0);font-size: 14px;line-height: 20px;"><span style="font-size:14px;font-weight:bold;color:rgb(0,0,0)">안녕하세요 {회원닉네임}님,</span><br />상품문의 답변이 등록되었습니다</td></tr><tr style="border-top:1px solid #e2e2e2; border-bottom:1px solid #e2e2e2;"><td style="padding:20px 30px;font-family: Arial,sans-serif;color: rgb(0,0,0);font-size: 14px;line-height: 20px;"><div><strong>[문의제목]</strong></div><div>{문의제목}</div><div>&nbsp;</div><div><strong>[답변내용]</strong></div><div>{답변내용}</div><div>&nbsp;</div><div><a href="{상품주소}" target="_blank"><strong>[상품페이지 보기]</strong></a></div><p>&nbsp;</p></td></tr><tr><td style="padding:10px;font-family: Arial,sans-serif;color: rgb(0,0,0);font-size: 14px;line-height: 20px;text-align:center;">{홈페이지명}</td></tr></table>';
	oEditors.getById["cmall_email_user_write_product_qna_reply_content"].exec("SET_CONTENTS", [sHTML]);
});
$(document).on('click', '.reset_note_to_admin', function() {
	$('#cmall_note_admin_write_product_qna_reply_title').val('[상품문의] {상품명} 상품 문의에 대한 답변이 등록되었습니다');
	var sHTML = '<table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-left: 1px solid rgb(226,226,225);border-right: 1px solid rgb(226,226,225);background-color: rgb(255,255,255);border-top:10px solid #348fe2; border-bottom:5px solid #348fe2;border-collapse: collapse;"><tr><td style="font-size:12px;padding:20px 30px;font-family: Arial,sans-serif;color: rgb(0,0,0);font-size: 14px;line-height: 20px;"><span style="font-size:14px;font-weight:bold;color:rgb(0,0,0)">안녕하세요 관리자님,</span><br />상품문의 답변이 등록되었습니다</td></tr><tr style="border-top:1px solid #e2e2e2; border-bottom:1px solid #e2e2e2;"><td style="padding:20px 30px;font-family: Arial,sans-serif;color: rgb(0,0,0);font-size: 14px;line-height: 20px;"><div><strong>[문의제목]</strong></div><div>{문의제목}</div><div>&nbsp;</div><div><strong>[답변내용]</strong></div><div>{답변내용}</div><div>&nbsp;</div><div><a href="{상품주소}" target="_blank"><strong>[상품페이지 보기]</strong></a></div><p>&nbsp;</p></td></tr><tr><td style="padding:10px;font-family: Arial,sans-serif;color: rgb(0,0,0);font-size: 14px;line-height: 20px;text-align:center;">{홈페이지명}</td></tr></table>';
	oEditors.getById["cmall_note_admin_write_product_qna_reply_content"].exec("SET_CONTENTS", [sHTML]);
});
$(document).on('click', '.reset_note_to_user', function() {
	$('#cmall_note_user_write_product_qna_reply_title').val('{상품명} 상품 문의에 대한 답변입니다');
	var sHTML = '<table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-left: 1px solid rgb(226,226,225);border-right: 1px solid rgb(226,226,225);background-color: rgb(255,255,255);border-top:10px solid #348fe2; border-bottom:5px solid #348fe2;border-collapse: collapse;"><tr><td style="font-size:12px;padding:20px 30px;font-family: Arial,sans-serif;color: rgb(0,0,0);font-size: 14px;line-height: 20px;"><span style="font-size:14px;font-weight:bold;color:rgb(0,0,0)">안녕하세요 {회원닉네임}님,</span><br />상품문의 답변이 등록되었습니다</td></tr><tr style="border-top:1px solid #e2e2e2; border-bottom:1px solid #e2e2e2;"><td style="padding:20px 30px;font-family: Arial,sans-serif;color: rgb(0,0,0);font-size: 14px;line-height: 20px;"><div><strong>[문의제목]</strong></div><div>{문의제목}</div><div>&nbsp;</div><div><strong>[답변내용]</strong></div><div>{답변내용}</div><div>&nbsp;</div><div><a href="{상품주소}" target="_blank"><strong>[상품페이지 보기]</strong></a></div><p>&nbsp;</p></td></tr><tr><td style="padding:10px;font-family: Arial,sans-serif;color: rgb(0,0,0);font-size: 14px;line-height: 20px;text-align:center;">{홈페이지명}</td></tr></table>';
	oEditors.getById["cmall_note_user_write_product_qna_reply_content"].exec("SET_CONTENTS", [sHTML]);
});
$(document).on('click', '.reset_sms_to_admin', function() {
	$('#cmall_sms_admin_write_product_qna_reply_content').val('[상품문의] {상품명} 상품문의답변이 등록되었습니다');
});
$(document).on('click', '.reset_sms_to_user', function() {
	$('#cmall_sms_user_write_product_qna_reply_content').val('[홈페이지명] {상품명} 상품문의에 대한 답변이 등록되었습니다 감사합니다');
});

//]]>
</script>
