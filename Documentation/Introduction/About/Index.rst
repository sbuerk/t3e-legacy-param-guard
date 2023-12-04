.. include:: /Includes.rst.txt

.. _whatDoesItDo:

================
What does it do?
================

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
