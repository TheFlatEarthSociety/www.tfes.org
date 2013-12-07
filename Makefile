all: blaze

blaze:
	rm -rf public/
	mkdir -p public/
	blaze-make -d public/
	rsync -r static/ public/

publish: blaze
	s3cmd -c .s3cfg sync --delete-removed -P public/ s3://www-tfes-org/
	# Hax because s3cmd doesn't detect text/css MIME type.
	s3cmd -c .s3cfg put -m text/css -P public/vectorlover-sjm.css s3://www-tfes-org/

.PHONY: all blaze publish
