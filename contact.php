<?php include "header_footer_sidebar/header.php"; ?>


	<div id='content'>
		<h3 id="requests">お問い合わせ</h3>
		<form class="requests">
		<dl>
			<dt>名前</dt>
			<dd><input type="text" name="name" value="" placeholder="お名前を入力してください"></dd>
			<dt>メールアドレス</dt>
			<dd><input type="text" name="mail" value="" placeholder="メールアドレスを入力してください"></dd>
			<dt>本文</dt>
			<dd><textarea name="body"></textarea></dd>
		</dl>
		<input type="submit" value="送信">
		</form>
	</div>


<?php include "header_footer_sidebar/footer.php"; ?>
