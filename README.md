The official Web site of C.S.E, Hanyang Univ.
===============================================================

## DESCRIPTION

CURLY-FORTNIGHT is an Website of Department of Computer & Science Endgineering of Hanyang University.

Supports import/export individual data via XML compatible with other solutions in 'Tattertools Project'

* Strong support of non-latin compatibility including Korean/Japanese/Chinese
* Supports various installation environments (webservers,databases and languages)
* Provides and extensible plugin and skin architecture
* Expandable from individual blog to blog service platform.
* Supports easy backup and restore via TTXML format, which is supported by various platforms of 'Project Tattertools.'


[![License](https://img.shields.io/badge/license-GPLv2-green.svg)](http://www.gnu.org/licenses/gpl-2.0.html)
[![Unstable](https://img.shields.io/badge/unstable-2.0a4-red.svg)](https://github.com/Needlworks/Textcube/archive/latest-unstable.zip)
[![Testing](https://img.shields.io/badge/testing-1.10.10-green.svg)](https://github.com/Needlworks/Textcube/archive/latest-testing.zip)
[![Stable](https://img.shields.io/badge/stable-1.10.10-blue.svg)](https://github.com/Needlworks/Textcube/archive/latest-stable.zip)

## HISTORY

CURLY-FORTNIGHT is based on a website, http://cse.hanyang.ac.kr. Although it was official website of my department, it just was not being managed efficiently. When you visit that website, you can see that informations have not changed since 2013.
Therefore we decided to make our own official website, that is in good hands! 

## REQUIREMENTS (CURRENT VERSION)
CURLY-FORTNIGHT is just a wevsite. So you don't need something to install. You just need internet connected. 

* Language
 * HTML
  * with CSS, and javascript
* Web servers (Need at least one environment)
 * Apache > 2.1
  * fancyURL support with mod_rewrite module (recommended)
 * Nginx > 1.1
 * Lighttpd > 1.4
 * PHP built-in Web Server > 5.5.7
 * IIS > 5.0
  * with ISAPI Rewrite Filter
* Database Management System (Need at least one environment)
 * MySQL > 5.0 / MariaDB > 5.1 with UTF-8 character set and collation setting
  * With PHP MySQLi extension (MySQLnd support is in development stage.)
 * Cubrid > R2008
 * PostgreSQL > 8.3
 * Sqlite > 3.0

For massive service / Heavy load environments

 * APC (Alternative PHP Cache) pecl package with PHP PEAR
 * XCache
 * memcached module

are strongly recommended.

## INSTALLATION

CURLY-FORTNIGHT is just a website. So you need to install,

* curiosity about CURLY-FORTNIGHT❤
* affection towards CURLY-FORTNIGHT❤

## RUNNING

* 캡쳐화면 넣으면 될 듯?

## DOCUMENTATION

### USERS
* [Shortcuts](https://github.com/Needlworks/Textcube/wiki/shortCutList)


### SPECIFICATIONS AND STRUCTURES

* [Requirements](https://github.com/Needlworks/Textcube/wiki/requirements)

* [Upgrade instruction from 1.7 to 1.8 or higher version](https://github.com/Needlworks/Textcube/wiki/attentionOnInstallation)
* [Configurable options](https://github.com/Needlworks/Textcube/wiki/configOptions)

* [Skin](https://github.com/Needlworks/Textcube/wiki/SkinDocs)
* [Skin replacer list](https://github.com/Needlworks/Textcube/wiki/replacer)
* [Predefined styles](https://github.com/Needlworks/Textcube/wiki/skinpredefined)
* [Skin information file specification](https://github.com/Needlworks/Textcube/wiki/skin/index_xml)
* [Tattertools/Textcube online manual wiki](http://help.tattertools.com)

* [Plugins](https://github.com/Needlworks/Textcube/wiki/PluginDocs)
* [Plugin Creation](https://github.com/Needlworks/Textcube/wiki/PluginIntroduction)
* [Plugin Specification](https://github.com/Needlworks/Textcube/wiki/pluginSpec)
* [Plugin Event Listeners](https://github.com/Needlworks/Textcube/wiki/pluginEvents)

* [TTXML format specification](https://github.com/Needlworks/Textcube/wiki/TTXML)
* [WPI package creation](https://github.com/Needlworks/Textcube/wiki/WPI)

### DEVELOPMENT
* [Ticketing process](https://github.com/Needlworks/Textcube/wiki/ticketProcess)
* [Coding guideline](https://github.com/Needlworks/Textcube/wiki/codingGuideline)
* [Commiter/Reporter List](https://github.com/Needlworks/Textcube/wiki/contributorList)

* [Developing references](https://github.com/Needlworks/Textcube/wiki/devReference)
* [Textcube 1.10/2.0 changes for Plugin Developers](https://docs.google.com/document/d/1oEBmbT5t7_wDzJLxLg9tfjAu2QULCW6E9I00nKzV6jw/pub)
* [Textcube 1.8 changes for Plugin Developers](http://docs.google.com/View?id=dgc24tzr_136ckbg4ngn)
* [Textcube 1.8 changes for Skin Designers](http://docs.google.com/View?id=dgc24tzr_138hhfbmwdg)
* [Textcube 1.8 changes for Server administrators and service hosts / maintainers](http://docs.google.com/View?id=dgc24tzr_137gr9xpdfb)
* [Textcube 1.8 changes for coding geeks](http://docs.google.com/View?id=dgc24tzr_140c9wz6nc5)

## EXTERNAL LINKS

* [Textcube notice blog](http://notice.textcube.org/ko)
* [Needlworks](http://www.needlworks.org)
* [Needlworks Blog](http://blog.needlworks.org)
* [Tatter Network Foundation forum](http://forum.tattersite.com/ko)
