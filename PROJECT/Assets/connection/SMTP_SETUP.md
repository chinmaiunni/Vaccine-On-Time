The booking confirmation and forgot-password pages both use `smtp.local.php`
in this folder. The existing computer already has this file configured.

On a new computer or server, copy `smtp.example.php` to `smtp.local.php` and
enter the website Gmail address, Gmail app password, and sender address.
The local file is excluded from Git. Keep it private and include it only in
private backups. Do not put credentials in the example file.

The mail server settings remain Gmail SMTP, SSL, port 465.
