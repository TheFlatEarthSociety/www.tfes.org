SHELL=/bin/bash

S3_CMD=s3cmd -c .s3cfg -P
S3_BUCKET=www.tfes.org

all: blaze

blaze:
	rm -rf public/
	mkdir -p public/
	blaze-make -d public/
	rsync -r static/ public/

publish: blaze
	$(S3_CMD) sync --rexclude='\.(html|rss)$$' --delete-removed --add-header='Cache-Control: max-age=604800' public/ s3://$(S3_BUCKET)/
	find public/ -name '*.html' -o -name '*.rss' | while read f; do $(S3_CMD) --add-header='Cache-Control: max-age=1800' put "$$f" s3://$(S3_BUCKET)/"$${f/public\//}"; done
	# Hax because s3cmd doesn't detect text/css MIME type.
	$(S3_CMD) put -m text/css public/tfes.css --add-header='Cache-Control: max-age=14400' s3://$(S3_BUCKET)/

.PHONY: all blaze publish
