S3_CMD=s3cmd -c .s3cfg --encoding=UTF-8 -P
S3_BUCKET=www.tfes.org

all: blaze

blaze:
	rm -rf public/
	mkdir -p public/
	blaze-make -d public/
	rsync -r static/ public/

publish: blaze
	$(S3_CMD) sync --delete-removed public/ s3://$(S3_BUCKET)/
	# Hax because s3cmd doesn't detect text/css MIME type.
	$(S3_CMD) put -m text/css public/tfes.css s3://$(S3_BUCKET)/

.PHONY: all blaze publish
