
NOVA LARAVEL on GCP



**NOVA Setup**

migrate all tables

`php artisan migrate`

create first user

`php artisan nova:user`


Connect on Socket

`./cloud_sql_proxy -instances="YOUR_INSTANCE_NAME"=tcp:3307 -credential_file="YOUR_LOCAL_CREDENTIAL.json"`


`php artisan migrate:fresh --force`




**Google Cloud Plateform Setup**

deploy on GCP

`gcloud app deploy`




