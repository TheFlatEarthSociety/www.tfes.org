all: blaze

blaze:
	rm -rf public/
	mkdir -p public/
	blaze-make -d public/
	rsync -r static/ public/

publish: blaze
	false

.PHONY: all blaze publish
