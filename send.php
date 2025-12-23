<?php
// ===== 設定 =====
$to = "ibs@wind.ocn.ne.jp";   // ← GANTI dengan email Anda
$subject = "【お問い合わせ】協同組合ホームページより";

// ===== フォームデータ取得 =====
$company = htmlspecialchars($_POST['company'], ENT_QUOTES);
$name    = htmlspecialchars($_POST['name'], ENT_QUOTES);
$email   = htmlspecialchars($_POST['email'], ENT_QUOTES);
$message = htmlspecialchars($_POST['message'], ENT_QUOTES);

// ===== メール本文 =====
$body = "
会社名：{$company}
ご担当者名：{$name}
メールアドレス：{$email}

【お問い合わせ内容】
{$message}
";

// ===== ヘッダー =====
$headers = "From: {$email}";

// ===== メール送信 =====
if (mail($to, $subject, $body, $headers)) {
    echo "お問い合わせありがとうございました。<br>後日、担当者よりご連絡いたします。";
} else {
    echo "送信に失敗しました。時間をおいて再度お試しください。";
}
?>
