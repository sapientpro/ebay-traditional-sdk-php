
phpcs-report:
	@vendor/bin/phpcs src --extensions=php --standard=PSR12 --report=summary -n

phpcs:
	@vendor/bin/phpcs src --extensions=php --standard=PSR12 -n -a

phpcbf:
	@vendor/bin/phpcbf src --extensions=php --standard=PSR12 -n

test:
	@vendor/bin/phpunit test

# Ensures that the TAG variable was passed to the make command
check_tag:
	$(if $(TAG),,$(error TAG is not defined. Pass via "make tag TAG=4.2.1"))

# Creates a release but does not push it. This task updates the changelog
# with the TAG environment variable, replaces the VERSION constant, ensures
# that the source is still valid after updating, commits the changelog and
# updated VERSION constant, and prints out a diff of the last commit.
tag: check_tag
	@echo Tagging $(TAG)
	chag update $(TAG)
	sed -i -e "s/const VERSION = '.*'/const VERSION = '$(TAG)'/" src/Sdk.php
	php -l src/Sdk.php
	git commit -a -m 'update: bump version to $(TAG)'
	@echo "Release has been created. Push using 'make release'"
	@echo "Changes made in the release commit"
	git diff HEAD~1 HEAD

# Creates a release based on the master branch and latest tag. This task
# creates an annotated git tag using chag, pushes the latest tag,
# pushes master, creates a phar and zip, and creates Github release.
# Use "TAG=X.Y.Z make tag" to create a release, and use
# "make release" to push a release. This task requires that the
# OAUTH_TOKEN environment variable is available and the token has permission
# to push to the repository.
release: check_tag
	chag tag
	git push origin master
	git push origin $(TAG)

# Tags the repo and publishes a release.
full_release: tag release

.PHONY: test
