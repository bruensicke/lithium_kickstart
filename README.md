# lithium_kickstart

This is a kickstart project for your li3 needs. It helps you, starting with li3 development.

## Installation

Clone lithium_kickstart with your favorite git client into your workspace:

	git clone --recursive git@github.com:bruensicke/lithium_kickstart.git new_project

Now, make sure resources is writable:

	chmod -R 0777 resources

## Usage

You can bump the version, as noted in VERSION.txt via this handy command:

	scripts/bump 0.1.0 Added awesome stuff

*Note: This command also updates the CHANGELOG.txt.*

## Versioning

For transparency and insight into our release cycle, and for striving to maintain backwards compatibility, lithium_kickstart will be maintained under the Semantic Versioning guidelines as much as possible.

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

