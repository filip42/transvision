<?php

$author_urls = [
    'flod'       => 'https://github.com/flodolo',
    'jesus'      => 'https://github.com/tx2z',
    'keko'       => 'https://github.com/keko',
    'MikkCZ'     => 'https://github.com/MikkCZ',
    'pascal'     => 'https://github.com/pascalchevrel',
    'SkySymbol'  => 'https://github.com/SkySymbol',
    'sphinx'     => 'https://github.com/SphinxKnight',
    'tchevalier' => 'https://github.com/TheoChevalier',
    'Thegennok'  => 'https://github.com/Thegennok',
];

$releases = [
    '1.0'   => '2012-07-27',
    '1.1'   => '2012-08-01',
    '1.2'   => '2012-08-10',
    '1.3'   => '2012-08-17',
    '1.4'   => '2012-09-04',
    '1.5'   => '2012-10-02',
    '1.6'   => '2012-10-18',
    '1.7'   => '2012-10-24',
    '1.8'   => '2013-01-04',
    '1.9'   => '2013-01-11',
    '2.0'   => '2013-01-18',
    '2.1'   => '2013-01-30',
    '2.2'   => '2013-02-28',
    '2.3'   => '2013-03-22',
    '2.4'   => '2013-04-10',
    '2.5'   => '2013-04-18',
    '2.6'   => '2013-06-14',
    '2.7'   => '2013-07-05',
    '2.8'   => '2013-08-09',
    '2.9'   => '2013-10-26',
    '3.0'   => '2013-12-18',
    '3.1'   => '2014-02-24',
    '3.2'   => '2014-03-17',
    '3.3'   => '2014-05-20',
    '3.4'   => '2014-06-25',
    '3.5'   => '2014-09-29',
    '3.5.1' => '2014-10-07',
    '3.6'   => '2015-01-22',
    '3.7'   => '2015-04-09',
    '3.8'   => '2015-06-15',
    '3.8.1' => '2015-06-24',
    '3.9'   => '2015-10-08',
    '3.10'  => '2015-11-13',
];

$changelog = [
    '3.10' => [
        [
            'message' => ['Provide a way to go back to the search view from the onestring view'],
            'section' => ['end_user'],
            'type'    => ['better'],
            'commit'  => ['b4ae1a9499334885259e8ed65da764a2717f5a9a'],
            'authors' => ['flod'],
        ],
        [
            'message' => ['Add a “copy to clipboard” button next to a translation for SUMO localizers'],
            'section' => ['end_user'],
            'type'    => ['better'],
            'issues'  => ['520'],
            'authors' => ['pascal', 'sphinx'],
        ],
        [
            'message' => ['Add a language prefix to the subject when reporting bug on Bugzilla'],
            'section' => ['end_user'],
            'type'    => ['better'],
            'issues'  => ['529'],
            'authors' => ['MikkCZ'],
        ],
        [
            'message' => ['Track Devtools in new path'],
            'section' => ['end_user'],
            'type'    => ['bug'],
            'commit'  => ['b49de20b924d58043b043c9a59c35f43f1dc9b44'],
            'authors' => ['flod'],
        ],
        [
            'message' => ['The result counter does not update when filtering by folder'],
            'section' => ['end_user'],
            'type'    => ['bug'],
            'issues'  => ['525'],
            'authors' => ['flod'],
        ],
        [
            'message' => ['Translation memory and search APIs allow now querying all repositories with a single call'],
            'section' => ['developers'],
            'type'    => ['better'],
            'issues'  => ['392'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Generate <a href="https://transvision-beta.mozfr.org/docs/">internal API documentation</a> automatically on pushes to master'],
            'section' => ['developers'],
            'type'    => ['better'],
            'issues'  => ['518'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Add Travis CI status icon on README file on GitHub'],
            'section' => ['other'],
            'type'    => ['better'],
            'commit'  => ['f9731e5eb70ec9368124006714b43953c60ade1f'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Cleanup: Remove Gaia 1.3 and 1.4 references in our code'],
            'section' => ['other'],
            'type'    => ['better'],
            'issues'  => ['521'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Various code clean ups and additional automatic tests'],
            'section' => ['other'],
            'type'    => ['better'],
            'authors' => ['the team'],
        ],
    ],
    '3.9' => [
        [
            'message' => ['Update Transvision for mozilla.org migration to GitHub'],
            'section' => ['end_user'],
            'type'    => ['change'],
            'issues'  => ['507'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Add support for Firefox for iOS'],
            'section' => ['end_user'],
            'type'    => ['change'],
            'commit'  => ['9868ea238784b4eace7086b1a9eba0e8bd660181'],
            'authors' => ['flod'],
        ],
        [
            'message' => ['Add a “clear search” button next to the search box'],
            'section' => ['end_user'],
            'type'    => ['better'],
            'issues'  => ['482'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Automatically bust JavaScript and CSS caches with each new release'],
            'section' => ['end_user'],
            'type'    => ['better'],
            'issues'  => ['486'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Improve search for entities'],
            'section' => ['end_user'],
            'type'    => ['better'],
            'commit'  => ['4b38cac0d623568238ac5ac05874142be135a8e1'],
            'authors' => ['flod'],
        ],
        [
            'message' => ['Fix OmegaT export data which was invalid XML'],
            'section' => ['end_user'],
            'type'    => ['bug'],
            'issues'  => ['318'],
            'authors' => ['keko'],
        ],
        [
            'message' => ['Upgrade Atoum to 2.x branch for PHP 7 compatibility'],
            'section' => ['developers'],
            'type'    => ['better'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Make functional tests run locally as they do on Travis'],
            'section' => ['developers'],
            'type'    => ['better'],
            'authors' => ['tchevalier'],
        ],
        [
            'message' => ['Fix assets folder not created on a fresh install'],
            'section' => ['developers'],
            'type'    => ['bug'],
            'issues'  => ['502'],
            'authors' => ['SkySymbol'],
        ],
        [
            'message' => ['Restructure storage and extraction of strings to save space and simplify file structure'],
            'section' => ['other'],
            'type'    => ['better'],
            'commit'  => ['91609fa8c0b72f1c1317f866992087de134135b5'],
            'authors' => ['flod'],
        ],
        [
            'message' => ['Piwik template integration'],
            'section' => ['other'],
            'type'    => ['better'],
            'issues'  => ['493'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Various code and UI clean ups'],
            'section' => ['other'],
            'type'    => ['better'],
            'authors' => ['the team'],
        ],
    ],
    '3.8.1' => [
        [
            'message' => ['Regression: ← and → flags are displayed with some queries'],
            'section' => ['end_user'],
            'type'    => ['bug'],
            'issues'  => ['488'],
            'authors' => ['flod'],
        ],
    ],
    '3.8' => [
        [
            'message' => ['Add a widget in search form to switch source and target locales'],
            'section' => ['end_user'],
            'type'    => ['better'],
            'issues'  => ['471'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Improve performances for main search view'],
            'section' => ['end_user'],
            'type'    => ['better'],
            'authors' => ['flod'],
        ],
        [
            'message' => ['Add cookie for search type'],
            'section' => ['end_user'],
            'type'    => ['better'],
            'authors' => ['flod'],
        ],
        [
            'message' => ['Better detection of l10n.js style variables in strings'],
            'section' => ['end_user'],
            'type'    => ['better'],
            'authors' => ['flod'],
        ],
        [
            'message' => ['Use proper plural form for the string "Displaying x results"'],
            'section' => ['end_user'],
            'type'    => ['better'],
            'authors' => ['tchevalier'],
        ],
        [
            'message' => ['Regression: component filter is broken in string search results'],
            'section' => ['end_user'],
            'type'    => ['bug'],
            'authors' => ['flod'],
        ],
        [
            'message' => ['Regression: tabs no longer working on Health Status view'],
            'section' => ['end_user'],
            'type'    => ['bug'],
            'authors' => ['tchevalier'],
        ],
        [
            'message' => ['Regression: fix Select button on TMX download view'],
            'section' => ['end_user'],
            'type'    => ['bug'],
            'authors' => ['tchevalier'],
        ],
        [
            'message' => ['Results are displaying HTML added by Transvision when searching for entities'],
            'section' => ['end_user'],
            'type'    => ['bug'],
            'issue'   => ['461'],
            'authors' => ['tchevalier'],
        ],
        [
            'message' => ['Depending on the repository queried, the <var>locales</var> service used to return a JSON feed with or without numeric keys'],
            'section' => ['external_api'],
            'type'    => ['bug'],
            'issues'  => ['472'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Allow developers to toggle PERF_CHECK from config.ini'],
            'section' => ['developers'],
            'type'    => ['better'],
            'authors' => ['tchevalier'],
        ],
        [
            'message' => ['Add upstream remote repository automatically in setup script'],
            'section' => ['developers'],
            'type'    => ['better'],
            'issues'  => ['466'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Improve Travis CI config for faster tests'],
            'section' => ['developers'],
            'type'    => ['better'],
            'issues'  => ['476'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Automate functional testing of our JSON API'],
            'section' => ['developers'],
            'type'    => ['better'],
            'issues'  => ['474'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Make Transvision code HTTPS friendly'],
            'section' => ['other'],
            'type'    => ['better'],
            'issues'  => ['452'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Add reference about Apache and mod_rewrite in README file'],
            'section' => ['other'],
            'type'    => ['better'],
            'issues'  => ['455'],
            'authors' => ['Thegennok'],
        ],
        [
            'message' => ['Remove references to Firefox Metro in extraction scripts'],
            'section' => ['other'],
            'type'    => ['bug'],
            'authors' => ['SkySymbol'],
        ],
    ],
    '3.7' => [
        [
            'message' => ['The <a href="https://transvision.mozfr.org/?sourcelocale=en-US&amp;locale=fr&amp;repo=aurora&amp;t2t=t2t&amp;recherche=Bookmarks">glossary</a> view looks better and is visually more consistent with the rest of the site'],
            'section' => ['end_user'],
            'type'    => ['better'],
            'authors' => ['flod'],
        ],
        [
            'message' => ['The application is more usable when JavaScript is disabled'],
            'section' => ['end_user'],
            'type'    => ['better'],
            'authors' => ['flod'],
        ],
        [
            'message' => ['Added number of results found in <a href="https://transvision.mozfr.org/variables/">Variables Overview</a> view'],
            'section' => ['end_user'],
            'type'    => ['better'],
            'issues'  => ['438'],
            'authors' => ['SkySymbol'],
        ],
        [
            'message' => ['Improve result quality of the <a href="https://transvision.mozfr.org/variables/">Variables Overview</a> view by ignoring known false-positives and detecting l10n.js style variables'],
            'section' => ['end_user'],
            'type'    => ['better'],
            'issues'  => ['444', '446'],
            'authors' => ['flod'],
        ],
        [
            'message' => ['Searching for uppercase/lowercase strings with diacritics (ex: überdeckende vs Überdeckende) now works'],
            'section' => ['end_user'],
            'type'    => ['bug'],
            'issues'  => ['386'],
            'authors' => ['flod'],
        ],
        [
            'message' => ['HTML views which also exist as a JSON view now have a banner linking to the JSON file and our public API documentation'],
            'section' => ['external_api'],
            'type'    => ['better'],
            'issues'  => ['431'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Repository now has a CONTRIBUTING.md file with code conventions displayed for each pull request'],
            'section' => ['developers'],
            'type'    => ['new'],
            'issues'  => ['403'],
            'authors' => ['SkySymbol'],
        ],
        [
            'message' => ['Added a command line option to glossaire.sh to not create a data snapshot when ran locally: <code>glossaire.sh no-snapshot</code>'],
            'section' => ['developers'],
            'type'    => ['new'],
            'authors' => ['flod'],
        ],
        [
            'message' => ['Coding standards are enforced via php-cs-fixer, which is now installed via Composer. If you want to fix your code before committing, use the command <code>./vendor/bin/php-cs-fixer fix</code>. This is now a requirement as your build will fail on Travis CI if your code does not follow the project standards'],
            'section' => ['developers'],
            'type'    => ['new'],
            'issues'  => ['435'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['In Composer, we now use the tilde (~) operator to indicate that we don’t want to upgrade a dependency if its public API changes. See <a href="https://github.com/mozfr/transvision/commit/b64012814d017f508a7f6777658b7fdd49fc808f">this commit</a> for an example'],
            'section' => ['developers'],
            'type'    => ['better'],
            'issues'  => ['427'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Search results could take up to 20 seconds to display if caching was disabled as it was querying a remote ressource for each search result leading to hundreds of http requests. This is now down to one http request cached in RAM per view'],
            'section' => ['developers'],
            'type'    => ['bug'],
            'issues'  => ['443'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Extraction of strings from hg repositories was failing if it found a non-UTF8 source file and resulted in a damaged dataset causing searches for the locale to lead to a visually broken page. We now skip folders containing files not in UTF8 and index the rest of the files. We also log the error to report it to the localizer in Bugzilla'],
            'section' => ['other'],
            'type'    => ['bug'],
            'issues'  => ['447'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['In <a href="https://transvision.mozfr.org/productization/">Productization</a> view, images as data URIs are sanitized before being displayed'],
            'section' => ['other'],
            'type'    => ['bug'],
            'authors' => ['flod'],
        ],
    ],
    '3.6' => [
        [
            'message' => ['Added a new view exposing all <a href="https://transvision.mozfr.org/unchanged/">strings that are kept identical to en-US</a>'],
            'section' => ['end_user'],
            'type'    => ['new'],
            'authors' => ['flod'],
        ],
        [
            'message' => ['Notify user when we don’t display all the results and add a count of search results'],
            'section' => ['end_user'],
            'type'    => ['new'],
            'issues'  => ['360'],
            'authors' => ['SkySymbol'],
        ],
        [
            'message' => ['Aurora is now the default repository for Desktop searches'],
            'section' => ['end_user'],
            'type'    => ['change'],
            'authors' => ['flod'],
        ],
        [
            'message' => ['Mozilla.org searches now use en-US instead of en-GB as source locale (reflects a change on the reference locale for templates on mozilla.org)'],
            'section' => ['end_user'],
            'type'    => ['change'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Smarter locale selection in searches when you switch repositories'],
            'section' => ['end_user'],
            'type'    => ['better'],
            'authors' => ['flod'],
        ],
        [
            'message' => ['API no longer returns an invalid request for a non existent string ID'],
            'section' => ['external_api'],
            'type'    => ['bug'],
            'issues'  => ['380'],
            'authors' => ['flod'],
        ],
        [
            'message' => ['Queries for mozilla.org no longer return English text when the string is untranslated'],
            'section' => ['external_api'],
            'type'    => ['change'],
            'authors' => ['flod'],
        ],
        [
            'message' => ['Continuous integration of commits to master to the <a href="https://transvision-beta.mozfr.org/">beta</a> site via GitHub notification API'],
            'section' => ['developers'],
            'type'    => ['new'],
            'issues'  => ['400'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Replace Kint library by Symfony/var_dumper library for quick debugging, new <code>dump()</code> and <code>cli_dump()</code> helper functions'],
            'section' => ['developers'],
            'type'    => ['new'],
            'issues'  => ['413'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Archlinux compatibility fix: Force the use of Python 2 and not 3'],
            'section' => ['developers'],
            'type'    => ['bug'],
            'authors' => ['SkySymbol'],
        ],
        [
            'message' => ['Bugzilla and Cache classes were moved as external libraries for sharing with other l10n-drivers PHP tools'],
            'section' => ['developers'],
            'type'    => ['change'],
            'authors' => ['flod'],
        ],
        [
            'message' => ['Front end code cleanups to reorganize our JavaScript and CSS code and minimize page load time of static assets'],
            'section' => ['developers'],
            'type'    => ['better'],
            'authors' => ['flod'],
        ],
        [
            'message' => ['Fix views with either broken layout due to HTML not escaped from localized strings or HTML deleted instead of escaped'],
            'section' => ['other'],
            'type'    => ['bug'],
            'issues'  => ['381', '388', '397'],
            'authors' => ['pascal', 'flod'],
        ],
        [
            'message' => ['The changelog page now includes links to the commits for a release on Github and is easier to update at release time'],
            'section' => ['other'],
            'type'    => ['better'],
            'authors' => ['flod', 'pascal'],
        ],
    ],
    '3.5.1' => [
        [
            'message' => ['Fixed a bug that prevented new Gaia repositories – fetched from external web service – to appear in the list of available repositories when performing a search'],
            'section' => ['end_user'],
            'type'    => ['bug'],
            'authors' => ['flod'],
        ],
    ],
    '3.5' => [
        [
            'message' => ['Starting with this release, adding a locale to a repository (mostly Gaia) no longer requires releasing a new version of Transvision as the list of locales per repositories is now fetched from a web service maintained by flod, which means that adding new locales to Transvision can now be done at any time'],
            'section' => ['end_user'],
            'type'    => ['new'],
            'authors' => ['flod'],
        ],
        [
            'message' => ['<a href="https://transvision.mozfr.org/downloads/">OmegaT export</a>: It is now possible to export all the translation memory to a TMX file using the specific syntax used by OmegaT'],
            'section' => ['end_user'],
            'type'    => ['new'],
            'authors' => ['keko'],
        ],
        [
            'message' => ['<a href="https://transvision.mozfr.org/showrepos/">“health status” view</a>: We now provide an overview of all the repositories and projects indexed for a locale by Transvision with basic metrics on the status of translation as seen by Transvision'],
            'section' => ['end_user'],
            'type'    => ['experimental'],
            'authors' => ['tchevalier'],
        ],
        [
            'message' => ['String view cuts the last letter of en-US strings'],
            'section' => ['end_user'],
            'type'    => ['bug'],
            'issues'  => ['301'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Fixed Open Sans web font not loading and falling back to a better default font'],
            'section' => ['end_user'],
            'type'    => ['bug'],
            'authors' => ['flod'],
        ],
        [
            'message' => ['Improved variable detection in variables view'],
            'section' => ['end_user'],
            'type'    => ['better'],
            'issues'  => ['316'],
            'authors' => ['flod'],
        ],
        [
            'message' => ['<a href="https://transvision.mozfr.org/gaia/">Gaia view</a> now has URL anchors for subsections and less false positives in translation consistency table'],
            'section' => ['end_user'],
            'type'    => ['better'],
            'authors' => ['flod'],
        ],
        [
            'message' => ['Age of data mentioned in the footer "Data last updated XXX"'],
            'section' => ['end_user'],
            'type'    => ['better'],
            'authors' => ['flod'],
        ],
        [
            'message' => ['Added gaia 2.0 support'],
            'section' => ['end_user'],
            'type'    => ['better'],
            'authors' => ['tchevalier'],
        ],
        [
            'message' => ['One string view now has <a href="https://transvision.mozfr.org/string/?entity=browser/chrome/browser/devtools/netmonitor.properties:paramsEmptyText&amp;repo=central#da">per locale anchors</a>'],
            'section' => ['end_user'],
            'type'    => ['better'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Data storage no longer aggressively escape HTML tags, quotes and special characters such as &amp; and /, which makes searching for HTML tags or things like &amp;BrandShortName; or \n possible now'],
            'section' => ['end_user'],
            'type'    => ['better'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Faster API response (3x on average) by serializing our datasets with PHP before using them'],
            'section' => ['external_api'],
            'type'    => ['better'],
            'issues'  => ['303'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Fixed various API regressions and bugs reported by Keko'],
            'section' => ['external_api'],
            'type'    => ['bug'],
            'issues'  => ['303'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Gaia 1.2 (gaia_1_2) is no longer a supported repository source, replaced by Gaia 2.0 (gaia_2_0)'],
            'section' => ['external_api'],
            'type'    => ['change'],
            'authors' => ['team'],
        ],
        [
            'message' => ['New <code>start.sh</code> script at the root of the repository, launches dev mode, checks system dependencies and generates a working default config.ini file if it doesn’t exist, making getting started in development mode error free and even easier. Script entirey compatible with Mac/Linux (but not Windows yet)'],
            'section' => ['developers'],
            'type'    => ['new'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['<code>start.sh -remote</code> allows launching the webserver with 0.0.0.0 IP to make it accessible to the host OS if you develop in a VM'],
            'section' => ['developers'],
            'type'    => ['new'],
        ],
        [
            'message' => ['<code>Utils::logScriptPerformances()</code> now returns correct rounded values'],
            'section' => ['developers'],
            'type'    => ['bug'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Check if Composer (PHP dependency manager) is not installed globally before downloading it'],
            'section' => ['developers'],
            'type'    => ['better'],
            'authors' => ['Julien Itard'],
        ],
        [
            'message' => ['<code>Strings::endsWith()</code> and <code>Strings::startsWith()</code> now accept arrays of strings for checking, e.g. <code>Strings::startsWith(\'hello!\', [\'!\', \'?\', \'.\'])</code>'],
            'section' => ['developers'],
            'type'    => ['better'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['MPL2 licence file now included in the repository root'],
            'section' => ['other'],
            'type'    => ['better'],
            'authors' => ['Anthony Maton'],
        ],
    ],
    '3.4' => [
        [
            'message' => ['<strong>On demand TMX generation:</strong> The static <a href="https://transvision.mozfr.org/downloads/">download page for TMX</a> was replaced by a dynamic one in which you can select which repositories you want to use to build the translation memory'],
            'section' => ['end_user'],
            'type'    => ['new'],
            'authors' => ['tchevalier'],
        ],
        [
            'message' => ['<strong>Translation Consistency in Gaia view:</strong> The <a href="https://transvision.mozfr.org/gaia/">gaia view</a> has an additional table listing all the inconsistencies in translations in your repository, those are of course not necessarily bugs as an English term can be translated differently depending on context'],
            'section' => ['end_user'],
            'type'    => ['new'],
            'authors' => ['flod'],
        ],
        [
            'message' => ['<strong>Client-side filtering of search results for Desktop products:</strong> There are now <a href="https://transvision.mozfr.org/?recherche=home&amp;repo=central&amp;sourcelocale=en-US&amp;locale=fr&amp;search_type=strings#editor">filtering buttons on top of search results</a> for any search on central/aurora/beta/release allowing you to filter the results per top folder (browser, mail, calendar, suite…)'],
            'section' => ['end_user'],
            'type'    => ['new'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Gaia 1.1 was removed'],
            'section' => ['end_user'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Updated locales supported per repository'],
            'section' => ['end_user'],
            'authors' => ['team'],
        ],
        [
            'message' => ['<strong>Brand new JSON API:</strong> The old JSON API was replaced by a brand new one providing more services and which is also easier to extend to provide more services in the future. All the calls to the old API are now redirected to the new one which means that we shouldn’t break any current user. The API is <a href="https://github.com/mozfr/transvision/wiki/JSON-API">documented on our Wiki</a> and all users of our old API are invited to update their script and evaluate the new services we propose'],
            'section' => ['external_api'],
            'type'    => ['new'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['You can now log the memory peak and generation time of scripts by setting <code>PERF_CHECK</code> to <code>true</code> in <code>app/inc/constants.php</code>'],
            'section' => ['developers'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Logs are now stored at the root of the application in the <code>log/</code> folder'],
            'section' => ['developers'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['New Project class centralizing key data such as the list of repositories, locales per repositories, locale code depending on the context… This allows accessing the project data anywhere in the code'],
            'section' => ['developers'],
            'authors' => ['pascal', 'flod'],
        ],
        [
            'message' => ['<a href="https://transvision.mozfr.org/productization/">Productization</a> view was updated to remove Metro files'],
            'section' => ['other'],
            'authors' => ['flod'],
        ],
        [
            'message' => ['Many refactorings to improve maintainability, page load speed and memory consumption of the views'],
            'section' => ['other'],
            'authors' => ['team'],
        ],
    ],
    '3.3' => [
        [
            'message' => ['<strong>Search hints:</strong> If your search for a word or entity yields no result, Transvision <a href="https://transvision.mozfr.org/?recherche=lookmark&amp;repo=central&amp;sourcelocale=en-US&amp;locale=fr&amp;search_type=strings">proposes similar searches that do yield results</a>'],
            'section' => ['end_user'],
            'type'    => ['new'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['<strong>Dynamic Gaia comparison view:</strong> allows <a href="https://transvision.mozfr.org/gaia/?locale=fr&amp;repo1=gaia_1_3&amp;repo2=gaia_1_4">comparison of combinations of repositories/locales</a>'],
            'section' => ['end_user'],
            'type'    => ['new'],
            'authors' => ['tchevalier'],
        ],
        [
            'message' => ['Gaia 1.4 support'],
            'section' => ['end_user'],
            'authors' => ['tchevalier'],
        ],
        [
            'message' => ['List of views removed from footer to remove visual clutter, all views are reachable via the menu button'],
            'section' => ['end_user'],
            'authors' => ['tchevalier'],
        ],
        [
            'message' => ['Make search possible for special characters (", &lt;, &gt;, etc.)'],
            'section' => ['end_user'],
            'authors' => ['flod'],
        ],
        [
            'message' => ['Tamil added for Gaia'],
            'section' => ['end_user'],
            'authors' => ['flod'],
        ],
        [
            'message' => ['Fixed error 500 error when downloading TMX files'],
            'section' => ['end_user'],
            'authors' => ['flod'],
        ],
        [
            'message' => ['Improved accessibility of our views, suggestions by experts from <a href="http://acs-horizons.fr/">ACS Horizons</a> and <a href="http://temesis.com/">Temesis</a>'],
            'section' => ['end_user'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['<strong>Rapid installation via data snapshots:</strong> There is now a specific install process for developers willing to help on the PHP/HTML/JS/CSS sides of the application only that doesn’t require a full production install, running app/scripts/dev-setup.sh instead of app/scripts/setup.sh will install and launch a working Transvision server in a few minutes and use little hard disk space, compared to the full production install mode that needs several hours of installation because of the downloading of all of the Mozilla code and data repositories'],
            'section' => ['developers'],
            'type'    => ['new'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['<strong>Continuous integration via Travis CI:</strong> Transvision is now using <a href="https://travis-ci.org/mozfr/transvision">Travis CI</a> so as that all pull requests to the GitHub repository get automatic unit tests launched on PHP 5.4 and 5.5.'],
            'section' => ['developers'],
            'type'    => ['new'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Large reorganization of code: new MVC approach, strict separation of back end and front end code, some of the views ported to MVC, <a href="https://github.com/mozfr/transvision/commit/a7df74cc5462308b2cb2e60a6ead8a9136b7766e">(more details in the commit message</a>), relocated and refactored bash scripts into app/scripts/ folder&hellip;'],
            'section' => ['developers'],
            'authors' => ['pascal', 'flod'],
        ],
        [
            'message' => ['<a href="https://transvision.mozfr.org/?recherche=bookmark&amp;repo=central&amp;sourcelocale=en-US&amp;locale=fr&amp;search_type=strings_entities&amp;json">Searches</a> on strings &amp; entities can be loaded as json now'],
            'section' => ['developers'],
            'type'    => ['new'],
            'authors' => ['flod'],
        ],
        [
            'message' => ['Added file caching library to cache data sets or template. <a href="https://github.com/mozfr/transvision/commit/4515974b566ecf7ebb5b4e6e5bebcefc0927f102">Usage details in commit message</a>'],
            'section' => ['developers'],
            'authors' => ['pascal'],
        ],
    ],
    '3.2' => [
        [
            'message' => ['<strong>www.mozilla.org support:</strong> Transvision can now extract and index projects using the .lang format, the first repository added is www.mozilla.org and appears as a separate channel. Source links and Bugzilla links are adjusted to point to subversion instead of Mercurial and to file bugs in the www.mozilla.org/L10N component instead of the Mozilla Localization one. This makes Transvision more useful for people working on Web localization'],
            'section' => ['end_user'],
            'type'    => ['new'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['During extraction time, if a string in the repository was not in UTF-8 (unusual but did happen for a couple of locales), our extraction script would stop and not generate valid xml for the TMX file and a full array of strings for the repo. This was leading to a server error (blank page) on some requests. This is now fixed, if a string is not extractable, the extraction is no longer interrupted, the string is just skipped'],
            'section' => ['end_user'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Lithuanian added to Gaia-l10n'],
            'section' => ['end_user'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['<strong>API documentation:</strong> <a href="https://transvision.mozfr.org/docs/">Transvision classes documentation</a> is now automatically generated with phpDocumentor.'],
            'section' => ['developers'],
            'type'    => ['new'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['All Unit tests now use a <a href="https://github.com/mozfr/transvision/blob/8a9e17e7bfa31414b50f72408b909f46be506bff/tests/units/bootstrap.php">single bootstrap file</a> to define constants or initialize data needed to run the tests.'],
            'section' => ['developers'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Updated our README file to add missing dependencies to install Transvision locally'],
            'section' => ['developers'],
            'authors' => ['pascal'],
        ],
    ],
    '3.1' => [
        [
            'message' => ['<strong>Top menu:</strong> The application now has a top menu summarizing and categorizing the different views in the application'],
            'section' => ['end_user'],
            'type'    => ['new'],
            'authors' => ['flod'],
        ],
        [
            'message' => ['<strong>New view:</strong> <a href="https://transvision.mozfr.org/productization/">Productization</a> page listing search plugins, search order and protocol handlers for your locale on an easy to understand page'],
            'section' => ['end_user'],
            'type'    => ['new'],
            'authors' => ['flod'],
        ],
        [
            'message' => ['Improved CSS for responsive mode, credits page and other areas'],
            'section' => ['end_user'],
            'authors' => ['flod'],
        ],
        [
            'message' => ['Switched Gaia comparison view to 1.3 in <a href="https://transvision.mozfr.org/gaia/">QA view</a>'],
            'section' => ['end_user'],
            'authors' => ['pike'],
        ],
        [
            'message' => ['Updated <a href="https://github.com/mozfr/transvision/blob/master/README.md">README</a> page to better explain the installation of Transvision for developers'],
            'section' => ['developers'],
            'authors' => ['jesus'],
        ],
        [
            'message' => ['Unit tests and external dependencies now outside of the web root'],
            'section' => ['developers'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Server update to Debian 7.4'],
            'section' => ['developers'],
            'authors' => ['ludovic'],
        ],
        [
            'message' => ['Various refactoring and speed improvements'],
            'section' => ['other'],
            'authors' => ['pascal', 'flod'],
        ],
        [
            'message' => ['Venkman and Chatzilla strings are now indexed'],
            'section' => ['other'],
            'authors' => ['flod'],
        ],
    ],
    '3.0' => [
        [
            'message' => ['<strong>New view:</strong> <a href="https://transvision.mozfr.org/3locales/">3 locales search</a> in your strings for potential errors'],
            'section' => ['end_user'],
            'type'    => ['new'],
            'authors' => ['pascal', 'filip'],
        ],
        [
            'message' => ['<strong>New view:</strong> Check the <a href="https://transvision.mozfr.org/variables/">use of variables</a> in your strings for potential errors'],
            'section' => ['end_user'],
            'type'    => ['new'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['<strong>New view:</strong> Check <a href="https://transvision.mozfr.org/variables/">all existing translations</a> for a string by clicking the <code>l10n</code> link next to the entity name'],
            'section' => ['end_user'],
            'type'    => ['new'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['On the <a href="https://transvision.mozfr.org/gaia/#englishchanges">Gaia comparison</a> view list the strings that have changed significantly in English between Gaia 1.1 and 1.2 releases without an entity change'],
            'section' => ['end_user'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['When searching for entities, there is a \'search a bug\' link below results just like for searching for strings (flod) as well as a permalink'],
            'section' => ['end_user'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Each view now has a one line description of what it does at the top'],
            'section' => ['end_user'],
            'authors' => ['jesus'],
        ],
        [
            'message' => ['Updated supported locales'],
            'section' => ['end_user'],
            'authors' => ['flod'],
        ],
        [
            'message' => ['Added Gaia 1.3 support'],
            'section' => ['end_user'],
            'authors' => ['flod'],
        ],
        [
            'message' => ['The <a href="https://transvision-beta.mozfr.org/">beta site</a> now has a Beta ribbon to distinguish it from the main site'],
            'section' => ['end_user'],
            'authors' => ['flod'],
        ],
        [
            'message' => ['Added Kint debugging library in development mode'],
            'section' => ['developers'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Coding guidelines roughly formalized as following PSR recommendations and <a href="https://github.com/mozfr/transvision/wiki/Code-conventions">documented on wiki</a>'],
            'section' => ['developers'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['The new view showing all strings for a translation also <a href="https://transvision.mozfr.org/string/?entity=apps/homescreen/homescreen.properties:evme-searchbar-default.placeholder&amp;repo=gaia&amp;json">exists as a Json/JsonP source</a> which means that a string can be imported for all locales into another project via this web service'],
            'section' => ['developers'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Various code cleanup'],
            'section' => ['developers'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Page load performance with the use of cached reduced json data from Bugzilla'],
            'section' => ['other'],
            'authors' => ['flod'],
        ],
    ],
    '2.9' => [
        [
            'message' => ['Two new repos are added for searches: Gaia 1.1 and Gaia 1.2'],
            'section' => ['end_user'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['New (experimental) <a href="https://transvision.mozfr.org/gaia/">QA view for strings in Gaia repos</a> listing the differences in translations for the same entities across gaia-l10n, gaia_1.1 and gaia_1.2 repos as well as listing all the strings added to Gaia 1.2 as they require more attention'],
            'section' => ['end_user'],
            'type'    => ['experimental'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['More accurate comparison of string length in the main view (\'large string\' warning no longer has false positives)'],
            'section' => ['end_user'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Data is now updated from hg updated 4 times a day at 04:00, 10:00, 16:00, 22:00 (was twice a day)'],
            'section' => ['other'],
        ],
        [
            'message' => ['Data extraction script is now interruptible to make development easier'],
            'section' => ['other'],
            'authors' => ['flod'],
        ],
        [
            'message' => ['Cron job issues fixed after our migration to Debian 7'],
            'section' => ['other'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['<a href="irc://irc.mozilla.org/transvision">#transvision</a> IRC channel created and added to our documentation'],
            'section' => ['other'],
            'authors' => ['pascal', 'chandankumar'],
        ],
        [
            'message' => ['Fix broken Statistics link'],
            'section' => ['other'],
            'authors' => ['jesus'],
        ],
    ],
    '2.8' => [
        [
            'message' => ['Make search context changes clearer, the type of search (strings, entities, strings &amp; entities) is now displayed as a hint below the search field'],
            'section' => ['end_user'],
            'authors' => ['flod'],
        ],
        [
            'message' => ['Add anchors to search results so as to be able to give a link pointing to a specific entity in a search result page (<a href="https://transvision.mozfr.org/?repo=central&amp;sourcelocale=en-US&amp;locale=en-US&amp;search_type=strings&amp;recherche=bookmarks#browser_chrome_browser_aboutPrivateBrowsing.dtd_privatebrowsingpage.perwindow.description">example</a>)'],
            'section' => ['end_user'],
            'authors' => ['flod'],
        ],
        [
            'message' => ['Fix Bugzilla links to file a bug in the right Bugzilla component for locales that have a specific locale code in Gaia that differs from Desktop (es vs es-ES, sr vs sr-Cyrl/Latn&hellip;)'],
            'section' => ['end_user'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['The Json API no longer does any locale detection or fallbacks to French if the locale does not exist for the repo'],
            'section' => ['developers'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['The searchrepo view can also be <a href="https://transvision.mozfr.org/showrepos/?json">output as json</a> for external dashboards'],
            'section' => ['developers'],
            'type'    => ['experimental'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Server changes to make Transvision compatible with l20n sources'],
            'section' => ['other'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Server changes to pull from <var>hg default</var> instead of <var>hg tip</var> for automatic updates, fixes various result pages problems'],
            'section' => ['other'],
            'authors' => ['flod'],
        ],
    ],
    '2.7' => [
        [
            'message' => ['The repository select box is now located on the far left of the search page. Switching repositories now dynamically updates the select boxes for locales with the right locales'],
            'section' => ['end_user'],
            'authors' => ['jesus'],
        ],
        [
            'message' => ['The TMX download page lists downloads per channel more accurately and takes Gaia specific language code (<var>es</var> for common Spanish for example) into account'],
            'section' => ['end_user'],
            'authors' => ['jesus'],
        ],
        [
            'message' => ['Gaia locales update:<ul><li>Added ast, bg, bn-IN, da, gu, hr, km, ne-NP, pa, si, sk, sr-Cyrl, th, ur, vi.</li><li>Removed as, ga-IE, gl, ml, or.</li></ul>'],
            'section' => ['end_user'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Desktop locales update:<ul><li>Central: removed ach, my, wo.</li><li>Release: removed an, my, wo.</li></ul>'],
            'section' => ['end_user'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['New <a href="https://transvision.mozfr.org/showrepos">experimental view</a> to see the state of all locales per repo'],
            'section' => ['other'],
            'type'    => ['experimental'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['CSS and HTML cleanups of views'],
            'section' => ['other'],
            'authors' => ['flod'],
        ],
        [
            'message' => ['Links to source code sometimes were linking to the wrong repository'],
            'section' => ['other'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Various bugs fixes related to string extractions and mercurial repositories updates'],
            'section' => ['other'],
            'authors' => ['pascal'],
        ],
    ],
    '2.6' => [
        [
            'message' => ['All TMX files for all locales/repos combinations are now available via a <a href="https://transvision.mozfr.org/downloads/">TMX download page</a>'],
            'section' => ['end_user'],
            'type'    => ['new'],
            'authors' => ['jesus', 'pascal'],
        ],
        [
            'message' => ['<code>Translate with:</code> links in search results are now below the source English strings to point to Bing and Google translation services'],
            'section' => ['end_user'],
            'authors' => ['jesus'],
        ],
        [
            'message' => ['In the search results page for string searches, the entity names in the first columns are now links to the entities for easy sharing/bookmarking'],
            'section' => ['end_user'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['CSS fixes'],
            'section' => ['end_user'],
            'authors' => ['jesus'],
        ],
    ],
    '2.5' => [
        [
            'message' => ['Updated visual theme inspired by Mozilla Sandstone, responsive design'],
            'section' => ['end_user'],
            'type'    => ['new'],
            'authors' => ['jesus', 'pascal'],
        ],
        [
            'message' => ['We no longer highlight string matches in the entities column for the \'string\' search type'],
            'section' => ['end_user'],
            'authors' => ['jesus'],
        ],
        [
            'message' => ['There is now a Json/JsonP source for searches filtered on entities, the results structure is the same as searches on strings content. Append <code>&amp;json</code> to your query for the Json feed and <code>&amp;json&amp;callback=foobar</code> for JsonP.'],
            'section' => ['developers'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Updated setup.sh script to fix bugs in the installer and make it easier for potential contributors to install the application'],
            'section' => ['other'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['The <a href="http://babelwiki.babelzilla.org/index.php?title=MozTran">MozTran Firefox extension</a> was updated and allow now to search for an entity you select on a page from the context menu. This is mostly useful when looking at the product Dashboard'],
            'section' => ['other'],
            'authors' => ['goofy', 'pascal'],
        ],
        [
            'message' => ['Update to track the recent <var>webapprt</var> folder move.'],
            'section' => ['other'],
        ],
    ],
    '2.4' => [
        [
            'message' => ['There is now a &lt;report a bug&gt; link below each translated string that allows anybody to report a bug in Bugzilla for a badly translated string'],
            'section' => ['end_user'],
            'type'    => ['new'],
            'authors' => ['jesus', 'pascal'],
        ],
    ],
    '2.3' => [
        [
            'message' => ['You now can remember your locales and repo choices and bypass locale detection with checkboxes, a cookie will be set and remember your preferences'],
            'section' => ['end_user'],
            'type'    => ['new'],
            'authors' => ['jesus'],
        ],
        [
            'message' => ['If your string is abnormally long or short compared to the English source, there will be hint message below your translation saying \'String too large/long?\''],
            'section' => ['end_user'],
            'type'    => ['new'],
            'authors' => ['jesus'],
        ],
        [
            'message' => ['The accesskeys and channel comparison features linked in the footer now work again'],
            'section' => ['end_user'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Gaia strings are now listed for Spanishes for searches done on Desktop repos'],
            'section' => ['other'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Removed Firefox Mobile Xul code and data'],
            'section' => ['other'],
            'authors' => ['pascal'],
        ],
        [
            'message' => ['Bug fixes, code cleanups.'],
            'section' => ['other'],
        ],
    ],
    '2.2' => [
        [
            'message' => ['Selected search type value (strings, entities, strings and entities) is kept after a search.'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['Searches with slashes in the middle of strings now work'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['Fixed a bug in the cron job script that resulted in mozilla-central strings to not be extracted'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['Cron job is now ran twice a day instead of once, at 2AM CET and 2PM CET'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['Stats page now lists type of string searches and repos. All stats reset to zero.'],
            'section' => ['end_user'],
        ],
    ],
    '2.1' => [
        [
            'message' => ['<strong>New feature:</strong> New select box option to search in strings, entities, or both strings and entities.'],
            'section' => ['end_user'],
            'type'    => ['new'],
        ],
        [
            'message' => ['<strong>New feature:</strong> typography hint, if a sentence ends with a dot and your translation doesn’t, there is a small "No final dot?" warning below the string.'],
            'section' => ['end_user'],
            'type'    => ['new'],
        ],
        [
            'message' => ['Missing translated strings are marked as such instead of just having an empty cell.'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['Repositories and search targets are now select boxes.'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['Advanced regular expression search options are now separated from other search options.'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['Glossary search is now a separate view linked in the footer.'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['Improved highlighting of search results.'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['Fixed some bugs on "perfect match" searches.'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['Search results now limited to 200 results to avoid hanging the browser if we send back megabytes of data.'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['Added Aragonese'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['Added a <a href="https://transvision.mozfr.org/credits/">credits</a> page.'],
            'section' => ['other'],
        ],
        [
            'message' => ['Added a counter for the use of search options to check if some options are unused and could be removed.'],
            'section' => ['other'],
        ],
    ],
    '2.0' => [
        [
            'message' => ['<strong>New feature:</strong> In search results, there is now a <em>source</em> link next to the original string and your translation, this links to the file on hg.mozilla.org, this way you can find easily where the file to edit is.'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['The entity names in the first column now longer link to a search for the English file on mxr now that we have proper link support to the source file.'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['Searches containing a slash (/) now have results.'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['Manifest.properties files containing name and description of apps in the Gaia repo are now shown in search results.'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['A regression on the Glossary search is fixed, it is now again yielding results.'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['Transvision jumps from version 1.9 to version 2.0 (and not 1.10), this is partly because the addition of source strings was significant development work which involved data structure changes and partly because I don’t want to end up with a version 1.230 at some point ;).'],
            'section' => ['other'],
        ],
        [
            'message' => ['The <a href="https://transvision.mozfr.org/stats/">statistics page</a> view added last week now sorts locales per number of requests and gives totals of searches and locales.'],
            'section' => ['other'],
        ],
    ],
    '1.9' => [
        [
            'message' => ['Searches including special characters such as [, (, { are now possible (useful for plurals in Gaia entities, replacement variables in Gais strings or output of messages containing function names in developer tools)'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['Occitan locale added'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['PHP: Monolog library updated to 1.3.0'],
            'section' => ['code'],
        ],
        [
            'message' => ['Python: Silme library updated to 0.8.1'],
            'section' => ['code'],
        ],
        [
            'message' => ['Fixed an error in Setup shell script'],
            'section' => ['code'],
        ],
        [
            'message' => ['Move classes to a Transvision namespace'],
            'section' => ['code'],
        ],
        [
            'message' => ['New short <a href="https://transvision.mozfr.org/stats/">statistics page</a> showing which locales use Transvision'],
            'section' => ['other'],
        ],
    ],
    '1.8' => [
        [
            'message' => ['Searches need to be at least 2 characters long, single letter searches now return an error message.'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['Style improvements to search forms and the template for better clarity.'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['External dependencies are now all managed through <a href="http://getcomposer.org/">Composer</a>'],
            'section' => ['other'],
        ],
        [
            'message' => ['Added Monolog library to be able to log events related to debugging or the use of the application (/ex: which locales actually do use Transvision)'],
            'section' => ['other'],
        ],
    ],
    '1.7' => [
        [
            'message' => ['<strong>New experimental feature:</strong> You can now see all the translated <a href="https://transvision.mozfr.org/accesskeys/">access keys</a> that are potentially wrong for your locale. If you see a reddish square next to your access key letter such as this one&nbsp;: <span class="highlight-red">&nbsp;</span>, it means that there is a space in your string and the access key may not work.'],
            'section' => ['end_user'],
            'type'    => ['new'],
        ],
        [
            'message' => ['Access keys are now part of search results'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['Experimental views are now linked in the footer of the site'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['Fixed a regression on the JSON api results (double quotes no longer escaped and breaking JSON format).'],
            'section' => ['developers'],
        ],
        [
            'message' => ['Added back proper JSONP support activated with the <var>callback</var> GET parameter, sent with the application/javascript Mime type.'],
            'section' => ['developers'],
        ],
    ],
    '1.6' => [
        [
            'message' => ['<strong>New experimental feature:</strong> You can now compare differences in your translations across channels (central, aurora, beta, release) on this page <a href="https://transvision.mozfr.org/channelcomparison/">Channel to Channel differences</a>'],
            'section' => ['end_user'],
            'type'    => ['new'],
        ],
        [
            'message' => ['Thunderbird’s Chat strings are now included.'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['Mozilla Central is now the default repo for searches (instead of Release)'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['Removed regular expression searches to unclutter the search panel (Wildcard and case sensitive are still there)'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['Fixed a bug in causing the loss of the source locale for Spanish when switching from a search on Gaia to a search on comm/moz-central repos'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['Lots of refactoring, the code is now stable enough to experiment with new views such as the Channel to Channel comparison page, with little to no impact on the main search feature for the application. That should allow specific views per locale and experiments.'],
            'section' => ['other'],
        ],
    ],
    '1.5' => [
        [
            'message' => ['<strong>New feature:</strong> Gaia strings are now included and merged with your repos. You can also do searches for the Gaia repo only'],
            'section' => ['end_user'],
            'type'    => ['new'],
        ],
        [
            'message' => ['Results are more accurate, specifically, identical strings between gecko apps are always shown.'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['Ellipsis are shown with a gray background, thin spaces with a red background, thin spaces and non-breakable spaces have a tooltip to distinguish them (those changes are mostly helpers for French typography rules).'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['The json api now returns <code>[]</code> instead of <code>null</code> if the search yields no result.'],
            'section' => ['developers'],
        ],
        [
            'message' => ['There is now a Transvision Beta server at <a href="https://transvision-beta.mozfr.org">transvision-beta.mozfr.org</a>, if you find a bug or a regression on Transvision, please check on this beta server that the bug you want to report is not already fixed.'],
            'section' => ['other'],
        ],
        [
            'message' => ['Set up a basic url front controller to be able to use the new PHP 5.4 integrated web server for development and also installed the Atoum Unit Test framework.'],
            'section' => ['other'],
        ],
        [
            'message' => ['Now with the MozFR favicon :)'],
            'section' => ['other'],
        ],
    ],
    '1.4' => [
        [
            'message' => ['<strong>New feature:</strong> locale to locale comparison. There is now two locale switchers, the source and the target one. By default, the source is en-US and the target is your detected locale code. You can manually set a different source than en-US so as to compare your translations with another locale. Note that the search results will be limited to the amount of translated strings in the source locale.'],
            'section' => ['end_user'],
            'type'    => ['new'],
        ],
        [
            'message' => ['Strings in MXR searches are now truncated if they exceed MXR’s field length limits, it prevents an MXR error message and usually gives good search results'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['The second table of results was showing the translation in both columns, this regression is fixed.'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['The cron job updating the repositories on MozFR server was not behaving correctly and repos were not updated in the last week, this is now fixed'],
            'section' => ['other'],
        ],
    ],
    '1.3' => [
        [
            'message' => ['Strings in .ini and .inc files are now also in results'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['Non-breakable spaces are shown with a gray background in search results, this is useful for languages like French that have punctuation rules stating that some punctuation signs (?!;«») should stick to the previous word but with a spacing.'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['Entity search was not searching into all available entities (only about 60&percent; of them), fixed'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['Experimental: link English strings to a Google translate search'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['Visual update of search results'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['The suite/debugQA strings in English are no longer extracted  because they are not meant to be translated (<a href="https://bugzilla.mozilla.org/show_bug.cgi?id=782243">bug 782243</a>)'],
            'section' => ['other'],
        ],
    ],
    '1.2' => [
        [
            'message' => ['Searches for strings with single and double quotes work ex: <a href="https://transvision.mozfr.org/?locale=fr&amp;repo=release&amp;recherche=Don\'t">Search for “Don\'t”</a>'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['The <em>Glossary</em> option now yields results that make sense, when you select it all other checkboxes are unselected, ex: <a href="https://transvision.mozfr.org/?locale=fr&amp;repo=release&amp;t2t=t2t&amp;recherche=bookmarks">Search for “Bookmarks”</a>. <br/>That option looks for the closest matches for your locale for a word or a few words and lists them all. It also lists examples of use. The main use for that is to quickly check how a word is usually translated by your team.'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['<em>Perfect Match</em> option now actually works'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['Changelog page uses the same template as the application'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['json webservice is now available from a normal search if you add <code>&amp;json</code> to your search query (webservice.php is still available so as to not break API consumers, please update your script to use <code>index.php?json</code> instead. ex: <a href="https://transvision.mozfr.org/?locale=fr&amp;repo=release&amp;recherche=Don\'t&amp;json">Search for “Don\'t”</a>'],
            'section' => ['developers'],
        ],
        [
            'message' => ['Simplification of the python script creating TMX files'],
            'section' => ['other'],
        ],
        [
            'message' => ['Overall simplification of the PHP code to remove dead code'],
            'section' => ['other'],
        ],
    ],
    '1.1' => [
        [
            'message' => ['added ach, ff, lij, my, wo locales'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['removed oc, mn locales'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['results for rtl locales are now correctly aligned'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['added locale detection to populate the default locale on home page'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['radio buttons are now clickable'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['cleaned up template to hopefully look better and be more readable'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['json webservice now sends results with application/json Mime type instead of text/html'],
            'section' => ['developers'],
        ],
        [
            'message' => ['install script setup.sh decoupled from glossaire.sh which updates an existing installation'],
            'section' => ['developers'],
        ],
        [
            'message' => ['Lots of code clean ups and simplifications'],
            'section' => ['other'],
        ],
    ],
    '1.0' => [
        [
            'message' => ['Initial import of existing code into github and reinstalling on MozFR server'],
            'section' => ['end_user'],
        ],
        [
            'message' => ['New URL is <a href="https://transvision.mozfr.org">https://transvision.mozfr.org</a>'],
            'section' => ['end_user'],
        ],
    ],
];
