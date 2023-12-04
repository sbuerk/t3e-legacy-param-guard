..  image:: https://poser.pugx.org/sbuerk/t3e-legacy-param-guard/v/stable
    :alt: Latest Stable Version
    :target: https://extensions.typo3.org/extension/legacy_param_guard/

..  image:: https://img.shields.io/badge/TYPO3-11-orange.svg
    :alt: TYPO3 11
    :target: https://get.typo3.org/version/11

..  image:: https://img.shields.io/badge/TYPO3-12-orange.svg
    :alt: TYPO3 11
    :target: https://get.typo3.org/version/12

..  image:: https://poser.pugx.org/sbuerk/t3e-legacy-param-guard/d/total
    :alt: Total Downloads
    :target: https://packagist.org/packages/sbuerk/t3e-legacy-param-guard

..  image:: https://poser.pugx.org/sbuerk/t3e-legacy-param-guard/d/monthly
    :alt: Monthly Downloads
    :target: sbuerk/t3e-legacy-param-guard

..  image:: https://github.com/sbuerk/t3e-legacy-param-guard/actions/workflows/tests11i3.yml/badge.svg
    :alt: tests-main-v11-composer-installers-3
    :target: https://github.com/sbuerk/t3e-legacy-param-guard/actions/workflows/tests11i3.yml

..  image:: https://github.com/sbuerk/t3e-legacy-param-guard/actions/workflows/tests11i4.yml/badge.svg
    :alt: tests-main-v11-composer-installers-4
    :target: https://github.com/sbuerk/t3e-legacy-param-guard/actions/workflows/tests11i4.yml

..  image:: https://github.com/sbuerk/t3e-legacy-param-guard/actions/workflows/tests12.yml/badge.svg
    :alt: tests-main-v12
    :target: https://github.com/sbuerk/t3e-legacy-param-guard/actions/workflows/tests12.yml

======================================
TYPO3 extension ``legacy_param_guard``
======================================

:Repository:  https://github.com/sbuerk/t3e-legacy-param-guard/
:Issues:      https://github.com/sbuerk/t3e-legacy-param-guard/issues/
:Read online: https://docs.typo3.org/p/sbuerk/t3e-legacy-param-guard/main/en-us/
:TER:         https://extensions.typo3.org/extension/legacy_param_guard/

Mission
-------

TYPO3 used a couple of query parameters in the frontend to determine which pages should be shown. Since TYPO3 v9
speaking url has been integrated directly into the TYPO3 CMS keeping the old **legacy parameters**.

Technically, the legacy parameters

* `id=<int>`: page id
* `L=<int>`: language id
* `type=<int>`: typeNum (pageType)

are not really required anymore for page resolving and rendering. Using these parameters intentionally is a behaviour
from old days not adopting newer techniques, which requires the core to still maintain and respect these parameters.

TYPO3 provides ways making the usage of them superfluous in projects and extensions. However, 3rd party services and
pages are able to created links which bots (like googlebot) are crawling not having the speaking url in it.

This extension provides several ways to guard these legacy parameters:

* redirect to same url with removed legacy params
* block the request (simple body-less 404 page response)
* remove legacy params from request and let TYPO3 deal with it even if the browser has the url with the parameters

..  caution::

    Using this extension removes the ability to actively use any legacy parameter. Don't use it if required by your
    instance or extension.

Compatibility
-------------

+----------------------+----------+--------------------------+-----------------------------+
| legacy_param_guard   | TYPO3    | PHP                      | Support/Development         |
+======================+==========+==========================+=============================+
| dev-main             | 11, 12   | 7.4, 8.0, 8.1, 8.2, 8.3  | unstable development branch |
+----------------------+----------+--------------------------+-----------------------------+

TYPO3 `Build/Scripts/runTests.sh`
---------------------------------

This extension contains the well known `Build/Scripts/runTests.sh` docker/docker-compose based script wrapping script.

Provided commands/test-suits:

* `-s acceptance`: Execute acceptance tests (not implemented yet)
* `-s clean`: Clean unnecessary files and folders
* `-s cgl`: Ensure code-style guideline rules.
* `-s composerUpdate`: Run composer update
* `-s composerValidate`: Validate composer.json
* `-s functional`: Execute functional tests
* `-s lint`: Lint `*.php` files for syntax errors
* `-s phpstan`: Execute static code analyzer PHPStan
* `-s phpstanGenerateBaseline`: Generate baseline for PHPStan. Can be used to manage temporarily unsolvable reports.
