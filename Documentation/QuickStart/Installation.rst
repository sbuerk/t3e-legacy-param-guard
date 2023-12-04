.. include:: /Includes.rst.txt

.. _quickInstallation:

==================
Quick installation
==================

In a :ref:`composer-based TYPO3 installation <t3start:install>` you can install
the extension EXT:legacy_param_guard via composer:

..  code-block:: bash

    composer require sbuerk/t3e-legacy-param-guard

In TYPO3 installations above version 11.5 the extension will be automatically
installed. You do not have to activate it manually.

If you are using an older version of TYPO3 or have a legacy installation
without composer, have a look at the
:ref:`Extended installation <installation>` chapter.


Clear all caches
----------------

In the same module :guilabel:`Admin Tools > Maintenance` you can also
conveniently clear all caches by clicking the button :guilabel:`Flush cache`.

or use the command line

..  code-block:: bash

   vendor/bin/typo3 cache:flush
   vendor/bin/typo3 cache:warmup


