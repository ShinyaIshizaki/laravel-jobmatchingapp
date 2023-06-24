<h1>確認画面</h1>
<p>お名前：{{ $request->contactPersonName }}</p>
<p>返信先：{{ $request->contactPersonEmail }}</p>
<p>問合せ内容：{{ $request->contactMsg }}</p>
<input type="hidden" name="contact_name" value="{{ $request->contact_name }}" />
<input type="hidden" name="contact_email" value="{{ $request->contact_email }}" />
<input type="hidden" name="contact_msg" value="{{ $request->contact_msg }}" />
<input type="submit" value="送信">