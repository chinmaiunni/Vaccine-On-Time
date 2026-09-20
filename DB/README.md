# Database setup

For a new installation, create an empty `db_vaccine` database in phpMyAdmin
and import `db_vaccine.sql`. This original export includes the saved vaccines,
categories, centres, accounts, and other records, including existing email addresses.

`db_vaccine (1).sql` is an alternative original export. Import only one export
into an empty database; do not import both or overwrite the existing working database.

`schema.sql` is an optional structure-only export for starting with no records.
Use the original export above when you want the included data.

To send mail on a new installation, follow
`../PROJECT/Assets/connection/SMTP_SETUP.md` and configure your own local SMTP settings.
The Gmail credentials file is excluded from Git.
