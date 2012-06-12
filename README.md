# lithium_kickstart

This is a kickstart project for your li3 needs. It helps you, starting with li3 development.

## Installation

There are two possible ways of integrating. If you already have setup your repository you go this way:

### Installation in an existing (but new) repository

	git remote add kickstart git@github.com:bruensicke/lithium_kickstart.git
	git fetch kickstart
	git merge -s recursive -X theirs kickstart/master

### Installation naked

Clone lithium_kickstart with your favorite git client into your workspace:

	git clone --recursive git@github.com:bruensicke/lithium_kickstart.git new_project

Now, make sure resources is writable:

	chmod -R 0777 resources

## Usage

You can bump the version, as noted in VERSION.txt via this handy command:

	scripts/bump 0.1.0 Added awesome stuff

This updates the CHANGELOG.txt and (if setup that way) auto-commits and tags this release.

*Note: Make sure you want to auto-commit.*

### Configuration

In case you want to have a different VERSION.txt and CHANGELOG.txt file, you can configure that in the bump script like that (see bump line 12-14):

	# please adjust to your needs
	autocommit=true
	version_filename="VERSION.txt"
	changelog_filename="CHANGELOG.txt"

## Versioning

For transparency and insight into our release cycle, and for striving to maintain backwards compatibility, this project will be maintained under the Semantic Versioning guidelines as much as possible.

Releases will be numbered with the follow format:

	<major>.<minor>.<patch>

And constructed with the following guidelines:

* Breaking backwards compatibility bumps the major
* New additions without breaking backwards compatibility bumps the minor
* Bug fixes and misc changes bump the patch

For more information on SemVer, please visit http://semver.org/.

## Credits

* [li3](http://www.lithify.me)
* [twitter bootstrap](http://twitter.github.com/bootstrap/)
* [head.js](http://headjs.com/)
* [jquery](http://jquery.com/)
* [zepto.js](http://zeptojs.com/)
* [icanhaz.js](http://icanhazjs.com/)

Please report any bug, here: https://github.com/bruensicke/lithium_kickstart/issues

